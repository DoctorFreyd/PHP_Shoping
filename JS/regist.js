$(document).ready(
    $("#register").click(function(){
        let user = {}
        user.name = $("#name").val()
        user.email = $("#email").val()
        user.password = $("#password").val()
        user.cpassword = $("#cpassword").val()
        console.log(user)
        if (user.password == user.cpassword) {
            console.log("OK")
        } else { console.log("ITS NOT OK")}
    })
)