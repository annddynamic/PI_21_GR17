<?php

class AdminController extends Controller
{
    private $obj;

    public function __construct()
    {
        $this->adminModel = $this->Model('AdminModel');
        $this->obj = new ReportsController();

    }

    public function getData()
    {
        $data = [
            'users' => $this->adminModel->getUsers(),
            'count' => $this->adminModel->countUsers(),
            'reportCount' => $this->adminModel->countReport(),
            'countNews' => $this->adminModel->countNews(),
            'pendingApproval' => $this->adminModel->pendingApproval(),
            'countPoliceUsers' => $this->adminModel->countPoliceUsers(),
            'policeOfficials' => $this->adminModel->policeOfficials(),
            'citizens' => $this->adminModel->getCitizens(),
            'countCitizens' => $this->adminModel->countCitizens(),
            'onDuty' => $this->adminModel->getOnDuty(),
            'available' => $this->adminModel->getAvailable(),
            'emergency' => $this->adminModel->getEmergencyReports(),
            'random' => $this->adminModel->getRandomeReports(),
            'getNews' => $this->adminModel->getNews(),
            'getFeedback' => $this->adminModel->getFeedback(),
            'countFeedback' => $this->adminModel->countFeedback(),
            'news' => $this->addNews(),


        ];


        $search = $_GET['search'] ?? '';


        if ($search && $_GET['url'] == 'police') {
            $data['policeOfficials'] = $this->adminModel->searchPolice($search);

        } else if ($search && $_GET['url'] == 'adminPanel') {
            $data['users'] = $this->adminModel->searchUser($search);

        } else if ($search && $_GET['url'] == 'feedback') {
            $data['getFeedback'] = $this->adminModel->searchFeedback($search);

        } else if ($search && $_GET['url'] == 'reports') {
            $data['emergency'] = $this->adminModel->searchReport($search);
            $data['random'] = null;
        } else if ($search && $_GET['url'] == 'articles') {
            $data['getNews'] = $this->adminModel->searchNews($search);

        } else if ($search && $_GET['url'] == 'citizen') {
            $data['citizens'] = $this->adminModel->searchCitizen($search);
        }

        $data['search'] = $search;

        return $data;

    }


    public function deleteFromPendingUers()
    {

        $data = [
            'uID' => '',
        ];

        if (isset($_POST['delete'])) {

            $data = [
                'uID' => $_POST['remove'],
            ];

            if ($this->adminModel->deletePolice($data)) {

                header('location:police');
            } else {
                die('Something went wrong. ');
            }

        }

    }

    public function addFromPendingUsers()
    {

        $data = [
            'uID' => '',
        ];

        if (isset($_POST['add'])) {

            $data = [
                'uID' => $_POST['insert'],
            ];

            if ($this->adminModel->addPolice($data)) {

                header('location:police');
            } else {
                die('Something went wrong. ');
            }
        }

    }

