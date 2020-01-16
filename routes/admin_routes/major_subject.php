<?php

/* * ******  MajorSubject Start ********** */
Route::get('list-major-subjects', array_merge(['uses' => 'Admin\MajorSubjectController@indexMajorSubjects'], $all_users))->name('list.major.subjects');
Route::get('create-major-subject', array_merge(['uses' => 'Admin\MajorSubjectController@createMajorSubject'], $all_users))->name('create.major.subject');
Route::post('store-major-subject', array_merge(['uses' => 'Admin\MajorSubjectController@storeMajorSubject'], $all_users))->name('store.major.subject');
Route::get('edit-major-subject/{id}', array_merge(['uses' => 'Admin\MajorSubjectController@editMajorSubject'], $all_users))->name('edit.major.subject');
Route::put('update-major-subject/{id}', array_merge(['uses' => 'Admin\MajorSubjectController@updateMajorSubject'], $all_users))->name('update.major.subject');
Route::delete('delete-major-subject', array_merge(['uses' => 'Admin\MajorSubjectController@deleteMajorSubject'], $all_users))->name('delete.major.subject');
Route::get('fetch-major.subjects', array_merge(['uses' => 'Admin\MajorSubjectController@fetchMajorSubjectsData'], $all_users))->name('fetch.data.major.subjects');
Route::put('make-active-major-subject', array_merge(['uses' => 'Admin\MajorSubjectController@makeActiveMajorSubject'], $all_users))->name('make.active.major.subject');
Route::put('make-not-active-major-subject', array_merge(['uses' => 'Admin\MajorSubjectController@makeNotActiveMajorSubject'], $all_users))->name('make.not.active.major.subject');
Route::get('sort-major-subjects', array_merge(['uses' => 'Admin\MajorSubjectController@sortMajorSubjects'], $all_users))->name('sort.major.subjects');
Route::get('major-subject-sort-data', array_merge(['uses' => 'Admin\MajorSubjectController@majorSubjectSortData'], $all_users))->name('major.subject.sort.data');
Route::put('major-subject-sort-update', array_merge(['uses' => 'Admin\MajorSubjectController@majorSubjectSortUpdate'], $all_users))->name('major.subject.sort.update');
/* * ****** End MajorSubject ********** */