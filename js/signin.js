/**
* @Author: ananayarora
* @Date:   2016-10-21T00:41:01+05:30
* @Last modified by:   ananayarora
* @Last modified time: 2016-10-21T00:58:17+05:30
*/

$(document).ready(function(){
    $(".submit").click(function(){
        var username = $("#username").val();
        var password = $("#password").val();
        var data = "username="+username+"&password="+password;
        $.post("backend/login.php",data,function(r){
            if (r == 'success') {
                window.location.href='dashboard.php';
            } else {
                swal("Error!", r, "error");
            }
        });
    });
    $("input").keydown(function(e){
        if (e.keyCode == 13) {
            $(".submit").trigger('click');
        }
    });
});
