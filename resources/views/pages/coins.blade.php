@extends('layouts.main')

@section('content')
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Rank</th>
        <th scope="col">Name</th>
        <th scope="col">Price (USD)</th>
        <th scope="col">Volume (24h)</th>
        <th scope="col">Marketcap</th>
        <th scope="col">Change (1h)</th>
        <th scope="col">Change (24h)</th>
        <th scope="col">Change (7d)</th>
        <th scope="col">Chart (24h)</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($coinList as $coin)
        <tr>
            <th scope="row">{{ $coin->rank }}</th>
            <td>{{ $coin->name  . " (" . $coin->symbol . ")" }}</td>
            <td>{{ $coin->price > 1  ? round($coin->price) : round($coin->price, 5)  }}</td>
            <td>{{ round($coin->vol24h) }}</td>
            <td>{{ $coin->marketcap }}</td>
            <td class="text-light bg-{{ $coin->change1h > 0  ? 'success' : 'danger' }}">{{ $coin->change1h   }} %</td>
            <td class="text-light bg-{{ $coin->change24h > 0  ? 'success' : 'danger' }}">{{ $coin->change24h }} %</td>
            <td class="text-light bg-{{ $coin->change7d > 0  ? 'success' : 'danger' }}">{{ $coin->change7d }} %</td>
            <td>Coming soon..</td>
        </tr>
    @endforeach
    </tbody>
</table>


@stop

