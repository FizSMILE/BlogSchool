<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['title', 'excerpt', 'about', 'body', 'picture', 'published_at'];
    protected $guarded = [''];
    protected $with = ['category', 'user'];

   

public function scopeFilter($query, array $filters){
   $query->when($filters['search'] ?? false, function($query, $search){
       $query->where('title', 'like', '%' . $search . '%')
             ->orWhere('body', 'like', '%' . $search . '%');
   });
}
       

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
