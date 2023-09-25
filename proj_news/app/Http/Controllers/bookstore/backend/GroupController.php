<?php

namespace App\Http\Controllers\bookstore\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\bookstore\backend\GroupModel as MainModel; // Thay đổi kết nối database tại tập tinh .env

class GroupController extends Controller
{
    private $pathViewController  = 'bookstore.backend.group.';
    private $controllerName      = 'group';
    private $model;

    public function __construct()
    {
        $this->model = new MainModel();
      // share bien $controllerName cho all view
      View::share('controllerName',$this->controllerName);
    }

    public function index()
    {
        $items = $this->model->listItems(null,['task' => "group-list-items"]);
        // foreach($items as $key=>$item){ // Nếu dùng foreach trong Laravel thì nên echo $key và $value trong vòng lặp để nó xuất kết quả gì
        //     echo $item->attributes;

        //     echo "<h3 style='color:blue'>".$key."</h3>";
        //     echo "<h3 style='color:red'>".$item."</h3>";
        // }

        //echo "<h3>Backend - group - index</h3>";
        return view($this->pathViewController . 'group-list',[
                'param'=>$items
        ]);
    }

    public function list()
    {
        echo "<h3>Backend - group - list</h3>";
        // return view($this->pathViewController . 'group-list',[

        // ]);
    }
}
