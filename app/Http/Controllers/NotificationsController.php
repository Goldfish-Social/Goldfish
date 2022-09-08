<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function index(Request $request)
    {
        auth()->user()->unreadNotifications->markAsRead();

        $notifications = auth()->user()->notifications()
        ->latest()
        ->paginate();

        if ($request->wantsJson()) {
            return $notifications;
        }

        return Inertia::render('Notifications/Index', [
            'notifications'     => $notifications
        ]);
    }
}
