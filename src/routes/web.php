<?php 

Route::get('package/test', 
  'armony\loanapplications\LoanApplicationsController@test');


Route::get('timezones/{timezone}', 
  'armony\loanapplications\TimezonesController@index');
 
   ?>


   