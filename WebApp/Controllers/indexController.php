<?php


class indexController extends Controller
{

    public function __construct()
    {
        $this->indexModel = $this->Model('indexModel');

    }


    public function getData(){

        $data=[
          'data'=>$this->indexModel->getNews()
        ];

        return $data;

    }

}