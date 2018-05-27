function validateForm() {
   
    var z = document.forms["myForm"]["post"].value;

    if(z.trim() === "") {
      alert("Du måste skriva nåt i inlägget!");
      return false;
    }
    document.getElementById("hej").submit();
}

