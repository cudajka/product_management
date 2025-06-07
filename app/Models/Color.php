<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $table = 'colors';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['name', 'code'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function products(){
        return $this->hasMany(Product::class);
    }
//    public function variants(){
//        return $this->hasMany(ProductVariant::class);
//    }
}
