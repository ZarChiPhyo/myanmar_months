<?php

namespace Database\Seeders;

use App\Models\Months;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MonthsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $myanmarMonths_json = file_get_contents(public_path('MyanmarMonths.json'));
        $all_months = json_decode($myanmarMonths_json,true);
        $months = $all_months['Tbl_Months'];
        //dd($months);
        foreach($months as $month){
            Months::create([
                'img_url'=>$month['ImgUrl'],
                'festival_img'=>$month['FestivelImg'],
                'month_mm'=>$month['MonthMm'],
                'month_en'=>$month['MonthEn'],
                'festival_mm'=>$month['FestivalMm'],
                'festival_en'=>$month['FestivalEn'],
                'description'=>$month['Description'],
                'detail'=>$month['Detail'],
            ]);
        }
    }
}
