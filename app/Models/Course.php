<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['name','user_id', 'start_date', 'end_date', 'category_id'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

}
