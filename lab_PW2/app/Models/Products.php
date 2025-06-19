<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'is_active',
        'category_id',
        'user_id'
    ];

    public function storeData($data){
        return self::create($data);
    }

    public function getByCondition($condition){
        return self::where($condition)->get();
    }

    public function updateData($data){
        $product = self::find($data['id']);
        if ($product) {
            unset($data['_token']);
            $product->update($data);
            return $product;
        }
        return null;
    }

    public function removeByCondition($condition){
        return self::where($condition)->delete();
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
