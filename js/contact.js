var attempt = 3;
function emri(){
    document.getElementById('emri').value = '';
}
function mbiemri(){
    document.getElementById('mbiemri').value = '';
}

function emaili(){
    document.getElementById('emaili').value = '';
}
function Valido3(){
    var emri = document.getElementById('emri').value;
    var mbiemri = document.getElementById('mbiemri').value;
    var emaili = document.getElementById('emaili').value;
    if(attempt == 0){
        alert("Please try again later!");
        var emri = document.getElementById('emri').disabled = true;
        document.getElementById('emri').value = "";
        document.getElementById('emri').style.border = 'transparent';
        
        var mbiemri = document.getElementById('mbiemri').disabled = true;
        document.getElementById('mbiemri').value = "";
        document.getElementById('mbiemri').style.border = 'transparent';

        var emaili = document.getElementById('emaili').disabled = true;
        document.getElementById('emaili').value = "";
        document.getElementById('emaili').style.border = 'transparent';
 
    }
    var num = /[0-9]/;
    var lowerCase = /[a-z]/;
    var upperCase = /[A-Z]/;
    if(emri == '' || emri.length < 3 || emri.match(num)){
        document.getElementById('emri').value = 'Name is not valid!';
        document.getElementById('emri').style.border = 'solid 1px red';
        attempt--;
        return;
    }
    else{
        document.getElementById('emri').style.border = 'solid 1px green';
    }
    if(mbiemri == '' || mbiemri.length < 3 || mbiemri.match(num)){
        document.getElementById('mbiemri').value = 'Last Name is not valid!';
        document.getElementById('mbiemri').style.border = 'solid 1px red';
        attempt--;
        return;
    }
    else{
        document.getElementById('mbiemri').style.border = 'solid 1px green';
    }

    if(emaili.includes("@") && emaili.includes("gmail") || emaili.includes("hotmail") || emaili.includes("yahoo")){
        if(emaili.includes(".com") || emaili.includes(".net")){
            document.getElementById('emaili').style.border = 'solid 1px green';
		alert("Mesage sent succesfully!");
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
}