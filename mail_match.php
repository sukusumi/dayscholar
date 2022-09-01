<?php
if (isset($_POST["verify"])) {
          session_start();
        $email = $_SESSION["email"];
        $otp_email = $_SESSION["otp_email"];
        $text="OTP MAIL CHEKING";
        $t = null;
        $otp_email_entered = ($_REQUEST["otp_entered_email"]) ? $_REQUEST["otp_entered_email"] : null;
           
            if ($otp_email == $otp_email_entered) {
                        
                }
            else {
                $otp_no = $_SESSION["no_otp"];
                if ($otp_no == 1) {
                    $_SESSION["no_otp"] = 2;
                } if ($otp_no == 2) {
                    $_SESSION["no_otp"] = 3;
                }if ($otp_no == 3) {
                    $_SESSION["no_otp"] = 4;
                }
                $msg_err = "Enter the correct email OTP";
                header('Location:otp_cnfm.php?msg_err=' . $msg_err);
            }
         
    } 
 
 $msg = isset($_REQUEST["msg"]) ? $_REQUEST["msg"] : null;
            $msg_err = isset($_REQUEST["msg_err"]) ? $_REQUEST["msg_err"] : null;
           if ($msg_err != null) 
            {
                echo "<font color=red><center>$msg_err</center></font>";
            }
            $no_otp=$_SESSION["no_otp"];
            if ($no_otp > 3) {
                $msg_err = "Incorrect OTP.Registration Failed!!!!";
                header('Location:login.php?msg_err=' . $msg_err);
            }
            if ($no_otp == 1) {
               echo "<font color=red><center>Successfully mail OTP checked</center></font>";
            }if ($no_otp == 2) {

                echo "<font color=red><center>Only two chance is left to enter OTP!!!</center></font>";
            }if ($no_otp == 3) {

                echo "<font color=red><center>Your last chance to enter OTP!!!</center></font>";
            }
            $msg_err = null;
            $msg = null;
                              
?>