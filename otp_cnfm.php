<?php
session_start();
$otp_email=$_SESSION["otp_email"];
$no_otp=$_SESSION["no_otp"];
?>
<html>
 <div align="left">
            <table class="table-bordered" align="center"><tr><td>
                        
                        <form method="post" action="mail_match.php">
                            <table class="table table-striped">
                                
                                <tr>
                                    <td >Enter the OTP  received on Email<font color=red>*</font></td><td><input type="text" name="otp_entered_email" class="form-control number" maxlength="5" minlength="5"  ></td></tr>
                               </table>
                            <table class="table table-striped" ><tr><td align="center"><input type="submit" name=verify value="VERIFY" class="btn btn-primary"></td></tr></table></form>
                    </td></tr></table>
        </div>

</html>

       