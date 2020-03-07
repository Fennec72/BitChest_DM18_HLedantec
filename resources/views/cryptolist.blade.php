@extends('template')

@section('content')

                <div class="title m-b-md">
                    Liste des cryptomonnaies
                </div>



<table class="table is-hoverable">
    <thead>
        <tr>
            <th>cryptomonnaie</th>
            <th>sigle</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cryptos as $crypto)
            <tr>
                <td><a href="{{ route('cryptoDetails',$crypto->id_crypto) }}">{{ $crypto->crypto_name }}</a></td>
                <td><a href="{{ route('cryptoDetails',$crypto->id_crypto) }}"><strong>{{ $crypto->crypto_code }}</strong></a></td>
                <td>
                    <a href="{{ route('cryptoDetails',$crypto->id_crypto) }}">
                        <img src="{{ asset('assets/img/') }}/{{ $crypto->crypto_logo }}.png" alt="{{ $crypto->crypto_logo }} Logo" width="32px">
                    </a>
                </td>



            </tr>
        @endforeach
    </tbody>
</table>

@endsection





