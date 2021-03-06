<?php

use Carbon\Carbon;

$factory->define(App\Concert::class, function (Faker\Generator $faker) {
	return [
		'title' => 'Example Band',
		'subtitle' => 'with The Fake Openers',
		'date' => Carbon::parse('+2 weeks'),
		'ticket_price' => 2000,
		'venue' => 'The Example Theatre',
		'venue_address' => '123 Example Lane',
		'city' => 'Fakeville',
		'state' => 'ON',
		'zip' => '90210',
		'additional_information' => 'Some sample additional information.'
	];
});
