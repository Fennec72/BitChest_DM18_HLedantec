<?php

use Illuminate\Database\Seeder;

class CryptosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. (BTC, XBT) Bitcoin
        App\Crypto::create(
            [
                'crypto_name' => 'Bitcoin',
                'quotation_now' => 8936.7,
                'crypto_code' => 'BTC',
            ]
        );

        // 2. (ETH)	Ethereum
        App\Crypto::create(
            [
                'crypto_name' => 'Ethereum',
                'quotation_now' => 2540.12,
                'crypto_code' => 'ETH',
            ]
        );

        // 3. (XRP) Ripple
        App\Crypto::create(
            [
                'crypto_name' => 'Ripple',
                'quotation_now' => 1703.46,
                'crypto_code' => 'XRP',
            ]
        );

        // 4. (BCH, BCC) Bitcoin Cash
        App\Crypto::create(
            [
                'crypto_name' => 'Bitcoin Cash',
                'quotation_now' => 3202.73,
                'crypto_code' => 'BCH',
            ]
        );

        // 5. (ADA) Cardano
        App\Crypto::create(
            [
                'crypto_name' => 'Cardano',
                'quotation_now' => 503.52,
                'crypto_code' => 'ADA',
            ]
        );

        // 6. (LTC) Litecoin
        App\Crypto::create(
            [
                'crypto_name' => 'Litecoin',
                'quotation_now' => 50.302,
                'crypto_code' => 'LTC',
            ]
        );

        // 7. (XEM) NEM
        App\Crypto::create(
            [
                'crypto_name' => 'NEM',
                'quotation_now' => 2513.78,
                'crypto_code' => 'XEM',
            ]
        );

        // 8. (XLM) Stellar
        App\Crypto::create(
            [
                'crypto_name' => 'Stellar',
                'quotation_now' => 576.273,
                'crypto_code' => 'XLM',
            ]
        );

        // 9. (MIOTA) IOTA
        App\Crypto::create(
            [
                'crypto_name' => 'IOTA',
                'quotation_now' => 3279.015,
                'crypto_code' => 'MIOTA',
            ]
        );

        // 10. (DASH) Dash
        App\Crypto::create(
            [
                'crypto_name' => 'Dash',
                'quotation_now' => 4691.25894,
                'crypto_code' => 'DASH',
            ]
        );
    }
}
