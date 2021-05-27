@extends('layouts.main-layout')
@section('title')
    {{$employee -> firstname}} {{$employee -> lastname}} 
@endsection
@section('header-title')
    {{$employee -> firstname}} {{$employee -> lastname}} 
@endsection
@section('content')

    <div id="employee">
        <div>
            <h2>{{$employee -> firstname}} {{$employee -> lastname}}</h2>
            <div>Role: {{$employee -> role}}</div>
            <div>Ral: {{$employee -> ral}}</div>
        </div>
    </div>
    
@endsection