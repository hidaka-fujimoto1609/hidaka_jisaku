$(function(){
    $('#btn1').click(function(){
        $('#testModal1').modal('toggle');
    })
    $('#request').click(function(){
        $('#requestModal1').modal('toggle');
        return false;
    })
})