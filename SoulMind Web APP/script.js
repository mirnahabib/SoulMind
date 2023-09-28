function signup(){
    var pass=document.getElementById("email").value;
    var pass=document.getElementById("password").value;
    var par=document.getElementById("paragraph");
    var div=document.getElementById("wrong");

    if(email=="" && pass==""){
        par.innerHTML="There were error(s) in your form:<br> An email and a password are required";
        div.style.display= "block";
        return false;
    }
    else if(email==""){
        par.innerHTML="There was an error in your form:<br> An email is required";
        div.style.display= "block";
        return false;
    }
    else if(pass==""){
        par.innerHTML="There was an error in your form:<br> A password is required";
        div.style.display= "block";
        return false;
    }
}