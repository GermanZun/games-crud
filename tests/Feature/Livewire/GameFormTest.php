<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\GameForm;
use App\Models\Game;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class GameFormTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Correr seeder después de cada prueba
     *
     * @var bool
     */
    protected $seed = true;

    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(GameForm::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function can_create_game()
    {
        $this->actingAs(User::factory()->create());

        Livewire::test(GameForm::class)
            ->set('game.name', 'nombre desde prueba')
            ->set('game.description', 'desc desde prueba')
            ->set('game.url', 'http://www.prueba.com')
            ->set('game.image_url', 'http://www.prueba/com')
            ->set('game.status_id', '1')
            ->call('createEditGame');

        $this->assertTrue(Game::where('name', 'nombre desde prueba')->exists());
    }
}
