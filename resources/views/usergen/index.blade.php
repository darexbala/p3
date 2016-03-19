@extends('layouts.master')


@section('title')
    Project 3 - User Generator
@stop

@section('head')

@stop


@section('content')
<div class="row">
  <div class="col-md-6">
    <h2>Lorem Ipsum Generator</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class="btn btn-default" href="/textgen" role="button">Generate text &raquo;</a></p>
  </div>
  <div class="col-md-6">
    <h2>Random User Generator</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class="btn btn-default" href="/usergen" role="button">Generate user &raquo;</a></p>
 </div>
</div>
@stop

@section('body')

@stop
