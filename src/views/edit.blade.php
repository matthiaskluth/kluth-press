@extends('admin::layout')

@section('page-title')
@overwrite

@section('main')

{{ Form::model($article, array('url' => $url, 'method' => $method)) }}

{{ Form::label('title', 'Titel') }}
{{ Form::text('title') }}<br/>
{{ Form::label('image', 'Artikelbild') }}
{{ Form::file('image') }}<br/>
{{ Form::label('content', 'Inhalt') }}
{{ Form::text('content') }}<br/>
{{ Form::label('link', 'Link zum Artikel / Zur Webseite der Zeitung') }}
{{ Form::text('link') }}<br/>
{{ Form::label('published', 'Veröffentlichen') }}
{{ Form::checkbox('published', true, true) }}<br/>

{{ Form::submit('Speichern') }}

{{ Form::token() }}
{{ Form::close() }}

@overwrite