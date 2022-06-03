<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityStatus;
use App\Models\User;
use App\Models\Vehicle;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ActivityController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('activities.create', [
      'title' => 'Create Activity'
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'do_number' => 'required|string',
      'arrival_location_id' => 'required|string',
      'vehicle_id' => 'required|string',
      'do_image' => 'image',
      'departure_odo_image' => 'image',
    ]);


    $imageFiles = ['do_image' => 'do_image', 'departure_odo_image' => 'departure_odo_image'];
    $timestamp = now()->timestamp;
    $data = $request->post();
    unset($data['_token']);

    foreach ($imageFiles as $key => $imageFile) {
      $extension = $validated[$imageFile]->extension();
      // Path for temp file
      $filepath = $validated[$imageFile]->getPathName();
      // Path for item withour storage
      $outputFilePath = "{$imageFile}/{$validated['do_number']}-{$timestamp}.{$extension}";
      // Full path for tinify
      $outputFileFullPath = "storage/{$outputFilePath}";
      $data[$key] = $outputFilePath;

      try {
        \Tinify\setKey(env("TINIFY_API_KEY"));
        $source = \Tinify\fromFile($filepath);
        $source->toFile($outputFileFullPath);
      } catch (Exception $e) {
        dd($e->getMessage());
      }
    }

    $data['do_date'] = now();
    $data['user_id'] = auth()->user()->id;
    $data['project_id'] = Vehicle::where('id', $data['vehicle_id'])->first()->project_id;

    $activity = Activity::create($data);

    User::where('id', auth()->user()->id)->update(['last_activity_id' => $activity->id]);
    ActivityStatus::create(['status' => 'draft', 'activity_id' => $activity->id]);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Activity  $activity
   * @return \Illuminate\Http\Response
   */
  public function show(Activity $activity)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Activity  $activity
   * @return \Illuminate\Http\Response
   */
  public function edit(Activity $activity)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Activity  $activity
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Activity $activity)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Activity  $activity
   * @return \Illuminate\Http\Response
   */
  public function destroy(Activity $activity)
  {
    //
  }
}