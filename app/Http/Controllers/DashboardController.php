<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * @return View
     */
    public function __invoke(): View
    {
        return view('dashboard', ['title' => __('Dashboard')]);
    }
}
