<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playerquest;

class QuestController extends Controller
{
    public function index() {
        $questTotal = playerquest::count();
        $questCompleted = playerquest::where('valid', 1)->count();
        return $questCompleted*100/$questTotal;
    }
}
