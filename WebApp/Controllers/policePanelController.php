<?php


class policePanelController extends Controller
{
    private $adminModel;

    public function __construct()
    {
        $this->adminModel = $this->Model('AdminModel');

        $this->policeModel = new PoliceModel();

    }

    public function getData(){

        $data=[

            'reports'=> $this->policeModel->getEmergencyReports(),
            'user' => $this->adminModel->getUsers(),
            'count' => $this->adminModel->countUsers(),
            'reportCount' => $this->adminModel->countReport(),
            'randomReports' => $this->policeModel->getRandomeReports(),
            'myReports' => $this->policeModel->myReports(),
        ];
        
        return $data;
    }

    public function takeReport(){

        $data = [
            'uID' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['take'])) {


                $data = [
                    'uID' => $_POST['remove'],
                ];

    

            if ($this->policeModel->takeReport($data)) {

                header('location:policeReports');

            } else {
                die('Something went wrong. ');
            }
        }
        
    }

//    public function sendEmail(){
//
//        $data = [
//            'to' => '',
//            'subject' => '',
//            'message' => '',
//            'emailError' => '',
//            'subjectError' => '',
//            'messageError' => ''
//
//        ];
//
//        if(isset($_POST['submitF'])){
//
//
//            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//
//            $data = [
//                'to' => trim($_POST['emailF']),
//                'subject' => trim($_POST['subjectF']),
//                'message' => trim($_POST['messageF']),
//                'subjectError' => '',
//                'emailError' => '',
//                'messageError' => '',
//            ];
//
//            echo '<pre>';
//            var_dump($data);
//            echo '</pre>';
//            $data['emailError'] = $this->isEmpty($data['to'],$data['emailError'], 'for receiver');
//            $data['subjectError'] = $this->isEmpty($data['subject'],$data['subjectError'], 'subject');
//            $data['messageError'] = $this->isEmpty($data['message'],$data['messageError'], 'message');
//
//        }
//
//        return $data;
//    }

}