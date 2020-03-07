@extends('template')

@section('content')

    <div class="title m-b-md">
        <img src="{{ asset('assets/img/') }}/{{ $data[0]->crypto_logo }}.png" alt="{{ $data[0]->crypto_logo }} Logo" width="32px">
        <p> {{ $data[0]->crypto_name }}</p>
    </div>




    <div id="pop_div"></div>

    @areachart('Population', 'pop_div')

    <table class="table is-hoverable">
        <thead>
            <tr>
                <th>Date</th>
                <th>Cotation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $history)
                <tr>
                <td>{{$history->value_date}}</td>
                <td>{{$history->valueCotation}} €</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection





