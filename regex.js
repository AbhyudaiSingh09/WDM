//var phone_number = document.getElementById("ph_number");
//const test = document.getElementById('form_id');
//window.onload = test.addEventListener('submit',e=>{
  //  phone_number_validate();
//});


function phone_number_validate()
{
    console.log("phone number validate");
    var phone_number = document.getElementById("ph_number");
    const ph_value= phone_number.value.trim();
    var ph_regx= /^\d{3}-?\d{3}-?\d{4}$/;
    if(ph_regx.test(ph_value))
    {
        console.log("matched phone number ");
    }
    else
    {
        alert("Incorrect number  format");
        
    }

}

function fname_validate()
{
    console.log("fname_validate")
    var first_name = document.getElementById("fname");
    const fname_value= first_name.value.trim();
    var fname_regx= /^[a-zA-Z]{0,15}$/;
    if(fname_regx.test(fname_value))
    {
        console.log("matched fname");
    }
    else
    {
        alert("Incorrect fname format");
    }
}

function lname_validate()
{
    console.log("lname_validate")
    var last_name = document.getElementById("lname");
    const lname_value= last_name.value.trim();
    var lname_regx= /^[a-zA-Z]{0,15}$/;
    if(lname_regx.test(lname_value))
    {
        console.log("matched lname");
    }
    else
    {
        alert("Incorrect lname format");
    }
}


function sname_validate()
{
    console.log("sname_validate")
    var street_name = document.getElementById("s_name");
    const sname_value= street_name.value.trim();
    var s_name_regx= /^[a-zA-Z0-9 ]{0,25}$/;
    if(s_name_regx.test(sname_value))
    {
        console.log("matched street name ");
    }
    else
    {
        alert("Incorrect street name format");
    }
}

function apartment_validate()
{
    console.log("apartment_validate")
    var apartment_id = document.getElementById("apt_id");
    const apart_id= apartment_id.value.trim();
    var apt_id_regx= /^[a-zA-Z0-9]{0,7}$/;
    if(apt_id_regx.test(apart_id))
    {
        console.log("matched apartment ");
    }
    else
    {
        alert("Incorrect apartment format");
    }
}

function city_validate()
{
    console.log("city_validate")
    var c_id = document.getElementById("city_id");
    const id_city= c_id.value.trim();
    var city_id_regx= /^[a-zA-Z]{1,10}$/;
    if(city_id_regx.test(id_city))
    {
        console.log("matched city ");
    }
    else
    {
        alert("Incorrect city  format");
    }
}

function state_validate()
{
    console.log("state_validate")
    var stateid = document.getElementById("state_id");
    const std_id= stateid.value.trim();
    var std_id_regx= /^[a-zA-Z]{1,10}$/;
    if(std_id_regx.test(std_id))
    {
        console.log("matched state");
    }
    else
    {
        alert("Incorrect state format");
    }
}


function zip_validate()
{
    console.log("zip_validate")
    var zipcodeid = document.getElementById("zip_id");
    const zipcode_id= zipcodeid.value.trim();
    var zip_id_regx= /^[0-9]{1,5}$/;
    if(zip_id_regx.test(zipcode_id))
    {
        console.log("matched zip");
    }
    else
    {
        alert("Incorrect zip format");
    }
}

function DOB_validate()
{
    console.log("DOB_validate")
    var dobid = document.getElementById("dob_id");
    const dateob_id= dobid.value.trim();
    var dob_id_regx= /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01)])\/(19|20)\d{2}$/;
    if(dob_id_regx.test(dateob_id))
    {
        console.log("matched DOB date");
    }
    else
    {
        alert("Incorrect date format");
    }
}

function email_validate()
{
    console.log("email_validate")
    var emailid = document.getElementById("email_id");
    const email_id_value= emailid.value.trim();
    var email_id_regx= /^([a-zA-Z0-9\._\-\!\#\$\%\&\'\*\+\/\=\?\^\`\{\}\|\~]+)@([a-zA-Z0-9]+.)(com|in|org|net|us|info)$/;
    if(email_id_regx.test(email_id_value))
    {
        console.log("matched email");
    }
    else
    {
        alert("Incorrect email format");
    }
}

function password_validate()
{
    console.log("password_validate")
    var passwordid = document.getElementById("password_id");
    const password_id_value= passwordid.value.trim();
    var password_id_regx= /^[A-Z]+([A-Za-z0-9\._\-\!\#\$\%\&\'\*\+\/\=\?\^\`\{\}\|\~]){8,11}$/;
    if(password_id_regx.test(password_id_value))
    {
        console.log("matched password");
    }
    else
    {
        alert("Incorrect password format");
        
    }
}

function check_all()

{
    phone_number_validate();
}
    //fname_validate();
    //lname_validate();
    //sname_validate();
    //apartment_validate();
    //city_validate();
    //state_validate();
    //zip_validate();
    //DOB_validate();
    //email_validate();
    //password_validate();

