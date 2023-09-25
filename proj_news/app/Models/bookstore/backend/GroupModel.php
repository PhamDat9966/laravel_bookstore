<?php

namespace App\Models\bookstore\backend;

use Illuminate\Database\Eloquent\Model;

class GroupModel extends Model
{
    protected $table = 'group';
    //protected $primaryKey = 'id'; //$primaryKey mặc định là id nên ở đây không cần khai báo
    public $timestamps = false;
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function listItems($param,$options){

        $result = null;
        if($options['task'] == "group-list-items"){

            $result = self::select('id','name','group_acp','created','created_by','modified','modified_by','status','ordering','privilege_id')
                                ->get();

        }
        return $result;
    }
}
