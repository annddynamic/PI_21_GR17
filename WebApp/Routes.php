<?php


Route::set('index.php', function(){
    Index::CreateView('index');
});

Route::set('adminPanel', function(){
    $obj=new AdminController();
    $data=$obj->getData();
    Reports::CreateView('adminPanel',$data);
});

Route::set('articles', function(){
    Articles::CreateView('articles');
});

Route::set('citizen', function(){
    Citizen::CreateView('citizen');
});

Route::set('feedback', function(){
    Feedback::CreateView('feedback');
});

Route::set('reports', function(){
    ReportsController::CreateView('reports');
});

Route::set('police', function(){
    Police::CreateView('police');
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




