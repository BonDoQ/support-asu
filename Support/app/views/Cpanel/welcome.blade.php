@extends('cpanel.template')

@section('content')
{{Auth::user()->username}}
@stop