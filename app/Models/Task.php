<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Task extends Model
{
    use HasFactory;
    protected $guarded = ['name', 'description'];


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function label(): BelongsTo
    {
        return $this->BelongsTo(Label::class);
    }

}
