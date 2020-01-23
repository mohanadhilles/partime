<?php

/********** UserController *************/
Route::get('my-profile', 'UserController@myProfile')->name('my.profile');
Route::put('my-profile', 'UserController@updateMyProfile')->name('my.profile');
Route::get('view-public-profile/{id}', 'UserController@viewPublicProfile')->name('view.public.profile');

Route::post('update-front-profile-summary/{id}', 'UserController@updateProfileSummary')->name('update.front.profile.summary');
Route::post('update-immediate-available-status', 'UserController@updateImmediateAvailableStatus')->name('update.immediate.available.status');

Route::get('add-to-favourite-company/{company_slug}', 'UserController@addToFavouriteCompany')->name('add.to.favourite.company');
Route::get('remove-from-favourite-company/{company_slug}', 'UserController@removeFromFavouriteCompany')->name('remove.from.favourite.company');

Route::get('my-followings', 'UserController@myFollowings')->name('my.followings');
Route::get('my-messages', 'UserController@myMessages')->name('my.messages');
Route::get('my-bank-accounts', 'UserController@indexBankAccount')->name('my.bank.accounts');





Route::get('my-offers', 'UserController@indexOffer')->name('my.offers');  // create



// bank account
Route::get('my-bank-accounts', 'UserController@indexFrontBankAccount')->name('my.bank.accounts');  // index
Route::get('my-new-bank-account', 'UserController@createFrontBankAccount')->name('my.new.bank.account');  // crearte
Route::post('my-store-front-account', 'UserController@storeFrontBankAccount')->name('my.store.front.account');  // store
Route::get('my-edit-front-account/{id}', 'UserController@editFrontBankAccount')->name('my.edit.front.account');
Route::put('my-update-front-account/{id}', 'UserController@updateFrontBankAccount')->name('my.update.front.account');
Route::delete('my-delete-front-account', 'UserController@deleteFrontBankAccount')->name('my.delete.front.account');



Route::get('my-tickets', 'UserController@indexTicket')->name('my.tickets');  // index
Route::get('my-new-ticket', 'UserController@createTicket')->name('my.new.ticket');  // crearte
Route::post('my-store-front-ticket', 'UserController@storeFrontTicket')->name('my.store.front.ticket');  // store
Route::get('my-edit-front-ticket/{id}', 'UserController@editFrontTicket')->name('my.edit.front.ticket');
Route::put('my-update-front-ticket/{id}', 'UserController@updateFrontTicket')->name('my.update.front.ticket');
Route::delete('my-delete-front-ticket', 'UserController@deleteTicket')->name('my.delete.front.ticket');



Route::get('my-orders', 'UserController@indexOrder')->name('my.orders');  // index
Route::post('my-store-front-order', 'UserController@storeFrontOrder')->name('my.store.front.order');  // store
Route::get('my-edit-front-order/{id}', 'UserController@editFrontOrder')->name('my.edit.front.order');
Route::put('my-update-front-order/{id}', 'UserController@updateFrontOrder')->name('my.update.front.order');
Route::delete('my-delete-front-order', 'UserController@deleteOrder')->name('my.delete.front.order');



Route::get('my-contracts', 'UserController@myContracts')->name('my.contracts');
Route::get('my-payrolls', 'UserController@myPayrolls')->name('my.payrolls');
Route::get('my-documents', 'UserController@myDocuments')->name('my.documents');
Route::get('applicant-message-detail/{id}', 'UserController@applicantMessageDetail')->name('applicant.message.detail');
/**************************************/

Route::get('show-front-contract/{id}', 'UserController@showContract')->name('show.front.contract');

/**************************************/
Route::post('show-front-profile-cvs/{id}', 'UserController@showProfileCvs')->name('show.front.profile.cvs');
Route::post('get-front-profile-cv-form/{id}', 'UserController@getFrontProfileCvForm')->name('get.front.profile.cv.form');
Route::post('store-front-profile-cv/{id}', 'UserController@storeProfileCv')->name('store.front.profile.cv');
Route::post('get-front-profile-cv-edit-form/{user_id}', 'UserController@getFrontProfileCvEditForm')->name('get.front.profile.cv.edit.form');
Route::post('update-front-profile-cv/{id}/{user_id}', 'UserController@updateFrontProfileCv')->name('update.front.profile.cv');
Route::delete('delete-front-profile-cv', 'UserController@deleteProfileCv')->name('delete.front.profile.cv');

/**************************************/
Route::post('show-front-profile-projects/{id}', 'UserController@showFrontProfileProjects')->name('show.front.profile.projects');
Route::post('show-applicant-profile-projects/{id}', 'UserController@showApplicantProfileProjects')->name('show.applicant.profile.projects');
Route::post('upload-front-project-temp-image', 'UserController@uploadProjectTempImage')->name('upload.front.project.temp.image');
Route::post('get-front-profile-project-form/{id}', 'UserController@getFrontProfileProjectForm')->name('get.front.profile.project.form');
Route::post('store-front-profile-project/{id}', 'UserController@storeFrontProfileProject')->name('store.front.profile.project');
Route::post('get-front-profile-project-edit-form/{user_id}', 'UserController@getFrontProfileProjectEditForm')->name('get.front.profile.project.edit.form');
Route::put('update-front-profile-project/{id}/{user_id}', 'UserController@updateFrontProfileProject')->name('update.front.profile.project');
Route::delete('delete-front-profile-project', 'UserController@deleteProfileProject')->name('delete.front.profile.project');

