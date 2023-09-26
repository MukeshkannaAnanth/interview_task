<?php
include '../db.php';
require '/interview_task/phpmailer/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

if(isset($_POST['action']) && $_POST['action']=='Register'){

    $username = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

    
   try {
    $db->query("INSERT INTO users(`name`, `mobile`, `email`, `dob`)VALUES('$username','$mobile','$email','$dob')");




    $mail = new PHPMailer;
    //$mail->SMTPDebug = 2;
    $mail->IsSMTP();   
    $mail->Host = 'smtp.bizmail.yahoo.com';   
    $mail->SMTPAuth = true;  
    $mail->Username = 'pcbs@pcnl.in'; 
    $mail->Password = 'hcygtgklfglvigvw';                     
    $mail->Port = 465;     
    $mail->SMTPSecure = 'ssl';                     
    $mail->SetFrom('pcbs@pcnl.in', 'TPC');
    $mail->addAddress($email);  
    
    $mail->isHTML(true);  // Set email format to HTML
    
    $bodyContent = '<h7><strong>Dear Customer,</strong></h7>';
    $bodyContent .= '<p>Your Invoice has been generated on </p>';
    $bodyContent .= '<p>Please find the attached invoice with this mail.</p><br>';
    $bodyContent .= '<p><strong>Kind Regards,</strong></p><p>TPC-MAA </p>';
    $mail->Subject = 'Invoice from TPC-MAA';
   
    
    $mail->Body    = $bodyContent;
    $mail_user    = $email;
    if(!$mail->send()) {
        $message = 'success';
    } else {
        $message = 'error';
    }
    echo json_encode([
        $message => 1
    ]);
   } catch (\Throwable $th) {
    echo json_encode([
        $message => 1
    ]);
   }
    exit();
}



?>