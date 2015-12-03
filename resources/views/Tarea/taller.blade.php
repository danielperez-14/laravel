

@extends('principal.principal')

@section('title', 'Page Title')

@section('sidebar')
@parent

<p>Taller</p>
@endsection


@section('content')


<form role="form" method="get" class="form-horizontal" >
    <div class="form-group">
        <label class="col-md-4 control-label">Nombre Jugador</label>
        <div class="col-md-6"><input type="text" name="nameJugador"></div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Apellido Jugador</label>
        <div class="col-md-6"><input type="text" name="apellidoJugador"></div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Ciudad</label>
        <div class="col-md-6"><input type="text" name="ciudadJugador"></div>
    </div>
    <div class="form-group">   
        <div class="col-md-6"><button type="submit" class="btn btn-block">Insertar</button></div>
    </div>
        
      
    <div class="form-control">        
        <div class="col-md-4">Nombre Jugador</div>
        <div class="col-md-4">Apellido</div>
        <div class="col-md-4">Lugar</div>
    </div>
  
        @foreach($array_datos as $array_dato)
        <div class="form-control">  
         <div class="col-md-4">{{$array_dato['nom_jugador']}}</div>
        <div class="col-md-4">{{$array_dato['apellido']}}</div>
        <div class="col-md-4">{{$array_dato['lugar_nacimiento']}}</div>
        </div>
        @endforeach
   
    
</form>
@endsection
