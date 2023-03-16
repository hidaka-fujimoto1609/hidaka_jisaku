$(function(){
    $('#btn1').click(function(){
        console.log(123);
        $('#testModal1').modal('toggle');
    })
    $('#request').click(function(){
        $('#requestModal1').modal('toggle');
        return false;
    })
})