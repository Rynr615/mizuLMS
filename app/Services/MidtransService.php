<?php

namespace App\Services;

use App\Models\Pricing;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Log;
use Midtrans\Notification;

class MidtransService {
    public function __construct() {
        Config::$serverKey = config('midtrans.serverKey');
        Config::$clientKey = config('midtrans.clientKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        Log::info('Midtrans Config Loaded', [
            'server_key_exists' => !empty(Config::$serverKey),
            'client_key_exists' => !empty(Config::$clientKey),
            'is_production' => Config::$isProduction,
        ]);
    }
    // Debug log untuk memastikan config terbaca

    public function createSnapToken(array $params):string {
        try {
            Log::info('Creating Snap Token with params', $params);
            $snapToken = Snap::getSnapToken($params);
            Log::info('Snap Token created successfully', ['token' => $snapToken]);
            return Snap::getSnapToken($params);
        } catch(\Exception $e) {
            Log::error('Failed to create Snap Token: ' . $e->getMessage());
            throw $e;
        }
    }

    public function handleNotification() :array {
        try {
            $notification = new Notification();
            return [
                'order_id' => $notification->order_id,
                'transaction_status' => $notification->transaction_status,
                'gross_amount' => $notification->gross_amount,
                'custom_field1' => $notification->custom_field1,
                'custom_field2' => $notification->custom_field2,
            ];
        } catch(\Exception $e) {
            Log::error('Midtrans notification error: ' . $e->getMessage());
            throw $e;
        }
    }
}
