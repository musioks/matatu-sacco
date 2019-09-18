<?php


namespace App\Helpers;


use App\HR\Employee;
use Illuminate\Support\Facades\DB;
use App\HR\Reporting_manager;

class GeneralHelper
{
    public static function GetHandover($handover_id)
    {
        $employee = Employee::where('id', $handover_id)->first();
        return $employee;

    }

    //Maternity Leave
    public static function Maternity()
    {
        $maternity = DB::table('leave_types')->where('name', 'like', '%maternity%')->first();
        return $maternity;
    }
    //Annual Leave
    public static function Annual()
    {
        $annual = DB::table('leave_types')->where('name', 'like', '%annual%')->first();
        return $annual;
    }

    //Maternity Leave
    public static function Paternity()
    {
        $paternity = DB::table('leave_types')->where('name', 'like', '%paternity%')->first();
        return $paternity;
    }
    public static function Reporting_manager($reporting_manager_id)
    {
        $reporting_manager = Reporting_manager::where('id', $reporting_manager_id)->first();
        return $reporting_manager;

    }
}
