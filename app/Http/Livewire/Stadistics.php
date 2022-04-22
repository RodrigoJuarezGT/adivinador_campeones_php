<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Results;

class Stadistics extends Component
{
    public function render()
    {
        $mf_country = Results::select('country')
            ->groupBy('country')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(3)
            ->get();

        $mf_club = Results::select('club')
            ->groupBy('club')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(3)
            ->get();

        $mf_position = Results::select('position')
            ->groupBy('position')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(3)
            ->get();

        return view('livewire.stadistics', [
            'mf_country' => $mf_country,
            'mf_club' => $mf_club,
            'mf_position' => $mf_position,
         ]);
    }
}
