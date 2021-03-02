<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function construct()
    {
        $this->middleware(['auth']);
    }
    public function checkout(Request $request)
    {
        $intent = $request->user()->createSetupIntent();

        return view('pages.checkout',[
            'intent' => $intent
        ]);
    }
}
