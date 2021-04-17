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
    SignIn::CreateView('signIn');
});

Route::set('signUpCitizen', function(){
    SignUpCitizen::CreateView('signUpCitizen');
});

Route::set('signUpPolice', function(){
    SignUpPolice::CreateView('signUpPolice');
});




