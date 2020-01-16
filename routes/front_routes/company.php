<?php
Route::get('company-home', 'Company\CompanyController@index')->name('company.home');
Route::get('company-profile', 'Company\CompanyController@companyProfile')->name('company.profile');
Route::put('update-company-profile', 'Company\CompanyController@updateCompanyProfile')->name('update.company.profile');
Route::get('posted-jobs', 'Company\CompanyController@postedJobs')->name('posted.jobs');
Route::get('company/{slug}', 'Company\CompanyController@companyDetail')->name('company.detail');
Route::post('contact-company-message-send', 'Company\CompanyController@sendContactForm')->name('contact.company.message.send');
Route::post('contact-applicant-message-send', 'Company\CompanyController@sendApplicantContactForm')->name('contact.applicant.message.send');
Route::get('list-applied-users/{job_id}', 'Company\CompanyController@listAppliedUsers')->name('list.applied.users');
Route::get('list-favourite-applied-users/{job_id}', 'Company\CompanyController@listFavouriteAppliedUsers')->name('list.favourite.applied.users');
Route::get('add-to-favourite-applicant/{application_id}/{user_id}/{job_id}/{company_id}', 'Company\CompanyController@addToFavouriteApplicant')->name('add.to.favourite.applicant');
Route::get('make-deal/{application_id}/{user_id}/{job_id}/{company_id}', 'Company\CompanyController@makeDeal')->name('make.deal');
Route::get('remove-from-favourite-applicant/{application_id}/{user_id}/{job_id}/{company_id}', 'Company\CompanyController@removeFromFavouriteApplicant')->name('remove.from.favourite.applicant');
Route::get('applicant-profile/{application_id}', 'Company\CompanyController@applicantProfile')->name('applicant.profile');
Route::get('user-profile/{id}', 'Company\CompanyController@userProfile')->name('user.profile');
Route::get('company-followers', 'Company\CompanyController@companyFollowers')->name('company.followers');
Route::get('company-messages', 'Company\CompanyController@companyMessages')->name('company.messages');
Route::get('company-message-detail/{id}', 'Company\CompanyController@companyMessageDetail')->name('company.message.detail');

Route::get('company-new-ticket', 'Company\TicketController@createTicket')->name('company.new.ticket');  // create
Route::get('company-my-tickets', 'Company\TicketController@indexTicket')->name('company.my.tickets');  // index
Route::post('company-store-front-ticket', 'Company\TicketController@storeFrontTicket')->name('company.store.front.ticket');  // store
Route::get('company-edit-front-ticket/{id}', 'Company\TicketController@editFrontTicket')->name('company.edit.front.ticket');
Route::put('company-update-front-ticket/{id}', 'Company\TicketController@updateFrontTicket')->name('company.update.front.ticket');
Route::delete('company-delete-front-ticket', 'Company\TicketController@deleteTicket')->name('company.delete.front.ticket');

Route::get('company-new-contract', 'Company\ContractController@createContract')->name('company.new.contract');  // create
Route::get('company-contracts', 'Company\ContractController@indexContract')->name('company.my.contracts');  // index
Route::post('company-store-front-contract', 'Company\ContractController@storeFrontContract')->name('company.store.front.contract');  // store
Route::get('company-edit-front-contract/{id}', 'Company\ContractController@editFrontContract')->name('company.edit.front.contract');
Route::put('company-update-front-contract/{id}', 'Company\ContractController@updateFrontContract')->name('company.update.front.contract');
Route::delete('company-delete-front-contract', 'Company\ContractController@deleteContract')->name('company.delete.front.contract');


Route::get('company-new-employee', 'Company\EmployeeController@createEmployee')->name('company.new.employee');  // create
Route::get('company-my-employees', 'Company\EmployeeController@indexEmployee')->name('company.my.employees');  // index
Route::post('company-store-front-employee', 'Company\EmployeeController@storeFrontEmployee')->name('company.store.front.employee');  // store
Route::get('company-edit-front-employee/{id}', 'Company\EmployeeController@editFrontEmployee')->name('company.edit.front.employee');
Route::put('company-update-front-employee/{id}', 'Company\EmployeeController@updateFrontEmployee')->name('company.update.front.employee');
Route::delete('company-delete-front-employee', 'Company\EmployeeController@deleteEmployee')->name('company.delete.front.employee');

Route::get('company-new-payment', 'Company\PaymentController@createPayment')->name('company.new.payment');  // create
Route::get('company-my-payments', 'Company\PaymentController@indexPayment')->name('company.my.payments');  // index
Route::post('company-store-front-payment', 'Company\PaymentController@storeFrontPayment')->name('company.store.front.payment');  // store
Route::get('company-edit-front-payment/{id}', 'Company\PaymentController@editFrontPayment')->name('company.edit.front.payment');
Route::put('company-update-front-payment/{id}', 'Company\PaymentController@updateFrontPayment')->name('company.update.front.payment');
Route::delete('company-delete-front-payment', 'Company\PaymentController@deletePayment')->name('company.delete.front.payment');