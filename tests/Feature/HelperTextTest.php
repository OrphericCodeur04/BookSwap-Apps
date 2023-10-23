<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Livewire\ShowHelp;

class HelperTextTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_can_see_helper_text() {
        Livewire::test(ShowHelp::class)
            ->asertDontSee('Lorem ipsum')
            ->toggle('showHelp')
            ->assertSee('Lorem ipsum')
    }
}
