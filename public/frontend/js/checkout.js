$(document).ready(function () {
    $('.gopay').click(function (e) { 
        e.preventDefault();
        var fname = $('.fname').val();
        var lname = $('.lname').val();
        var email = $('.email').val();
        var phone = $('.phone').val();
        var address = $('.address').val();
        var city = $('.city').val();
        var province = $('.province').val();
        var postal = $('.postal').val();
        
        if(!fname){
            fname_error = "First Name is Required";
            $('#fname_error').html('');
            $('#fname_error').html(fname_error);
        }else{
            fname_error = "";
            $('#fname_error').html('');
        }
        if(!lname){
            lname_error = "Last Name is Required";
            $('#lname_error').html('');
            $('#lname_error').html(lname_error);
        }else{
            lname_error = "";
            $('#lname_error').html('');
        }
        if(!email){
            email_error = "Email is Required";
            $('#email_error').html('');
            $('#email_error').html(email_error);
        }else{
            email_error = "";
            $('#email_error').html('');
        }
        if(!phone){
            phone_error = "Phone Number is Required";
            $('#phone_error').html('');
            $('#phone_error').html(phone_error);
        }else{
            phone_error = "";
            $('#phone_error').html('');
        }
        if(!address){
            address_error = "Address is Required";
            $('#address_error').html('');
            $('#address_error').html(address_error);
        }else{
            address_error = "";
            $('#address_error').html('');
        }
        if(!city){
            city_error = "District/City is Required";
            $('#city_error').html('');
            $('#city_error').html(city_error);
        }else{
            city_error = "";
            $('#city_error').html('');
        }
        if(!province){
            province_error = "Province is Required";
            $('#province_error').html('');
            $('#province_error').html(province_error);
        }else{
            province_error = "";
            $('#province_error').html('');
        }
        if(!postal){
            postal_error = "Postal Code is Required";
            $('#postal_error').html('');
            $('#postal_error').html(postal_error);
        }else{
            postal_error = "";
            $('#postal_error').html('');
        }
        if(fname_error != '' || lname_error != '' || email_error != '' || phone_error != '' || address_error != '' || city_error != '' || province_error != '' || postal_error != ''){
            return false;
        }else{
            var data = {
                'fname':fname,
                'lname':lname,
                'email':email,
                'phone':phone,
                'address':address,
                'city':city,
                'province':province,
                'postal':postal,
            }
            $.ajax({
                method: "POST",
                url: "/proceed-to-pay",
                data: data,
                success: function (response) {
                    alert(response.total_price);
                }
            });
        }
    });
});