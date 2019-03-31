<?php

return [
	
	'user-management' => [
		'title' => 'Gestor de Usuarios',
		'created_at' => 'Time',
		'fields' => [
		],
	],
	
	'permissions' => [
		'title' => 'Permisos',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Nombre',
		],
	],
	
	'roles' => [
		'title' => 'Roles',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Nombre',
			'permission' => 'Permisos',
		],
	],
	
	'users' => [
		'title' => 'Usuario',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Nombre',
			'apellidoPaterno' => 'Apellido Paterno',
			'apellidoMaterno' => 'Apellido Materno',
			'cedula' => 'Cedula',
			'codigoSiss' => 'CodigoSiss',
			'email' => 'Correo',
			'password' => 'Contrasenia',
			'roles' => 'Roles',
			'remember-token' => 'Remember token',
		],
	],
	'app_create' => 'Crear',
	'app_save' => 'Guardar',
	'app_edit' => 'Editar',
	'app_view' => 'Mostrar',
	'app_update' => 'Actualizar',
	'app_list' => 'Listar',
	'app_no_entries_in_table' => 'No hay entradas en la tabla',
	'custom_controller_index' => 'Indice de controlador personalizado.',
	'app_logout' => 'Salir',
	'app_add_new' => 'Agregar Nuevo',
	'app_are_you_sure' => 'esta usted seguro?',
	'app_back_to_list' => 'Volver a la lista',
	'app_dashboard' => 'Inicio',
	'app_delete' => 'Eliminar',
	'global_title' => 'SASU',
];