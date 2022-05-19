@extends('layouts.main')

@section('container')
  <div class="container-fluid">
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-xxl-5 g-4">
      <x-menu-item>
        <x-slot name="backgroundColor">{{ empty($_SESSION['activity_id']) ? 'bg-blue' : 'bg-green' }}</x-slot>
        <x-slot name="icon">{{ empty($_SESSION['activity_id']) ? 'bi-clipboard-plus-fill' : 'bi-flag' }}</x-slot>
        <x-slot name="text">Activity</x-slot>
        <x-slot name="link">{{ empty($_SESSION['activity_id']) ? '#' : '#' }}</x-slot>
      </x-menu-item>
      <x-menu-item>
        <x-slot name="backgroundColor">bg-brown</x-slot>
        <x-slot name="icon">bi-clipboard2-check-fill</x-slot>
        <x-slot name="text">Checklist</x-slot>
        <x-slot name="link">#</x-slot>
      </x-menu-item>
      <x-menu-item>
        <x-slot name="backgroundColor">bg-purplish</x-slot>
        <x-slot name="icon">bi-arrow-clockwise</x-slot>
        <x-slot name="text">Perjalanan</x-slot>
        <x-slot name="link">#</x-slot>
      </x-menu-item>
      <x-menu-item>
        <x-slot name="backgroundColor">bg-darkGreen</x-slot>
        <x-slot name="icon">bi-cash-coin</x-slot>
        <x-slot name="text">Keuangan</x-slot>
        <x-slot name="link">#</x-slot>
      </x-menu-item>
    </div>
  </div>
@endsection
