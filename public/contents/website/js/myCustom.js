
// Update One Information
$('#infoOneBtnEdit').on('click',function () {

    let fullName                = $('#full_name_edit').val();
    let ind                     = $('#nid_edit').val();
    let utin                    = $('#utin_edit').val();
    let tin                     = $('#tin_edit').val();
    let phone                   = $('#phone_edit').val();
    let wifeHusbandName         = $('#wife_husband_name_edit').val();
    let fatherName              = $('#father_name_edit').val();
    let motherName              = $('#mother_name_edit').val();
    let dateOfBirth             = $('#date_of_birth_edit').val();
    let nameOfEmployer          = $('#employer_business_type_edit').val();
    let taxCircle               = $('#circle_edit').val();
    let taxZone                 = $('#taxes_zone_edit').val();
    let taxYear                 = $('#assessment_year_edit').val();
    let residential_status      = $("input[name='residential_status']:checked").val();
    let status                  = $("input[name='individual']:checked").val();
    let residential             = $('#residential_edit').val();
    let vat_reg_number          = $('#vat_reg_number_edit').val();
    let presentation_address    = $('#presentation_address_edit').val();
    let permanent_address       = $('#permanent_address_edit').val();

    // alert(fullName+' '+ind+' '+utin+' '+tin+' '+phone+' '+wifeHusbandName+' '+fatherName+' '+motherName+' '+dateOfBirth
    //     +' '+nameOfEmployer +' '+taxCircle+' '+ taxZone+' '+ taxYear+' '+residential_status+' '+status+' '+residential+' '+
    //     vat_reg_number+' '+presentation_address+' '+permanent_address
    // );
    updateInfoOneData(fullName,ind,utin,tin,phone,wifeHusbandName,fatherName,motherName,dateOfBirth,nameOfEmployer
        ,taxCircle, taxZone, taxYear,residential_status,status,residential,
        vat_reg_number,presentation_address,permanent_address
    );
})


function updateInfoOneData(fullName,ind,utin,tin,phone,wifeHusbandName,fatherName,motherName,dateOfBirth,nameOfEmployer
    ,taxCircle, taxZone, taxYear,residential_status,status,residential,
                        vat_reg_number,presentation_address,permanent_address
) {

    axios.post("/updateInfoOneData",{
        fullName:fullName,
        ind:ind,
        utin:utin,
        tin:tin,
        phone:phone,
        wifeHusbandName:wifeHusbandName,
        fatherName:fatherName,
        motherName:motherName,
        dateOfBirth:dateOfBirth,
        nameOfEmployer:nameOfEmployer,
        taxCircle:taxCircle,
        taxZone:taxZone,
        taxYear:taxYear,
        residential_status:residential_status,
        status:status,
        residential:residential,
        vat_reg_number:vat_reg_number,
        presentation_address:presentation_address,
        permanent_address:permanent_address
    }).then(function (res) {
        if (res.status == 200 && res.data ==1){
            alert("Update Success")
            window.location.href = "/info1";


        }else{
            alert("Update Fail")

        }
    }).catch(function (err) {
        alert("Wrong")

    })

}



// Add One Information Function
$('#infoOneBtn').on('click',function () {

    let fullName                = $('#full_name').val();
    let ind                     = $('#nid').val();
    let utin                    = $('#utin').val();
    let tin                     = $('#tin').val();
    let phone                   = $('#phone').val();
    let wifeHusbandName         = $('#wife_husband_name').val();
    let fatherName              = $('#father_name').val();
    let motherName              = $('#mother_name').val();
    let dateOfBirth             = $('#date_of_birth').val();
    let nameOfEmployer          = $('#employer_business_type').val();
    let taxCircle               = $('#circle').val();
    let taxZone                 = $('#taxes_zone').val();
    let taxYear                 = $('#assessment_year').val();
    let residential_status      = $("input[name='residential_status']:checked").val();
    let status                  = $("input[name='individual']:checked").val();
    let residential             = $('#residential').val();
    let vat_reg_number          = $('#vat_reg_number').val();
    let presentation_address    = $('#presentation_address').val();
    let permanent_address       = $('#permanent_address').val();

    // alert(fullName+' '+ind+' '+utin+' '+tin+' '+phone+' '+wifeHusbandName+' '+fatherName+' '+motherName+' '+dateOfBirth
    //     +' '+nameOfEmployer +' '+taxCircle+' '+ taxZone+' '+ taxYear+' '+residential_status+' '+status+' '+residential+' '+
    //     vat_reg_number+' '+presentation_address+' '+permanent_address
    // );
addInfoOneData(fullName,ind,utin,tin,phone,wifeHusbandName,fatherName,motherName,dateOfBirth,nameOfEmployer
    ,taxCircle, taxZone, taxYear,residential_status,status,residential,
        vat_reg_number,presentation_address,permanent_address
    );
})


function addInfoOneData(fullName,ind,utin,tin,phone,wifeHusbandName,fatherName,motherName,dateOfBirth,nameOfEmployer
    ,taxCircle, taxZone, taxYear,residential_status,status,residential,
                        vat_reg_number,presentation_address,permanent_address
) {

    axios.post("/setInfoOneData",{
        fullName:fullName,
        ind:ind,
        utin:utin,
        tin:tin,
        phone:phone,
        wifeHusbandName:wifeHusbandName,
        fatherName:fatherName,
        motherName:motherName,
        dateOfBirth:dateOfBirth,
        nameOfEmployer:nameOfEmployer,
        taxCircle:taxCircle,
        taxZone:taxZone,
        taxYear:taxYear,
        residential_status:residential_status,
        status:status,
        residential:residential,
        vat_reg_number:vat_reg_number,
        presentation_address:presentation_address,
        permanent_address:permanent_address
    }).then(function (res) {
        if (res.status == 200 && res.data ==1){
            alert("Success")
            window.location.href = "/info2";

            //$('#infoOneBtn').attr('disabled',true);
        }else{
            alert("Fail")
            //$('#infoOneBtn').attr('disabled',false);
        }
    }).catch(function (err) {
        alert("Wrong")
        //$('#infoOneBtn').attr('disabled',false);
    })

}
