@extends('layouts.master')

@section('contents')
  <h2>Create New Task</h2>
@if(session('msg'))
{{session('msg')}}
@endif
  <form class="" action="{{url('/todo/new')}}" method="post">
    <label for="">Task Name</label><br/>
    <input type="text" name="task" value="" class="form-control"><br/>
    <label for="">Detail</label><br/>
    <textarea name="details" rows="8" cols="40" class="form-control"></textarea><br/>
    <label for="">Time</label><br/>
    <input type="date" name="date" value=""><br/>
    <input type="hidden" name="_token" value="{{csrf_token()}}"><br/><br/>
    <input type="submit" name="submit" value="Create" class="btn btn-success btn-large">
  </form>

@endsection
