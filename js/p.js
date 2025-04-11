window.onload=function()
{
    $("#home").click();
}

$(document).ready(function(){
    $(".menu").each(function(){
        $(this).click(function(){
            let id = $(this).attr("plink");
            $.ajax({
                url:"pages/"+id+".php",
                beforeSend:function()
                {
                    $(".loadbox").removeClass("d-none");
                },
                cache:false,
                success:function(response)
                { 
                    $(".loadbox").addClass("d-none");  
                    $(".right").html(response);
                }
            })
        })
    })
})