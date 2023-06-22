<?php

namespace App\Helpers;

use NumberFormatter;

class AppHelper
{
    public static function formatPhone($value)
    {
        if (strlen(strval($value)) == 11) {
            $value = preg_replace("/(\d{2})(\d{1})(\d{4})(\d{4})/", "(\$1) \$2 \$3-\$4", $value);
        } else {
            if (strlen(strval($value)) == 10) {
                $value = preg_replace("/(\d{2})(\d{4})(\d{4})/", "(\$1) \$2-\$3", $value);
            }
        }

        return $value;
    }

    public static function formatCEP($value)
    {
        if (strlen(strval($value)) == 8) {
            $value = preg_replace('/([0-9]{2})([0-9]{3})([0-9]{3})/', '$1.$2-$3', $value);
        }

        return $value;
    }

    public static function formatCpfCnpj($value)
    {
        if (strlen($value) == 14) {
            $value = preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $value);
        } else {
            if (strlen($value) == 11) {
                $value = preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $value);
            }
        }

        return $value;
    }

    public static function onlyNumbers($value)
    {
        return preg_replace("/[^0-9]/", "", $value);
    }

    public static function formatDouble($value, $decimals = null)
    {
        if ($value) {
            $formatter = new NumberFormatter('pt_BR', NumberFormatter::DECIMAL);
            $value     = $formatter->parse($value);
            if ($decimals) {
                $value = number_format((string)$value, $decimals, '.', ',');
            }
        }

        return $value;
    }

    public static function formatNumberBr($value)
    {
        if ($value) {
            return number_format((string)$value, 2, ',', '.');
        }

        return $value;
    }

    public static function formatDateUS($value)
    {
        if ($value) {
            $date = explode('/', $value);
            return $date[2].'-'.$date[1].'-'.$date[0];
        }

        return $value;
    }

    public static function formatDateBR($value)
    {
        if ($value) {
            $date = explode('-', $value);
            return $date[2].'/'.$date[1].'/'.$date[0];
        }

        return $value;
    }
}
