@extends('layouts.app')

@section('main')
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Treno</th>
                    <th scope="col">Partenza</th>
                    <th scope="col">Arrivo</th>
                    <th scope="col">Orario Partenza</th>
                    <th scope="col">Orario Arrivo</th>
                    <th scope="col">Binario</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $elem)
                    <tr>
                        <td>{{ $elem['treno'] }}</td>
                        <td>{{ $elem['partenza'] }}</td>
                        <td>{{ $elem['arrivo'] }}</td>
                        <td>{{ $elem['orario_partenza'] }}</td>
                        <td>{{ $elem['orario_arrivo'] }}</td>
                        <td>{{ $elem['binario'] }}</td>
                        <td>{{ $elem['prezzo'] }} $</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
