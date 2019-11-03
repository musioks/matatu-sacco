<?php


namespace App\Helpers;


use Illuminate\Support\Facades\DB;

class MemberStatus
{
    /**
     * Member statuses,
     * Pending 1, Approved 2, Rejected 3
     */

    // Pending Status
    public static function pending()
    {
        $pending = DB::table('member_statuses')
            ->where('name', 'like', '%pending%')
            ->first();
        return $pending;

    }

    // Approved Status
    public static function approved()
    {
        $approved = DB::table('member_statuses')
            ->where('name', 'like', '%approved%')
            ->first();
        return $approved;

    }

    // Rejected Status
    public static function rejected()
    {
        $rejected = DB::table('member_statuses')
            ->where('name', 'like', '%rejected%')
            ->first();
        return $rejected;

    }
}
