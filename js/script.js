$(function(){
Geolocation
});

$(document).ready(function () {
 $('.submit').click(function(){
        $.post('url',{
            dado:''
        }, function(){
            console.log('req ajax');
            console.log('resposta do servidor', Response);
        });
    });   
});

