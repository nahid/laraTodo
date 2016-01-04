@extends('layouts.master')

@section('contents')
    <h2>Create New Account</h2>
    @if(session('msg'))
        <div class="alert alert-success">
            {{session('msg')}}
        </div>
    @endif

    @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        </div>
    @endif
    <form class="" action="{{url('/user/signup')}}" method="post">
        <label for="">Name</label><br/>
        <input type="text" name="name" value="" class="form-control"><br/>
        <label for="">Email</label><br/>
        <input type="text" name="email" value="" class="form-control"><br/>
        <label for="">Password</label><br/>
        <input type="password" name="password" value="" class="form-control"><br/>
        <label for="">Re Password</label><br/>
        <input type="password" name="repassword" value="" class="form-control"><br/>

        <input type="hidden" name="_token" value="{{csrf_token()}}"><br/><br/>
        <input type="submit" name="submit" value="Signup" class="btn btn-success btn-large">
    </form>

@endsection
