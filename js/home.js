/**
* @Author: ananayarora
* @Date:   2016-10-20T21:56:27+05:30
* @Last modified by:   ananayarora
* @Last modified time: 2016-10-21T06:52:53+05:30
*/

$(document).ready(function(){
    $(".overlay").delay(2000).animate({
        'opacity':1
    }, 700, function(){
        $(".text").animate({
            'top':'38%',
            'opacity':1
        });
        $(".textbox").animate({
            'top':'52%',
            'opacity':1
        });
    });
    $(document).keydown(function(e){
        if (e.keyCode == 13) {
            window.location.href="voyage.php?location="+$(".textbox").val();
        }
    });
});
