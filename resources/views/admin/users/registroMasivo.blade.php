@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    
    <form class="form-group" action="cargar" method="POST" enctype = "multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="path">
        <br>
        <button type="submit">Subir</button>
    </form>

@endsection