$(document).ready(function(){
    //$("#home").click();
    $(".signup_frm").submit(function(e){
        e.preventDefault();
       $.ajax({
        type:"POST",
        url:"php/signup.php",
        data : new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        beforeSend:function()
        {
            $("#sbtn").html("Please Wait..");
        },
        success:function(response)
        {
            $("#sbtn").html("");
           let obj = JSON.parse(response);
           if(obj.status == 200)
           {
                $("#sbtn").html("");
                $("#sbtn").html("Signup Success <i class='fa fa-check-circle text-info'></i>");
                setTimeout(() => {
                    $("#sbtn").html("");
                    $("#sbtn").html("Register Now");
                    location.href=obj.path;
                }, 2000);
           }
           else if(obj.status == "false")
           {
                $("#sbtn").html("");
                $("#sbtn").html(obj.msg);
                setTimeout(() => {
                    $("#sbtn").html("");
                    $("#sbtn").html("Register Now");
                }, 2000);
           }
           
        }
       })
    })
    //-----------------------login frm submition ------------------
    $(".login_frm").submit(function(e){
        e.preventDefault();
        $.ajax({
            type:"POST",
            url:"php/login.php",
            data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            beforeSend:function()
            {

            },
            success:function(response)
            {
                let obj = JSON.parse(response);
                if(obj.status == "200" && obj.msg == "success")
                {
                    window.location.href=obj.path;
                }
                else
                {
                    $(".text").removeClass("d-none");
                    $(".msg").html(obj.msg);
                    setTimeout(() => {
                        $(".text").addClass("d-none");
                        $(".msg").html("Login");
                    }, 2000);
                }
            }
        })
    })
    //--------------------------user icon codng ---------------------------
    $("#usericon").click(function(){
        let file = document.createElement("INPUT");
        file.setAttribute("type","file");
        file.click()
        $(file).on("change",function(){
            let reader = new FileReader();
            reader.readAsDataURL(this.files[0])
            $(reader).on("load",function(){
                const url = reader.result;
                console.log(url);
                $("#img").attr("src",url);
                $("#img").css("{background-position,center}");
                $("#img").css("{background-size,cover}");
                $("#usericon").addClass("d-none");
                $(".nextbtn").removeClass("d-none");
                $(".nextbtn").click(function(){
                    $.ajax({
                        type:"POST",
                        url:"php/picpupdate.php",
                        data:{
                            pic:url,
                        },
                        cache:false,
                        success:function(response)
                        {
                           let obj = JSON.parse(response);
                           if(obj.status == "200" && obj.msg == "success")
                           {
                             window.location.href=obj.path;
                           }
                           else
                           {
                            console.log(obj);
                           }
                        }
                    })
                })
                
            })
        })
    })
    //----------------------------request send unsend unfriend ------------------------------------
    $(".requestbtn").each(function(){
        $(this).click(function(){
            const receiverequest = $(this).attr("rid");
            const sendrequest = $(this).attr("sid");
            const id = $(this).attr("id");
            const type = $(this).attr("type");
            //console.log(id);
            $.ajax({
                type:"POST",
                url:"php/request.php",
                data:{
                    receiverequest:receiverequest,
                    sendrequest:sendrequest,
                    type:type
                },
                cache:false,
                success:function(response)
                {
                    let obj = JSON.parse(response);
                    //console.log(response)
                    if(obj.msg == "send" || obj.type == "request_unsend")
                    {
                        $("#"+id).attr("type","");
                        $("#"+id).attr("type",obj.type);
                        $("#"+id).removeClass("fa fa-user-plus");
                        $("#"+id).addClass("fa fa-telegram");
                        $("#"+id).removeClass("text-dark");
                        $("#"+id).addClass("text-success");
                         
                    }
                    else if(obj.msg == "unsend" || obj.type == "request_send")
                    {
                        $("#"+id).attr("type","");
                        $("#"+id).attr("type",obj.type);
                        $("#"+id).removeClass("fa fa-telegram");
                        $("#"+id).addClass("fa fa-user-plus");
                        $("#"+id).removeClass("text-success");
                        $("#"+id).addClass("text-dark");
                        /*$(".fmbtn").click();
                        $(".frdmsg").addClass("alert alert-warning");
                        $(".frdmsg").html(obj.msg)*/
                        /*setTimeout(() => {
                            $(".frdmsg").removeClass("alert alert-warning");
                            $(".frdmsg").html("");
                        }, 3000);*/
                    }
                    else if(obj.msg == "unfriend" || obj.type == "request_send")
                        {
                            $("#"+id).attr("type","");
                            $("#"+id).attr("type",obj.type);
                            $("#"+id).removeClass("fa fa-group");
                            $("#"+id).addClass("fa fa-user-plus");
                            $("#"+id).removeClass("text-info");
                            $("#"+id).addClass("text-dark");
                        }
                    else
                    {
                        console.log(obj);
                    }
                }
            })
        })
    })
    //------------------------------notification accept cancel ------------------------------
    $(".rubtn").each(function(){
        $(this).click(function(){
            const id = $(this).attr('pid');
            const uid = $(this).attr('uuid');
            let msg = $(this).attr('msg');
            console.log(id)
            $.ajax({
                type:"POST",
                url:"php/updatereq.php",
                data:{
                    id:id,
                    msg:msg,
                    uid:uid
                },
                success:function(response)
                {
                    let obj = JSON.parse(response);
                    if(obj.status == "200")
                    {
                        $(".notmsg").addClass("alert alert-success");
                        $(".notmsg").html(obj.msg);
                        //$("#btnid_"+uid).removeClass("fa fa-user-plus");
                        //$("#btnid_"+uid).removeClass("text-dark");
                        $("#bell").click();
                    }
                    else
                    {
                        $(".notmsg").addClass("alert alert-warning");
                        $(".notmsg").html(obj.msg);  
                    }
                }
            })
        })
    })
    //------------------------post upload  ----------------------
     $("#uploadpic").on("change",function(){
        let reader = new FileReader();
        reader.readAsDataURL(this.files[0]);
        reader.onload=function()
        {
          const url = this.result;
          //$("#uploadicon").addClass("d-none");
          $(".uploadshowpic").removeClass("d-none");
          $(".uploadpicnew").addClass("class","animate__animated animate__bounce");
          $(".uploadpicnew").attr("src","");
          $(".uploadpicnew").attr("src",url);
          $("#uploadbtn").removeClass("disabled");
        }
      })
      //upload song coding
      $(".songaddbtn").each(function(){
            $(this).click(function(){
                const url = $(this).attr("url");
                $("#songurl").val(url);
                $("#save").click();
       })
      });
      //upload frm
      $(".uploadpicfrm").submit(function(e){
        e.preventDefault();
        $.ajax({
            type:"POST",
            url:"php/post.php",
            data : new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            beforeSend:function()
            {
                $(".uploadpostbtn").html("Please Wait..");
                $(".uploadpostbtn").removeClass("btn btn-light");
                $(".uploadpostbtn").addClass("btn btn-warning"); 
            },
            success:function(response)
            {
                let obj = JSON.parse(response);
                console.log(response);
               if(obj.status == "200")
                {
                    $(".uploadpostbtn").html("Post Uploaded Success");
                    $(".uploadpostbtn").removeClass("btn btn-warning");
                    $(".uploadpostbtn").addClass("btn btn-success");
                    setTimeout(() => {
                    $(".uploadpostbtn").html("Post Uploaded Success");
                    $(".uploadpostbtn").removeClass("btn btn-success");
                    $(".uploadpostbtn").addClass("btn btn-light");
                        $("#home").click();                   
                    }, 3000);
                }
                else if(obj.msg.trim() == "File Allready Exit")
                {
                    console.log(obj.msg);
                }
                else
                {
                    alert(obj.msg)
                }
            }
        })
      })
   //------------------like dislike -------------------
   $(".likeorunlikebtn").each(function(){
    $(this).click(function(){
        let type = $(this).attr("type");
        let id = $(this).attr("pid");
        $.ajax({
            type:"POST",
            url:"php/postlikedislike.php",
            data:{
                type:type,
                id:id
            },
            success:function(response)
            {
                let obj = JSON.parse(response);
                if(obj.operation.trim() == "like")
                {
                    $("#dislikebtn_"+id).removeClass("text-danger");
                    $("#dislikebtn_"+id).addClass("text-light");
                    $("#dislikebtn_"+id).html(obj.unlikecount);

                    $("#likebtn_"+id).removeClass("text-light");
                    $("#likebtn_"+id).addClass("text-danger");
                    $("#likebtn_"+id).html(obj.likecount);
                }
                if(obj.operation.trim() == "dislike")
                {
                    $("#likebtn_"+id).removeClass("text-danger");
                    $("#likebtn_"+id).addClass("text-light");
                    $("#likebtn_"+id).html(obj.likecount);

                    $("#dislikebtn_"+id).removeClass("text-light");
                    $("#dislikebtn_"+id).addClass("text-danger");
                    $("#dislikebtn_"+id).html(obj.unlikecount);
                }
            }
        })
    }) 
    }) 
    $(".userpostpic").each(function(){
        $(this).mouseover(function(){
           //$("audio").attr("src","");
            let url = $(this).attr("url");
            $("audio").attr("src",url);
            $("audio").get(0).play();
        })
        /*$(this).mouseout(function(){
            let url = $(this).attr("url");
            $("audio").attr("src",url);
            $("audio").get(0).pause();
        })*/
    });

    $(".songplaybtn").click(function(){
       $(this).click(function(){
            if($(this).hasClass("fa fa-play"))
            {
                $(this).removeClass("fa fa-play");
                $(this).addClass("fa fa-pause");
                $("#playaudio").attr("src","");
                let url = $(this).attr("url");
                $("audio").attr("src",url);
                $("audio").get(0).play();
                setTimeout(() => {
                    $(this).removeClass("fa fa-pause");
                    $(this).addClass("fa fa-play");
                }, 1000);
            }
            /* 
            else
            {
                $(this).removeClass("fa fa-pause");
                $(this).addClass("fa fa-play");
                $("#playaudio").attr("src","");
                let url = $(this).attr("url");
                $("audio").attr("src",url);
                $("audio").get(0).pause();
            }
            */
            
        }); 
    });
});

