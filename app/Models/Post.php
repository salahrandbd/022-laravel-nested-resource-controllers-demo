<?php

namespace App\Models;

use App\Models\PostComment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
  use HasFactory;

  protected $fillable = ['title'];

  public function comments(): HasMany
  {
    return $this->hasMany(PostComment::class);
  }
}