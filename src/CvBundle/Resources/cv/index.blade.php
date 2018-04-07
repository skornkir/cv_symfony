@extends('cv.layout')

@section('content')
    @include('cv.content.about')
    @include('cv.content.personal')
    @include('cv.content.experience')
    @include('cv.content.portfolio')
    @include('cv.content.contact')
@endsection

