@extends('layout')

	@section ('content')

	{!! Form::open(['method' => 'delete','action'=> ['gamesController@destroy',$game->id]])!!}


	<div class="page-header">
        <h1>Delete {{ $game->title }} <small>Are you sure?</small></h1>
    </div>

    <input type="submit" class="btn btn-danger" value="Yes" />
        <a href="{{ action('gamesController@index') }}" class="btn btn-default">No way!</a>

	{!! Form::close () !!}


	@stop