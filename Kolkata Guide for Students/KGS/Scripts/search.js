$(document).ready(function(){
    $('#search_text').keyup(function(){
        var txt = $(this).val();
        if(txt!=''){
            $.ajax({
                url:"/KGS/PHP/fetch.php",
                method:"post",
                data:{search:txt},
                dataType:"text",
                success:function(data){
                    $('#result').html(data);
                }
            });
        }
        else{
            $('#result').html('');
        }
    });
});

function open_search(){
    document.getElementById("search_bar").style.display="block";
    document.getElementById("search_text").focus();
}
function close_search(){
    document.getElementById("search_bar").style.display="none";
}