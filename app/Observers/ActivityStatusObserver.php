<?php

namespace App\Observers;

use App\Models\Activity;
use App\Models\ActivityPayment;
use App\Models\ActivityStatus;
use Illuminate\Support\Facades\DB;

class ActivityStatusObserver
{
  /**
   * Handle the ActivityStatus "created" event.
   *
   * @param  \App\Models\ActivityStatus  $activityStatus
   * @return void
   */
  public function created(ActivityStatus $activityStatus)
  {
    DB::beginTransaction();

    Activity::find($activityStatus->activity_id)->update(['activity_status_id' => $activityStatus->id]);

    ActivityPayment::create([
      'activity_status_id' => $activityStatus->id,
      'bbm_amount' => 0,
      'toll_amount' => 0,
      'parking_amount' => 0,
      'retribution_amount' => 0,
    ]);

    DB::commit();
  }

  /**
   * Handle the ActivityStatus "updated" event.
   *
   * @param  \App\Models\ActivityStatus  $activityStatus
   * @return void
   */
  public function updated(ActivityStatus $activityStatus)
  {
    //
  }

  /**
   * Handle the ActivityStatus "deleted" event.
   *
   * @param  \App\Models\ActivityStatus  $activityStatus
   * @return void
   */
  public function deleted(ActivityStatus $activityStatus)
  {
    //
  }

  /**
   * Handle the ActivityStatus "restored" event.
   *
   * @param  \App\Models\ActivityStatus  $activityStatus
   * @return void
   */
  public function restored(ActivityStatus $activityStatus)
  {
    //
  }

  /**
   * Handle the ActivityStatus "force deleted" event.
   *
   * @param  \App\Models\ActivityStatus  $activityStatus
   * @return void
   */
  public function forceDeleted(ActivityStatus $activityStatus)
  {
    //
  }
}