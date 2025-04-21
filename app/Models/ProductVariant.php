<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = ['name', ''];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function color(){
        return $this->belongsTo(Color::class);
    }
    public function size(){
        return $this->belongsTo(Size::class);
    }
    public function getProductNameAttribute()
    {
        return $this->product->name ?? '';
    }
    public function getColorNameAttribute()
    {
        return $this->color->name ?? '';
    }
    public function getSizeNumberAttribute()
    {
        return $this->size->number ?? '';
    }

}
