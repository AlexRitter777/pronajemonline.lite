/*----Печать страницы ---------*/
$(document).ready(function (){
    $('#print-button').click(function (e){
        e.preventDefault();
        window.print();
    })
});

$(document).ready(function (){
    $('#navToggle').click(function(e) {
        e.preventDefault();
        $('#nav').toggleClass("show");

    })
});