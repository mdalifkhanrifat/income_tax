<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ __('Billing Invoice - Webjourney') }} </title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>

<body>

 <!-- page 1 start -->
<style>
    .heading_return_form {
    font-size: 14px!important;
    font-weight: bold;
}

.border_box {
    border: 1px solid black;
}

.container {
    width: 680px;
}

.container_my {
    width: 700px;
    margin: 0 auto;
    padding: 10px 20px;
}

.data_part_dotted {
    border-bottom: 2px dotted black;
}

.border_box_form {
    border-top: 1px solid black;
    border-bottom: 1px solid black;
    border-right: 1px solid black;
    margin-left: -5px;
}

.border_box_form_first {
    border-left: 1px solid black;
}

.page2_table tr td {
    padding: 0 10px;
}
</style>
@foreach($showReturnOne as $oneDataItem)
<div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="heading_return_form">FORM OF RETUN OF INCOME UNDER THE INCOME TAX <br> ORDINANCE, 1984 (XXXVI OF 1984) </h1>
                <div class="row">
                    <div class="col-4 mx-auto text-center">
                        
                        <table>
                    <tr>
                        <td>
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;                            &nbsp;
                            &nbsp;
                            &nbsp;
                        </td>
                        <td class="border_box text-center"><small>FOR INDIVIDUAL AND OTHER TAXPAYERS <br> (OTHER THAN COMPANY)</small> </td>
                        <td>
                        &nbsp;


                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                        </td>
                    </tr>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <!-- <div class="row">
            <div class="ms-3 col-2 p-2 border_box">
                <h2 class="heading_return_form">Be a Respectable Taxpayer <br> Submit return in due time <br> Avoid penalty</h2>
            </div>
            <div class="col-2 ms-auto py-4 px-1 border_box">
                <h2 class="heading_return_form">Photograph of <br> the Assessee <br> [to be attested on <br> the photograph] </h2>


            </div>
        </div> -->

        <table>
    <tr>
        <td class="border_box">
            <h2 class="heading_return_form">Be a Respectable Taxpayer <br> Submit return in due time <br> Avoid penalty</h2>
        </td>
        <td cellspadding="500px"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <td cellspadding="500px"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <td cellspadding="500px"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <td cellspadding="500px"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <td cellspadding="500px"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        </td>
                        <td class="border_box">
                            <h2 class="heading_return_form">Photograph of <br> the Assessee <br> [to be attested on <br> the photograph] </h2>
                        </td>
    </tr>
