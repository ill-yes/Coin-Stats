@extends('layouts.main')

@section('imports')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rg-1.0.3/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.css"/>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rg-1.0.3/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>

@stop

@section('content')
<br>
<script>
    $(document).ready(function() {
        $('#coinTable').DataTable();
    } );
</script>


<table id="coinTable" class="table table-striped">
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
            <td>{{ ( $coin->price > 1  ? $coin->priceConverter(2, $coin->price )  : $coin->priceConverter(5, $coin->price ) )  . ' $' }}</td>
            <td>{{ $coin->priceConverter(0, $coin->vol24h) . ' $' }}</td>
            <td>{{ $coin->priceConverter(0, $coin->marketcap) . ' $' }}</td>
            <td class="text-light bg-{{ $coin->change1h > 0  ? 'success' : 'danger' }}">{{ $coin->change1h   }} %</td>
            <td class="text-light bg-{{ $coin->change24h > 0  ? 'success' : 'danger' }}">{{ $coin->change24h }} %</td>
            <td class="text-light bg-{{ $coin->change7d > 0  ? 'success' : 'danger' }}">{{ $coin->change7d }} %</td>
            <td>Coming soon.. {{ $coin->priceConverter(2, $coin->price) }} </td>
        </tr>
    @endforeach
    </tbody>
</table>





@stop

