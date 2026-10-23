<?php

namespace App\Models;

// app/Models/Category.php (bagian yang berubah dari isi otomatis)
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

}
