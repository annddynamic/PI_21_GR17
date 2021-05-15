<?php

// use PHPMailer\PHPMailer\PHPMailer;

class citizenPanelController extends Controller
{
    

    public function __construct()
    {

        // $this->policeModel = new PoliceModel();

    }

    public function getData(){

        $data=[

            'sendEmail' => $this->sendEmail()
        ];
        
        return $data;
    }

   
    public function sendEmail(){

        $data = [
            'to' => '',
            'subject' => '',
            'message' => '',
            'emailError' => '',
            'subjectError' => '',
            'messageError' => ''
                
        ];

        if(isset($_POST['submitF'])){


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'to' => trim($_POST['emailF']),
                'subject' => trim($_POST['subjectF']),
                'message' => trim($_POST['messageF']),
                'emailError' => '',
                'subjectError' => '',
                'messageError' => '',
            ];

            if(empty($data['to'])){
                $data['emailError']='Please enter receiver';
            }else if(filter_var($data['to'], FILTER_VALIDATE_EMAIL) === FALSE ){
                $data['emailError'] = 'Please enter valid email';
            }

            if(empty($data['subject'])){
                $data['subjectError'] = 'Please enter subject';
            }

            if(empty($data['message'])){
                $data['messageError'] = 'Please enter message';
            }
           

            if(empty($data['emailError']) && empty($data['subjectError']) && empty($data['messageError']) ){

                // require_once('PHPMailerAutoload.php');
                
                $mail = new PHPMailer;
 
                $mail->SMTPDebug = 4;                               // Enable verbose debug output
                
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'adnit.gashi@student.uni-pr.edu';                 // SMTP username
                $mail->Password = 'adnitgashigoogle12';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                
                $mail->setFrom('adnit.gashi@student.uni-pr.edu', 'CrimeReportSystem');
                $mail->addAddress($data['to'] );     // Add a recipient
                $mail->addAddress('ellen@example.com');               // Name is optional
                $mail->addReplyTo('adnit.gashi@student.uni-pr.edu');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');
                
                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML
                
                $mail->Subject = $data['subject'];
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = $data['message'];
                
                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }

            }
            
        }   
        
        return $data;
    }

}



?>  