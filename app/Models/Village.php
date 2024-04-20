<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $lat, $long, $post;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getMeta($lat, $long, $post){
        return json_encode(["lat" => $lat, "long" => $long, "post" => $post]);
    }
}
