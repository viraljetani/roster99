<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ManageTimelog extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test **/
    public function do_clockin()
    {
        $this->withoutExceptionHandling();
        $this->post('api/clockin',$attributes = ['time' => Carbon::now()->toDateTimeString()]);

        $this->assertDatabaseHas('timelogs', $attributes);
    }
}
