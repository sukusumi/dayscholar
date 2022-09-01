     <script type="text/javascript">
            function validateForm() {
                
                var x = document.forms["form"]["email"].value;
                if (x == null || x == "") {
                    var atpos = x.indexOf("@");
                    
                    var dotpos = x.lastIndexOf(".");
                    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                        alert("Not a valid e-mail address");
                        return false;
                    }
                }
            }
        </script>
<!DOCTYPE html>
<html>
<head>
<title>Test Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<script src="script.js"></script>
</head>
<body>
<div id="mainform">
<div class="innerdiv">
<h2>Test form</h2>
<form id="form" name="form" action="_login.php" enctype="multipart/form-data"  onsubmit="return validateForm()">
<div>
<label>Email :</label>
<input id="email" name="email" type="text">
<input id="register" type="submit" name="register" value="Submit">
</div>
</form>
<div id="clear"></div>
</div>
<div id="clear"></div>
</div>
</body>
</html>
