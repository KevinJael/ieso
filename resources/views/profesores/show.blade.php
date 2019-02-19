@extends('layouts.cabecera')
@section('title',''.$profesor->nombre)
@section('content')
<div class="container">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="" src=" class="img-circle img-responsive"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                         <tr>
                             <tr>
                        <td>Fecha de nacimiento:</td>
                        <td>{{$profesor->fecha_n}}</td>
                      </tr>
                        <tr>
                        <td>Curp:</td>
                        <td>{{$profesor->curp}}</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><a href="mailto:{{$profesor->user->email}}">{{$profesor->user->email}}</a></td>
                      </tr>
                        <td>Colonia:</td>
                        <td>{{$profesor->colonia}}
                        </td>
                           
                      </tr>
                     <tr>
                        <td>Calle:</td>
                        <td>{{$profesor->calle}}</td>
                      </tr>
                      <tr>
                        <td>Codigo Postal:</td>
                        <td>{{$profesor->cp}}</td>
                      </tr>
                      <tr>
                        <td>Telefono de Casa:</td>
                        <td>{{$profesor->telefono_c}}</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Celular:</td>
                        <td>{{$profesor->celular}}</td>
                      </tr>
                    </tbody>
                  </table>
                  
                  <a href="{{route('horarios.show',$profesor)}}" class="btn btn-primary">Horario</a>
                  
                </div>
              </div>
            </div>
@endsection