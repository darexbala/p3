@extends('layouts.master')

@section('title')
DO Project 3 - Home page
@stop

@section('head')

@stop

@section('content')
<div class="row">
    <div class="col-md-4">
        <h2>Lorem Ipsum Generator</h2>
        <p>Lorem ipsum text generator. </p>
        <p><a class="btn btn-default" href="/textgen" role="button">Generate text &raquo;</a></p>
    </div>
    <div class="col-md-3">
        <h2>User Generator</h2>
        <p>User profile generator. </p>
        <p><a class="btn btn-default" href="/usergen" role="button">Generate user &raquo;</a></p>
    </div>
    <div class="col-md-5">
        <h2>xkcd Password Generator</h2>
        <p>Secure Password generator. </p>
        <p><a class="btn btn-default" href="/xkcdgen" role="button">Generate Password &raquo;</a></p>
    </div>
</div>
@stop

@section('body')

@stop
