<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\GameRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Game;


class gamesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$games=Game::all();

		return view('games.index',compact('games'));
	}

	
	public function show($id)

	{
		$game=Game::findOrFail($id);
		return view('games.show',compact('game'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return view ('games.create');
		 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(GameRequest $request)
	{
		
		Game::create($request->all());

		return redirect('games');
		 
	}

	public function edit($id)

	{
			
			$game=Game::findOrFail($id);
			return view('games.edit',compact('game'));
	}


	public function update($id, GameRequest $request)

	{
		$game=Game::findOrFail($id);
		$game->update($request->all());
		return redirect('games');
	}

	public function delete($id)
	{
		$game=Game::findOrFail($id);
		return view('games.delete',compact('game'));

	}

	public function destroy($id)
	{
		$game=Game::findOrFail($id);
		$game->delete();
		return redirect('games');

	}

}
