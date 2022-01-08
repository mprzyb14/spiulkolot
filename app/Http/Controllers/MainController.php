<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /*public function _invoke()
    {
        DB::table('lista')->truncate();

        DB::table('lista')->insert(
            [
                'nazwa'->'pensjonat pod glowa',
                'opis'->'Pensjonat pod głową oferuje swoim gościom namiastkę luksusu w przystępnej cenie z dala od zgiełku miasta.',
                'cena'->'30'
            ],
            [
                'nazwa'->'hotel',
                'opis'->'dfhzeARf',
                'cena'->'20'
            ]
        );
    }*/
    //obsługa routingu
    public function main()
    {
        return view('sp/index');
    }
    //obsługa routingu
    public function list()
    {
        return view('sp/hotels-list');
    }
    //obsługa routingu
    public function detail()
    {
        return view('sp/hotel-detail');
    }
}
