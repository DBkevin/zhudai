@extends('layouts.default')
@section('title','当月特惠')
@section('styles')
<link rel="stylesheet" href="{{asset('css/promotion.css')}}">
@endsection
@section('content')
    {!!$hot->body!!}
@stop();