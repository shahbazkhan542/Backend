<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuplicateController extends Controller
{
    public function findDuplicates(Request $request)
    {
        $arr = $request->input('arr');

        $n = count($arr);
        $seen = [];
        $duplicates = [];

        for ($i = 0; $i < $n; $i++) {
            if (in_array($arr[$i], $seen)) {
                $duplicates[] = $arr[$i];
            } else {
                $seen[] = $arr[$i];
            }
        }

        return response()->json(['duplicates' => $duplicates]);
    }
}
