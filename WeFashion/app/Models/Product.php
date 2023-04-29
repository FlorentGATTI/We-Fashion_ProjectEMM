<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_description',
        'description',
        'price',
        'image',
        'size',
        'is_published',
        'state',
        'reference',
        'category_id'
    ];
    
    protected $nullable = [
        'image',
        'is_published',
    ];
    

    public function scopeByCategory($query, $category_id)
    {
        $category_name = Category::find($category_id)->name;

        if ($category_name == 'Homme') {
            $query->where('category_id', 1);
        } else if ($category_name == 'Femme') {
            $query->where('category_id', 2);
        }

        return $query;
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
