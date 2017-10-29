
@extends ('layout')
	@section('content')

	<!--page header -->
	<div class="page-header">
		<h1>Create a game <small>and someday finish!</small> </h1>
	</div>


	<!-- creates a game form -->
	{!! Form::open(['url' => 'games'])!!}


        @include ('games.form' , ['buttonText' =>'Create!'] )
        
        <!-- end of form -->
	{!! Form::close () !!}

</br>

	@include ('errors.errorsList')

@stop		