<?php

namespace App\Http\Controllers\bookstore\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    private $pathViewController  = 'bookstore.backend.dashboard.';
    private $controllerName      = 'dashboard';

    public function __construct()
    {
      // share bien $controllerName cho all view
      View::share('controllerName',$this->controllerName);
    }

    public function index()
    {
        echo "<h3>Backend - dashboard</h3>";
        return view($this->pathViewController . 'index',[

        ]);
    }

}
