<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'content'];
    protected $guarded = ['slug', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }


    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(string|null $value) => $value !== null ? asset('storage/' . $value) : null,
        );
    }

}
