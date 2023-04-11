<?php

namespace App\Http\Controllers;

use App\Models\InformationOneModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReturnController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function info_view()
    {
        return view('inputform.infoview');
    }
    public function info_one()
    {
        $emailNameSess = Auth::user()->email;
        $result = InformationOneModel::where('email',$emailNameSess)->get();
        $decodeDataOne = json_decode($result);
        return view('inputform.infoone',[
            'showReturnOne'=>$decodeDataOne
        ]);
    }

    public function info_two()
    {
        return view('inputform.infotwo');
    }

    public function info_three()
    {
        return view('inputform.infothree');
    }
    public function showtaxform()
    {
        return view('taxform.return_form');
    }

}
