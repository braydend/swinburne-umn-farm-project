@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
  <div class="col-md">
    <p>Dashboard</p>
    <p>Display the most recent data from all sensors</p>
    <p>maybe graphs?</p>
    @foreach($locations as $location)
      <h2>{{ $location->name }}</h2>
      @if($location->Acidity->count() > 0)
        <p>Acidity: {{ $location->Acidity->first()->acidity  }}</p>
      @endif
      @if($location->Battery->count() > 0)
        <p>Battery: {{ $location->Battery->first()->charge }}</p>
      @endif
      @if($location->Humidity->count() > 0)
        <p>Humidity: {{ $location->Humidity->first()->humidity }}</p>
      @endif
      @if($location->Moisture->count() > 0)
        <p>Moisture: {{ $location->Moisture->first()->moisture }}</p>
      @endif
      @if($location->Rain->count() > 0)
        <p>Rain: {{ $location->Rain->first()->rainfall }}</p>
      @endif
      @if($location->Temperature->count() > 0)
        <p>Temperature: {{ $location->Temperature->first()->temperature  }}</p>
      @endif
    @endforeach
  </div>
</div>
@endsection
