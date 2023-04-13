function validateForm(){
    var x = document.forms["myForm"]["fname"].value

    var  y = document.forms["myForm"]["femail"].value

    var z = document.forms["myForm"]["fsubject"].value

    var w = document.forms["myForm"]["fmessage"].value

    if(x == "" && y == "" && z == "" && w == ""){

        swal(" must be filled out infomationt!");

        return

    }else{
        swal({
            title: "Good job!",
            text: "You sent the massage!",
            icon: "success",
            button: "Aww yiss!",
          })
    }
}