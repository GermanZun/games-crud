<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;

class GameList extends Component
{
    public $games;

    protected $listeners = ['refreshList' => 'getAllGames'];

    public function mount()
    {
        $this->getAllGames();
    }

    public function getAllGames()
    {
        $this->games = Game::all();
    }

    public function edit(Game $game)
    {
        $this->emit('fillForm', $game);
    }

    public function destroy(Game $game)
    {
        $game->delete();
        $this->getAllGames();
    }

    public function render()
    {
        return view('livewire.game-list');
    }
}
