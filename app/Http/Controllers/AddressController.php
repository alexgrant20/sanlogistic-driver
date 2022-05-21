<?php

namespace App\Http\Controllers;

use App\Models\AddressProject;
use Illuminate\Http\Request;

class AddressController extends Controller
{
  public function get(Request $request)
  {
    $addressIdNot = $request->get('addressIdNot');
    $projectId = $request->get('projectId');

    if ($addressIdNot) {
      return AddressProject::where('address_id', '!=', $addressIdNot)->where('project_id', $projectId)->with('address')->get();
    }

    return AddressProject::where('project_id', $projectId)->with('address')->get();
  }
}