@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.laboratorios.title')</h3>
    
    {!! Form::model($laboratorio, ['method' => 'PUT', 'route' => ['admin.laboratorios.update', $laboratorio->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nombreLab', 'Nombre Laboratorio*', ['class' => 'control-label']) !!}
                    {!! Form::text('nombreLab', old('nombreLab'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    <!-- @if($errors->has('nombreLab'))
                        <p class="help-block">
                            {{ $errors->first('nombreLab') }}
                        </p>
                    @endif -->
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('numMaquinas', 'Codigo Maquinas*', ['class' => 'control-label']) !!}
                    {!! Form::text('numMaquinas', old('numMaquinas'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    <!-- @if($errors->has('numMaquinas'))
                        <p class="help-block">
                            {{ $errors->first('numMaquinas') }}
                        </p>
                    @endif -->
                </div>
            </div>

            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

