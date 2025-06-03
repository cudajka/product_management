<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;
    protected $table = 'product_variants';

    protected $fillable = ['product_id', 'size_id', 'quantity'];
    public $incrementing = true;
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';
    public function product(){
        return $this->belongsTo(Product::class);
    }
//    public function color(){
//        return $this->belongsTo(Color::class);
//    }
    public function size(){
        return $this->belongsTo(Size::class);
    }
    public function getProductNameAttribute()
    {
        return $this->product->name ?? '';
    }
//    public function getColorNameAttribute()
//    {
//        return $this->color->name ?? '';
//    }
    public function getSizeNumberAttribute()
    {
        return $this->size->number ?? '';
    }

}
