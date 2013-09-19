<?php

namespace Kluth\Press;

class PressController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$articles = Press::all();

		return \View::make('press::index', 
			array('articles' => $articles));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$article = Press::find($id);

		return \View::make('press::edit',
			array(
				'article' => $article,
				'url' => 'press/'.$id.'/edit',
				'method' => 'patch'
			)
		);
	}

	/**
	 * Save updates
	 * @return Redirect
	 */
	public function patchEdit($id)
	{
		$article = Press::find($id);
		$this->save($article);
		return \Redirect::to('press');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$article = new Press;
		return \View::make('press::edit',
				array(
					'article' => $article,
					'url' => 'press/add',
					'method' => 'post'
				)
			);
	}

	/**
	 * Save new article
	 */
	public function postCreate()
	{
		$article = new Press;
		$this->save($article);
		return \Redirect::to('press');
	}

	/**
	 * Common part of create and edit.
	 */
	private function save($article)
	{

		$article->title = \Request::get('title');
		$article->image = \Request::get('image');
		$article->content = \Request::get('content');
		$article->link = \Request::get('link');
		$article->published = \Request::get('published');

		$article->save();
	}

}