<?php

namespace App\Helpers;

use Carbon\Carbon;
use DB;
use Request;

class Common
{
    public static function connection($db)
    {
        switch (env('APP_ENV')) {
            case 'development':
                $connection = \strtolower($db).'_development';
                break;
                break;
            case 'production':
                $connection =  \strtolower($db).'_production';
                break;
            default:
                $connection =  \strtolower($db).'_development';
                break;
        }

        return $connection;
    }

    public static function promise($db)
    {
        return DB::connection(self::connection($db));
    }

    public static function tableSetting()
    {
        try{
            switch (env('APP_ENV')) {
                case 'development':
                    return self::tableDevelopment();
                    break;
                case 'production':
                    return self::tableProduction();
                    break;
                default:
                    return self::tableDevelopment();
                    break;
            }
        }
        catch(Exception $e){
            throw $e;
        }
    }

    public static function tableDevelopment()
    {
        return [];
    }

    public static function tableProduction()
    {
        return [];
    }

    /** region function function */
    public static function DateNow()
    {
        return Carbon::now();
    }

    public static function FormatDate($date,$format="d-m-Y")
    {
        if($date){
            return Carbon::parse($date)->format($format);
        }
        else{
            return NULL;
        }
    }

    public static function PenyebutNumber($nilai)
    {
		$nilai = abs($nilai);
		$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";

		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
        }
        else if ($nilai <20) {
			$temp = self::penyebut($nilai - 10). " belas";
        }
        else if ($nilai < 100) {
			$temp = self::penyebut($nilai/10)." puluh". self::penyebut($nilai % 10);
        }
        else if ($nilai < 200) {
			$temp = " seratus" . self::penyebut($nilai - 100);
        }
        else if ($nilai < 1000) {
			$temp = self::penyebut($nilai/100) . " ratus" . self::penyebut($nilai % 100);
        }
        else if ($nilai < 2000) {
			$temp = " seribu" . penyebut($nilai - 1000);
        }
        else if ($nilai < 1000000) {
			$temp = self::penyebut($nilai/1000) . " ribu" . self::penyebut($nilai % 1000);
        }
        else if ($nilai < 1000000000) {
			$temp = self::penyebut($nilai/1000000) . " juta" . self::penyebut($nilai % 1000000);
        }
        else if ($nilai < 1000000000000) {
			$temp = self::penyebut($nilai/1000000000) . " milyar" . self::penyebut(fmod($nilai,1000000000));
        }
        else if ($nilai < 1000000000000000) {
			$temp = self::penyebut($nilai/1000000000000) . " trilyun" . self::penyebut(fmod($nilai,1000000000000));
		}
		return $temp;
    }

    public static function TerbilangNumber($nilai)
    {
		if($nilai<0) {
			$hasil = "minus ". trim(self::PenyebutNumber($nilai));
        }
        else {
			$hasil = trim(self::PenyebutNumber($nilai));
        }

		return $hasil;
    }

    public static function SaveInt($param)
    {
        $hasil = '';

        if($param){
            $nilai  = trim(str_replace("`", "", $param));
            $hasil  = str_replace(",", "", $nilai);
        }
        else{
            $hasil = '0';
        }

        return $hasil;
    }

    public static function FormatNumber($nilai,$decimal=0,$point=".",$thousands=",", $type_data="")
    {
        $return = 0;
        if(is_numeric($nilai)){
            if($type_data=="ind"){
                $return = number_format($nilai, $decimal, ",", ".");
            }
            else{
                $return = number_format($nilai, $decimal, $point, $thousands);
            }
        }

        return $return;
    }
}