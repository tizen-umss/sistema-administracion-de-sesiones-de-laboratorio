@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.asignaciones.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.asignaciones.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
        </div>
        

        <div class="panel-body">

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('user_id', 'Seleccion Usuario', ['class' => 'control-label']) !!}
                    {!! Form::select('user_id', $hola->pluck('$var','$key'), old('user_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('user_id'))
                        <p class="help-block">
                            {{ $errors->first('user_id') }}
                        </p>
                    @endif
                </div>

            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('grupomateria_id', 'Seleccione Grupo Materia', ['class' => 'control-label']) !!}
                    {!! Form::select('grupomateria_id', $matgrupo->pluck('$var','$key'), old('grupomateria_id'), ['class' => 'form-control select2']) !!}
                    {{-- {!! Form::select('grupomateria_id', (new App\GrupoMateria())->pluck('nombregrupomat','id'), old('grupomateria_id'), ['class' => 'form-control select2']) !!} --}}
                    {{-- {!! Form::text('grupomateria_id', old('grupomateria_id'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}
                    <p class="help-block"></p>
                    <!-- @if($errors->has('grupomateria_id'))
                        <p class="help-block">
                            {{ $errors->first('grupomateria_id') }}
                        </p>
                    @endif -->
                </div>
            </div>

            <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('grupolaboratorio_id', 'Seleccione Grupo de laboratorio', ['class' => 'control-label']) !!}
                        {!! Form::select('grupolaboratorio_id', (new App\GrupoLaboratorio())->pluck('nombregrupolab','id'), old('grupolaboratorio_id'), ['class' => 'form-control select2']) !!}
                        {{-- {!! Form::text('grupolaboratorio_id', old('grupolaboratorio_id'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}
                        <p class="help-block"></p>
                        <!-- @if($errors->has('grupolaboratorio_id'))
                            <p class="help-block">
                                {{ $errors->first('grupolaboratorio_id') }}
                            </p>
                        @endif -->
                    </div>
            </div>



            

            
        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

        
@stop

