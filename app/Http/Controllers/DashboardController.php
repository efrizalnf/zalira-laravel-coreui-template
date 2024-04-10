<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static function index()
    {
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        return compact('widget');
    }
}
