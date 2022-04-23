<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\players;
use App\Models\Results;
use App\Models\answers;
use Illuminate\Http\Request;

class Adivinador extends Component
{
    public function render(Request $request)
    {
        $array_answers = answers::where('id', 1)->get();
        $answers = $array_answers[0];
        $question = 'Nacionalidad';
        $player_name = '';

        if($request->answer == 'si'){
            $player_to_save = players::where('country', $answers->country)->
                where('age', $answers->age)->
                where('club', $answers->club)->
                where('position', $answers->position)->get();

            $result = Results::create([
                'name' => $player_to_save[0]->name,
                'age' => $player_to_save[0]->age,
                'country' => $player_to_save[0]->country,
                'club' => $player_to_save[0]->club,
                'position' => $player_to_save[0]->position,
                'result' => 'si',
            ]);
            $result->save();

            $answers->country = null;
            $answers->club = null;
            $answers->age = null;
            $answers->position = null;
            $answers->save();

        }elseif ($request->answer == 'no') {
            $player_to_save = players::where('country', $answers->country)->
                where('age', $answers->age)->
                where('club', $answers->club)->
                where('position', $answers->position)->get();

            $result = Results::create([
                'name' => $player_to_save[0]->name,
                'age' => $player_to_save[0]->age,
                'country' => $player_to_save[0]->country,
                'club' => $player_to_save[0]->club,
                'position' => $player_to_save[0]->position,
                'result' => 'no',
            ]);
            $result->save();

            $answers->country = null;
            $answers->club = null;
            $answers->age = null;
            $answers->position = null;
            $answers->save();
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

                    // dd($player);

                if( empty($player) ){
                    $player_name = $player[0]->name;
                }else{
                    $answers->country = null;
                    $answers->club = null;
                    $answers->age = null;
                    $answers->position = null;
                    $answers->save();
                }

            }
            $answers->save();
        }


        return view('livewire.adivinador', [
            'answers' => $answers[0],
            'question' => $question,
            'player_name' => $player_name,
            ]);
    }
}
