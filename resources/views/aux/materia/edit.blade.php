@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{$materia->nombreMateria}}</h3>
    
    {{-- {!! Form::model($materia, ['method' => 'PUT', 'route' => ['admin.materias.update', $materia->id]]) !!} --}}

    <div class="panel panel-default">
        <div class="panel-heading">
            informacion
        </div>

        <div class="panel-body">

            <div class="row">
                <div class="col-xs-12 form-group">
                    <p>CODIGO : {{$materia->codigoMateria}}</p>
                </div>
            </div>

            <div class="row">
                    <div class="col-xs-12 form-group">
                        <p>DESCRIPCION : {{$materia->descripcionMateria}}</p>
                    </div>
            </div>    
        </div>
    </div>

    <h3 class="page-title">Estudiantes</h3>
    {{-- {{App\User::all() = App\User::all()}} --}}
    
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count(App\User::all()) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        
                        <th>@lang('global.users.fields.name')</th>
                        <th>@lang('global.users.fields.apellidoPaterno')</th>
                        <th>@lang('global.users.fields.apellidoMaterno')</th>
                        <th>@lang('global.users.fields.cedula')</th>
                        <th>@lang('global.users.fields.codigoSiss')</th>
                        <th>&nbsp;</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                
                    @if (count(App\User::all()) > 0)
                        @foreach (App\User::all() as $user)
                            {{-- @if($user->roles()->pluck('name')->first() == 'docente') --}}
                            <tr data-entry-id="{{ $user->id }}">
                                <td></td>

                                <td>{{ $user->name }}</td>
                                <td>{{ $user->apellidoPaterno }}</td>
                                <td>{{ $user->apellidoMaterno }}</td>
                                <td>{{ $user->cedula }}</td>
                                <td>{{ $user->codigoSiss }}</td>
                                {{-- <td>
                                    @foreach ($user->roles()->pluck('name') as $role)
                                        <span class="label label-info label-many">{{ $role }}</span>
                                    @endforeach
                                </td> --}}
                                <td>
                                    <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-xs btn-info">Actividad</a>
                                    <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-xs btn-primary">Portafolio</a>
                                </td>

                            </tr>
                            {{-- @endif --}}
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@stop

