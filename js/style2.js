function validateForm() {
   
    var z = document.forms["myForm"]["post"].value;

    if(z.trim() === "") {
      alert("Du måste skriva nåt i inlägget!");
      return false;
    }
    document.getElementById("hej").submit();
}

/*function checkEmail() {
    var input = document.forms["myForm"]["email"].value;
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

    alert("Du måste ange en giltg email!")
    return false;
}*/
