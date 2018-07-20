@extends('layouts.app')

@section('title', $location->name)

@section('content')
<div class="row">
  <div class="col-md">
    <a href="{{ URL::to('/') }}">Back home</a>
  </div>
</div>
<div class="row">
  <div class="col-md">
    <h4 class="display-4 center">{{ $location->name }}</h4>
  </div>
</div>
<div class="row">
    <div class="col-md-4">
      <h2>{{ $location->name }}</h2 >
      @if($location->Acidity->count() > 0)
        <p>Acidity: {{ $location->Acidity->sortByDesc('id')->first()->acidity  }}</p>
      @endif
      @if($location->Battery->count() > 0)
        <p>Battery: {{ $location->Battery->sortByDesc('id')->first()->charge }}</p>
      @endif
      @if($location->Humidity->count() > 0)
        <p>Humidity: {{ $location->Humidity->sortByDesc('id')->first()->humidity }}</p>
      @endif
      @if($location->Moisture->count() > 0)
        <p>Moisture: {{ $location->Moisture->sortByDesc('id')->first()->moisture }}</p>
      @endif
      @if($location->Rain->count() > 0)
        <p>Rain: {{ $location->Rain->sortByDesc('id')->first()->rainfall }}</p>
      @endif
      @if($location->Temperature->count() > 0)
        <p>Temperature: {{ $location->Temperature->sortByDesc('id')->first()->temperature  }}</p>
      @endif
      </div>
</div>
@endsection
