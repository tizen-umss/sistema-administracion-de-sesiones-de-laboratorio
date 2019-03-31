@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.users.title')</h3>
    
    {!! Form::model($user, ['method' => 'PUT', 'route' => ['admin.users.update', $user->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Nombre*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('apellidoPaterno', 'Apellido Paterno*', ['class' => 'control-label']) !!}
                    {!! Form::text('apellidoPaterno', old('apellidoPaterno'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('apellidoPaterno'))
                        <p class="help-block">
                            {{ $errors->first('apellidoPaterno') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('apellidoMaterno', 'Apellido Materno', ['class' => 'control-label']) !!}
                    {!! Form::text('apellidoMaterno', old('apellidoMaterno'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('apellidoMaterno'))
                        <p class="help-block">
                            {{ $errors->first('apellidoMaterno') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cedula', 'Cedula*', ['class' => 'control-label']) !!}
                    {!! Form::text('cedula', old('cedula'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cedula'))
                        <p class="help-block">
                            {{ $errors->first('cedula') }}
                        </p>
                    @endif
                </div>
            </div> 

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('codigoSiss', 'Codigo Siss*', ['class' => 'control-label']) !!}
                    {!! Form::text('codigoSiss', old('codigoSiss'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('codigoSiss'))
                        <p class="help-block">
                            {{ $errors->first('codigoSiss') }}
                        </p>
                    @endif
                </div>
            </div>            

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', 'Correo*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('password', 'Contrasenia', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('roles', 'Seleccione Rol*', ['class' => 'control-label']) !!}
                    {!! Form::select('roles[]', $roles, old('roles') ? old('roles') : $user->roles()->pluck('name', 'name'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('roles'))
                        <p class="help-block">
                            {{ $errors->first('roles') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

