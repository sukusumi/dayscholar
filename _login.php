
<?php
session_start();

$email = $_REQUEST['email'];
$_SESSION["email"]=$email;
$_SESSION["no_otp"] = 1;
$mail1 = 0;
ini_set('display_errors', '1');
                                        ini_set('max_execution_time', 300);
                                        $to = $email;
                                        $subject = 'Email OTP';
                                        $message1 = rand(10000, 99990);
                                        $message = "Your OTP For Email ID Verification is :" . $message1;
                                        include_once("PHPMailer/class.phpmailer.php");
                                        $mail = new PHPMailer(true);
                                        include_once("PHPMailer/class.phpmaileroauth.php");
                                        include_once("PHPMailer/class.smtp.php");
                                        include_once("mail_config.php");
                                        $mail->AddAddress($email, $name);

                                        $mail->Subject = "Email Verification OTP";
                                        $mail->AddEmbeddedImage('../css/images/L_16083.gif', 'logo_2u');


                                        $html = '<table  width="100%" style="border-collapse: collapse" RULES=ROWS FRAME=BOX>
                            
                            
                            <tr>
                                <td colspan="5" align="center" >
                                    <p align="left">
                                       <br>
                                       
                                        Hello  
                                            <br><p>&nbsp;&nbsp;' . $message . '</p>
                                    </p>
                                    
                                   
                                      
                                        
                                <tr><td align="left" width="60%" ></td>
                                   
                                </tr>
                              </table></td></tr></table>';
                                        $html .= '<p align="justify" style="color: #5c8a8a">This is a system generated message. <br>
                           
                            </p><p align="justify" style="color: #5c8a8a">
                            The information contained in this message may be CONFIDENTIAL and is for the intended addressee only. 
                            Any unauthorized use, dissemination of the information, or copying of this message is prohibited. 
                            If you are not the intended addressee, please notify the sender immediately and delete this message.</p>';

                                        $mail->Body = $html;

                                        try {
                                            if ($mail->Send()) {

                                                $_SESSION["otp_email"] = $message1;
                                                header('Location:otp_cnfm.php');
                                            }
                                        } catch (Exception $e) {
                                            //Something went bad
                                            echo "Fail - " . $mail->ErrorInfo;
                                            echo "F";
                                        }
                                        	
                                 
                                        
                                                               
                                    
?>
