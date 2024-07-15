<?php

namespace App\Traits;

trait HasFormatRupiah {
    function formatRupiah($field, $prefix = null)
    {
        $prefix = $prefix ? $prefix : 'IDR ';
        $nominal = $this->attributes[$field];
        return $prefix . number_format($nominal, 0, ',','.');
    }
}

trait HasFormatUSD {
    function formatUSD($field, $prefix = null)
    {
        $prefix = $prefix ? $prefix : 'USD ';
        $nominal = $this->attributes[$field];
        return $prefix . number_format($nominal, 0, ',','.');
    }
}

trait HasFormatEUR {
    function formatEUR($field, $prefix = null)
    {
        $prefix = $prefix ? $prefix : 'EUR ';
        $nominal = $this->attributes[$field];
        return $prefix . number_format($nominal, 0, ',','.');
    }
}

trait HasFormatCHF {
    function formatCHF($field, $prefix = null)
    {
        $prefix = $prefix ? $prefix : 'CHF ';
        $nominal = $this->attributes[$field];
        return $prefix . number_format($nominal, 0, ',','.');
    }
}

trait HasFormatSGD {
    function formatSGD($field, $prefix = null)
    {
        $prefix = $prefix ? $prefix : 'SGD ';
        $nominal = $this->attributes[$field];
        return $prefix . number_format($nominal, 0, ',','.');
    }
}

trait HasFormatGBP {
    function formatGBP($field, $prefix = null)
    {
        $prefix = $prefix ? $prefix : 'GBP ';
        $nominal = $this->attributes[$field];
        return $prefix . number_format($nominal, 0, ',','.');
    }
}

trait HasFormatNOK {
    function formatNOK($field, $prefix = null)
    {
        $prefix = $prefix ? $prefix : 'NOK ';
        $nominal = $this->attributes[$field];
        return $prefix . number_format($nominal, 0, ',','.');
    }
}

