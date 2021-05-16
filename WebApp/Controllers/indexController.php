<?php


class indexController extends Controller
{

    public function __construct()
    {
        $this->indexModel = $this->Model('indexModel');

    }


    public function getData()
    {

        $data = [
            'data' => $this->indexModel->getNews()
        ];

        $this->putContent();
        $para = $this->getcontent();


        $data['paragraph'] = $para;

        return $data;
    }

    public function putContent()
    {
        file_put_contents('index.txt', 'Crime which is an unlawful act is increasing in our society day by day. With the advancement of technology, criminals are also getting new ways of doing crimes. Crime takes place due to a few common reasons that are money, imbalance mentality, and emotions. After the crime takes place victims need to go through a very complicated and lengthy process for reporting the crime at police station. It’s also a very hectic process for the crime branch to do it manually and maintain the records.');
    }

    public function getcontent()
    {
        $paragraph = file_get_contents('index.txt');

        return $paragraph;
    }

}