<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'meta'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
