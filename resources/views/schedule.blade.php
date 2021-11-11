@extends('layouts.dashboard')

@section('content')
  @if (request()->routeIs('schedule'))
      @section('title', 'Create A Schedule')                    
      @livewire('schedule')
  @elseif (request()->routeIs('allSchedule'))
    @livewire('all-schedule')
  @else
      @section('title', 'Course')
      @livewire("course")
  @endif
@endsection