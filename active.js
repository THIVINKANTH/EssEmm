// let Validate=()=>
// {
//     let names=document.forms['validate'].Username.value;
//     alert(" "+(/^[a-zA-Z]+$/).test(names))

//     let pass=document.forms['validate'].Password.value;
//     alert(!((/^[a-zA-Z0-9!@#$%^&*]&&[6,16]+$/).test(pass)))
// }



var btn = $('#login');

var att = $(btn).css('font-size','20px').css('color','black !important');
console.log("test - "+att);


$(document).ready(function(){

});


$('#validate').on('submit',function(){

    var user = $('input[name="Username"]').val();
    var pass = $('input[name="Password"]').val();
    var flag = true;
    if(user == '')
    {
        $('#uerr').text('username is required field').css('color','red');
        $('input[name="Username"]').css('border-color','red');
        flag = false;
    }
    else{
        $('#uerr').text('')
    }
    if(pass == '')
    {
        $('#perr').text('password is required field').css('color','red');
        flag = false;
    }
    else{
        $('#perr').text('')
    }

    if(flag==false)
    {
        return false;
    }


});

$(document).ready(function()
{
    $(".card-text").hide();
    $("button").click(function(){
        $(".card-text").toggle();
    });

});


