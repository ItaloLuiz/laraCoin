<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class Coin
{
    const CACHE_KEY = "COINS";

    public function all($orderBy)
    {

        $key = "all.{$orderBy}";
        $cacheKey = $this->getCacheKey($key);

        return cache()->remember($cacheKey, Carbon::now()->addMinutes(1), function ()
        use ($orderBy) {
            $res = DB::table('tbl_coins')
                ->orderBy($orderBy)
                ->get();
            return $res;
        });
    }

    public function getCacheKey($key)
    {
        $key = strtoupper($key);
        return self::CACHE_KEY . ".$key.";
    }
}
