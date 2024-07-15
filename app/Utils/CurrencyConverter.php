<?php
// app/Utils/CurrencyConverter.php

namespace App\Utils;

use Money\Currency;
use Money\Money;

class CurrencyConverter
{
    public static function convert($amount, $fromCurrency, $toCurrency)
    {
        $money = new Money($amount, new Currency($fromCurrency));
        $exchangeRate = self::getExchangeRate($fromCurrency, $toCurrency);

        $convertedMoney = $money->multiply($exchangeRate);

        return $convertedMoney;
    }

    private static function getExchangeRate($fromCurrency, $toCurrency)
    {
        // Anda dapat mengambil data kurs mata uang dari API pihak ketiga
        // Di sini, untuk keperluan contoh, kita asumsikan kurs tetap
        $exchangeRates = [
            'USD_EUR' => 0.85,
            'EUR_USD' => 1.18,
            // Tambahkan kurs mata uang lainnya sesuai kebutuhan
        ];

        $key = strtoupper($fromCurrency) . '_' . strtoupper($toCurrency);

        return $exchangeRates[$key] ?? 1;
    }
}
