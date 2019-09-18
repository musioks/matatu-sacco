<?php
/**
 * Created by PhpStorm.
 * User: DCT-05
 * Date: 2/19/2019
 * Time: 10:10 AM
 */

namespace App\Helpers;


trait FlattenData
{

    public static $data;

    public static function jsonFormat($data)
    {
        self::$data = $data;
        return json_decode(json_encode(self::$data), false);
    }
}