<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\players;
use Illuminate\Http\Request;

class Adivinador extends Component
{
    public function render(Request $request)
    {
        $country = $request->country;
        $club = $request->club;

        $players = players::
            where('country', $country)
            ->get();



        return view('livewire.adivinador', compact('players'));
    }
}
