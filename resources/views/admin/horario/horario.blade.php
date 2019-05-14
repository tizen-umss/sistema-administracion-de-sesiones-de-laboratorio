@extends('layouts.app')
@section('content')
<h1 class="page-title"><center>HORARIOS DE LOS LABORATORIOS</h1>


<div class="btn-group" role="group" aria-label="...">
  
    <div class="btn-group" role="group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            Seleccione una opción
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            @foreach($laboratorios as $laboratorio)
            <li><a href=" {{ url('/horarios/' . $laboratorio->id) }}">{{ $laboratorio->nombrelab }}</a></li>
            
            @endforeach
        </ul>
    </div>
</div>
        <!-- bloque de php -->
        <?php

            $matrix = array();

            $matrix[0][0]='Dia/Hora';

            $matrix[0][1]='Lunes';
            $matrix[0][2]='Martes';
            $matrix[0][3]='Miercoles';
            $matrix[0][4]='Jueves';
            $matrix[0][5]='Viernes';
            $matrix[0][6]='Sabado';

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

            for ($i=1; $i < 11; $i++) { // Ingresa los guines para que se marquen las lineas de la tabla
                for ($j=1; $j < 7; $j++) { 
                    // if  ($matrix[$i][$j] == ""){
                        $matrix[$i][$j] = "  ";
                    // }    
                }
            }
<<<<<<< HEAD

            // if (strcasecmp(($gruposLabo[0]->diagrupo), $matrix[0][1]) == 0) {
            //     echo " Son iguales";
            // }else echo "No son iguales";

            $lola=0;
=======
            // echo count($gruposLabo);
            $indice = 0;
>>>>>>> b7a67e6d53a5aaa1df77be293d643044bf118359
            foreach ($gruposLabo as $elemento) {
                $indiceX = 1;
                $indiceY = 1;

<<<<<<< HEAD
                    while(strcasecmp(($gruposLabo[$lola]->diagrupo), $matrix[0][$indiceY]) <> 0){
                        $indiceY += 1;
                    }  
                    // echo $matrix[$indiceX][0];
                    while(strcasecmp(($gruposLabo[$lola]->horagrupo), $matrix[$indiceX][0]) <> 0){
                        $indiceX += 1;
                    }

             
                    $matrix[$indiceX][$indiceY] = $elemento->nombremateria . " Grupo Lab: " . $elemento->nombregrupolab ." Grupo Mat: $elemento->nombregrupomat";
                    
                    $lola ++;
                }
            
=======
                    while(strcasecmp(($gruposLabo[$indice]->diagrupo), $matrix[0][$indiceY]) <> 0){
                        $indiceY = $indiceY + 1;
                    }  
                    // echo $matrix[$indiceX][0];
                    while(strcasecmp(($gruposLabo[$indice]->horagrupo), $matrix[$indiceX][0]) <> 0){
                        $indiceX = $indiceX + 1;
                    }
                    $matrix[$indiceX][$indiceY] = $elemento->nombremateria . " Grupo Lab: " . $elemento->nombregrupolab ." Grupo Mat: $elemento->nombregrupomat";
                    $indice ++;
            }
            $id = 0;
>>>>>>> b7a67e6d53a5aaa1df77be293d643044bf118359
        ?>

<!-- otra tabla -->


<h3 class="page-title"> HORARIOS DEL <?php echo strtoupper($nombrelaboratorio); ?> </h3>    
    <div class="panel panel-default">
        
        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped  dt-select w-auto">
            <p>
                <table border="2" rules=all width='100%' class="table table-responsive  table-striped dt-select w-auto" >  <!-- Clases quitadas: table-bordered-->
                    <tr>
                        @for ($i=0; $i< count($matrix); $i++ )
                            <tr>
                            @for ($j=0; $j< count($matrix[$i]); $j++ )

                                @if($i == 0)

                                    <th><center> {{ $matrix[$i][$j] }} </center></th> 
                                
                                @else
                                    @if( $j == 0)
                                    <th><center>{{  $matrix[$i][$j] }} </center></th> 
                                    @else
                                    <td><center>{{ $matrix[$i][$j] }} </center></td>
                                    @endif
                                @endif
                            @endfor
                            </tr>
                        @endfor
                    </tr>
                </table>
            </p>        
                
        
            </table>
        </div>
    </div>


@endsection
