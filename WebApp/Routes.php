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