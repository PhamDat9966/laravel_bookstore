<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    protected $table = 'slider';
    //protected $primaryKey = 'id'; //$primaryKey mặc định là id nên ở đây không cần khai báo
    public $timestamps = false;
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function listItems($param,$options){

        $result = null;
        if($options['task'] == "admin-list-items"){
            $result = self::select('id','name','description','link','thumb','created','created_by','modified','modified_by','status')
                                ->get();

            // $result = $this->select('id','name','description','link','thumb','created','created_by','modified','modified_by','status')
            // ->get();
        }
        return $result;
    }
}
