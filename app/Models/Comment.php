<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  use HasFactory;

  protected $fillable = [
    'comment_content',
    'user_id',
  ];

  public function place()
  {
    $this->belongsTo(Place::class);
  }
}
