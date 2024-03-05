<?php

namespace App\Services;

use App\Models\Transaction;

class TransactionService
{
    public function createTransaction($data): Transaction
    {
        $transaction = new Transaction();
        $transaction->user_id = $data['user_id'];
        $transaction->trx_type = data_get($data, 'tnx_type');
        $transaction->gateway = data_get($data, 'gateway');
        $transaction->amount = $data['amount'];
        $transaction->total_payment = $data['total_payment'];
        $transaction->charge = $data['charge'];
        $transaction->remarks = data_get($data, 'remarks');
        $transaction->trx_id = data_get($data, 'tnx_id');
        $transaction->gateway_response_code = data_get($data, 'gateway_response_code');
        $transaction->gateway_trx_id = data_get($data, 'gateway_tnx_id');
        $transaction->status = data_get($data, 'status');
        $transaction->save();
        return $transaction;
    }
}
