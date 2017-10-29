@extends('layout')

@section('content')

<div class="page-header">

		<h1>Game info </h1>

</div>

<table class="table table-striped">

<tr>

  <td>{{ $game->title}}</td> 
  <td>{{$game ->publisher}}</td> 
  <td>{{$game->complete ? 'Yes' :'No'}}</td>  

</tr>

</table>


@stop