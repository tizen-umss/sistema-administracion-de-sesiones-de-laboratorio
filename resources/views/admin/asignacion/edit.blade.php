@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.asignaciones.title')</h3>
    
    {!! Form::model($asignacion, ['method' => 'PUT', 'route' => ['admin.asignaciones.update', $asignacion->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
                <div class="row">
                        <div class="col-xs-12 form-group">
                            {!! Form::label('user_id', 'Seleccion Materia', ['class' => 'control-label']) !!}
                            {!! Form::select('user_id', (new App\User())->pluck('name','id'), old('user_id'), ['class' => 'form-control select2']) !!}
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
                            {!! Form::label('grupoMateria_id', 'Seleccione Grupo Materia', ['class' => 'control-label']) !!}
                            {!! Form::select('grupoMateria_id', (new App\GrupoMateria())->pluck('nombreGrupoMat','id'), old('grupoMateria_id'), ['class' => 'form-control select2']) !!}
                            {{-- {!! Form::text('grupoMateria_id', old('grupoMateria_id'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}
                            <p class="help-block"></p>
                            <!-- @if($errors->has('grupoMateria_id'))
                                <p class="help-block">
                                    {{ $errors->first('grupoMateria_id') }}
                                </p>
                            @endif -->
                        </div>
                    </div>
        
                    <div class="row">
                            <div class="col-xs-12 form-group">
                                {!! Form::label('grupoLaboratorio_id', 'Seleccione Grupo Materia', ['class' => 'control-label']) !!}
                                {!! Form::select('grupoLaboratorio_id', (new App\GrupoLaboratorio())->pluck('nombreGrupoLab','id'), old('grupoLaboratorio_id'), ['class' => 'form-control select2']) !!}
                                {{-- {!! Form::text('grupoLaboratorio_id', old('grupoLaboratorio_id'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}
                                <p class="help-block"></p>
                                <!-- @if($errors->has('grupoLaboratorio_id'))
                                    <p class="help-block">
                                        {{ $errors->first('grupoLaboratorio_id') }}
                                    </p>
                                @endif -->
                            </div>
                    </div>
        

            
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

