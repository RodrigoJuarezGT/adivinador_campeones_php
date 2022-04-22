<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Results;

class ResultsTable extends Component
{
    public function render()
    {
        $results = Results::latest()->get();
        return view('livewire.results-table', compact('results'));
    }
}
