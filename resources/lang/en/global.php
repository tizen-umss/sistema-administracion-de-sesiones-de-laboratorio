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
	
	'materias' => [
		'title' => 'Materias',
		'created_at' => 'Time',
		'fields' => [
			'nombreMateria' => 'Nombre Materia',
			'codigoMateria' => 'Codigo Materia',
			'descripcionMateria' => 'Descripcion Materia',
		],
	],

	'laboratorios' => [
		'title' => 'Laboratorios',
		'created_at' => 'Time',
		'fields' => [
			'nombreLab' => 'Nombre Laboratorio',
			'numMaquinas' => 'Numero de Maquinas',
		],
	],

	'gruposLaboratorio' => [
		'title' => 'Grupos de Laboratorio',
		'created_at' => 'Time',
		'fields' => [
			'nombreGrupoLab' => 'Nombre grupo laboratorio',
			'materia_id' => 'materia id',
			'laboratorio_id' => 'laboratorio id',
			'diaGrupo' => 'Dia',
			'horaGrupo' => 'Hora',
		],
	],

	'gruposMateria' => [
		'title' => 'Grupos de Materia',
		'created_at' => 'Time',
		'fields' => [
			'nombreGrupoMat' => 'Nombre grupo laboratorio',
			'materia_id' => 'materia',
			'user_id' => 'Docente ',
		],
	],

	'asignaciones' => [
		'title' => 'Asignaciones Auxiliar/Estudiante a Grupos Materia/Laboratorio',
		'created_at' => 'Time',
		'fields' => [
			'user_id' => 'usuario',
			'grupoMateria_id' => 'Grupo Materia',
			'grupoLaboratorio_id' => 'Grupo Laboratorio ',
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
	'global_title' => 'UMSS',
];