@extends('layouts.master')

@section('contents')
    <h2>User Login</h2>
    @if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif

    <form class="" action="{{url('/user/login')}}" method="post">
        <label for="">Email</label><br/>
        <input type="text" name="email" value="" class="form-control"><br/>
        <label for="">Password</label><br/>
        <input type="password" name="password" value="" class="form-control"><br/>

        <input type="hidden" name="_token" value="{{csrf_token()}}"><br/><br/>
        <input type="submit" name="submit" value="Login" class="btn btn-success btn-large">
    </form>

@endsection
