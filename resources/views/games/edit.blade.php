@extends ('layout')

@section('content')

	<!--page header -->
	<div class="page-header">
		<h1>Edit Game Information</h1>
	</div>

	<!-- creates a game form -->
	
{!! Form::model($game ,['method' => 'patch','action'=> ['gamesController@update',$game->id]])!!}

        @include ('games.form' , ['buttonText' =>'Edit game!'] )
        
        <!-- end of form -->
	{!! Form::close () !!}

</br>

	@include('errors.errorsList')  	
	
	@stop