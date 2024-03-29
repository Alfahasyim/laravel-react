<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProvinceController extends Controller
{
    public function getAllProvince()
    {
      $province = DB::table('provinces')->get();

      return response()->json([
        'message' => 'success',
        'data' => $province
      ],200);
    }

    public function filterProvince(Request $request)
    {
      $filter  = strtoupper($request->filter);
      $provinces = DB::table('provinces')->where('name', 'like', "%$filter%")->get();

      return response()->json([
        'message' => 'success',
        'data' => $provinces
      ],200);
    }
    public function tampil()
    {
      $tabel = DB::table('provinces')->get();
      return view('tampil')->with($tabel);
    }
}
