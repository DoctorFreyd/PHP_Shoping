$(document).ready(
    $("#register").click(function(){
        let user = {
            name: $("#name").val(),
            email: $("#email").val(),
            password: $("#password").val(),
            cpassword: $("#cpassword").val()
        }
    $.ajax({
        url:"server.php",
        type:"post",
        data:{ajax:"register",user:user},
        success: function(errors){
            $(".errors").remove()
            if(errors != "success") {
                errors = JSON.parse(errors)
                // console.log(errors)
                for(elm in errors) {
                    $("#"+elm).before(`<label class="alert-danger errors">${errors[elm]}</label>`)
                }
            } else {
                Swal.fire({
                    title:"Success!",
                    text:"You have Registered!",
                    imageUrl: 'https://unsplash.it/400/200',
				    imageWidth: 400,
					imageHeight: 200,
                })
                setTimeout(function(){
                        location.href = "index.php"
                    },1000)
                }
            }
        })
    }),
)