<?php

namespace App\Http\Livewire;

use App\Models\Game;
use App\Models\Status;
use Livewire\Component;

class GameForm extends Component
{
    public $statuses;
    public Game $game;

    protected $rules = [
        'game.name' => 'required|min:3',
        'game.description' => '',
        'game.url' => 'required',
        'game.image_url' => 'required',
        'game.status_id' => ''
    ];

    protected $listeners = ['fillForm' => 'edit'];

    public function mount()
    {
        $this->game = new Game();
        $this->game->status_id = "1";
        $this->statuses = Status::all();
    }

    public function edit(Game $game)
    {
        $this->game = $game;
    }

    public function createEditGame()
    {
        $this->validate();
        $this->game->save();
        $this->mount();
        $this->emit('refreshList');
        session()->flash('message', 'Se ha agregado un nuevo juego.');
    }

    public function render()
    {
        return view('livewire.game-form');
    }
}
