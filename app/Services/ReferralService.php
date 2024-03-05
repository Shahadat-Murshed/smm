<?php

namespace App\Services;

use App\Enums\TnxTypes;
use App\Enums\UserRoles;
use App\Models\Tier;
use App\Models\User;
use App\Models\UserTier;
use Illuminate\Support\Str;

class ReferralService
{

    private $transactionService;
    private $paymentGateway;

    public function __construct(TransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    public function getReferralAmount($referer, $product)
    {
        $refererRole = $referer->role;
        if ($refererRole === UserRoles::AFFILIATE) {
            return $product->discount_affiliate;
        }
        if ($refererRole === UserRoles::AMBASSADOR) {
            return $product->discount_ambassador;
        }
    }

    public function addBonusToAffiliate(User $referrer, float $profit): void
    {
        $baseBonus = ($profit * $referrer->base_percentage / 100);
        $totalBonus = $baseBonus + $this->processTiers($referrer, $baseBonus, $profit);
        $referrer->balance += $totalBonus;
        $referrer->save();
        $transcation = $this->transactionService->createTransaction([
            'user_id' => $referrer->id,
            'tnx_type' => TnxTypes::AFFILIATE_BONUS,
            'gateway' => 'Authorize.net',
            'amount' => $totalBonus,
            'total_payment' => $totalBonus,
            'charge' => 0,
            'remarks' => 'Affiliate bonus',
            'tnx_id' => Str::random(4),
        ]);
        
    }

    public function addBonusToAmbassador(User $ambassador, $referrer_basePercentage, $profit, $hasAffiliate = false): void
    {
        if (!$hasAffiliate) {
            $ambassador_basePercentage = 30 - floatval($referrer_basePercentage);
            $baseBonus = ($profit * $ambassador_basePercentage / 100);
        } else {
            $baseBonus = 0;
        }
        $totalBonus = $baseBonus + $this->processTiers($ambassador, $baseBonus, $profit);
        $ambassador->balance += $totalBonus;
        $ambassador->save();
        $transcation = $this->transactionService->createTransaction([
            'user_id' => $ambassador->id,
            'tnx_type' => TnxTypes::AMBASSADOR_BONUS,
            'gateway' => 'Authorize.net',
            'amount' => $totalBonus,
            'total_payment' => $totalBonus,
            'charge' => 0,
            'remarks' => 'Ambassador bonus',
            'tnx_id' => Str::random(4),
        ]);
    }



    private function processTiers($referrer, $referrerBonus, $profit): float
    {
        $highestTier = Tier::max('level');
        $currentReferrerTier = $referrer->tier()->latest()->first();
        if (!$currentReferrerTier) return 0;
        if (now()->lt($currentReferrerTier->expiry_date)) {
            $currentAmount = $currentReferrerTier->current_amount + $referrerBonus;
            if ($currentReferrerTier->tier->threeshold <= $currentAmount && $currentReferrerTier->tier->level < $highestTier) {
                $currentReferrerTier->tier_id = Tier::where('level', $currentReferrerTier->tier->level + 1)->first()->id;
            }
            $currentReferrerTier->current_amount = $currentAmount;
        } else {
            $currentReferrerTier = new UserTier();
            $currentReferrerTier->user_id = $referrer->id;
            $currentReferrerTier->tier_id = Tier::where('level', 1)->first()->id;
            $currentReferrerTier->current_amount = $referrerBonus;
            $currentReferrerTier->expiry_date = now()->addDays(30);
        }
        $currentReferrerTier->save();
        $bonus = $currentReferrerTier->tier->percentage * $profit / 100;
        return $bonus;
    }
}
