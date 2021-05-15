<?php 

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
            
                $headers = 'From: Andushi <'.$_SESSION['email'].'>\r\n';

            mail ( $data['to'] , $data['subject'] , $data['message'] , $headers ) ;
            // if(mail()){
            //     echo "thank you for email";
            // }    else {
            //     echo "fail";
            // }

            }
            
        }   
        
        return $data;
    }

}



?>  