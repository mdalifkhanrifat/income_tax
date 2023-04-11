@extends('inputform.layouts.userapp')
@section('title','User INFO One')

@section('content')

    @if(@empty($showReturnOne))


        <div class="form_left">
    <div class="container">
    <section class="">

        <form>

            <dev class="row">

                <div class="col-md-3">
                    <br>
                    <br>
                    <label for="fname" class="text-white">{{__('First name:')}}</label><br>
                    <input type="text" id="full_name" name="full_name" value="{{Auth::user()->name}}"><br><br>

                    <label for="nid" class="text-white" >{{__('NID Number:')}}</label><br>
                    <input type="text" id="nid" name="nid" value="" placeholder="13 Digit"><br><br>

                    <label for="utin" class="text-white" >{{__('UTIN Number:')}}</label><br>
                    <input type="text" id="utin" name="utin" value=""placeholder="12 Digit"><br><br>

                    <label for="tin" class="text-white" >{{__('TIN Number:')}}</label><br>
                    <input type="text" id="tin" name="tin" value="" placeholder="12 Digit"><br><br>

                    <label for="phone" class="text-white" >{{__('Phone Number:')}}</label><br>
                    <input type="text" id="phone" name="phone" value="" placeholder="12 Digit"><br><br>

                </div>
                <div class="col-md-3">
                    <br>
                    <br>
                    <label for="whname" class="text-white">{{__('Wife/Husband name:')}}</label><br>
                    <input type="text" id="wife_husband_name" name="wife_husband_name" value=""><br><br>

                    <label for="fname" class="text-white">{{__('Father,s name:')}}</label><br>
                    <input type="text" id="father_name" name="father_name" value=""><br><br>

                    <label for="mname" class="text-white">{{__('Mother,s name:')}}</label><br>
                    <input type="text" id="mother_name" name="mother_name" value=""><br><br>

                    <label for="idate" class="text-white">{{__('Date of Birth:')}}</label><br>
                    <input type="date" id="date_of_birth" name="dobdate" placeholder="dd-mm-yyyy" value="" min="1920-01-01" max="2030-12-31"><br><br>

                    <label for="nameofemployer" class="text-white" >{{__('Name of the employer:')}}</label><br>
                    <input type="text" id="employer_business_type" name="employer_business_type" value=""><br><br>

                </div>

                <div class="col-md-3">
                    <br>
                    <br>
                    <label for="taxcircle" class="text-white">{{__('Circle:')}}</label><br>
                    <input type="text" id="circle" name="circle" value=""><br><br>

                    <label for="taxzone" class="text-white">{{__('Taxes Zone:')}}</label><br>
                    <input type="text" id="taxes_zone" name="taxes_zone" value=""><br><br>

                    <label for="taxyear" class="text-white">{{__('Assessment Year:')}}</label><br>
                    <input type="number" id="assessment_year" name="assessment_year" placeholder="YYYY" min="1999" max="2023"> <br><br>

                    <label for="residential_status1" class="text-white">{{__('Residential Status:')}}</label><br>
                    <input type="radio" id="" name="residential_status" value="Resident">
                     <label for="residential_status2" class="text-white">{{__('Resident')}}</label>
                    <input type="radio" id="" name="residential_status" value="Non Resident">
                    <label for="residential_status" class="text-white">{{__('Non-Resident')}}</label> <br><br>

                    <label for="status" class="text-white">{{__('Status:')}}</label><br>

                    <input type="radio" id="status1" name="individual" value="{{__('Individual')}}">
                    <label for="individual" class="text-white">{{__('Individual')}}</label>

                    <input type="radio" id="status2" name="individual" value="{{__('Firm')}}">
                    <label for="firm" class="text-white">{{__('Firm')}} </label>

                    <input type="radio" id="status3" name="individual" value="{{__('Association of Persons ')}}">
                    <label for="associationofpersons" class="text-white">{{__('Association of Persons ')}}</label>

                    <input type="radio" id="status4" name="individual" value="{{__('Hindu Undivided Family')}}">
                    <label for="hinduundividedfamily" class="text-white">{{__('Hindu Undivided Family')}}</label><br>


                </div>

                <div class="col-md-3">
                    <br>
                    <br>

                    <label for="residential" class="text-white">{{__('Residential:')}}</label><br>
                    <input type="text" id="residential" name="residential" value=""><br><br>
                    <label for="vatregnumber" class="text-white">{{__('VAT Registration Number:')}}</label><br>
                    <input type="text" id="vat_reg_number" name="vatregnumber" value=""><br><br>

                    <label for="presentaddress" class="text-white">{{__('Present Address:')}}</label><br>
                    <input type="text" id="presentation_address" name="presentaddress" value=""><br><br>
                    <label for="permanentaddress" class="text-white">{{__('Permanent Address:')}}</label><br>
                    <input type="text" id="permanent_address" name="permanentaddress" value=""><br><br>
                </div>

            </dev>
            <br>
            <br>

            <dev class="text-center row">

                <dev class="col-md-4"></dev>
                <dev class="col-md-4">
                    <button type="submit" id="infoOneBtn" onclick="event.preventDefault()" name="infoOneBtn" class=" btn bg-primary text-center">Save</button>
                </dev>
                <dev class="col-md-4"></dev>

            </dev>


        </form>

    </section>
    </div></div>
    @else
        @foreach($showReturnOne as $one)
            <div class="form_left">
                <div class="container">
        <section class="form_left">

            <form>

                <dev class="row">

                    <div class="col-md-3">
                        <br>
                        <br>
                        <label for="fname" class="text-white">{{__('First name:')}}</label><br>
                        <input type="text" id="full_name_edit" name="full_name" value="{{$one->full_name}}"><br><br>

                        <label for="nid" class="text-white" >{{__('NID Number:')}}</label><br>
                        <input type="text" id="nid_edit" name="nid" value="{{$one->nid}}" placeholder="13 Digit"><br><br>

                        <label for="utin" class="text-white" >{{__('UTIN Number:')}}</label><br>
                        <input type="text" id="utin_edit" name="utin" value="{{$one->utin}}"placeholder="12 Digit"><br><br>

                        <label for="tin" class="text-white" >{{__('TIN Number:')}}</label><br>
                        <input type="text" id="tin_edit" name="tin" value="{{$one->tin}}" placeholder="12 Digit"><br><br>

                        <label for="phone" class="text-white" >{{__('Phone Number:')}}</label><br>
                        <input type="text" id="phone_edit" name="phone" value="{{$one->phone}}" placeholder="12 Digit"><br><br>

                    </div>
                    <div class="col-md-3">
                        <br>
                        <br>
                        <label for="whname" class="text-white">{{__('Wife/Husband name:')}}</label><br>
                        <input type="text" id="wife_husband_name_edit" name="wife_husband_name" value="{{$one->wife_husband_name}}"><br><br>

                        <label for="fname" class="text-white">{{__('Father,s name:')}}</label><br>
                        <input type="text" id="father_name_edit" name="father_name" value="{{$one->father_name}}"><br><br>

                        <label for="mname" class="text-white">{{__('Mother,s name:')}}</label><br>
                        <input type="text" id="mother_name_edit" name="mother_name" value="{{$one->mother_name}}"><br><br>

                        <label for="idate" class="text-white">{{__('Date of Birth:')}}</label><br>
                        <input type="text" id="date_of_birth_edit" name="dobdate" placeholder="dd-mm-yyyy" value="{{$one->date_of_birth}}" ><br><br>

                        <label for="nameofemployer" class="text-white" >{{__('Name of the employer:')}}</label><br>
                        <input type="text" id="employer_business_type_edit" name="employer_business_type" value="{{$one->employer_business_type}}"><br><br>

                    </div>

                    <div class="col-md-3">
                        <br>
                        <br>
                        <label for="taxcircle" class="text-white">{{__('Circle:')}}</label><br>
                        <input type="text" id="circle_edit" name="circle" value="{{$one->assessment_year}}"><br><br>

                        <label for="taxzone" class="text-white">{{__('Taxes Zone:')}}</label><br>
                        <input type="text" id="taxes_zone_edit" name="taxes_zone" value="{{$one->assessment_year}}"><br><br>

                        <label for="taxyear" class="text-white">{{__('Assessment Year:')}}</label><br>
                        <input type="number" id="assessment_year_edit" name="assessment_year" value="{{$one->assessment_year}}" placeholder="YYYY" min="1999" max="2023"> <br><br>


                        <label for="residential_status1" class="text-white">{{__('Residential Status:')}}</label><br>
                        @if($one->residential_status == "Resident")
                        <input type="radio" id="" name="residential_status" checked value="Resident">
                        <label for="residential_status2" class="text-white">{{__('Resident')}}</label>

                            <input type="radio" id="" name="residential_status"  value="Non Resident">
                            <label for="residential_status" class="text-white">{{__('Non-Resident')}}</label> <br><br>
                        @elseif($one->residential_status == "Non Resident")
                            <input type="radio" id="" name="residential_status"  value="Resident">
                            <label for="residential_status2" class="text-white">{{__('Resident')}}</label>

                        <input type="radio" id="" name="residential_status" checked value="Non Resident">
                        <label for="residential_status" class="text-white">{{__('Non-Resident')}}</label> <br><br>
                        @endif

                        <label  class="text-white">Status</label><br>
                        @if($one->status == "Individual")
                        <input type="radio" id="status1_edit" name="individual" checked value="{{__('Individual')}}">
                        <label for="individual" class="text-white">{{__('Individual')}}</label>

                            <input type="radio" id="status2_edit" name="individual"  value="{{__('Firm')}}">
                            <label for="firm" class="text-white">{{__('Firm')}} </label>

                            <input type="radio" id="status3_edit" name="individual"  value="{{__('Association of Persons ')}}">
                            <label for="associationofpersons" class="text-white">{{__('Association of Persons ')}}</label>

                            <input type="radio" id="status4_edit" name="individual"  value="{{__('Hindu Undivided Family')}}">
                            <label for="hinduundividedfamily" class="text-white">{{__('Hindu Undivided Family')}}</label><br>
                        @elseif($one->status == "Firm")
                            <input type="radio" id="status1_edit" name="individual"  value="{{__('Individual')}}">
                            <label for="individual" class="text-white">{{__('Individual')}}</label>

                            <input type="radio" id="status2_edit" name="individual" checked  value="{{__('Firm')}}">
                            <label for="firm" class="text-white">{{__('Firm')}} </label>

                            <input type="radio" id="status3_edit" name="individual"  value="{{__('Association of Persons ')}}">
                            <label for="associationofpersons" class="text-white">{{__('Association of Persons ')}}</label>

                            <input type="radio" id="status4_edit" name="individual"  value="{{__('Hindu Undivided Family')}}">
                            <label for="hinduundividedfamily" class="text-white">{{__('Hindu Undivided Family')}}</label><br>
                        @elseif($one->status == "Association of Persons")
                            <input type="radio" id="status1_edit" name="individual"  value="{{__('Individual')}}">
                            <label for="individual" class="text-white">{{__('Individual')}}</label>

                            <input type="radio" id="status2_edit" name="individual"  value="{{__('Firm')}}">
                            <label for="firm" class="text-white">{{__('Firm')}} </label>

                            <input type="radio" id="status3_edit" name="individual" checked  value="{{__('Association of Persons ')}}">
                            <label for="associationofpersons" class="text-white">{{__('Association of Persons ')}}</label>

                            <input type="radio" id="status4_edit" name="individual"  value="{{__('Hindu Undivided Family')}}">
                            <label for="hinduundividedfamily" class="text-white">{{__('Hindu Undivided Family')}}</label><br>
                        @elseif($one->status == "Hindu Undivided Family")
                            <input type="radio" id="status1_edit" name="individual"  value="{{__('Individual')}}">
                            <label for="individual" class="text-white">{{__('Individual')}}</label>

                            <input type="radio" id="status2_edit" name="individual"  value="{{__('Firm')}}">
                            <label for="firm" class="text-white">{{__('Firm')}} </label>

                            <input type="radio" id="status3_edit" name="individual"  value="{{__('Association of Persons ')}}">
                            <label for="associationofpersons" class="text-white">{{__('Association of Persons ')}}</label>

                            <input type="radio" id="status4_edit" name="individual" checked  value="{{__('Hindu Undivided Family')}}">
                            <label for="hinduundividedfamily" class="text-white">{{__('Hindu Undivided Family')}}</label><br>
                        @endif

                    </div>

                    <div class="col-md-3">
                        <br>
                        <br>

                        <label for="residential" class="text-white">{{__('Residential:')}}</label><br>
                        <input type="text" id="residential_edit" name="residential" value="{{$one->residential}}"><br><br>
                        <label for="vatregnumber" class="text-white">{{__('VAT Registration Number:')}}</label><br>
                        <input type="text" id="vat_reg_number_edit" name="vatregnumber" value="{{$one->presentation_address}}"><br><br>

                        <label for="presentaddress" class="text-white">{{__('Present Address:')}}</label><br>
                        <input type="text" id="presentation_address_edit" name="presentaddress" value="{{$one->presentation_address}}"><br><br>
                        <label for="permanentaddress" class="text-white">{{__('Permanent Address:')}}</label><br>
                        <input type="text" id="permanent_address_edit" name="permanentaddress" value="{{$one->permanent_address}}"><br><br>
                    </div>

                </dev>
                <br>
                <br>

                <dev class="text-center row">

                    <dev class="col-md-4"></dev>
                    <dev class="col-md-4">
                        <button type="submit" id="infoOneBtnEdit" onclick="event.preventDefault()" name="infoOneBtn" class=" btn btn-lg bg-primary text-center">Update</button>
                    </dev>
                    <dev class="col-md-4"></dev>

                </dev>


            </form>

        </section>
    </div>
        </div>

        @endforeach
    @endif

@endsection
