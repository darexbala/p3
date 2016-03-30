@extends('layouts.master')


@section('title')
DO Project 3 - Text Generator
@stop

@section('head')

@stop

@section('content')
<a href="/"><span class="glyphicon glyphicon-home"></span> Home page</a>
<div class="row">
    <div class="col-md-4">
        <h2>Lorem Ipsum Generator</h2>
        <form method="post" action="/textgen">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="paragraph">Paragraph: (Max 10)</label>
                <div class="error">{{ $errors->first('paragraph') }}</div>
                <input type="text" class="form-control number-text" id="paragraph" name="paragraph" value="{{ old('paragraph') }}">
            </div>
            <div class="checkbox">
                <label><input name="startwith" type="checkbox" /> Start with Lorem ipsum dolor sit amet...</label>
            </div>
            <button type="submit" class="btn btn-default">Generate Text</button>
            <br />
            <br />
            @if(count($errors) > 0)
                <div class="error">Please correct the errors above and try again please!</div>
            @endif
        </form>
    </div>
    <div class="col-md-8">
        @if($loremcontent)
            {!! $loremcontent !!}
        @endif
    </div>
</div>
@stop

@section('body')

@stop
