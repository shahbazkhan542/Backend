<?php

// GroupByOwnersController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GroupByOwnersService;

class GroupByOwnersController extends Controller
{
    public function groupByOwners(Request $request, GroupByOwnersService $groupByOwnersService)
    {
        $files = $request->input('files');

        $result = $groupByOwnersService->groupByOwners($files);

        return response()->json($result);
    }
}

