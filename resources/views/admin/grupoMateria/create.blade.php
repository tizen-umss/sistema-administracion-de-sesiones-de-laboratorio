@extends('layouts.app')

@section('content')
    <h3 class="page-title">Grupos de Materia</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.gruposMateria.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
        </div>
        

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nombrerupoMat', 'Nombre Grupo Materia*', ['class' => 'control-label']) !!}
                    {!! Form::text('nombrerupoMat', old('nombrerupoMat'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    <!-- @if($errors->has('nombrerupoMat'))
                        <p class="help-block">
                            {{ $errors->first('nombrerupoMat') }}
                        </p>
                    @endif -->
                </div>
            </div>

            <div class="row">
                {{-- <div class="col-xs-12 form-group">
                    {!! Form::label('materia_id', 'materia id*', ['class' => 'control-label']) !!}
                    {!! Form::text('materia_id', old('materia_id'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    <!-- @if($errors->has('materia_id'))
                        <p class="help-block">
                            {{ $errors->first('materia_id') }}
                        </p>
                    @endif -->
                </div> --}}

                <div class="col-xs-12 form-group">
                    {!! Form::label('materia_id', 'Seleccion Materia', ['class' => 'control-label']) !!}
                    {!! Form::select('materia_id', (new App\Materia())->pluck('nombremateria','id'), old('nombremateria'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('materia_id'))
                        <p class="help-block">
                            {{ $errors->first('materia_id') }}
                        </p>
                    @endif
                </div>

            </div>
            {{-- @if($user->roles()->pluck('name')->first() == 'docente') --}}
            
            {{-- @foreach (App\User::all() as $user)
                    @if($user->roles()->pluck('name')->first() == 'docente')
                    {{$user}}
                    @endif
            @endforeach --}}

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('user_id', 'Seleccione Docente', ['class' => 'control-label']) !!}
                    {{-- {!! Form::select('user_id', (new App\User())->pluck('name','id'), old('user_id'), ['class' => 'form-control select2']) !!} --}}
                    {{-- {!! Form::select('user_id', App\User::all()->where('name','=','Docente')->pluck('name','id'), old('user_id'), ['class' => 'form-control select2']) !!} --}}

                    {{-- @foreach (App\User::all() as $user)
                        @if($user->roles()->pluck('name')->first() == 'docente')
                            
                        @endif --}}

                        {!! Form::select('user_id',$nonmembers->pluck('cedula','id'), old('user_id'), ['class' => 'form-control select2']) !!}
                    {{-- @endforeach  --}}

                    {{-- {!! Form::text('user_id', old('user_id'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}


                    <p class="help-block"></p>
                    <!-- @if($errors->has('user_id'))
                        <p class="help-block">
                            {{ $errors->first('user_id') }}
                        </p>
                    @endif -->
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

        
@stop

