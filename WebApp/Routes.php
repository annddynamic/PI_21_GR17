<?php


Route::set('index.php', function(){
        Controller::CreateView('index');
});

Route::set('adminPanel', function(){
    $obj=new AdminController();
    $data=$obj->getData();
    Controller::CreateView('adminPanel',$data);
});

Route::set('articles', function(){
    $obj=new AdminController();
    $data=$obj->getData();
    Articles::CreateView('articles',$data);
});

Route::set('citizen', function(){
    Citizen::CreateView('citizen');
});

Route::set('feedback', function(){
    $obj=new AdminController();
    $data=$obj->getData();
    Feedback::CreateView('feedback',$data);
});

Route::set('reports', function(){
    $obj=new AdminController();
    $data=$obj->getData();
    ReportsController::CreateView('reports',$data);
});

Route::set('police', function(){
    $obj=new AdminController();
    $data=$obj->getData();
    Controller::CreateView('police',$data);
});

Route::set('report', function(){
    $data = new ReportsController();
    $data->createReport();
    Controller::CreateView('report',$data);
});

Route::set('signIn', function(){
    $obj = new UsersController();
    $data=$obj->login();
    UsersController::CreateView('signIn', $data);
});

Route::set('signUpCitizen', function(){
    $obj= new UsersController();
    $data=$obj->registerCitizen();
    Controller::CreateView('signUpCitizen', $data);
});

Route::set('signUpPolice', function(){
    $obj= new UsersController();
    $data=$obj->registerPolice();
    Controller::CreateView('signUpPolice', $data);
});


Route::set('citizenPanel', function(){
    Controller::CreateView('CitizenPanel');
});




