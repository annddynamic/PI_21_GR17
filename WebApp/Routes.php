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
});

Route::set('articles', function(){
    $obj=new AdminController();
    $data=$obj->getData();
    $obj->deleteNews();
    Controller::CreateView('articles',$data);
});

Route::set('citizen', function(){
    $obj=new AdminController();
    $obj->deletePoliceUser();
    $data=$obj->getData();
    Controller::CreateView('citizen', $data);
});

Route::set('police', function(){
    $obj=new AdminController();
    $obj->deletePoliceUser();
    $obj->addFromPendingUsers();
    $obj->deleteFromPendingUers();
    $data=$obj->getData();
    Controller::CreateView('police',$data);
});

Route::set('feedback', function(){
    $obj=new AdminController();
    $obj->deleteFeedback();
    $data=$obj->getData();
    Controller::CreateView('feedback',$data);
});

Route::set('reports', function(){
    $obj=new AdminController();
    $data=$obj->getData();
    $obj->deleteReport();
    ReportsController::CreateView('reports',$data);
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
    $report = new ReportsController();
    $CitizenC = new citizenPanelController();
    $reps = new policePanelController();
    $report->createReport();
    $CitizenC->getReportsIMade();
    $reps->getData();
    $data = [
        'report'=> $report,
        'CitizenC'=> $CitizenC,
        'reports'=>$reps 
    ];
    Controller::CreateView('CitizenPanel', $data);

});
Route::set('manageAccount', function (){
    $obj = new citizenPanelController();
    $data = $obj->getData();
    Controller::CreateView('manageAccount', $data);
});

Route::set('policePanel', function(){
    $obj = new policePanelController();
    $data=$obj->getData();

    Controller::CreateView('MainP', $data);
});

Route::set('myReports', function(){
    $obj = new policePanelController();
    $data = $obj->getData();
    $obj->finishReport();
    $admCont = new AdminController();
    Controller::CreateView('myReports', $data);
});

Route::set('policeReports', function(){
    $obj = new policePanelController();
    $data = $obj->getData();
    $obj->takeReport();
    $admCont = new AdminController();
    Controller::CreateView('ReportsP', $data);
});

