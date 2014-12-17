asanaTT
=======

ASANA API INTEGRATION


Login User Info

<pre>
asana.request("GET", "users/me?opt_fields=id,name,photo", function(ierr, userresponse) {
    if (ierr){ console.error("Error:", ierr)}else{
        projectList="";
        //console.log("user data:", userresponse.data);
        $("#a_username").html("<center><p>Hello,"+userresponse.data.name+"</p></center>");   //image 
        if( userresponse.data.photo == null){
            $("#user_image").html("<center><img src='../img/default.png' class='img-circle' ></center>");
        }else{
                $("#user_image").html("<center><img src=\"+userresponse.data.photo.image_60x60+\" class='img-circle' ></center>");
        }
    }
  });
</pre>
