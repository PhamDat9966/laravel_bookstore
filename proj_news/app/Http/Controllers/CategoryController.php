<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $pathViewController  = 'admin.category.';

    public function index()
    {
        return view($this->pathViewController . 'index');
    }

    public function form($id = null)
    {
        $t = 'CategoryController - Form';
        $param = [
                    'id'=>$id,
                    'title'=>$t
        ];

        return view($this->pathViewController . 'form', ['param'=>$param]);

    }

    public function status(Request $request)
    {
        $id     = $request->route('id');
        $status = $request->route('status');
        echo '<h3 style="color: rgb(28, 9, 196)">URL: '.$request->fullUrl().'</h3>';
        echo '<h3 style="color: rgb(28, 9, 196)">ID: '.$id.'</h3>';
        echo '<h3 style="color: rgb(28, 9, 196)">STATUS: '.$status.'</h3>';

        $router = $request->route();
        echo "<pre>Parameters";
        print_r($router->parameters);
        echo "</pre>";

    }

    public function delete()
    {
        return "CategoryController - delete";
    }

}
