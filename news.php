<?php
    if (isset ($_POST['newsMail'])){
        //$to = "pkushlimited@gmail.com";
        $to = "hazeezadediran@gmail.com";
        $from = $_REQUEST['eemail'];

        $headers = "From: $from";
        $headers = "From: " . $from . "\r\n";
        $headers .= "Reply-To: ". $from . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $subject = "Request for Newsletter.";

        $logo = "images/logo.png";
        $link = "pkushlimited.com";

        $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>PKUSH Mail</title></head><body>";
        $body .= "<table style='width: 100%;'>";
        $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
        $body .= "<a href='{$link}'><span style='font-size: 25px; letter-spacing: 5px; color: #db261e; font-weight:bolder;'>PKUSH</span></a><br><br>";
        $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
        $body .= "</td></tr></thead><tbody><tr>";
        $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
        $body .= "</tr>";
        $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
        $body .= "<tr><td></td></tr><br>";
        $body .= "</tbody></table>";
        $body .= "</body></html>";

        // $send = mail($to, $subject, $body, $headers);
        if(mail($to, $subject, $body, $headers)){
			echo "success";
		}
		else{
			echo "Something went wrong!";
        }
    }

?>