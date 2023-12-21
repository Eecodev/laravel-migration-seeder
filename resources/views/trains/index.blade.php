@extends('layouts.app')

@section('title', 'Trains')

@section('content')
<main class="container">
    <h1>Trains</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Company</th>
            <th scope="col">Departing From</th>
            <th scope="col">Arriving At</th>
            <th scope="col">Departure time</th>
            <th scope="col">Arrival Time</th>
            <th scope="col">Train n.</th>
            <th scope="col">Handle</th>
            <th scope="col">Car n.</th>
            <th scope="col">On time</th>
            <th scope="col">Cancelled</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{$train->train_company}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->train_code}}</td>
                    <td>{{$train->railroad_car_number}}</td>
                    <td>{{$train->on_time}}</td>
                    <td>{{$train->cancelled}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</main>
@endsection
