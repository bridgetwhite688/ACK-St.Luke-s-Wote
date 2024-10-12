<?php
require_once('../config/config.php');
/* Mailer Configurations */
require_once('../vendor/PHPMailer/src/SMTP.php');
require_once('../vendor/PHPMailer/src/PHPMailer.php');
require_once('../vendor/PHPMailer/src/Exception.php');

$ret = "SELECT * FROM mailer_settings 
JOIN postfix_mailer_configs";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($mailer = $res->fetch_object()) {

    /* Determine which mailer is active */
    if ($mailer->mailer_status == 'Active') {

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->setFrom($mailer->mailer_mail_from_email);
        $mail->addAddress($address_mail);
        $mail->FromName = $mailer->mailer_mail_from_name;
        $mail->isHTML(true);
        $mail->IsSMTP();
        $mail->SMTPKeepAlive = true; //SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->SMTPSecure = $mailer->mailer_protocol;
        $mail->Host = $mailer->mailer_host;
        $mail->SMTPAuth = true;
        $mail->Port = $mailer->mailer_port;
        $mail->Username = $mailer->mailer_username;
        $mail->Password = $mailer->mailer_password;
        $mail->Subject = $inquiry_subject;
        /* Custom Mail Body */
        $mail->Body = '
        <!doctype html>
        <html lang="en-US">
        
        <head>
            <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
            <title>Password Reset</title>
            <meta name="description" content="Reset Password Email">
            <style type="text/css">
                a:hover {text-decoration: underline !important;}
            </style>
        </head>
        
        <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
            <!--100% body table-->
            <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
                style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: "Open Sans", sans-serif;">
                <tr>
                    <td>
                        <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                            align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="height:80px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="height:20px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="95%" border="0"  cellpadding="0" cellspacing="0"
                                        style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                        <tr>
                                            <td style="height:40px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0 35px;">
                                                <img src="https://ackstlukeswote.sc.ke/views/school logo.jpg"  alt="School logo">
                                                <h4 style="color:#1e1e2d; font-weight:500; margin:0;font-size:39px;font-family:"Rubik",sans-serif;">
                                                    Ack st Lukes Wote <br> 
                                                   
                                                </h4>
                                                <span
                                                    style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                                <p style="color:#455056; font-size:15px;line-height:24px; margin:0;" align="justify">
                                                    ' . $inquiry_message . '
                                                </p>
												
                                                <p>

                                                        From: ' . $user_fname . ' ' . $user_lname . ' <br>
                                                        Email: ' . $user_email . ' <br>
                                                        Phone: ' . $user_phone . ' <br>
                                                </p>
                                                <p align="center" style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                                <br>
                                                Yours Sincerely<br>
                                                    <b>
                                                        ACK st Lukes Wote <br>
                                                        <i>Official School Moto</i>
                                                    <br>
                                                </b>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height:40px;">&nbsp;</td>
                                        </tr>
                                    </table>
                                </td>
                            <tr>
                                <td style="height:20px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="height:80px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
    ';
        /* Send this email here */
        $mail->send();
        /* ****************************************************************************************************** */
    } else if ($mailer->postfix_mailer_status == 'Active') {
        /* Load postfix mailer settings */
        $fromName = $mailer->postfix_mailer_from_name;
        $from = $mailer->postfix_mailer_from_email;
        $to = $user_email;
        $subject = "Welcome";
        $message = ' 
        <!doctype html>
        <html lang="en-US">
        
            <head>
                <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
                <title>Welcome Reset</title>
                <meta name="description" content="Welcome Email">
                <style type="text/css">
                    a:hover {text-decoration: underline !important;}
                </style>
            </head>
            
            <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
                <!--100% body table-->
                <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
                    style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: "Open Sans", sans-serif;">
                    <tr>
                        <td>
                            <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                                align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="height:80px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="height:20px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="95%" border="0"  cellpadding="0" cellspacing="0"
                                            style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                            <tr>
                                                <td style="height:40px;">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:0 35px;">
                                                    <img src="https://ackstlukeswote.sc.ke/views/school logo.jpg"  alt="school logo">
                                                    <h4 style="color:#1e1e2d; font-weight:500; margin:0;font-size:39px;font-family:"Rubik",sans-serif;">
                                                        ACK ST Lukes Wote<br> 
                                                       
                                                    </h4>
                                                    <span
                                                        style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                                    <p style="color:#455056; font-size:15px;line-height:24px; margin:0;" align="justify">
                                                        Greetings, ' . $user_email . '.<br>
                                                        Welcome to ACK Website
                                                        Your account has been set up successfuly. You can now login to the ' . $user_email . ' portal using the following credentials <br>
                                                        <b>

                                                            Login url: <a target="_blank" href="https://ack.com"></a> <br>
                                                            Login email: ' . $user_email . ' <br>
                                                            Login password: ACK@2024 <br>
                                                        </b>
                                                    </p>
                                                    <p align="center" style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                                    <br>
                                                    Yours Sincerely<br>
                                                        <b>
                                                            ACK ST Lukes Wote <br>
                                                            <i>School moto</i>
                                                        <br>
                                                    </b>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:40px;">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                <tr>
                                    <td style="height:20px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="height:80px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </body>
        </html>';
        // Set content-type header for sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Additional headers 
        $headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";

        mail($to, $subject, $message, $headers);
    } else {
        /* Shhhh - Say nothing */
    }
}
