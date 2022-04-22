<div>
    @if($results)
    <table class="table-fill">
        <thead class="thead-light">
            <tr>
                <th colspan="5">RESULTADOS</th>
            </tr>
        </thead>
        <tbody class="table-hover">
            @foreach($results as $result)
                <tr>
                    <td class="text-left">{{ $result->name }}</td>
                    <td class="text-left">{{ $result->country }}</td>
                    <td class="text-left">{{ $result->age }}</td>
                    <td class="text-left">{{ $result->club }}</td>
                    <td class="text-left">
                        @if( @$result->result == 'si' )
                            <span style="color: rgb(28, 218, 28)">ADIVINADO</span>
                        @else
                            <span style="color: rgb(228, 15, 61)">NO ADIVINADO</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
