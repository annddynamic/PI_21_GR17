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
            'user' => $this->policeModel->getCitizens(),
            'count' => $this->adminModel->countUsers(),
            'reportCount' => $this->adminModel->countReport(),
            'randomReports' => $this->policeModel->getRandomeReports(),
            'myReports' => $this->policeModel->myReports(),
            'countReports'=>$this->policeModel->countReports(),
            'finishedReports'=>$this->policeModel->finishedReports(),
            'countCitizens' => $this->adminModel->countCitizens(),
            'countActiveReports' => $this->policeModel->countActiveReports(),


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

    public function finishReport(){
        $data = [
            'reID' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['finish'])) {

            $data = [
                'reID' => $_POST['reID'],
            ];


            if ($this->policeModel->finishReport($data)) {

                header('location:myReports');

            } else {
                die('Something went wrong. ');
            }

            echo '<pre>';
            var_dump($data);
            echo '</pre>';
        }


    }


}