/**************************************/
Route::post('show-front-profile-experience/{id}', 'UserController@showFrontProfileExperience')->name('show.front.profile.experience');
Route::post('show-applicant-profile-experience/{id}', 'UserController@showApplicantProfileExperience')->name('show.applicant.profile.experience');
Route::post('get-front-profile-experience-form/{id}', 'UserController@getFrontProfileExperienceForm')->name('get.front.profile.experience.form');
Route::post('store-front-profile-experience/{id}', 'UserController@storeFrontProfileExperience')->name('store.front.profile.experience');
Route::post('get-front-profile-experience-edit-form/{id}', 'UserController@getFrontProfileExperienceEditForm')->name('get.front.profile.experience.edit.form');
Route::put('update-front-profile-experience/{profile_experience_id}/{user_id}', 'UserController@updateFrontProfileExperience')->name('update.front.profile.experience');
Route::delete('delete-front-profile-experience', 'UserController@deleteProfileExperience')->name('delete.front.profile.experience');

/**************************************/
Route::post('show-front-profile-education/{id}', 'UserController@showFrontProfileEducation')->name('show.front.profile.education');
Route::post('show-applicant-profile-education/{id}', 'UserController@showApplicantProfileEducation')->name('show.applicant.profile.education');
Route::post('get-front-profile-education-form/{id}', 'UserController@getFrontProfileEducationForm')->name('get.front.profile.education.form');
Route::post('store-front-profile-education/{id}', 'UserController@storeFrontProfileEducation')->name('store.front.profile.education');
Route::post('get-front-profile-education-edit-form/{id}', 'UserController@getFrontProfileEducationEditForm')->name('get.front.profile.education.edit.form');
Route::put('update-front-profile-education/{education_id}/{user_id}', 'UserController@updateFrontProfileEducation')->name('update.front.profile.education');
Route::delete('delete-front-profile-education', 'UserController@deleteProfileEducation')->name('delete.front.profile.education');

/**************************************/
Route::post('show-front-profile-skills/{id}', 'UserController@showProfileSkills')->name('show.front.profile.skills');
Route::post('show-applicant-profile-skills/{id}', 'UserController@showApplicantProfileSkills')->name('show.applicant.profile.skills');
Route::post('get-front-profile-skill-form/{id}', 'UserController@getFrontProfileSkillForm')->name('get.front.profile.skill.form');
Route::post('store-front-profile-skill/{id}', 'UserController@storeFrontProfileSkill')->name('store.front.profile.skill');
Route::post('get-front-profile-skill-edit-form/{id}', 'UserController@getFrontProfileSkillEditForm')->name('get.front.profile.skill.edit.form');
Route::put('update-front-profile-skill/{skill_id}/{user_id}', 'UserController@updateFrontProfileSkill')->name('update.front.profile.skill');
Route::delete('delete-front-profile-skill', 'UserController@deleteProfileSkill')->name('delete.front.profile.skill');
/**************************************/
Route::post('show-front-profile-languages/{id}', 'UserController@showProfileLanguages')->name('show.front.profile.languages');
Route::post('show-applicant-profile-languages/{id}', 'UserController@showApplicantProfileLanguages')->name('show.applicant.profile.languages');
Route::post('get-front-profile-language-form/{id}', 'UserController@getFrontProfileLanguageForm')->name('get.front.profile.language.form');
Route::post('store-front-profile-language/{id}', 'UserController@storeFrontProfileLanguage')->name('store.front.profile.language');
Route::post('get-front-profile-language-edit-form/{id}', 'UserController@getFrontProfileLanguageEditForm')->name('get.front.profile.language.edit.form');
Route::put('update-front-profile-language/{language_id}/{user_id}', 'UserController@updateFrontProfileLanguage')->name('update.front.profile.language');
Route::delete('delete-front.profile-language', 'UserController@deleteProfileLanguage')->name('delete.front.profile.language');
/*************************************/




Route::post('show-front-profile-languages/{id}', 'UserController@showProfileLanguages')->name('show.front.profile.languages');
Route::post('show-applicant-profile-languages/{id}', 'UserController@showApplicantProfileLanguages')->name('show.applicant.profile.languages');
Route::post('get-front-profile-language-form/{id}', 'UserController@getFrontProfileLanguageForm')->name('get.front.profile.language.form');
Route::post('store-front-profile-language/{id}', 'UserController@storeFrontProfileLanguage')->name('store.front.profile.language');
Route::post('get-front-profile-language-edit-form/{id}', 'UserController@getFrontProfileLanguageEditForm')->name('get.front.profile.language.edit.form');
Route::put('update-front-profile-language/{language_id}/{user_id}', 'UserController@updateFrontProfileLanguage')->name('update.front.profile.language');
Route::delete('delete-front.profile-language', 'UserController@deleteProfileLanguage')->name('delete.front.profile.language');
/*************************************/



