@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
  <div class="col-md">
    <div class="row">
      <div class="col-md logos">
        <img src="{{ URL::to('images/umn_logo.jpg') }}" alt="UMN logo" style="margin-right: 10%;"/>
        <img src="{{ URL::to('images/swinburne_logo.png') }}" alt="Swinburne logo"/>
      </div>
    </div>
    <div class="row">
      <div class="col-md title">
        <h2 class="display-2">Swinburne UMN Farm</h2>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md">
    <h4 class="display-4 center">Latest Data</h4>
  </div>
</div>
<div class="row">
    @foreach($locations as $location)
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
      <a href="{{ URL::to('/location/' . $location->id) }}" class="btn btn-primary">View all data</a>
      </div>
    @endforeach
</div>
@endsection