</table>

        <div class="row mt-2">
            <div class="col-6 text-start">
                <h2 class="heading_return_form">Put the tick (√) mark wherever applicable </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6 text-start">
                <span class="px-2 border_box">Self</span>
                <span class="px-2 border_box">Universal Self</span>
                <span class="px-2 border_box">Normal</span>
            </div>
        </div>
    </div>


    <div class="container_my border_box mt-2 mb-5">
        <div class="row">
            <div class="col-11">
                <span class="d-block ps-1 mt-3">1. Name of the Assessee: <span class="data_part_dotted">
            {{$oneDataItem->full_name}}        
            </span>
                </span>
                <span class="d-block ps-1 mt-3">
                    2. National ID No (if any) : 
                    <span class="data_part_dotted">
                    {{$oneDataItem->nid}} 
                    </span>
                </span>
                <span class="d-block ps-1 mt-3">
                    3. UTIN (if any):  &nbsp;
                <span class="border_box_form px-1 border_box_form_first">{{$oneDataItem->utin[0]}} </span>
                <span class="border_box_form px-1">{{$oneDataItem->utin[1]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->utin[2]}}</span>
                <span class="border_box_form px-1">-</span>
                <span class="border_box_form px-1">{{$oneDataItem->utin[3]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->utin[4]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->utin[5]}}</span>
                <span class="border_box_form px-1">-</span>
                <span class="border_box_form px-1">{{$oneDataItem->utin[6]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->utin[7]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->utin[8]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->utin[9]}}</span>

                </span>
                <span class="d-block ps-1 mt-3">
                    4. TIN: &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <span class="border_box_form px-1 border_box_form_first">{{$oneDataItem->tin[0]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[1]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[2]}}</span>
                <span class="border_box_form px-1">-</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[3]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[4]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[5]}}</span>
                <span class="border_box_form px-1">-</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[6]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[7]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[8]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[9]}}</span>

                </span>
                <span class="d-block ps-1 mt-3">
                    5. (a) Circle: <span class="data_part_dotted">
                    {{$oneDataItem->circle}}
                    </span> &nbsp; &nbsp; (b) Taxes Zone: <span class="data_part_dotted">
                    {{$oneDataItem->taxes_zone}}
                    </span>

                </span>
                <span class="d-block ps-1 mt-3">
                    6. Assessment Year: <span class="data_part_dotted">
                    {{$oneDataItem->assessment_year}}
                    </span> &nbsp; 7. Residential Status: Resident <input type="checkbox"> /Non-resident <input type="checkbox">

                </span>
                <span class="d-block ps-1 mt-3">
                    8. Status: Individual <input type="checkbox"> Firm <input type="checkbox"> Association of Persons <input type="checkbox"> Hindu Undivided Family <input type="checkbox">  

                </span>

                <span class="d-block ps-1 mt-3">9. Name of the employer/business (where applicable): <span class="data_part_dotted"> Here data will be print so</span>
                </span>

                <span class="d-block ps-1 mt-3">10. Wife/Husband's Name (if assessee, please mention TIN): <span class="data_part_dotted"> {{$oneDataItem->wife_husband_name}}</span>
                </span>

                <span class="d-block ps-1 mt-3">11. Father's Name: <span class="data_part_dotted"> {{$oneDataItem->father_name}}</span>

                <span class="d-block mt-3">12. Mother’s Name: <span class="data_part_dotted"> {{$oneDataItem->mother_name}}</span>


                <span class="d-block mt-3">
                    13. Date of Birth (in case of individual) :  &nbsp;
                <span class="border_box_form px-1 border_box_form_first">0</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">0</span>

                </span>


                <span class="d-block ps-1 mt-3">14. Address (a) Present: <span class="data_part_dotted"> {{$oneDataItem->presentation_address}}</span>
                <span class="data_part_dotted d-inline-block" style="margin-left:170px"> Here data will be print  so please insert data here</span>
                <span class="data_part_dotted d-inline-block" style="margin-left:170px"> Here data will be print  so please insert data here</span>
                </span>
                <span class="d-block ps-1 mt-3" style="margin-left: 11%;"> (b) Permanent: <span class="data_part_dotted"> Here data will be print  so please insert data here</span>
                <span class="data_part_dotted d-inline-block" style="margin-left:20.1%"> Here data will be print  so please insert data here</span>
                <span class="data_part_dotted d-inline-block" style="margin-left:20.1%"> Here data will be print  so please insert data here</span>
                <span class="data_part_dotted d-inline-block" style="margin-left:20.1%"> Here data will be print  so please insert data here</span>


                <span class="d-block ps-1 mt-3" style="margin-left:  -12%;">
                    15. Telephone: Office/Business: <span class="data_part_dotted">
                        Here
                    </span> &nbsp; &nbsp; Residential: <span class="data_part_dotted">
                        Here
                    </span>

                </span>

                <span class="d-block mt-3" style="margin-left: -11%;">16.  VAT Registration Number (if any): <span class="data_part_dotted"> Here data will be print  so please insert</span>

            </div>
        </div>
    </div>


    <!--- page 1 end -->

    <hr>


    <!-- page 2 start -->
    <style>
        .heading_return_form {
            font-size: 14px!important;
            font-weight: bold;
        }
        
        .border_box {
            border: 1px solid black;
        }
        
        .container {
            width: 680px;
        }
        
        .container_my {
            width: 700px;
            margin: 0 auto;
            padding: 10px 20px;
        }
        
        .data_part_dotted {
            border-bottom: 2px dotted black;
        }
        
        .border_box_form {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            margin-left: -5px;
        }
        
        .border_box_form_first {
            border-left: 1px solid black;
        }
        
        .page2_table tr td {
            padding: 0 10px;
        }
    </style>

