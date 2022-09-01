
function myFunction() {

var email = document.getElementById("email").value;
var dataString ='&email1=' + email;
if (email == '') {
alert("Please Fill Email");
} else {
$.ajax({
type: "POST",
url: "_login.php",
data: dataString,
cache: false,
success: function(data) {

}
});
}
return false;
}
