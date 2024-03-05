<?php

namespace App\DTO;

use Exception;

class Payment
{
    public string $title;
    public string $description;
    public float $amount;
    public string $currency;
    public string $type;
    public int $interval;
    public bool $has_trial;
    public int $trial_days;
    public float $fee;
    public string $card_number;
    public string $card_exp_year;
    public string $card_exp_month;
    public string $tnx_id;
    public string $card_cvv;
    public string $card_holder_first_name;
    public string $card_holder_last_name;
    public string $card_holder_email;
    public string $ref_id;

    public function __construct()
    {
    }
}
