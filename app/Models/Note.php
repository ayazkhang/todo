<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Note extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id', 'title', 'name', 'content', 'due_date', 'is_done'
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value),
        );
    }

}
