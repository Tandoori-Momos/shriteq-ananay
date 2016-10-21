/**
* @Author: ananayarora
* @Date:   2016-10-11T21:47:08+05:30
* @Last modified by:   ananayarora
* @Last modified time: 2016-10-21T00:58:15+05:30
*/
$(document).ready(function(){
    $(".regular .submit").click(function(){
        var empty = 0;
        $('input[required="true"]').each(function(){
            var val = $(this).val();
            if (val == "") {
                empty = 1;
            }
        });
        if ($("option:selected").val() == "")  {
            empty = 1;
        }
        if (empty) {
            swal("Error","Please fill out all fields.","error");
        } else {
            swal("Signing Up","Signing up, please wait.","info");
            var data = "";
            $('input[required="true"]').each(function(){
                var append = "&"+$(this).prop('name')+"="+$(this).val();
                data += append;
            });
            data = data.slice(1);
            data += "&country="+$("option:selected").val();
            $.post('backend/register.php', data, function(r){
                if (r == "success") {
                    swal({
                        title:"Success",
                        text:"Thank you for Signing up on Voyage.",
                        type:"success"
                    }, function(){
                        window.location.href="index.php";
                    });
                } else {
                    swal("Error",r,"error");
                }
            });
        }
    });
});
