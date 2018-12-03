<?php

namespace Tests\Unit;

use App\Concert;
use Carbon\Carbon;
use Tests\TestCase;

class ConcertTest extends TestCase
{
	/** @test */
	public function can_get_formatted_date(): void
	{
		$concert = factory(Concert::class)->make([
			'date' => Carbon::parse('2016-12-01 8:00pm')
		]);

		static::assertEquals('December 1, 2016', $concert->formatted_date);
	}

	/** @test */
	public function can_get_formatted_start_time(): void
	{
		$concert = factory(Concert::class)->make([
			'date' => Carbon::parse('2016-12-01 17:00:00')
		]);

		static::assertEquals('5:00pm', $concert->formatted_start_time);
	}

	/** @test */
	public function can_get_ticket_price_in_dollars(): void
	{
		$concert = factory(Concert::class)->make([
			'ticket_price' => 6750
		]);

		static::assertEquals('67.50', $concert->ticket_price_in_dollars);
	}
}
