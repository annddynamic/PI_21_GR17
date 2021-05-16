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
                
                 $mail = new PHPMailer();
 
//                $mail->SMTPDebug = 4;                               // Enable verbose debug output
//
//                $mail->isSMTP();                                      // Set mailer to use SMTP
//                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//                $mail->SMTPAuth = true;                               // Enable SMTP authentication
//                $mail->Username = 'anndidika2001@gmail.com';                 // SMTP username
//                $mail->Password = 'say my name';                           // SMTP password
//                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//                $mail->Port = 587;                                    // TCP port to connect to
//
//                $mail->setFrom('anndidika2001@gmail.com', 'CrimeReportSystem');
//                $mail->addAddress($data['to'] );     // Add a recipient
////                $mail->addAddress('ellen@example.com');               // Name is optional
//                // $mail->addCC('cc@example.com');
//                // $mail->addBCC('bcc@example.com');
//
//                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//                $mail->isHTML(true);                                  // Set email format to HTML
//
//                $mail->Subject = $data['subject'];
//                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//                $mail->AltBody = $data['message'];


                $mail->isSMTP();
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->SMTPSecure='ssl';
                $mail->Host='smtp.gmail.com';
                $mail->Port='465';
                $mail->isHTML();
                $mail->Username='crimereportsystem69@gmail.com';
                $mail->Password='alfa alfa123';
                $mail->SetFrom('crimereportsystem69@gmail.com','Crime-Report-System');
                $mail->addReplyTo('crimereportsystem69@gmail.com');
                $mail->Subject=$data['subject'];
                $mail->Body=$data['message'];
                $mail->AddAddress($data['to']);
                $mail->Send();



            }
            
        }   
        
        return $data;
    }

    public function changePassword(){

        $data=[
            'currentPassword'=>'',
            'currentPasswordError'=>'',
            'newPassword'=>'',
            'newPasswordError'=>'',
            'confirmPassword'=>'',
            'confirmPasswordError'=>'',
        ];

        if(isset($_POST['change'])){

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data=[
                'currentPassword'=>trim($_POST['Cpassword']),
                'newPassword'=>trim($_POST['Npassword']),
                'confirmPassword'=>trim($_POST['password']),
                'currentPasswordError'=>'',
                'newPasswordError'=>'',
                'confirmPasswordError'=>'',

            ];

            if(empty($data['currentPassword'])){
                $data['currentPasswordError']='Please enter current password!';
            }else if(!password_verify($data['currentPassword'], $_SESSION['password'])){
                $data['currentPasswordError']='Your password is incorrect!';
            }

            $passwordValidation = "/^(.{0,15}|{^a-z]*|{^\d}*)$/i";

            if (empty($data['newPassword'])) {
                $data['newPasswordError'] = 'Please enter password.';
            } else if (strlen($data['newPassword'] < 6)) {
                $data['newPasswordError'] = 'Password must be at least 8 characters.';
            } else if (!preg_match($passwordValidation, $data['newPassword'])) {
                $data['newPasswordError'] = 'Password must have at least one numeric value.';
            }

            //Validate password on length and numeric value
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['newPassword'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Password do not match, please try again.';
                }
            }

            echo '<pre>';
            var_dump($data);
            echo '</pre>';



        }else{
            return $data;
        }

        return $data;
    }

}



?>  