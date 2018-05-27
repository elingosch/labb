function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    var y = document.forms["myForm"]["mail"].value;

    if ((x.trim() === "") && (y.trim() === "")) {
        alert("Du måste skriv nåt!")
        return false;
    }

    else if (x.trim() === "") {
        alert("Fyll i ett användarnamn!");
        return false;
    }

    else if (y.trim() === "") {
        alert("Fyll i en email!");
        return false;
    }


    if (checkEmail()) {document.getElementById("send").submit();}
}

function checkEmail() {
    var input = document.forms["myForm"]["mail"].value;
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
