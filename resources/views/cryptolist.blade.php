@extends('template')

@section('content')

                <div class="title m-b-md">
                    Liste des cryptomonnaies
                </div>

                <div>
                    <ol>
                    @foreach ($cryptos as $crypto)

                        <li>{{ $crypto->crypto_name }} (sigle: {{ $crypto->crypto_code }})</li>

                    @endforeach
                    </ol>
                </div>

<table class="table is-hoverable">
    <thead>
        <tr>
            <th>cryptomonnaie</th>
            <th>sigle</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cryptos as $crypto)
            <tr>
                <td><a href="{{ route('cryptoDetails',$crypto->id_crypto) }}">{{ $crypto->crypto_name }}</a></td>
                <td><a href="{{ route('cryptoDetails',$crypto->id_crypto) }}"><strong>{{ $crypto->crypto_code }}</strong></a></td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection





