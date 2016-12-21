/**
 * Created by akhmaddanielsembiring on 12/21/16.
 */

$( "#login_form" ).submit(function( event ) {
    $('#login_error').html("");
    robot = $("#login_form input[name=robot]:checked").val();
    if (!robot){
        $('#login_error').html("Make sure you are not a robot").show();
        return false;
    }

    $.ajax({
        type: "POST",
        url: "odoo-client.php?action=login",
        data: $("#login_form").serialize(), // serializes the form's elements.
        dataType: 'json',
        success: function(data)
        {
            if (data.uid){
                $('#login').modal('toggle');
                $('#login_error').html("");

                login_menu = "<ul id='nav'><li><a>"+data.username + "</a> <li><a id='logout'>Logout</a></li>";

                $('.login_menu').html(login_menu);

            } else {
                $('#login_error').html("Your email or password is incorrect! Please try again").show();
            }
        }
    });
    event.preventDefault();
});

$( "#ads_login_form" ).submit(function( event ) {
    $('#ads_login_error').html("");
    robot = $("#ads_login_form input[name=robot]:checked").val();
    if (!robot){
        $('#ads_login_error').html("Make sure you are not a robot").show();
        return false;
    }

    $.ajax({
        type: "POST",
        url: "odoo-client.php?action=login",
        data: $("#ads_login_form").serialize(), // serializes the form's elements.
        dataType: 'json',
        success: function(data)
        {
            if (data.uid){
                $('#adviser').modal('toggle');
                $('#ads_login_error').html("");
                login_menu = "<ul id='nav'><li><a>"+data.username + "</a> <li><a id='logout'>Logout</a></li>";
                $('.login_menu').html(login_menu);

            } else {
                $('#ads_login_error').html("Your email or password is incorrect! Please try again").show();
            }
        }
    });
    event.preventDefault();
});

$("#logout").on('click',function(event){
    alert('you are logout');
    event.preventDefault();
});

$('#contact_form').submit(function(event){

    robot = $("#contact_form input[name=robot]:checked").val();
    if (!robot){
        $('#contact_error').html("Make sure you are not a robot").show();
        return false;
    }

    $.ajax({
        type: "POST",
        url: "odoo-client.php?action=contact",
        data: $("#contact_form").serialize(), // serializes the form's elements.
        dataType: 'json',
        success: function(data)
        {
            if (data.status){
                $('#contact_error').html("Thank You! We will respond your message");
            } else {
                $('#contact_error').html("Something wrong when sending your message").show();
            }
        }
    });

    event.preventDefault();
});