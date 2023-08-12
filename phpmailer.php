 <?php
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
// require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
 
function context_creator($email, $name){
  
  return '<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
  <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="border-bottom:1px solid #eee">
      <a href="#" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">codewithshiv03</a>
    </div>
    <p style="font-size:1.1em">Hi '.$name.',</p>
    <p style="font-size:1.1em">'.$email.',</p>
    <p>Thank you for choosing codewithshiv03. </p>
    <p style="font-size:0.9em;">Regards,<br />codewithshiv03</p>
    <hr style="border:none;border-top:1px solid #eee" />
    <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
      <p>codewithshiv03</p>
      <p>Lucknow</p>
      <p>Uttar Pradesh</p>
    </div>
  </div>
</div>';

}
 
function Send_mail($email, $name){
    $mail = new PHPMailer(true);

try {
    // 
                                        
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com;';                   
    $mail->SMTPAuth   = true;                            
    $mail->Username   = 'codewithshiv03@gmail.com';                
    $mail->Password   = 'ihuadvankmhmlkhh';                       
    $mail->SMTPSecure = 'tls';                             
    $mail->Port       = 587; 
 
    $mail->setFrom('codewithshiv03@gmail.com', 'Tester');          
    $mail->addReplyTo("codewithshiv03@gmail.com", "Reply");
    $mail->addAddress($email, $name);
    $mail->addCC("test@techsolvitservice.com");
    $mail->isHTML(true);                                 
    $mail->Subject = 'Subject';
    $mail->Body    = context_creator($email, $name);
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    // echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} 

}
?> 
