function validateForm() {
    var y = document.forms["myForm"]["e-mail"].value;
    var x = document.forms["myForm"]["password"].value;

    if ((x.trim() === "") && (y.trim() === "")) {
        alert("Fyll i fälten!")
        return false;
    }

    else if (y.trim() === "") {
        alert("Fyll i din mejl!");
        return false;
    }

    else if (x.trim() === "") {
        alert("Fyll i ditt lösenord!");
        return false;
    }


    if (checkEmail()) {document.getElementById("send").submit();}
}

function checkEmail() {
    var input = document.forms["myForm"]["e-mail"].value;
    var l = input.length;
    var aCount = 0;
    var dotCount = 0;

    for (var i = 0; i < l; i++) {
        if (input[i] == '@') {
            for(var j = i; j < l; j++) {
                if(input[j] == '.') {
                    return true;
                }
            }
        }
    }

    alert("Du måste ange en giltig email!")
    return false;
}
