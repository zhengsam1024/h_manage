<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class ResTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $configResTypes = config('res.type');

        $resType = DB::table( config('migration.res_type') );
        $dbHas = $resType->whereIn('name', $configResTypes)->get()->pluck('name')->values();
        
        $resTypeCollect = collect($configResTypes);
        $diffCollect = $resTypeCollect->diff($dbHas);

        $dbInstance = DB::table( config('migration.res_type') );
        
        $diffCollect->each(function($item) use ($dbInstance) {
            $item = trim($item);
            $msg = sprintf("ResType add type: %s", trim($item));
            Log::info($msg);
            (clone $dbInstance)->insert(['name' => $item]);
        });
    }
}
