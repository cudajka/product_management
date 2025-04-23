<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'description', 'price', 'category_id', 'brand_id'
    ];
    public $incrementing = true;
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';
    public function productCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function color(){
        return $this->belongsToMany(Color::class, 'product_variants');
    }
    public function size(){
        return $this->belongsToMany(Size::class, 'product_variants');
    }
    public function images(){
        return $this->hasMany(ProductImage::class, 'product_id');
    }
    public function productVariant(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }
}
