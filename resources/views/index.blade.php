@extends('layouts.main')

@section('container')
  <div class="bg-main min-vh-100 postion-relative" style="padding-bottom: 100px;">
    <div
      style="background: url('./img/test.jpg') no-repeat center /cover; width: 100%; max-width:100%; height: 200px; filter:blur(4px)">
    </div>
    <div class="card ba-secondary shadow border-none mb-3"
      style="position: absolute; top:150px; left: 0; right: 0;  margin:0 auto; width: 85%; max-width: 400px;">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <img src="" alt="" class="rounded-circle" width="60" height="60">
          <h3>Test</h3>
        </div>
      </div>
    </div>
    <main class="px-3 w-100" style="margin-top: 100px;">
      <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-xxl-5 g-4">
        <?php if(empty($_SESSION['activity_id'])){ ?>
        <div class="">
          <a href="activity.php?source=create" class="card bg-blue">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center justify-content-center">
                <i class="fas fa-3x mb-3 fa-plus-square"></i>
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
                <i class="fas fa-3x mb-3 fa-flag-checkered"></i>
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
                <i class="bi bi-apple"></i>
                <span class="fw-bold fs-5 text-center">Checklist</span>
              </div>
            </div>
          </a>
        </div>
        <div class="">
          <a class="card bg-purplish">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center justify-content-center">
                <i class="fas fa-3x mb-3 fa-history"></i>
                <span class="fw-bold fs-5 text-center">Perjalanan</span>
              </div>
            </div>
          </a>
        </div>
        <div class="">
          <a class="card bg-darkGreen">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center justify-content-center">
                <i class="text-warning fas fa-3x mb-3 fa-coins"></i>
                <span class="fw-bold fs-5 text-center">Keuangan</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </main>
  </div>
@endsection
