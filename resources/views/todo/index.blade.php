@extends('layouts.master')

@section('contents')

<h1>Tasks</h1>

@if(session('msg')=='oka')
<div class="alert alert-success">
 The task is oka
</div>
@elseif(session('msg')=='notoka')
<div class="alert alert-success">
 The task is not oka
</div>
@endif
  <table class="table">
      <tr>
        <th>
            #
        </th>
        <th>
          Task
        </th>
        <th>
          Action
        </th>
      </tr>
    @foreach($todos as $tdo)
      <tr {!!$tdo->status==1?'class="success"':''!!}>
        <td>
          {{$tdo->id}}
        </td>
        <td>
          <a href="{{url('todo/view/'.$tdo->id)}}">{{$tdo->task}}</a>
        </td>
        <td>
          <a href="">Edit</a>
          <a href="">Delete</a>
          @if($tdo->status==1)
          <a href="{{url('/todo/task-undone/'.$tdo->id)}}">Undone</a>
          @else
          <a href="{{url('/todo/task-done/'.$tdo->id)}}">Done</a>
          @endif
        </td>
      </tr>

    @endforeach
  </table>

@endsection
