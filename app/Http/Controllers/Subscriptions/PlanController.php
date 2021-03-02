<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function plans()
    {
        $plans = Plan::all();

        return view('pages.plans',['plans' => $plans]);
    }
}
