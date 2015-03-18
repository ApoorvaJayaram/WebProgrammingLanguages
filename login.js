/**
 * 
 */
function validateForm() {
    var x = document.forms["myForm"]["user"].value;
    if (x == null || x == "") {
        alert("User name must be filled out");
        return false;
    }
    var x = document.forms["myForm"]["pass"].value;
    if (x == null || x == "") {
        alert("Please enter a valid password");
        return false;
    }
}