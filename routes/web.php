<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// App\User::create([

// 'name' => 'Joel Diaz',
// 'email' => 'jdiaz@gmail.com',
// 'password' => bcrypt('123456'),
// 'role_id' => '1'

// ]);

// App\Role::create([

// 'name' => 'admin',
// 'display_name' => 'Administrador'
// ]);

			// para mostrar la relacion de roles->usuarios
		// Route::get('/mostrarroles', function () {
		//    return \App\Role::with('user')->get();
		// });	


		Route::get('/', function () {
		    return view('auth.login');
		});


		Route::get('cpanel', 'PanelController@index')->name('cpanel');

		Route::get('/errors', function () {
		    return view('errors.index');
		});	

		// metodos para Role

		Route::get('roles',['as' => 'roles.index','uses' => 'RolesController@index']);
		Route::get('roles/create',['as' => 'roles.create','uses' => 'RolesController@create']);
		Route::post('roles',['as' => 'roles.store','uses' => 'RolesController@store']);
		Route::get('roles/show/{id}',['as' => 'roles.show','uses' => 'RolesController@show']);
		Route::get('roles/{id}/edit',['as' => 'roles.edit','uses' => 'RolesController@edit']);
		Route::delete('roles/{id}',['as' => 'roles.destroy','uses' => 'RolesController@destroy']);
		Route::put('roles/{id}',['as' => 'roles.update','uses' => 'RolesController@update']);

		// metodos para usuarios
		
		Route::get('users',['as' => 'users.index','uses' => 'UsersController@index']);

		Route::post('users',['as' => 'users.store','uses' => 'UsersController@store']);

		Route::get('users/create',['as' => 'users.create','uses' => 'UsersController@create']);

		Route::get('users/show/{id}',['as' => 'users.show','uses' => 'UsersController@show']);

		Route::get('users/{id}/edit',['as' => 'users.edit','uses' => 'UsersController@edit']);

		Route::delete('users/{id}',['as' => 'users.destroy','uses' => 'UsersController@destroy']);

		Route::put('users/{id}',['as' => 'users.update','uses' => 'UsersController@update']);

		// metodos para alumnos

		Route::get('students',['as' => 'students.index','uses' => 'StudentsController@index']);

		Route::post('students',['as' => 'students.store','uses' => 'StudentsController@store']);

		Route::get('students/create',['as' => 'students.create','uses' => 'StudentsController@create']);

		Route::get('students/show/{id}',['as' => 'students.show','uses' => 'StudentsController@show']);

		Route::get('students/{id}/edit',['as' => 'students.edit','uses' => 'StudentsController@edit']);

		Route::delete('students/{id}',['as' => 'students.destroy','uses' => 'StudentsController@destroy']);

		Route::put('students/{id}',['as' => 'students.update','uses' => 'StudentsController@update']);
		

		Route::get('docente', 'PagesController@docente')->name('docente.view');

		Route::get('apoderado', 'PagesController@apoderado')->name('apoderado.view');

		Auth::routes();


