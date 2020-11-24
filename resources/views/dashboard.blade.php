@extends('layouts.locator')

@section('title') {{ config('app.name') }} @endsection
@section('page_title') {{ __('Dashboard') }}   @endsection

@section('content')
    @include('includes.cards')   
    @include('includes.calendar')
    <div class="flex flex-col lg:flex-row">
        <div class="flex-1">
           @include('includes.schedule') 
        </div>

        <div class="flex-1">
            @include('includes.activities') 
         </div>
    </div>
@endsection
