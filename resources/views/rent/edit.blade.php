@extends('layouts.locator');

@section('title') Location Edit @endsection
@section('page_title') Modifier @endsection

@section('content')
    @dump($rent->paiements)
    @dump($rent->depenses)
@endsection