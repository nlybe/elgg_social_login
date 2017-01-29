define(function (require) {
    var elgg = require('elgg');
    var $ = require('jquery');
           
    $(document).ready(function() {
        $(".ha_connect_with_provider").click(function(){
            popupurl = $("#ha_popup_base_url").val();
            popuppath = $("#ha_popup_base_path").val();
            provider = $(this).attr("provider");

            window.open(
                popupurl+"provider="+provider,
                "hybridauth_social_sing_on", 
                "location=1,status=0,scrollbars=0,width=800,height=570"
            ); 
        });        
    });
    
});


