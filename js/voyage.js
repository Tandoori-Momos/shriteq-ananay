/**
* @Author: ananayarora
* @Date:   2016-10-21T02:47:50+05:30
* @Last modified by:   ananayarora
* @Last modified time: 2016-10-21T03:00:48+05:30
*/
$(document).ready(function(){
    var place = $("#place").val();
    var start = $("#start").val();
    var end = $("#end").val();
    $(".go1").click(function(){
        $(".tile1").hide();
        $(".tile2").show();
    });
});
