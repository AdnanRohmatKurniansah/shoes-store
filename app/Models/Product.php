<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id']; // ngikut komen orang
    
    protected $with = ['category'];// with disini supaya tdk melakukan query berkali2(agar tdk lagi)

    
    public function scopeFilter($query, array $filters) 
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('name', 'like', '%' . $search . '%')
                             ->orWhere('harga', 'like', '%' . $search . '%');
             });
         }); 
         
         $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                 $query->where('slug' , $category);
             });
         });  

         
    }
     // sama saja cuma bedanya ini menggunakan arrow function 


    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}