<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
//    protected $table = 'product_categories';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
