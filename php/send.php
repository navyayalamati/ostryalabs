<?php
$name=$_POST['txtname'];
$email=$_POST['txtemail'];
$phone=$_POST['txtphone'];
$message=$_POST['txtmessage'];
$email_sender = "navya@ostryalabs.com";
//$email_carbon = "dhayan@f1studioz.com";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:' . $email_sender . "\r\n"; // Sender's Email
$headers .= 'Cc:' . $email_carbon . "\r\n"; // Carbon copy to Sender
$template = '<div style="padding:50px; color:DimGray;">'
. 'Name:' . $name . '<br/>'
. 'Email:' . $email . '<br/>'
. 'Contact No:' . $phone . '<br/>'
. 'Message:' . $message . '<br/><br/>'
. '</div>';
$sendmessage = "<div style=\"background-color:White; color:DimGray;\">" . $template . "</div>";
// message lines should not exceed 70 characters (PHP rule), so wrap it
$sendmessage = wordwrap($sendmessage, 70);
// Send mail by PHP Mail Function santosh@f1circle.com
mail("navya@ostryalabs.com", " $name has contacted you-OstryaLabs", $sendmessage, $headers);
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
echo "<script>window.location = 'http://ostryalabs.com'</script>";
?>
