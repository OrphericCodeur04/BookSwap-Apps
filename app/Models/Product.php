<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'color',
        'in_stock',
        'photo'
    ];

    const COLOR_LIST = [ 
        'red' => 'Red',
        'green' => 'Green',
        'blue' => 'Blue',
    ];

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class);
    }
}
