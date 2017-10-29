<!--extends the master page 'layout' -->
@extends('layout')
	
	<!-- injection into master page section-->
	@section('content')

	<!-- page header-->
	<div class="page-header">
        <h1>All Games <small>Gotta catch 'em all!</small></h1>
    </div>

    <!--create games button-->
    	<div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('gamesController@create') }}" class="btn btn-success">Create A Game!</a>
        </div>
    </div>

    <!--if games are present a games table is created -->

    	@if($games->isEmpty())

    		<p>There are no games ,get yourself sum'!</p>

    			@else 
    				 <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Publisher</th>
                    <th>Complete</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            	<!--For every games from GAME object to be pass to the variable game -->
            	@foreach($games as $game)
                <tr>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->publisher }}</td>
                    <td>{{ $game->complete ?'Yes' : 'No' }}</td>
                    
                     <td>
                    	<!-- creates buttons for showing,editting and deleting games -->
                        <a href="{{ action('gamesController@show',$game->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ action('gamesController@edit',$game->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('gamesController@delete',$game->id) }}" class="btn btn-danger">Delete</a>
                         
                    </td> 

                </tr>
                @endforeach
            </tbody>
        </table>
         @endif
        
@stop	

