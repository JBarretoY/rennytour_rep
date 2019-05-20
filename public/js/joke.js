$(document).ready(function(){
    $("#send").click(function(){
        var resp = $("#resp").val();

        if($.trim(resp) === ''){
            alert('campo vacio');
            return false;
        }else{
            checkAnswer(resp);
        }
    });
});

function checkAnswer(ans){
    $.ajax({
        url:'check-ans/'+ans,
        type:'get',
        success:function(data){
            if( data['status'] ){
                alert(data['answer']);
            }else{
                alert(data['answer']);
            }
        },
        error:function(data){
            console.log('error');
        }
    });
}