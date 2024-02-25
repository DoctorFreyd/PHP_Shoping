$(document).ready(
    $("#login").click(function(){
        let user = {
            email: $("#email").val(),
            password: $("#password").val(),
        }
        $.ajax({
            url:"server.php",
            type:"post",
            data:{ajax:"login",user:user},  
            success: function(errors) {
                $(".errors").remove()
                if(errors != "success"){
                    console.log("toshni chi")
                    errors = JSON.parse(errors)
                    console.log(errors, "errors")
                    for( elm in errors) {
                        $("#"+elm).before(`<label class="alert-danger errors">${errors[elm]}</label>`)
                    }
                } else {
                    Swal.fire({
                        title:"success!",
                        text:"You are Login!",
                        imageUrl:"https://unsplash.it/400/200",
                        imageWidth: 400,
                        imageHeight: 200,
                    })
                    setTimeout(function(){
                        location.href = "index.php"
                    },1000)
                }
            }
        })
    })
)