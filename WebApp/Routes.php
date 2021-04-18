<?php


Route::set('index.php', function(){
    Index::CreateView('index');
});

Route::set('adminPanel', function(){
    AdminPanel::CreateView('adminPanel');
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
    Reports::CreateView('reports');
});

Route::set('police', function(){
    Police::CreateView('police');
});

Route::set('report', function(){
    Report::CreateView('report');

    $reportObj=new Report();
    $reportObj->showUsers();
});

Route::set('signIn', function(){
    $obj = new SignIn();
    $data=$obj->login();
    SignIn::CreateView('signIn', $data);
});

Route::set('signUpCitizen', function(){
    $obj= new SignIn();
    $data=$obj->register();
    SignUpCitizen::CreateView('signUpCitizen', $data);
});

Route::set('signUpPolice', function(){
    SignUpPolice::CreateView('signUpPolice');
});




