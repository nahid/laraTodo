@extends('layouts.master')

@section('contents')
  <h1>{{$todo->task}}</h1>
  <hr>
  <span>Time: {{$todo->execute_time}}</span><br/><br/>

  <p>
    {{$todo->details}}
  </p>

@endsection
