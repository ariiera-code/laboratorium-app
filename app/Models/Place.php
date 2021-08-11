<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Place extends Model implements HasMedia
{
  use HasFactory, SoftDeletes, InteractsWithMedia;

  protected $fillable = [
    'place_name',
    'place_desc',
    'user_id',
    'place_photo',
  ];


  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function labs()
  {
    return $this->hasMany(Lab::class);
  }
}