<div class="container_my">
        <div class="row">
            <div class="col-md-12 text-start">
                <h2 class="heading_return_form text-center" style="text-decoration: underline;">Statement of income of the Assessee</h2>
                <span class="d-block ps-1 mt-3 heading_return_form text-center">Statement of income during the income year ended on: <span class="data_part_dotted "> Here data will be print</span>
                </span>
                <table class="table-bordered table border-dark page2_table mt-5">
                    <tr>
                        <th>Serial no.</th>
                        <th class="text-center">Heads of Income </th>
                        <th>Amount in Taka </th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Salaries : u/s 21 (as per schedule 1) </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Interest on Securities : u/s 22 </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Income from house property : u/s 24 (as per schedule 2) </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Agricultural income : u/s 26 </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Income from business or profession : u/s 28 </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>Share of profit in a firm : </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>Income of the spouse or minor child as applicable : u/s 43(4)</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>Capital Gains : u/s 31 </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>Income from other source : u/s 33 </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td>Total (serial no. 1 to 9) </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>11</td>
                        <td>Foreign Income</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>12</td>
                        <td>Total income (serial no. 10 and 11)
                        </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>13</td>
                        <td>Tax leviable on total income </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>14</td>
                        <td>Tax rebate: u/s 44(2)(b)(as per schedule 3 </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Tax payable (difference between serial no. 13 and 14) </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>

                            <span class="d-block ps-1 mt-3">Tax Payments: <br>
                                <span>(a) Tax deducted/collected at source <br></span>
                            <span>(Please attach supporting documents/statement) Tk</span>
                            <span class="data_part_dotted"> amount</span><br>
                            <span>(b)Advance tax u/s 64/68 (Please attach challan ) Tk</span>
                            <span class="data_part_dotted"> amount</span><br>

                            <span>(c) Tax paid on the basis of this return (u/s 74) <br></span>
                            <span>(Please attach challan/pay order/bank draft/cheque) Tk</span>
                            <span class="data_part_dotted"> amount</span><br>

                            <span>(d)Adjustment of Tax Refund (if any)  Tk  <br></span>
                            <span class="data_part_dotted"> amount</span><br>

                            <span class="text-end">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total of (a), (b), (c) and (d)</span>

                        </td>
                        <td><br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <span>Tk </span>
                            <span class="data_part_dotted"> amount</span></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Difference between serial no. 15 and 16 (if any)<span class="data_part_dotted"> amount</span><br></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Tax exempted and Tax free income </td>
                        <td>Tk </span>
                            <span class="data_part_dotted"> amount</span></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Income tax paid in the last assessment year </td>
                        <td>Tk </span>
                            <span class="data_part_dotted"> amount</span></td>
                    </tr>



                </table>

                <b><small>*If needed, please use separate sheet.</small></b>
                <div class="row">
                    <div class="col-12 text-center">

                        <span><small><u>Verification</u></small></span><br>
                        <span style="text-align: justify!important; display: block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I <span class="data_part_dotted "> Here will be print name of the return form submitor</span>father/husband
                        <span class="data_part_dotted "> Here will be print father name of the return form submitor</span> UTIN/TIN:
                        <span class="data_part_dotted "> Here will be print TIN/UTIN of the return form submitor</span> solemnly declare that to the best of my knowledge and belief the information given in this return and statements and documents annexed
                        herewith is correct and complete.</span>
                    </div>

                    <div class="col-12">
                        <span>
                            <br>
                    <br>
                            Place: <span class="data_part_dotted "> Place name of the return form</span> <br> Date : <span class="data_part_dotted "> Here will be print date of the current day</span
                        </span>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4 ms-auto text-center">
                                <small>
                                Signature<br> (Name in block letters) <br> Designation and Seal (for other than individual)
                            </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <b><small>2</small></b>
        </div>
    </div>
    <!-- page 2 end -->


    <hr>

    <!-- page 3 start -->

    <style>
        .heading_return_form {
            font-size: 14px!important;
            font-weight: bold;
        }
        
        .border_box {
            border: 1px solid black;
        }
        
        .container {
            width: 680px;
        }
        
        .container_my {
            width: 700px;
            margin: 0 auto;
            padding: 10px 20px;
        }
        
        .data_part_dotted {
            border-bottom: 2px dotted black;
        }
        
        .border_box_form {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            margin-left: -5px;
        }
        
        .border_box_form_first {
            border-left: 1px solid black;
        }
        
        .page2_table tr td {
            padding: 0 10px;
        }
    </style>

<div class="container_my">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="heading_return_form">
                    SCHEDULES SHOWING DETAILS OF INCOME
                </h2>
            </div>
            <div class="col-6">
                <small> <b>   
                <span class="d-block ps-1 mt-3">Name of the Assessee: <span class="data_part_dotted"> {{$oneDataItem->full_name}}  </span>
            </b>
            </small>
                </span>
            </div>
            <div class="col-6">
                <span class="d-block ps-1 mt-3">
                    <b>
                    <small>
                    TIN:  &nbsp;
                    <span class="border_box_form px-1 border_box_form_first">{{$oneDataItem->tin[0]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[1]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[2]}}</span>
                <span class="border_box_form px-1">-</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[3]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[4]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[5]}}</span>
                <span class="border_box_form px-1">-</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[6]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[7]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[8]}}</span>
                <span class="border_box_form px-1">{{$oneDataItem->tin[9]}}</span>
                </small>
                </b>
                </span>

            </div>

            <div class="col-12 text-center mt-3">
                <h2 class="heading_return_form"><u>Schedule-1 (Salaries)</u></h2>
                <table class="table-bordered text-start table border-dark page2_table">
                    <tr>
                        <td>Pay & Allowance</td>
                        <td>Amount of Income (Tk.)
                        </td>
                        <td>Amount of exempted income (Tk.)
                        </td>
                        <td>
                            Net taxable income (Tk.)
                        </td>
                    </tr>
                    <tr>
                        <td>Basic pay </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Special pay </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Dearness allowance </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Conveyance allowance </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>House rent allowance </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Medical allowance </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Servant allowance </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Leave allowance </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Honorarium / Reward/ Fee </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Overtime allowance </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Bonus / Ex-gratia </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Other allowances </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>


                    <tr>
                        <td>Employer’s contribution to Recognized Provident Fund </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>


                    <tr>
                        <td>Interest accrued on Recognized Provident Fund </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>


                    <tr>
                        <td>Deemed income for transport facility </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Deemed income for free furnished/unfurnished accommodation </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>


                    <tr>
                        <td>Other, if any (give detail) </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>


                    <tr>
                        <td>Net taxable income from salary </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="col-12">
                <h2 class="heading_return_form text-center"><u>Schedule-1 (Salaries)</u></h2>
                <table class="table-bordered text-start table border-dark page2_table">
                    <tr>
                        <td class="text-center">Location and<br> description of property</td>
                        <td>Particulars
                        </td>
                        <td>Tk.
                        </td>
                        <td>
                            Tk.
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="11"></td>
                        <td> 1. Annual rental income </td>
                        <td colspan="2"></td>
                    </tr>

                    <tr>
                        <td colspan="4"> 2. Claimed Expenses : </td>
                    </tr>

                    <tr>
                        <td> Repair, Collection, etc.</td>
                        <td colspan="2" rowspan=""></td>

                    </tr>

                    <tr>
                        <td> Municipal or Local Tax </td>
                        <td colspan="2"></td>


                    </tr>

                    <tr>
                        <td> Land Revenue </td>
                        <td colspan="2"></td>


                    </tr>
                    <tr>
                        <td> Interest on Loan/Mortgage/Capital Charge </td>
                        <td colspan="2"></td>

                    </tr>
                    <tr>
                        <td> Insurance Premium
                        </td>
                        <td colspan="2"></td>

                    </tr>
                    <tr>
                        <td> Vacancy Allowance
                        </td>
                        <td colspan="2"></td>


                    </tr>
                    <tr>
                        <td> Other, if any
                        </td>
                        <td colspan="2"></td>
                    </tr>


                    <tr>
                        <td class="text-center"> Total =
                        </td>
                        <td colspan="2"></td>
                    </tr>

                    <tr>
                        <td class=""> 3. Net income ( difference between item 1 and 2)
                        </td>
                        <td colspan="2"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <b><small>3</small></b>
        </div>
    </div>
    <!-- page 3 end -->
    <hr>
    <!-- page 4 start -->

    <style>
        .heading_return_form {
            font-size: 14px!important;
            font-weight: bold;
        }
        
        .border_box {
            border: 1px solid black;
        }
        
        .container {
            width: 680px;
        }
        
        .container_my {
            width: 700px;
            margin: 0 auto;
            padding: 10px 20px;
        }
        
        .data_part_dotted {
            border-bottom: 2px dotted black;
        }
        
        .border_box_form {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            margin-left: -5px;
        }
        
        .border_box_form_first {
            border-left: 1px solid black;
        }
        
        .page2_table tr td {
            padding: 0 10px;
        }
    </style>

