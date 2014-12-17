<html>
 <script src="asana-api.js" type="text/javascript"></script>
 <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>


<script type="text/javaScript">
$(document).ready(function(){
      var loading = "<center><img src='http://www.edsheeran.com/_img/loading-sml.gif'><br>Loading...<br>Please wait...</center>";
      var ASANA_API_KEY = "4K5EANck.o6pdvjcJ9DMq0mthkRlMCLo";

      $("#project-list").html(loading);
      var asana = new AsanaApi({ api_key: ASANA_API_KEY })


        /* GET TEAM LIST */
        var teamList ="";
        asana.request("GET", "organizations/13324436346763/teams", function(err, response) {
            if (err){ console.error("Error:", err)}else{
                console.log("Current user:", response.data)
                $.each(response.data, function(i, item) {
                        teamList += '<li>'+response.data[i].name+'</li>';
                });
                $("body").html(teamList);
             }
        })
        /* TEAM LIST END */



});
</script>
<html>
