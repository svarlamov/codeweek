<?php
/**
 * Created by PhpStorm.
 * User: doris
 * Date: 20/04/18
 * Time: 09:36
 */

namespace App\Queries;


use App\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CountriesQuery
{
    public static function all() {
        return Country::all();
    }

    public static function withPendingEventsCurrentYear(){
        $isos = DB::table('events')
            ->select(['country_iso'])
            ->where('status',"=","PENDING")
            ->whereYear('end_date', '>=', Carbon::now('Europe/Brussels')->year)
            ->groupBy('country_iso')
            ->get()
            ->pluck('country_iso')
        ;

        $countries = Country::findMany($isos)->sortBy('name');
        return $countries;
    }
}