<?php

namespace App\Helpers;

use DateTime;
use NumberFormatter;

class AppHelper
{
    public static function formatPhone($value)
    {
        if (strlen(strval($value)) == 11) {
            $value = preg_replace("/(\d{2})(\d{1})(\d{4})(\d{4})/", "\$1 \$2 \$3 \$4", $value);
        } else {
            if (strlen(strval($value)) == 10) {
                $value = preg_replace("/(\d{2})(\d{4})(\d{4})/", "\$1 \$2 \$3", $value);
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
            $value     = str_replace('.', '', $value);
            $formatter = new NumberFormatter('pt_BR', NumberFormatter::DECIMAL);
            $new_value = $formatter->parse($value);
            // dd($formatter->getErrorMessage());
            $value = $new_value;

            if ($decimals) {
                $value = number_format($value, $decimals, '.', '');
            }
        }

        return $value;
    }

    public static function formatCurrency($value)
    {
        if ($value) {
            return number_format((string)$value, 2, ',', '.');
        }

        return $value;
    }

    public static function formatCfop($value)
    {
        $value = preg_replace('/([0-9]{1})([0-9]{3})/', '$1.$2', $value);

        return $value;
    }

    public static function toDateUS($value)
    {
        if (strstr($value, '/')) {
            $format = strlen($value) > 10 ? 'd/m/Y H:i:s' : 'd/m/Y';
            $date   = DateTime::createFromFormat($format, $value);

            return $date->format('Y-m-d');
        }

        return $value;
    }

    public static function toDateTimeUS($value)
    {
        if (strstr($value, '/')) {
            $format = strlen($value) > 10 ? 'd/m/Y H:i:s' : 'd/m/Y';
            $date   = DateTime::createFromFormat($format, $value);

            return $date->format('Y-m-d H:i:s');
        }

        return $value;
    }

    public static function formatDateUS($value)
    {
        if ($value) {
            $date = explode('/', $value);

            return $date[2] . '-' . $date[1] . '-' . $date[0];
        }

        return $value;
    }

    public static function formatDateBR($value)
    {
        if ($value) {
            $date = explode('-', $value);

            return $date[2] . '/' . $date[1] . '/' . $date[0];
        }

        return $value;
    }

    public static function toDateBR($value)
    {
        if ($value) {
            $date = new DateTime($value);

            return $date->format('d/m/Y');
        }

        return $value;
    }

    public static function toDateTimeBR($value)
    {
        $date = new DateTime($value);

        return $date->format('d/m/Y H:i:s');
    }

    public static function getAgeInYears($birth, $format = 'en')
    {
        if ($format != 'en') {
            $data  = explode('/', $birth);
            $birth = $data[2] . '-' . $data[1] . '-' . $data[0];
        }

        $date     = new DateTime($birth);
        $interval = $date->diff(new DateTime());

        return $interval->format('%Y');
    }

    public static function getAgeInMonths($birth, $format = 'en')
    {
        if ($format != 'en') {
            $data  = explode('/', $birth);
            $birth = $data[2] . '-' . $data[1] . '-' . $data[0];
        }

        $date     = new DateTime($birth);
        $interval = $date->diff(new DateTime());

        return (($interval->format('%Y') * 12) + $interval->format('%m'));
    }

    public static function getFullAge($birth, $dateCreate = null, $format = 'en')
    {
        if ($format != 'en') {
            $data  = explode('/', $birth);
            $birth = $data[2] . '-' . $data[1] . '-' . $data[0];
        }

        $date     = new DateTime($birth);
        $interval = $dateCreate != null ? $date->diff(new DateTime($dateCreate)) : $date->diff(new DateTime());
        $ano      = $interval->format('%Y');
        $mes      = $interval->format('%m');
        if ($ano > 1) {
            return $interval->format('%Y Anos');
        } else if ($ano == 1) {
            return $interval->format('%Y Ano');
        } else {
            if ($mes == 1) {
                return $interval->format('%m Mês');
            }

            return $interval->format('%m Meses');
        }
    }
}
