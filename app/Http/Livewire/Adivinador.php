<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\players;
use App\Models\answers;
use Illuminate\Http\Request;

class Adivinador extends Component
{
    public function render(Request $request)
    {
        $array_answers = answers::where('id', 1)->get();
        $answers = $array_answers[0];
        $question = 'Pais';
        $player_name = '';
        $guessed = false;

        if($request->answer == 'si'){
            $guessed = true;
        }else{
            if($request->answer && !$answers->country){
                $answers->country = $request->answer;
                $question = 'Club';
            }elseif ($request->answer && !$answers->club) {
                $answers->club = $request->answer;
                $question = 'Edad';
            }elseif($request->answer && !$answers->age){
                $answers->age = $request->answer;
                $question = 'Posicion';
            }elseif($request->answer && !$answers->position){
                $answers->position = $request->answer;
                $question = 'Es este el nombre';

                $player = players::where('country', $answers->country)->
                    where('age', $answers->age)->
                    where('club', $answers->club)->
                    where('position', $answers->position)->get();

                $player_name = $player[0]->name;

                // dd($player);
                $answers->country = null;
                $answers->club = null;
                $answers->age = null;
                $answers->position = null;
            }
            $answers->save();
        }


        return view('livewire.adivinador', [
            'answers' => $answers[0],
            'question' => $question,
            'player_name' => $player_name,
            'guessed' => $guessed,
            ]);
    }
}
