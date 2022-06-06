@extends('layouts.main')

@section('container')
  <form class="px-3 needs-validation" id="myForm" method="POST" enctype="multipart/form-data" style="overflow-x: hidden;"
    novalidate>

    <div class="row g-5 mb-3">
      <div class="col-xxl-8 col-md-12 order-xl-5">
        <button class="text-primary fs-4 bg-transparent border-none p-0 d-flex align-items-center" id="collapseBtn"
          type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false"
          aria-controls="collapseWidthExample">
          Trip Detail <i id="tripIcon" class="ms-2 text-white fas fa-arrow-alt-circle-down fa-sm"></i>
        </button>
        <hr>
        <div class="collapse" id="collapseWidthExample">
          <div class="row g-3">
            <div class="col-md-3">
              <label for="departure_odo" class="form-label fs-5">Odometer Awal</label>
              <input type="text" id="departure_odo" class="form-control form-control-lg form-dark" disabled>
            </div>
            <div class="col-md-3">
              <label for="do_number" class="form-label fs-5">Nomer DO</label>
              <input type="text" id="do_number" class="form-control form-control-lg form-dark" disabled>
            </div>
            <div class="col-md-3">
              <label for="license_plate" class="form-label fs-5">Plat Nomer</label>
              <input type="text" id="license_plate" class="form-control form-control-lg form-dark" disabled>
            </div>
            <div class="col-md-3">
              <label for="departure_name" class="form-label fs-5">Lokasi Awal</label>
              <input type="text" id="departure_name" class="form-control form-control-lg form-dark" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-md-6 order-xl-1">
        <h4 class="text-blue">Data Input</h4>
        <hr>
        <div class="row g-3">
          <div class="col-md-6">
            <label for="arrival_id" class="form-label fs-5">Lokasi Tujuan</label>
            <select id="arrival_id" name="arrival_id" class="form-dark form-select form-select-lg" required>
              <option value="" class="d-none" selected></option>
              <?php

              ?>

            </select>
          </div>

          <div class="col-md-6">
            <label for="arrival_odo" class="form-label fs-5">Odometer</label>
            <input type="number" id="arrival_odo" name="arrival_odo" class="form-control form-control-lg form-dark"
              required>
            <div class="invalid-feedback fs-6">
              Silahkan masukan odo yang valid
            </div>
          </div>

          <div class="col-md-12">
            <div class="d-flex flex-column">
              <div class="mb-3">
                <label for="arrival_odo_img" class="form-label fs-5">Foto Odometer</label>
                <input class="form-control form-dark form-control-lg" id="arrival_odo_img" name="arrival_odo_img"
                  accept="image/*" onchange="validateSize(this, 'arrival_odo_img', 'arrival_odo_img_preview')"
                  type="file">
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <img src="" style="height: 300px;" id="arrival_odo_img_preview" class="img-fluid zoom m-auto d-block mw-100"
              alt="">
          </div>
        </div>
      </div>

      <div class="col-xxl-4 col-md-6 order-xl-2">
        <h4 class="text-blue">BBM</h4>
        <hr>
        <div class="row g-3 row-cols-1">
          <div>
            <label for="bbm_amount" class="form-label fs-5">Jumlah Pembelian BBM</label>
            <input type="text" id="bbm_amount" name="bbm_amount" class="form-control form-control-lg form-dark">
          </div>
          <div>
            <div class="d-flex flex-column">
              <div class="mb-3">
                <label for="bbm_img" class="form-label fs-5">Foto Pembelian BBM</label>
                <input class="form-control form-dark form-control-lg" id="bbm_img" name="bbm_img" accept="image/*"
                  onchange="validateSize(this, 'bbm_img', 'bbm_img_preview')" type="file">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <img src="" style="height: 300px;" class="img-fluid zoom m-auto d-block mw-100" id="bbm_img_preview" alt="">
          </div>
        </div>
      </div>

      <div class="col-xxl-4 col-md-6 order-xl-3">
        <h4 class="text-blue">Toll</h4>
        <hr>
        <div class="row g-3 row-cols-1">
          <div>
            <label for="toll_amount" class="form-label fs-5">Biaya Toll</label>
            <input type="text" id="toll_amount" name="toll_amount" class="form-control form-control-lg form-dark">
          </div>
          <div>
            <div class="d-flex flex-column">
              <div class="mb-3">
                <label for="toll_img" class="form-label fs-5">Foto Toll</label>
                <input class="form-control form-dark form-control-lg" id="toll_img" name="toll_img" accept="image/*"
                  onchange="validateSize(this, 'toll_img', 'toll_img_preview')" type="file">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <img src="" style="height: 300px;" class="img-fluid zoom m-auto d-block mw-100" id="toll_img_preview" alt="">
          </div>
        </div>
      </div>

      <div class="col-xxl-4 col-md-6 order-xl-4">
        <h4 class="text-blue">Park</h4>
        <hr>
        <div class="row g-3 row-cols-1">
          <div>
            <label for="park_amount" class="form-label fs-5">Biaya Parkir</label>
            <input type="text" id="park_amount" name="park_amount" class="form-control form-control-lg form-dark">
          </div>
          <div>
            <div class="d-flex flex-column">
              <div class="mb-3">
                <label for="park_img" class="form-label fs-5">Foto Biaya Parkir</label>
                <input class="form-control form-dark form-control-lg" id="park_img" name="park_img" accept="image/*"
                  onchange="validateSize(this, 'park_img', 'park_img_preview')" type="file">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <img src="" style="height: 300px;" class="img-fluid zoom m-auto d-block mw-100" id="park_img_preview" alt="">
          </div>
        </div>
      </div>
      <div class="col-12 order-last">
        <button id="end" type="submit" class="ms-auto d-block btn btn-lg btn-primary">
          <span class="spinner-border spinner-border-sm spinnerButton" style="display: none;" role="status"
            aria-hidden="true"></span>
          Submit
        </button>
      </div>

    </div>
  </form>
@endsection

@section('footJS')
@endsection
