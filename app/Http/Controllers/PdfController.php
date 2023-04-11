<?php

namespace App\Http\Controllers;

use App\Models\InformationOneModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;


class PdfController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function generate_pdf()
    {
        $data = 'webjourney.dev';
        $pdf = Pdf::loadView('taxform.return_form',compact('data'));
        return $pdf->stream('Tax-Form');
    }

    public function download_pdf()
    {

        $emailNameSess = Auth::user()->email;
        $result = InformationOneModel::where('email',$emailNameSess)->get();
        $decodeDataOne = json_decode($result);


        $data = 'webjourney.dev';
        $pdf = Pdf::loadView('taxform.return_form',compact('data'),[
            'showReturnOne'=>$decodeDataOne
        ]);
        return $pdf->download('Tax-Form.pdf');
    }
}
