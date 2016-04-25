<?php



/**
 * File Name: contact_form_handler.php
 *
 * Send message function to process contact form submission
 *
 */
if(isset($_POST['email'])):

    $name = $_POST['name'];
    $email = $_POST['email'];
    $destination = $_POST['destination'];
    $check_in = $_POST['checkin'];
    $check_out = $_POST['checkout'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    $address = "info@oldforttravels.com";

    if(get_magic_quotes_gpc()) {
        $message = stripslashes($message);
    }

    $e_subject = 'You Have Received a Booking Request from ' . $name . '.';

    if(!empty($subject))
    {
        $e_subject = $subject . '.';
    }

    $e_body = 		'<html>
			<head>
			  <title>Mail from '. $name .'</title>
			</head>
			<body>
			  <table style="width: 500px; font-family: arial; font-size: 14px;" border="1">
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Name:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $name .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">E-mail:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $email .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Phone:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $number .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Destination:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $destination .'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Check IN:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $check_in.'</td>
				</tr>
				<tr style="height: 32px;">
				  <th align="right" style="width:150px; padding-right:5px;">Check Out:</th>
				  <td align="left" style="padding-left:5px; line-height: 20px;">'. $check_out .'</td>
				</tr>
			
			
			  </table>
			</body>
			</html>';

    $e_content = "\" $message \"\r\n\n";

    $e_reply = 	"You can contact "
        .$name
        . " via email, "
        .$email;

    $msg = $e_body . $e_content . $e_reply;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From: ' . $email . "\r\n";
	$headers .= 'Reply-To: ' . $email . "\r\n";
	$headers .= 'Return-Path: ' . $email . "\r\n";



    if(mail($address, $e_subject, $msg, $headers,"-f $address"))
    {
        echo "Message Sent Successfully!";
    }
    else
    {
        echo "Server Error:  mail method failed!";
    }
else:
    echo "Invalid Request ";
endif;

die;

?>