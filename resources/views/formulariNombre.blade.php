<!--//resources/views-->
@extends('plantilla')

@section('titol', 'Introdueix nombre ')

@section('contingut')

{!! Form::open(array('url' => '/nombre/afegirNombre')) !!}
    {!! Form::label('nombre', 'nombre') !!}
    {!! Form::number('nombre') !!}
    {!!  Form::submit('enviar') !!}
{!! Form::close() !!}
@endsection

