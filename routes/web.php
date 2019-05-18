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

    Route::resource('docmaterias', 'Doc\MateriasController');
    Route::post('materias_mass_destroy', ['uses' => 'Doc\MateriasController@massDestroy', 'as' => 'materias.mass_destroy']);


    Route::resource('auxmaterias', 'Aux\MateriasController');
    Route::post('materias_mass_destroy', ['uses' => 'Aux\MateriasController@massDestroy', 'as' => 'materias.mass_destroy']);


    //Horarios
    Route::resource('/horario', 'Admin\HoariosController');
    Route::get('/horarios/{dato}', 'Admin\HoariosController@horarios');


    Route::resource('/actividades', 'Aux\ActividadController');
    Route::post('actividades_mass_destroy', ['uses' => 'Aux\ActividadController@massDestroy', 'as' => 'actividad.mass_destroy']);

    // rutas de las listas de calificaciones 
    Route::resource('/lista', 'Admin\ListasController');
    Route::post('listas_mass_destroy', ['uses' => 'Admin\ListasController@massDestroy', 'as' => 'listas.mass_destroy']);

    


//    admin.posts.index
//    admin.posts.indexatoriosController@massDestroy', 'as' => 'laboratorios.mass_destroy']);

//    admin.posts.indexoller');
//    admin.posts.indexsDestroy', 'as' => 'gruposLaboratorio.mass_destroy']);

// });admin.posts.index
//  Route::resource('/x', 'borrar');




Route::get('/tareas', 'PagesController@home')->name('tareas.home');
Route::get('blog/{id}','PostsController@show')->name('posts.show');
// Route::get('/tareas', function(){return "holamunod";});


// Route::get('/', 'AdminController@index')->name('dashboard');
Route::get('admin/posts','Admin\PostsController@index')->name('admin.posts.index');
Route::get('admin/posts/create','Admin\PostsController@create')->name('admin.posts.create');
Route::post('admin/posts','Admin\PostsController@store')->name('admin.posts.store');
Route::get('admin/posts/{post}','Admin\PostsController@edit')->name('admin.posts.edit');
Route::put('admin/posts/{post}','Admin\PostsController@update')->name('admin.posts.update');
Route::post('posts/{post}/photos','Admin\PhotosController@store')->name('admin.posts.photos.update');
Route::delete('photos/{photo}','Admin\PhotosController@destroy')->name('admin.photos.destroy');

//Registro masivo
Route::resource('/import', 'Admin\RegistroMasivoController');
Route::post('/cargar', 'Admin\RegistroMasivoController@guardar');
// Route::post('/cargar', 'Admin\RegistroMasivoController@guardar');