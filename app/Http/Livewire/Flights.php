<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Flight;
use Livewire\WithPagination;

class Flights extends Component
{
    use WithPagination;

    public $search = '';


    public function render()
    {
        return view('livewire.flights',[
            'flights'=>Flight::search('airline', $this->search)->paginate(10)
        ]);
    }
}
