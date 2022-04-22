<div>
    @if($mf_country)
        <h2 style="color: white">Datos mas populares</h2>
    @endif
    <div style="display:">
        <div>
            @if($mf_country)
            <table class="table-fill">
                <thead class="thead-light">
                    <tr>
                        <th colspan="5">Paises</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    @foreach($mf_country as $country)
                        <tr>
                            <td class="text-left">{{ $country->country }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
        <div>
            @if($mf_club)
            <table class="table-fill">
                <thead class="thead-light">
                    <tr>
                        <th colspan="5">Clubes</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    @foreach($mf_club as $club)
                        <tr>
                            <td class="text-left">{{ $club->club }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
        <div>
            @if($mf_position)
            <table class="table-fill">
                <thead class="thead-light">
                    <tr>
                        <th colspan="5">Posicion</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    @foreach($mf_position as $position)
                        <tr>
                            <td class="text-left">{{ $position->position }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>

</div>
