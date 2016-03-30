@extends('layouts.master')


@section('title')
DO Project 3 - xkcd Password Generator
@stop

@section('head')

@stop

@section('content')
<a href="/"><span class="glyphicon glyphicon-home"></span> Home page</a>
<div class="row">
    <div class="col-md-6">
        <h2>xkcd Password Generator</h2>
        <form method="post" action="/xkcdgen">
            {{ csrf_field() }}
            <div class="well offset2">{{ $password }}</div>
            <div class="form-group">
                <label for="size"># of words: (Max 10)</label>
                <div class="error">{{ $errors->first('size') }}</div>
                <input type="text" class="form-control number-text" id="size" name="size" value="{{ old('size') }}">
            </div>
            <div class="form-group">
                <label for="separator">Separator (Special characters only #!-$)</label>
                <input type="text" class="form-control number-text" id="separator" name="separator" value="{{ old('separator') }}">
            </div>
            <div class="form-group">
                <label for="maxlength">Max length</label>
                <select class="form-control number-text" id="maxlength" name="maxlength">
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                </select>
            </div>
            <div class="checkbox">
                <label><input name="addNumber" type="checkbox" /> Add Number</label>
            </div>
            <div class="checkbox">
                <label><input name="addSymbol" type="checkbox" /> Add Symbol</label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="case" value="None" checked /> None
                </label>
                <label>
                    <input type="radio" name="case" value="First upper" /> First letter upper case
                </label>
                <label>
                    <input type="radio" name="case" value="All upper" /> All upper case
                </label>
                <label>
                    <input type="radio" name="case" value="All lower" /> All lower case
                </label>
            </div>
            <button class="btn btn-lg btn-primary" type="submit">Generate Password</button>

            <br />
            <br />
            @if(count($errors) > 0)
                <div class="error">Please correct the errors above and try again please!</div>
            @endif
        </form>
    </div>
    <div class="col-md-6">
        <a href="http://xkcd.com/936/" target="_blank">
            <img class="comic" src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd style passwords">
        </a>
    </div>
</div>
@stop

@section('body')

@stop
