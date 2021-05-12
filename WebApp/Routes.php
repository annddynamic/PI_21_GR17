<?php


Route::set('index', function(){
    $rep = new ReportsController();
    $feed = new AdminController();
    $index= new indexController();
    $rep->createReport();
    $feeed=$feed->addFeedack();

    $data=[
        'rep'=>$rep,
        'feed'=>$feeed,
        'models'=>$index->getData()
        ];
    Controller::CreateView('index', $data);
});

Route::set('adminPanel', function(){
    $obj=new AdminController();
    $data=$obj->getData();
    Controller::CreateView('adminPanel',$data);
    Controller::logout();
});

Route::set('articles', function(){
    $obj=new AdminController();
    $data=$obj->getData();
    $obj->deleteNews();
    Controller::CreateView('articles',$data);
    Controller::logout();
});

Route::set('citizen', function(){
    $obj=new AdminController();
    $obj->deletePoliceUser();
//    $obj->editUser();
    $data=$obj->getData();
    Controller::CreateView('citizen', $data);
    Controller::logout();
});

Route::set('police', function(){
    $obj=new AdminController();
    $obj->deletePoliceUser();
    $obj->addFromPendingUsers();
    $obj->deleteFromPendingUers();

    $data=$obj->getData();



    Controller::CreateView('police',$data);
    Controller::logout();

});

Route::set('feedback', function(){
    $obj=new AdminController();
    $obj->deleteFeedback();
    $data=$obj->getData();
    Controller::CreateView('feedback',$data);
    Controller::logout();

});

Route::set('reports', function(){
    $obj=new AdminController();
    $data=$obj->getData();
    $obj->deleteReport();
    ReportsController::CreateView('reports',$data);
    Controller::logout();
});


Route::set('report', function(){
    $rep = new ReportsController();
    $feed = new AdminController();
    $rep->createReport();
    $feeed=$feed->addFeedack();

    $data=[
        'rep'=>$rep,
        'feed'=>$feeed,
    ];
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
    Controller::logout();
});

Route::set('policePanel', function(){
    $obje = new policePanelController();
    $data=$obje->getAssoc();
    Controller::CreateView('MainP', $data);
    Controller::logout();
});

Route::set('myReports', function(){
    Controller::CreateView('myReports');
});

Route::set('policeReports', function(){
    Controller::CreateView('reportsP');
});