<div class="container_my">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="heading_return_form text-center"><u>Schedule-3 (Investment tax credit)</u></h2>
                <p>(Section 44(2)(b) read with part ‘B’ of Sixth Schedule</p>
            </div>

            <div class="col-12 border_box">
                <div class="row">
                    <div class="col-7">
                        <span>
                            1. Life insurance premium
                        </span><br>
                        <span>
                            2. Contribution to deferred annuity
                        </span><br>
                        <span>
                            3. Contribution to Provident Fund to which Provident Fund 
                            Act, 1925 applies
                        </span><br>
                        <span>
                            
                            4.  Self contribution and employer’s contribution to Recognized Provident 
                            Fund
                        </span><br>
                        <span>
                            5. Contribution to Super Annuation Fund
                        </span><br>
                        <span>
                            6. Investment in approved debenture or debenture stock, Stock or Shares
                        </span><br>
                        <span>
                            7. Contribution to deposit pension scheme 
                        </span><br>
                        <span>
                            8.  Contribution to Benevolent Fund and Group Insurance premium
                        </span><br>

                        <span>
                            9. Contribution to Zakat Fund
                        </span><br>

                        <span>
                            9. Others, if any ( give details ) 
                        </span><br>

                        <span class="text-end" style="display:block">
                            Total
                        </span><br>



                    </div>
                    <div class="col-5">
                        <span>
                            Tk <span class="data_part_dotted">
                                Here data will be print
                            </span>
                        </span>
                        <br>
                        <span>
                            Tk <span class="data_part_dotted">
                                Here data will be print
                            </span>
                        </span>
                        <br>
                        <span>
                            Tk <span class="data_part_dotted">
                                Here data will be print
                            </span>
                        </span>
                        <br>
                        <br>
                        <span>
                            Tk <span class="data_part_dotted">
                                Here data will be print
                            </span>
                        </span>
                        <br>
                        <br>
                        <span>
                            Tk <span class="data_part_dotted">
                                Here data will be print
                            </span>
                        </span>
                        <br>
                        <span>
                            Tk <span class="data_part_dotted">
                                Here data will be print
                            </span>
                        </span>
                        <br>
                        <br>
                        <span>
                            Tk <span class="data_part_dotted">
                                Here data will be print
                            </span>
                        </span>
                        <br>
                        <span>
                            Tk <span class="data_part_dotted">
                                Here data will be print
                            </span>
                        </span>
                        <br>
                        <br>
                        <span>
                            Tk <span class="data_part_dotted">
                                Here data will be print
                            </span>
                        </span>
                        <br>
                        <span>
                            Tk <span class="data_part_dotted">
                                Here data will be print
                            </span>
                        </span>
                        <br>
                        <span>
                            Tk <span class="data_part_dotted">
                                Here data will be print
                            </span>
                        </span>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container_my">
        <div class="row">
            <div class="col text-start">
                <i><b><small>*Please attach certificates/documents of investment</small></b></i>
            </div>
        </div>
    </div>



    <div class="container_my">
        <div class="row">
            <div class="col-12 border_box">
                <div class="row">
                    <div class="col-6">
                        1. Here document name will be print <br><br><br><br> 2. Here document name will be print <br><br><br><br> 3. Here document name will be print <br><br> <br><br>4. Here document name will be print <br><br><br><br> 5. Here document
                        name will be print <br><br><br><br>
                    </div>

                    <div class="col-6">
                        6. Here document name will be print <br><br><br><br> 7. Here document name will be print <br><br><br><br> 8. Here document name will be print <br><br><br><br> 9. Here document name will be print <br><br><br><br> 10. Here document
                        name will be print <br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container_my">
        <div class="row">
            <div class="col text-start">
                <i><b><small>*Incomplete return is not acceptable</small></b></i>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col text-center">
            <b><small>4</small></b>
        </div>
    </div>

    <!-- page 4 end -->

    <hr>

    

    <!-- page 5 start -->
    <style>
        .heading_return_form {
            font-size: 14px!important;
            font-weight: bold;
        }
        
        .border_box {
            border: 1px solid black;
        }
        
        .container {
            width: 680px;
        }
        
        .container_my {
            width: 700px;
            margin: 0 auto;
            padding: 10px 20px;
        }
        
        .data_part_dotted {
            border-bottom: 2px dotted black;
        }
        
        .border_box_form {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            margin-left: -5px;
        }
        
        .border_box_form_first {
            border-left: 1px solid black;
        }
        
        .page2_table tr td {
            padding: 0 10px;
        }
    </style>

<div class="container_my">
        <div class="row">
            <div class="col-12 text-end">
                <i><h2 class="heading_return_form">IT-10B
                </h2></i>
            </div>
            <div class="col-12 text-center">
                <h2 class="heading_return_form">
                    Statement of Assets and Liabilities (as on <span class="data_part_dotted"> Here assets name and liabilities</span>)
                </h2>
            </div>
            <div class="col-4">
                <small> <b>   
                <span class="d-block ps-1 mt-3">Name of the Assessee: <span class="data_part_dotted"> data</span>
            </b>
            </small>
                </span>
            </div>
            <div class="col-6">
                <span class="d-block ps-1 mt-3">
                    <b>
                    <small>
                    TIN:  &nbsp;
                <span class="border_box_form px-1 border_box_form_first">0</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">-</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">-</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">0</span>
                <span class="border_box_form px-1">0</span>
                </small>
                </b>
                </span>

            </div>
        </div>
    </div>


    <div class="container_my">
        <div class="row">
            <div class="col-9">
                <span>
                    1. (a) <b>Business Capital</b> (Closing balance) 
                </span><br>

                <span>
                    2. (b) <b>Directors Shareholdings in Limited Companies (at cost)</b> (Closing balance) 
                </span><br>
                <div class="row mt-2">
                    <div class="col-6">
                        <u>Name of Companies</u>
                        <br>
                        <br>
                        <br>
                        <br>
                        <!-- br tag will replace with content if exist-->
                    </div>
                    <div class="col-6">
                        <u>Number of shares</u>
                        <br>
                        <br>
                        <br>
                        <br>
                        <!-- br tag will replace with content if exist-->

                    </div>
                </div>

                <span>
                    2. <b>Non-Agricultural Property (at cost with legal expenses ) :</b> 
                <br>Land/House property (Description and location of property)
                </span><br> <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- br tag will replace with content if exist-->

                <span>
                    3. <b>Agricultural Property (at cost with legal expenses ) :</b> 
                <br>Land/House property (Description and location of property)
                </span><br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- br tag will replace with content if exist-->

            </div>
            <div class="col-3">
                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>
                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>


                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>
                <br>

                <br>
                <br>
                <br>
                <br>
                <br>

                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>
            </div>
        </div>
    </div>


    <div class="container_my">
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <b><p>4. Investments:</p></b>
                    <div class="col-9">
                        <span>(a) Shares/Debentures </span><br>
                        <span>(b) Saving Certificate/Unit Certificate/Bond</span><br>
                        <span>(c) Prize bond/Savings Scheme </span><br>
                        <span>(d) Loans given</span><br>
                        <span>(e) Other Investment</span><br>
                    </div>
                    <div class="col-3">
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <div class="text-end mt-3">
                            <span class="d-block">Total =</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <br>
                <br>

                <br>
                <br>

                <br>
                <p style="margin-top: 30px;">Tk<span class="data_part_dotted"> data print</span></p>
            </div>
        </div>
    </div>


    <div class="container_my">
        <div class="row">
            <div class="col-9">

                <span>
                    5. <b>Motor Vehicles (at cost) :</b> 
                <br>Type of motor vehicle and Registration number
                </span><br>
                <!-- br tag will replace with content if exist-->

                <span>
                    6. <b>Jewellery (quantity and cost) : </b> 
                </span>
                <br>
                <br>
                <br>

                <!-- br willl replace with content if exisit-->

                <span>
                    7. <b>Furniture (at cost) : </b> 
                </span><br>
                <span>
                    8. <b>Electronic Equipment (at cost) : </b> 
                </span><br>
                <br>
                <br>
                <!-- br tag will replace with content if exist-->


            </div>
            <div class="col-3">
                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br><br>
                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br><br><br>

                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br><br><br>





                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>
                <br>

                <br>
                <br>
                <br>
                <br>
                <br>

                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>
            </div>
        </div>
    </div>


    <div class="container_my">
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <b><p>9. Cash Asset Outside Business: :</p></b>
                    <div class="col-9">
                        <span>(a) Cash in hand  </span><br>
                        <span>(b) Cash at bank </span><br>
                        <span>(c) Other deposits </span><br>
                    </div>
                    <div class="col-3">
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>

                        <div class="text-end mt-3">
                            <span class="d-block">Total =</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <br>
                <br>

                <br>
                <br>

                <br>
                <p style="margin-top: 8px;">Tk<span class="data_part_dotted"> data print</span></p>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col text-center">
            <b><small>5</small></b>
        </div>
    </div>
    <!-- page 5 end -->

    <hr>
    <!-- page 6 start -->

    <style>
        .heading_return_form {
            font-size: 14px!important;
            font-weight: bold;
        }
        
        .border_box {
            border: 1px solid black;
        }
        
        .container {
            width: 680px;
        }
        
        .container_my {
            width: 700px;
            margin: 0 auto;
            padding: 10px 20px;
        }
        
        .data_part_dotted {
            border-bottom: 2px dotted black;
        }
        
        .border_box_form {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            margin-left: -5px;
        }
        
        .border_box_form_first {
            border-left: 1px solid black;
        }
        
        .page2_table tr td {
            padding: 0 10px;
        }
    </style>

<div class="container_my">
        <div class="row">
            <div class="col-9 text-end">
                <p>B/F =</p>
            </div>
            <div class="col-3">
                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>
            </div>
        </div>
    </div>

    <div class="container_my">
        <div class="row">
            <div class="col-9">

                <span>
                    10. <b>Any other assets</b> 
                <br>(With details)
                </span><br> <br>
                <br>
                <br>
                <br>
                <!-- br tag will replace with content if exist-->



            </div>
            <div class="col-3">
                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>

                <br>

            </div>
        </div>
    </div>

    <div class="container_my">
        <div class="row">
            <div class="col-9">
                <p class="text-end"><b>Total Assets </b></p>
            </div>
            <div class="col-3">
                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>
            </div>
        </div>
    </div>


    <div class="container_my">
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <b><p>11. Less Liabilities:</p></b>
                    <div class="col-8">
                        <span>(a) Mortgages secured on property or land </span><br>
                        <span>(b) Unsecured loans </span><br>
                        <span>(c) Prize bond/Savings Scheme </span><br>
                        <span>(d) Bank loan</span><br>
                        <span>(e) Others</span><br>
                    </div>
                    <div class="col-4">
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <div class="text-end mt-3">
                            <span class="d-block"><b>Total Liabilities</b></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <br>
                <br>

                <br>
                <br>
                <br>

                <br>
                <p style="margin-top: 30px;">Tk<span class="data_part_dotted"> data print</span></p>
            </div>
        </div>
    </div>


    <div class="container_my">
        <div class="row">
            <div class="col-9">

                <span>
                    12. <b> Net wealth as on last date of this income year </b> 
                <br>(Difference between total assets and total liabilities)
                </span><br> <br>

                <!-- br tag will replace with content if exist-->

                <span>
                    13. <b> Net wealth as on last date of previous income year </b> 
                </span><br> <br>

                <span>
                    14. <b> Accretion in wealth </b>(Difference between serial no. 12 and 13)
                </span><br> <br>
                <br>

            </div>
            <div class="col-3">
                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>

                <br>
                <br>
                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>

                <br>
                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>

                <br>

            </div>
        </div>
    </div>


    <div class="container_my">
        <div class="row">
            <div class="col-9">
                <span>
                    15. (a) Family Expenditure: (Total expenditure as per Form IT 10 BB) 
                </span><br>

                <span>
                    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;(b) Number of dependant children of the family:  
                </span><br>
                <div class="row mt-2 text-center">
                    <div class="col-6">
                        <span class="border_box p-1" style="display:inline-block;">data</span><br>
                        <span class="p-1">Adult</span>
                        <!-- br tag will replace with content if exist-->
                    </div>
                    <div class="col-6 text-start">
                        <span class="border_box p-1" style="display:inline-block">data</span><br>
                        <span class="p-1">Child</span>
                        <!-- br tag will replace with content if exist-->

                    </div>
                </div>

                <span>
                    16. <b> Total Accretion of wealth  </b> (Total of serial 14 and 15)
                </span><br> <br>


            </div>
            <div class="col-3">
                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>

                <br>
                <br>
                <br>
                <br>


                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>
                <br>


            </div>
        </div>
    </div>



    <div class="container_my">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <b><p>17. Sources of Fund : </p></b>
                    <div class="col-8">
                        <span>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;(i) Shown Return Income </span><br>
                        <span>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;(ii) Tax exempted/Tax free Income </span><br>
                        <span>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;(iii) Other receipt </span><br>
                    </div>
                    <div class="col-4">
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <span>
                            Tk<span class="data_part_dotted"> data print</span>
                        </span><br>
                        <div class="text-end mt-3">
                            <small><span class="d-block"><b>Total source of Fund = </b></span></small>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-2">
                <br>
                <br>


                <br>
                <p style="margin-top: 51px;">Tk<span class="data_part_dotted"> data print</span></p>
            </div>
        </div>
    </div>


    <div class="container_my">
        <div class="row">
            <div class="col-9">


                <span>
                    18. <b>  Difference   </b> (Between serial 16 and 17)
                </span><br> <br>


            </div>
            <div class="col-3">
                <span>
                    Tk<span class="data_part_dotted"> data print</span>
                </span><br>




            </div>
        </div>
    </div>

    <div class="container_my">
        <div class="row">
            <div class="col-12">
                <p>I solemnly declare that to the best of my knowledge and belief the information given in the IT-10B is correct and complete. </p>
            </div>

        </div>

        <div class="row">
            <div class="col-5 ms-auto">
                Name & signature of the Assessee Date <span class="data_part_dotted"> data print</span>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-3">
                <ul>
                    <li><i><b><small>Assets and liabilities of self, spouse (if she/he is not an assessee), minor children and 
                        dependant(s) to be shown in the above statements. 
                        *If needed, please use separate sheet.</small></b></i></li>
                </ul>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col text-center">
            <b><small>6</small></b>
        </div>
    </div>
    <!-- page 6 end -->

    <hr>


    @endforeach


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8 " crossorigin="anonymous "></script>
</body>

</html>
