<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('notification.index', ['title' => __('Notification')]);
    }
}
