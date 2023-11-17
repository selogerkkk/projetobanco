<div>
    <h2>Tabela 1</h2>
    @if (count($cidades) > 0)
        <table>
            <thead>
                <tr>
                    @foreach ($cidades[0] as $key => $value)
                        <th>{{ $key }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($cidades as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->nomeFantasia }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum dado disponível na Tabela 1.</p>
    @endif
</div>
