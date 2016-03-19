@extends('layouts.master')


@section('title')
Project 3 - Text Generator
@stop

@section('head')

@stop

@section('content')
<div class="row">
    <div class="col-md-4">
        <h2>Lorem Ipsum Generator</h2>
        <form role="form">
            <div class="form-group">
                <label for="paragraph">Paragraph: (Max 99)</label>
                <input type="text" class="form-control" id="paragraph">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Start with 'Lorem ipsum dolor sit amet...</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@stop

@section('body')

@stop
