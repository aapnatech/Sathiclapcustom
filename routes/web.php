<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes();

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('crm-statuses/destroy', 'CrmStatusController@massDestroy')->name('crm-statuses.massDestroy');

    Route::resource('crm-statuses', 'CrmStatusController');

    Route::delete('crm-customers/destroy', 'CrmCustomerController@massDestroy')->name('crm-customers.massDestroy');

    Route::resource('crm-customers', 'CrmCustomerController');

    Route::delete('crm-notes/destroy', 'CrmNoteController@massDestroy')->name('crm-notes.massDestroy');

    Route::resource('crm-notes', 'CrmNoteController');

    Route::delete('crm-documents/destroy', 'CrmDocumentController@massDestroy')->name('crm-documents.massDestroy');

    Route::resource('crm-documents', 'CrmDocumentController');

    Route::post('crm-documents/media', 'CrmDocumentController@storeMedia')->name('crm-documents.storeMedia');

    Route::delete('task-statuses/destroy', 'TaskStatusController@massDestroy')->name('task-statuses.massDestroy');

    Route::resource('task-statuses', 'TaskStatusController');

    Route::delete('task-tags/destroy', 'TaskTagController@massDestroy')->name('task-tags.massDestroy');

    Route::resource('task-tags', 'TaskTagController');

    Route::delete('tasks/destroy', 'TaskController@massDestroy')->name('tasks.massDestroy');

    Route::resource('tasks', 'TaskController');

    Route::post('tasks/media', 'TaskController@storeMedia')->name('tasks.storeMedia');

    Route::delete('tasks-calendars/destroy', 'TasksCalendarController@massDestroy')->name('tasks-calendars.massDestroy');

    Route::resource('tasks-calendars', 'TasksCalendarController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);
});
