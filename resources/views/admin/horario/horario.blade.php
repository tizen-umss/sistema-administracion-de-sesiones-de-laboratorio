@extends('layouts.app')
@section('content')
<h1 class="page-title">Tabla de horarios </h1>


<div class="btn-group" role="group" aria-label="...">
  
    <div class="btn-group" role="group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            Seleccione una opción
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            @foreach($laboratorios as $laboratorios)
            <li><a href="{{$laboratorios->id}}">{{$laboratorios->nombreLab}}</a></li>
            @endforeach
        </ul>
    </div>
</div>

    <table width='100%' class="table table-responsive table-bordered table-striped dt-select">
        <tr>
             <?php


                $matrix = array();
                $matrix[0][0]='Lunes';
                $matrix[0][1]='Martes';
                $matrix[0][2]='Miercoles';
                $matrix[0][3]='Jueves';
                $matrix[0][4]='Viernes';
                $matrix[0][5]='Sabado';

                $matrix[1][0]='06:45-08:15';
                $matrix[2][0]='08:15-09:45';
                $matrix[3][0]='09:45-11:15';
                $matrix[4][0]='11:15-12:45';
                $matrix[5][0]='12:45-14:15';
                $matrix[6][0]='14:15-15:45';
                $matrix[7][0]='15:45-17:15';
                $matrix[8][0]='17:15-18:45';
                $matrix[9][0]='18:45-20:15';
                $matrix[10][0]='20:15-21:45';


            ?>
            @for ($i=0; $i< count($matrix); $i++ )
                <tr>
                @for ($j=0; $j< count($matrix[0]); $j++ )

                    @if($i == 0)
                        {{--  <th> {{ $matrix [$i][$j] }}</th>  --}}
                        @echo "<th>$matrix [$i][$j]</th>";
                        @else
                        {{--  <td> {{ $matrix [$i][$j] }}</td>  --}}
                        @echo "<td>$matrix [$i][$j]</td>";
                    @endif
                @endfor
                </tr>
            @endfor
        </tr>
    </table>
@endsection