<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Board;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function board()
    {
        return $this->belongsTo(Board::class);
    }
}