    public function deletePoliceUser()
    {
        $data = [
            'uID' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                'uID' => $_POST['remove'],
            ];

            if ($this->adminModel->deletePoliceUser($data)) {
//                console.log("SD");
                echo '<script>console.log("bravoo")</script>';

            } else {
                die('Something went wrong. ');
            }


        }
        return $data;
    }


    public function addNews()
    {
        $data = [
            'title' => '',
            'published' => '',
            'description' => '',
            'foto' => '',
            'titleError' => '',
            'publishedError' => '',
            'descriptionError' => '',
            'fotoError' => '',

        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addArticle'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'published' => date('Y-m-d H:i:s'),
                'description' => trim($_POST['description']),
                'foto' => $_FILES['foto'],
                'titleError' => '',
                'publishedError' => '',
                'descriptionError' => '',
                'fotoError' => '',

            ];

            //Validimi i title
            $onlyLettersAndNumbers = "/^[a-zA-Z0-9]*$/";
            $data['titleError'] = $this->isEmpty($data['title'], $data['titleError'], "title");


            //Validimi i description

            $data['descriptionError'] = $this->isEmpty($data['description'], $data['descriptionError'], "description");

            //Validimi i fotos

            $this->mkdir('../Assets/DB-IMGS');


            $data['fotoError'] = $this->foto($data['fotoError']);

            if (!isset($data['fotoError'])) {
                $data['foto'] = $this->getImgPath();
            }

            if ($this->emptyErrors($data['titleError'], $data['fotoError'], $data['descriptionError'])) {
                if ($this->adminModel->addNews($data)) {
                    header('location:articles');
                } else {
                    die('Something went wrong !!');
                }
            }
        }
        return $data;


    }

    public function addFeedack()
    {
        $data = [
            'name' => '',
            'subject' => '',
            'mesazhi' => '',
            'nameError' => '',
            'subjectError' => '',
            'mesazhiError' => '',
        ];

        if (isset($_POST['feedback']) && $_SERVER['REQUEST_METHOD'] == "POST") {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'subject' => trim($_POST['subject']),
                'mesazhi' => trim($_POST['mesazhi']),
                'nameError' => '',
                'subjectError' => '',
                'mesazhiError' => '',

            ];


            if (empty($data['name'])) {
                $data['nameError'] = "Please enter your name";
            }

            if (empty($data['subject'])) {
                $data['subjectError'] = "Please enter subject";
            }

            if (empty($data['mesazhi'])) {
                $data['mesazhiError'] = "Please enter your message";
            }


            if (
                empty($data['nameError']) && empty($data['subjectError']) &&
                empty($data['mesazhiError'])) {

                if ($this->adminModel->addFeedback($data)) {
                    echo '<script>alert("Yout feedback has been successfully submitted!")</script>';
                } else {
                    die('Something went wrong !!');
                }
            }


        }
        return $data;

    }

    public function deleteNews()
    {
        $data = [
            'uID' => '',
        ];

        if (isset($_POST['deelete'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'uID' => $_POST['remove'],
            ];

            if ($this->adminModel->deleteNews($data)) {
                header('location:articles');
            } else {
                die('Something went wrong. ');
            }

        }


        return $data;
    }

    public function deleteFeedback()
    {
        $data = [
            'fID' => '',
        ];

        if (isset($_POST['delete'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'fID' => $_POST['remove'],
            ];

            if ($this->adminModel->deleteFeedback($data)) {
                header('location:feedback');
            } else {
                die('Something went wrong. ');
            }

        }
        return $data;
    }

    public function deleteReport()
    {
        $data = [
            'uID' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['emergency'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                'uID' => $_POST['remove'],
            ];

            if ($this->adminModel->deleteReport($data)) {

                header('location:reports');

            } else {
                die('Something went wrong. ');
            }
        }
        return $data;
    }

//    public function editUser(){
//
//        $data = [
//            'uID' => '',
//            'name' => '',
//            'address' => '',
//            'telephone'
//        ];
//
//
//        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editCitizen'])) {
//            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//
//
//            $data = [
//                'uID' => trim($_POST['idUpdata']),
//                'name' => trim($_POST['name']),
//                'lastName' => trim($_POST['lastName']),
//                'telephone' => trim($_POST['telephone']),
//                'address' => trim($_POST['address'])
//            ];
//
//            echo '<pre>';
//            var_dump($data);
//            echo '</pre>';
//
//
//        }
//
//        return $data;
//
//
//    }

//    public function editPolice(){
//
//        $data = [
//            'uID' => '',
//            'name' => '',
//            'lastName'=>'',
//            'address' => '',
//            'telephone'=>'',
//        ];
//
//        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//
//            $data = [
//                'uID' => trim($_POST['idUpdata']),
//                'name'=> trim($_POST['name']),
//                'lastName' => trim($_POST['lastName']),
//                'address' => trim($_POST['address']),
//                'telephone' => trim($_POST['telephone'])
//            ];
//
//            echo '<pre>';
//            var_dump($data);
//            echo '</pre>';
//
//
//        }
//
//        return $data;
//
//    }
}