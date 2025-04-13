<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasAttributes;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [''];
    public $incrementing = true;
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';
    public function product_categories(){
        return $this->belongsTo(ProductCategory::class, 'product_id')->withDefault();
    }
    public function brands(){
        return $this->belongsTo(Brand::class, 'brand_id')->withDefault();
    }
    public function product_variants(){
        return $this->hasMany(ProductVariant::class);
    }
    public function colors(){
        return $this->belongsToMany(Color::class, 'product_variants');
    }
    public function sizes(){
        return $this->belongsToMany(Size::class, 'product_variants');
    }
}
