<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post_tag;
class Tag extends Model
{
    public function post_tags(){
        return $this->hasMany(Post_tag::class);
    }
    use HasFactory;
}
