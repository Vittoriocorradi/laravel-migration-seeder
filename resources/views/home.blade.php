@extends('layouts.app')

@section('page-title')
    Laravel Migration Seeder
@endsection

@section('page-main')
    <table class="table">
        <thead>
            <tr>
                <th>Compagnia</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice treno</th>
                <th>Numero di carrozze</th>
                <th>In orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_id }}</td>
                    <td>{{ $train->n_carriages }}</td>
                    <td>{{ $train->in_time === 1 ? 'Sì' : 'No' }}</td>
                    <td>{{ $train->cancelled === 1 ? 'Sì' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection