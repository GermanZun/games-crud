<?php

namespace App\Http\Livewire;

use App\Models\Game;
use App\Models\Status;
use Livewire\Component;

class GameForm extends Component
{
    public $statuses;
    public $game_id;
    public $name;
    public $description;
    public $url;
    public $image_url;
    public $status_id;

    protected $listeners = ['fillForm' => 'edit'];

    public function mount()
    {
        $this->setStatuses();
    }

    private function setStatuses()
    {
        $this->statuses = Status::all();
        $this->status_id = "1";
    }

    public function edit(Game $game)
    {
        $this->game_id = $game->id;
        $this->name = $game->name;
        $this->description = $game->description;
        $this->url = $game->url;
        $this->image_url = $game->image_url;
        $this->status_id = $game->status_id;
    }

    public function createEditGame()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:3',
            'description' => '',
            'url' => 'required',
            'image_url' => 'required',
            'status_id' => '',
        ]);

        Game::updateOrCreate(['id' => $this->game_id], $validatedData);

        $this->reset();
        $this->setStatuses();
        $this->emit('refreshList');
    }

    public function render()
    {
        return view('livewire.game-form');
    }
}
