<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'is_active'
    ];

    public function storeData($data){
        $results = Products::create($data);
        return $results;
    }

    public function getByCondition($condition){
        $results = DB::table($this->table)
            ->where($condition);
        return $results->get();
    }

    public function updateDate($data){
        $isExist = $this->getByCondition(array(['id', $data['id']]))->first();
        if(!empty($isExist)){
            unset($data['_token']);
            $results = DB::table($this->table)
                ->where(array('id'=>$data['id']))
                ->update($data);
            return $results;
        }else{
            return null;
        }
    }

    public function removeBycondition($condition){
        $results = Products::where($condition)->delete();
        return $results;
    }
}