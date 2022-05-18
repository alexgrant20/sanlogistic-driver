@extends('layouts.main')

@section('headCSS')
  @yield('add_headCSS')
@endsection

@section('headJS')
  @yield('add_headJS')
@endsection

@section('container')
  @yield('container')
@endsection

@section('footJS')
  @yield('add_footJS')
@endsection
