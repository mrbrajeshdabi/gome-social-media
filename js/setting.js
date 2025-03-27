$(document).ready(function(){
    $("#settingbtn").click(function(){
        $.ajax({
            type:"POST",
            url:"setting.php",
            success:function(response)
            {
                $(".dataload").html(response);
            }
        })
    })
    //del and update btn coding
    $(".iconbtn").each(function(){
        $(this).click(function(){
            let pid = $(this).attr("pid");
            let type = $(this).attr("type");
            $.ajax({
                type:"POST",
                url:"php/myprofileupdatetype-del-update.php",
                data:{
                    id:pid,
                    type:type
                },
                beforeSend:function()
                {

                },
                success:function(response)
                {
                    let obj = JSON.parse(response);
                    console.log(response);
                    if(obj.status == 200 && obj.msg == "delete")
                    {
                        $(".delmsg").addClass("alert alert-success");
                        $(".delmsg").html("Post Delete Successfully");
                        setTimeout(() => {
                            $(".delmsg").removeClass("alert alert-success");
                            $(".delmsg").html("");
                            $("#mclose").click();
                            $("#myprofile").click();
                        }, 2000);
                    }
                    else if(obj.status == 200 && obj.msg == "update")
                    {
                        alert("Update Not Availlable");
                    }
                }
            })
        })
    })
    $(".updatebio_frm").submit(function(e){
        e.preventDefault();
        $.ajax({
            type:"POST",
            url:"php/updatebio.php",
            data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            beforeSend:function()
            {
                $(".updatebio").html("Please Wait..");
                $(".updatebio").removeClass("btn btn-dark");
                $(".updatebio").addClass("btn btn-warning");
            },
            success:function(response)
            {
                let obj = JSON.parse(response);
                if(obj.status == "true")
                {
                    $(".updatebio").removeClass("btn btn-warning");
                    $(".updatebio").addClass("btn btn-success");
                    $(".updatebio").html("Bio Updated Success");
                    setTimeout(function(){
                        $(".updatebio").removeClass("btn btn-success");
                        $(".updatebio").addClass("btn btn-dark");
                        $(".updatebio").html("Update Bio");
                        $("#ubclose").click();
                        $("#myprofile").click();
                    },2000)
                }
                else
                {
                    console.log(response);
                }
            }
        })
    })
})