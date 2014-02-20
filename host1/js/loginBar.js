//$(document).ready(function(){
//    $('#close').click(hideWin());
//    $('#open').click(slideWin());
//    $('#enter').click(autorize()); 
//}); 

function slideWin(){
    $('#shadow').show();
    $('#window').slideToggle(500);
}
function hideWin(){
    $('#shadow').hide();
    $('#window').hide();
}
function autorize(){
    var login =  document.getElementById("form_login").value;
    var pass =  document.getElementById("form_pass").value;
    $.post("/autorize.php",{login:login,pass:pass},succes);
}
function succes(data){
    var length = data.length;
    
    if(length < 20){                 //////костыль на 20
        $('#user_name').text(data);
        //$('#in_out').text("Выйти");    ///////Костыль.Поправить.Не работает ссылка на выход.
        hideWin();
    }
    else
    {
        alert("failed");
    }
}




//            function show(html)
//            {
//                 $("#status").html(html);
//            }