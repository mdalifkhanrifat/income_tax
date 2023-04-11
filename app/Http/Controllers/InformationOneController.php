<?php

namespace App\Http\Controllers;

use App\Models\InformationOneModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformationOneController extends Controller
{

    function onUpdateInfoOneData(Request $request){

        $emailNameSess = Auth::user()->email;

        $fullName = $request->input('fullName');
        $ind = $request->input('ind');
        $utin = $request->input('utin');
        $tin = $request->input('tin');
        $phone = $request->input('phone');
        $wifeHusbandName = $request->input('wifeHusbandName');
        $fatherName = $request->input('fatherName');
        $motherName = $request->input('motherName');
        $dateOfBirth = $request->input('dateOfBirth');
        $nameOfEmployer = $request->input('nameOfEmployer');
        $taxCircle = $request->input('taxCircle');
        $taxZone = $request->input('taxZone');
        $taxYear = $request->input('taxYear');
        $residentialStatus = $request->input('residential_status');
        $status = $request->input('status');
        $residential = $request->input('residential');
        $vat_reg_number = $request->input('vat_reg_number');
        $presentation_address = $request->input('presentation_address');
        $permanent_address= $request->input('permanent_address');

        date_default_timezone_set('Asia/Dhaka');
        $time = date("h:i:sa");
        $date = date("d-m-Y");


            $result =  InformationOneModel::where('email',$emailNameSess)->update([
                'full_name'             =>$fullName,
                'email'                 =>$emailNameSess,
                'nid'                   =>$ind,
                'utin'                  =>$utin,
                'tin'                   =>$tin,
                'phone'                 =>$phone,
                'wife_husband_name'     =>$wifeHusbandName,
                'father_name'           =>$fatherName,
                'mother_name'           =>$motherName,
                'date_of_birth'         =>$dateOfBirth,
                'employer_business_type'=>$nameOfEmployer,
                'circle'                =>$taxCircle,
                'taxes_zone'            =>$taxZone,
                'assessment_year'       =>$taxYear,
                'residential_status'    =>$residentialStatus,
                'status'                =>$status,
                'residential'           =>$residential,
                'vat_reg_number'        =>$vat_reg_number,
                'presentation_address'  =>$presentation_address,
                'permanent_address'     =>$permanent_address,
                'time'                  =>$time,
                'date'                  =>$date
            ]);

            if ($result == true){
                return 1;
            }else{
                return 0;
            }


    }



    function onSaveInfoOneData(Request $request){

        $emailNameSess = Auth::user()->email;
        $fullName = $request->input('fullName');
        $ind = $request->input('ind');
        $utin = $request->input('utin');
        $tin = $request->input('tin');
        $phone = $request->input('phone');
        $wifeHusbandName = $request->input('wifeHusbandName');
        $fatherName = $request->input('fatherName');
        $motherName = $request->input('motherName');
        $dateOfBirth = $request->input('dateOfBirth');
        $nameOfEmployer = $request->input('nameOfEmployer');
        $taxCircle = $request->input('taxCircle');
        $taxZone = $request->input('taxZone');
        $taxYear = $request->input('taxYear');
        $residentialStatus = $request->input('residential_status');
        $status = $request->input('status');
        $residential = $request->input('residential');
        $vat_reg_number = $request->input('vat_reg_number');
        $presentation_address = $request->input('presentation_address');
        $permanent_address= $request->input('permanent_address');

        date_default_timezone_set('Asia/Dhaka');
        $time = date("h:i:sa");
        $date = date("d-m-Y");

        $check = InformationOneModel::where('email',$emailNameSess)->count();

        if ($check >= 1){
            return "Already Have";
        }else{
            $result =  InformationOneModel::insert([
                'full_name'             =>$fullName,
                'email'                 =>$emailNameSess,
                'nid'                   =>$ind,
                'utin'                  =>$utin,
                'tin'                   =>$tin,
                'phone'                 =>$phone,
                'wife_husband_name'     =>$wifeHusbandName,
                'father_name'           =>$fatherName,
                'mother_name'           =>$motherName,
                'date_of_birth'         =>$dateOfBirth,
                'employer_business_type'=>$nameOfEmployer,
                'circle'                =>$taxCircle,
                'taxes_zone'            =>$taxZone,
                'assessment_year'       =>$taxYear,
                'residential_status'    =>$residentialStatus,
                'status'                =>$status,
                'residential'           =>$residential,
                'vat_reg_number'        =>$vat_reg_number,
                'presentation_address'  =>$presentation_address,
                'permanent_address'     =>$permanent_address,
                'time'                  =>$time,
                'date'                  =>$date
            ]);

            if ($result == true){
                return 1;
            }else{
                return 0;
            }
        }

    }


    function getInfoOneData(){
        $emailNameSess = Auth::user()->email;
        $result = InformationOneModel::where('email',$emailNameSess)->get();
        $decodeDataOne = json_decode($result);

        return view('taxform.return_form',[
            'showReturnOne'=>$decodeDataOne
        ]);
    }


}
