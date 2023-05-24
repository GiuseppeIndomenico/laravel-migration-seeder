@extends('layouts.layout')

@section('content')
    <h1 class="fw-bold text-center text-light display-2">Stazione "Tram Al Volo" <i class="fa-solid fa-train"></i></h1>
    <p class="text-center fw-semibold text-warning display-6">molto più che in semplice ritardo </p>


    <table class="table table-dark table-striped fw-semibold text-center">
        <thead>
            <tr class="text-uppercase">
                <th>Data</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Ora di partenza</th>
                <th>Ora di arrivo</th>
                <th>Numero</th>
                <th>Carrozze</th>
                <th>In orario</th>
                <th>Cancellato</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->giorno_partenza }}</td>
                    <td>{{ $train->stazione_di_partenza }}</td>
                    <td>{{ $train->Stazione_di_arrivo }}</td>
                    <td>{{ $train->orario_di_partenza }}</td>
                    <td>{{ $train->orario_di_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->Numero_carrozze }}</td>
                    <td class="{{ $train->in_orario ? '' : 'text-warning' }}">{{ $train->in_orario ? '' : 'RITARDO' }}</td>
                    <td class="{{ $train->cancellato ? 'text-danger' : '' }}">{{ $train->cancellato ? 'CANCELLATO' : '' }}
                    </td>
                </tr>
            @endforeach
    </table>
@endsection
