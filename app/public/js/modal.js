$(function(){
    $('#btn1').click(function(){
        $('#testModal1').modal('toggle');
    })

    $('.request').click(function(){
        //console.log(123);
        let find =$(this).find('.requestModal1');
        $('.requestModal1').modal('toggle');
        return false;
    })

    // $('#detailbtn1').on('click',function(event){
    //     console.log(123);
    //     let find=$(this).find('#detailModal1');
    //     $(find).modal();
    // });

    $('.personalmodal').on('click',function(event){
        console.log(123);
        let find=$(this).find('#requestModal1');
        $(find).modal();
    });

    $('.sitemodal').on('click',function(event){
        console.log(123);
        let find=$(this).find('#detailModal1');
        $(find).modal();
    });

    $('.membermodal').on('click',function(event){
        console.log(123);
        let find=$(this).find('#memberModal1');
        $(find).modal();
    });
    
})