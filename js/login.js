var attempt = 3;

function password(){
    var pass = document.getElementById('password').type = 'password';
    document.getElementById('password').value = '';
}
function emaili(){
    document.getElementById('emaili').value = '';
}
function Valido1(){

    var emaili = document.getElementById('emaili').value;
    var password = document.getElementById('password').value;
    if(attempt == 0){
        alert("Please try again later!");
        
        var emaili = document.getElementById('emaili').disabled = true;
        document.getElementById('emaili').value = "";
        document.getElementById('emaili').style.border = 'transparent';
        
        var password = document.getElementById('password').disabled = true;
        document.getElementById('password').value = "";
        document.getElementById('password').style.border = 'transparent';
    }
    var num = /[0-9]/;
    var lowerCase = /[a-z]/;
    var upperCase = /[A-Z]/;
    

    if(emaili.includes("@") && emaili.includes("gmail") || emaili.includes("hotmail") || emaili.includes("yahoo")){
        if(emaili.includes(".com") || emaili.includes(".net")){
            document.getElementById('emaili').style.border = 'solid 1px green';
        }
        else{
            document.getElementById('emaili').value = 'Email is not valid!';
            document.getElementById('emaili').style.border = 'solid 1px red';
            attempt--;
            return;
        }
   
    }
    else{
        document.getElementById('emaili').value = 'Email is not valid!';
        document.getElementById('emaili').style.border = 'solid 1px red';
        attempt--;
        return;
    }
  
    if(password.length < 8){
        document.getElementById('password').type = 'text';
        document.getElementById('password').value = 'Password must have at least 8 characters!';
        document.getElementById('password').style.border = 'solid 1px red';
        attempt--;
    }
    else if(!password.match(num)){
        document.getElementById('password').type = 'text';
        document.getElementById('password').value = 'Password must contain at least one number!';
        document.getElementById('password').style.border = 'solid 1px red';
        attempt--;
    }
    else if(!password.match(lowerCase)){
        document.getElementById('password').type = 'text';
        document.getElementById('password').value = 'Password must contain at least one lowerCase!';
        document.getElementById('password').style.border = 'solid 1px red';
        attempt--;
    }
    else if(!password.match(upperCase)){
        document.getElementById('password').type = 'text';
        document.getElementById('password').value = 'Password must contain at least one upperCase!';
        document.getElementById('password').style.border = 'solid 1px red';
        attempt--;
    }
    else{
        document.getElementById('password').style.border = 'solid 1px green';
        window.location = "index.html";
    }
}