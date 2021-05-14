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
        file_put_contents('index.txt', ' adipisicing elit. Dignissimos, nam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ex  quos tempora velit.
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ex expedita itaque iure nemo odio pariatur provident quos tempora velit.');
    }

    public function getcontent(){
        $paragraph = file_get_contents('index.txt');

        return $paragraph;
    }

}