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
                        <span>[{{$employee -> id}}]. {{$employee -> firstname}} {{$employee -> lastname}}</span>
                        <span>
                            <a href="">
                                &#9998;
                            </a>
                            <a href="{{route('deleteEmployee',$employee->id)}}">
                                &#10060;
                            </a>
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    

@endsection