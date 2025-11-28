<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['category_id','slug','tittle','author','body'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
