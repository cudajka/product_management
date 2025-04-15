<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasAttributes;
//    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [''];
    public $incrementing = true;
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';
    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function product_variant()
    {
        return $this->hasMany(ProductVariant::class);
    }
    public function color(){
        return $this->belongsToMany(Color::class, 'product_variants');
    }
    public function size(){
        return $this->belongsToMany(Size::class, 'product_variants');
    }
}
