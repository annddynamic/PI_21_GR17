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
            'myReports' => $this->policeModel->myReports()
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
                    'session' => $_POST['session']
                ];

            // echo '<pre>';
            // var_dump($data);
            // echo '</pre>';

            // echo '<pre>';
            // var_dump($_SESSION);
            // echo '</pre>';

            if ($this->policeModel->takeReport($data)) {

                header('location:policeReports');

            } else {
                die('Something went wrong. ');
            }
        }
        
    }

}