<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['category_id','user_id','slug','tittle','author','body'];

    //! menambahkan with untuk menghindari leazy loading (problem N + 1)
    protected $with = ['category','author'];

    #[Scope]
    protected function filter(Builder $query, array $fillters): void
    {
        $query->when($fillters['search']?? false, function ($query, $search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%');
                $q->orWhere('body', 'like', '%' . $search . '%');
            });
        });
        $query->when($fillters['category']?? false, function ($query, $category) {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
        $query->when($fillters['author']?? false, fn($query, $author) => 
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
