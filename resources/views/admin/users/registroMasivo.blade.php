@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h1>REGISTRO MASIVO DE USUARIOS</h1>
    
    <form class = "form-group"method="POST" action="">
        <div class="col-md-12" >
            
            <div class="form-group">
                    <label for="validation01">Adjuntar Archivo</label>
                    <input name="uploadedfile" type="file" />
            </div>
       
        <a href="/d" class="btn btn-danger" >Cancelar</a>
        <button class = "btn btn-danger" type="submit">Guardar</button>
    </div>
    </form>


@endsection