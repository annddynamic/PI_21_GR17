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
            'random' => $this->adminModel->getReports(),
            'getNews' => $this->adminModel->getNews(),
            'getFeedback' => $this->adminModel->getFeedback(),
            'countFeedback' => $this->adminModel->countFeedback(),
            'news' => $this->addNews(),


        ];
        return $data;
    }

    public function managePolice()
    {
        $data = [
            'uID' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            if (isset($_POST['delete'])) {
                $data = [
                    'uID' => $_POST['remove'],
                ];

                if ($this->adminModel->deletePolice($data)) {

                    header('location:police');
                } else {
                    die('Something went wrong. ');
                }

            } else {
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
        return $data;
    }

    public function deletePoliceUser()
    {
        $data = [
            'uID' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            if (isset($_POST['delete'])) {
                $data = [
                    'uID' => $_POST['remove'],
                ];

                if ($this->adminModel->deletePoliceUser($data)) {

                    echo '<script>alert("Success")</script>';

                } else {
                    die('Something went wrong. ');
                }

            }


        }
        return $data;
    }

    public function editPoliceUser()
    {

        $data = [
            'uID' => '',
            'lastName' => '',
            'address' => '',
            'telephone'
        ];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                'uID' => trim($_POST['idUpdata']),
                'lastName' => trim($_POST['lastName']),
                'address' => trim($_POST['address']),
                'telephone' => trim($_POST['telephone'])
            ];


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

            if (empty ($data['title'])) {
                $data['titleError'] = 'Please enter title.';
            }

            //Validimi i description

            if (empty ($data['description'])) {
                $data['descriptionError'] = 'Please enter your description.';
            }

            //Validimi i fotos

            if (!is_dir('../Assets/DB-IMGS')) {
                mkdir('../Assets/DB-IMGS');
            }
            if ($_FILES['foto']['name'] == "") {

                $data['fotoError'] = 'Please add a image';
            } else {
                $image = $_FILES['foto'];

                if ($image && $image['tmp_name']) {
                    $imgPath = '../Assets/DB-IMGS/' . $this->obj->randomString(9) . '/' . $image['name'];
                    mkdir(dirname($imgPath));
                    move_uploaded_file($image['tmp_name'], $imgPath);
                }

                $data['foto'] = $imgPath;
            }

            if (
                empty($data['titleError']) && empty($data['fotoError']) &&
                empty($data['descriptionError'])) {

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


}