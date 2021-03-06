@extends('layouts.master')


@section('title')
DO Project 3 - User Generator
@stop

@section('head')

@stop

@section('content')
<a href="/"><span class="glyphicon glyphicon-home"></span> Home page</a>
<div class="row">
    <div class="col-md-4">
        <h2>User Profile Generator</h2>
        <form method="post" action="/usergen">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="usercount">Number of Users: (Max 10)</label>
                <div class="error">{{ $errors->first('usercount') }}</div>
                <input type="text" class="form-control number-text" id="usercount" name="usercount" value="{{ old('usercount') }}">
            </div>
            <div class="checkbox">
                <label><input name="phone" type="checkbox" /> Phone Number</label>
            </div>
            <div class="checkbox">
                <label><input name="email" type="checkbox" /> Email</label>
            </div>
            <div class="checkbox">
                <label><input name="birthday" type="checkbox" /> Birthday</label>
            </div>
            <div class="checkbox">
                <label><input name="address" type="checkbox" /> Address</label>
            </div>
            <div class="checkbox">
                <label><input name="profileBlurb" type="checkbox" /> Profile text</label>
            </div>
            <button type="submit" class="btn btn-default">Generate User Profile</button>
            <br />
            <br />
            @if(count($errors) > 0)
                <div class="error">Please correct the errors above and try again please!</div>
            @endif
        </form>
    </div>
    <div class="col-md-8">
        @if(count($users) > 0)
            {!! $users !!}
        @endif
    </div>
</div>
@stop

@section('body')

@stop
