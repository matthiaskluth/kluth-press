<?php

Route::get(
	'press',
	array(
		'as' => 'admin.press',
		'uses' => '\Kluth\Press\PressController@getIndex'
	)
);

Route::group(array('before' => 'auth.basic'), function()
{
	Route::get(
		'press/add',
		array(
			'as' => 'admin.press.add',
			'uses' => '\Kluth\Press\PressController@getCreate'
		)
	);

	Route::post(
		'press/add',
		array(
			'as' => 'admin.press.postAdd',
			'before' => 'csrf',
			'uses' => '\Kluth\Press\PressController@postCreate'
		)
	);


	Route::get(
		'press/{id}/edit',
		array(
			'as' => 'admin.press.edit',
			'uses' => '\Kluth\Press\PressController@getEdit'
		)
	);

	Route::patch(
		'press/{id}/edit',
		array(
			'as' => 'admin.press.patchEdit',
			'before' => 'csrf',
			'uses' => '\Kluth\Press\PressController@patchEdit'
		)
	);
});
