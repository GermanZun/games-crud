<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;

class GameList extends Component
{
    public $games;

    public function mount()
    {
        $this->games = Game::all();
    }

    public function render()
    {
        return view('livewire.game-list');
    }
}
