@extends('layouts.main')

@section('container')
  <div class="container-fluid">
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-xxl-5 g-4">
      {{-- TO-DO : SIMPLIFY --}}
      <?php if(empty($_SESSION['activity_id'])){ ?>
      <div class="">
        <a href="" class="card bg-blue">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-clipboard-plus-fill fs-1 mb-3"></i>
              <span class="fw-bold fs-5 text-center">Activity</span>
            </div>
          </div>
        </a>
      </div>
      <?php } else{ ?>
      <div class="">
        <a href="activity.php?source=update" class="card bg-green">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-clipboard-plus-fill fs-1 mb-3"></i>
              <span class="fw-bold fs-5 text-center">Activity</span>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
      <div class="">
        <a class="card bg-brown">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-clipboard2-check-fill fs-1 mb-3"></i>
              <span class="fw-bold fs-5 text-center">Checklist</span>
            </div>
          </div>
        </a>
      </div>
      <x-menu-item>
        <x-slot name="backgroundColor">bg-purplish</x-slot>
        <x-slot name="icon">bi-arrow-clockwise</x-slot>
        <x-slot name="text">Perjalanan</x-slot>
      </x-menu-item>
      <x-menu-item>
        <x-slot name="backgroundColor">bg-darkGreen</x-slot>
        <x-slot name="icon">bi-cash-coin</x-slot>
        <x-slot name="text">Keuangan</x-slot>
      </x-menu-item>
    </div>
  </div>
@endsection
