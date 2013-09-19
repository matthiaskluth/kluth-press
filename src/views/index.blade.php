@extends('admin::layout')

@section('page-title')
	Cafe Fleischlos
@overwrite

@section('main')

	@foreach ($articles as $article)
		{{ $article->title }}
	@endforeach
	
@overwrite