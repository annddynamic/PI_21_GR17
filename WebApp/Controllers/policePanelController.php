<?php


class policePanelController extends Controller
{
    private $adminModel;

    public function __construct()
    {
        // $this->adminModel = $this->Model('AdminModel');

        $this->adminModel=new AdminModel();

    }

    public function getData(){

        $data=[

            'reports'=> $this->adminModel->getEmergencyReports(),
            'user' => $this->adminModel->getUsers(),
            'count' => $this->adminModel->countUsers(),
            'reportCount' => $this->adminModel->countReport(),
            'randomReports' => $this->adminModel->getReports()
        ];
        
        return $data;
    }

    // public function deleteReportt(){

    //     $data = [
    //         'uID' => '',
    //     ];

    //     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['emergency'])) {

    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


    //         $data = [
    //             'uID' => $_POST['remove'],
    //         ];

    //         if ($this->adminModel->deleteReport($data)) {

    //             header('location:reports');

    //         } else {
    //             die('Something went wrong. ');
    //         }
    //     }
    //     return $data;
    // }

}