@extends('layouts.main-layout')
@section('title')
    HomePage
@endsection
@section('header-title')
    EMPLOYEES
@endsection
@section('content')

    <div id="homepage">
        <ul>
            @foreach ($employees as $employee)
                <li>
                    <a href="{{route('employee',$employee-> id)}}">
                        [{{$employee -> id}}]. {{$employee -> firstname}} {{$employee -> lastname}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    

@endsection