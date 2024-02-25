$(document).ready(
    $("#logout").click(function(){
        console.log("check")
        $.ajax({
            url:"server.php",
            type:"post",
            data:{ajax:"logout",logout:"logout"},
            success:function(e){
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your work has been saved",
                    showConfirmButton: false,
                    timer: 1500
                  });
                setTimeout(function(){
                    location.href = "index.php" 
                },1000)
            }
        })
    })
)