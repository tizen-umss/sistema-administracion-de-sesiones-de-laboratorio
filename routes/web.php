<?php
Route::get('/', function () { return redirect('/login'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

    // Route::get('materias/home/materia', 'Admin\MateriasController@home');
    Route::resource('materias', 'Admin\MateriasController');
    Route::post('materias_mass_destroy', ['uses' => 'Admin\MateriasController@massDestroy', 'as' => 'materias.mass_destroy']);



    // route::Resource('materia', 'Admin\controladorMateria');

    Route::resource('laboratorios', 'Admin\LaboratoriosController');
    Route::post('laboratorios_mass_destroy', ['uses' => 'Admin\LaboratoriosController@massDestroy', 'as' => 'laboratorios.mass_destroy']);

    Route::resource('gruposLaboratorio', 'Admin\GruposLaboratorioController');
    Route::post('grupoLaboratorio_mass_destroy', ['uses' => 'Admin\GruposLaboratorioController@massDestroy', 'as' => 'gruposLaboratorio.mass_destroy']);

    Route::resource('gruposMateria', 'Admin\GruposMateriaController');
    Route::post('grupoMateria_mass_destroy', ['uses' => 'Admin\GruposMateriaController@massDestroy', 'as' => 'gruposMateria.mass_destroy']);

    Route::resource('asignaciones', 'Admin\AsignacionesController');
    Route::post('asignacion_mass_destroy', ['uses' => 'Admin\AsignacionesController@massDestroy', 'as' => 'asignaciones.mass_destroy']);

});




// Route::group(['middleware' => ['auth','role:auxiliar'], 'prefix' => 'aux', 'as' => 'aux.'], function () {
//     Route::get('/home', 'HomeController@index');
//     // Route::resource('permissions', 'Admin\PermissionsController');
//     // Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
//     // Route::resource('roles', 'Admin\RolesController');
//     // Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
//     // Route::resource('users', 'Admin\UsersController');
//     // Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

    Route::resource('/materias', 'Aux\MateriasController');
    Route::post('materias_mass_destroy', ['uses' => 'Aux\MateriasController@massDestroy', 'as' => 'materias.mass_destroy']);


//     // Route::resource('laboratorios', 'Admin\LaboratoriosController');
//     // Route::post('laboratorios_mass_destroy', ['uses' => 'Admin\LaboratoriosController@massDestroy', 'as' => 'laboratorios.mass_destroy']);

//     // Route::resource('gruposLaboratorio', 'Aux\GruposLaboratorioController');
//     // Route::Materia', ['uses' => 'Aux\GruposLaboratorioController@massDestroy', 'as' => 'gruposLaboratorio.mass_destroy']);

// });
 Route::resource('/x', 'borrar');
