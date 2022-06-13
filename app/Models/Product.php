<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasFactory;
    protected  $table='products';
    protected $fillable=[
        'id','name','subcat_id','price','discount_price','img','color','size','status','discription'
    ];
    public function cat(){

        return $this->belongsTo(Category::class, 'subcat_id');
    
}
}
