<div>
@if($guessed)
<h1>GAME OVER</h1>
<h2>Estabas pensando en {{ $player_name }}</h2>
@else
    ¿{{ $question }} del jugador?
    @if($player_name)
    <h1>{{ $player_name }}</h1>
    @endif
@endif
</div>
