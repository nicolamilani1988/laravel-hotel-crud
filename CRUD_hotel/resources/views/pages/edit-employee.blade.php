@extends('layouts.main-layout')
@section('title')
    Update {{$employee -> firstname}} {{$employee -> lastname}} 
@endsection
@section('header-title')
    Update {{$employee -> firstname}} {{$employee -> lastname}} 
@endsection
@section('content')

    <div id="edit-form">
        <form method="POST" action="{{route('updateEmployee',$employee->id)}}">
            @csrf
            @method('POST')
            <div class="input-form">
                <label for="firstname">Firstname</label>
                <input type="text" id="firstname" name="firstname" value="{{$employee->firstname}}">
            </div>
            <div class="input-form">
                <label for="lastname">Lastname</label>
                <input type="text" id="lastname" name="lastname" value="{{$employee->lastname}}">
            </div>
            <div class="input-form">
                <label for="role">Role</label>
                <input type="text" id="role" name="role" value="{{$employee->role}}">
            </div>
            <div class="input-form">
                <label for="ral">Ral</label>
                <input type="number" id="ral" name="ral" value="{{$employee->ral}}">
            </div>
            <div class="submit">
                <input type="submit" class="button" value="Update">
            </div>
        </form>
    </div>
    
@endsection