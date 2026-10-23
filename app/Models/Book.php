<?php

namespace App\Models;

// app/Models/Book.php (bagian yang berubah dari isi otomatis)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    protected $fillable = ['category_id', 'title', 'author_name', 'price'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}

