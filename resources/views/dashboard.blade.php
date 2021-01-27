@extends('layouts.locator')

@section('title') {{ config('app.name') }} @endsection
@section('page_title') {{ __('Dashboard') }}   @endsection

@section('content')
    @include('widgets.cards')   
    @include('widgets.calendar')

    <div class="flex flex-col lg:flex-row overflow-hidden">
 
        <div class="flex-1">
            @include('widgets.schedule')
        </div>

        <div class="flex-1">
            @include('widgets.activities')
         </div>
    </div>

@endsection
