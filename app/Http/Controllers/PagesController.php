<?php

namespace App\Http\Controllers;

use App\Helpers\CoinHelper;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function coins()
    {
        $coinReq = new CoinHelper();

        $coinList = $coinReq->coinToList();

        return view('pages.coins', [
            'coinList' => $coinList
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
