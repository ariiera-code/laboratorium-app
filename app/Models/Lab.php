<?php

namespace App\Models;

use App\Models\Log;
use App\Models\Unit;
use App\Models\Place;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lab extends Model
{
  use HasFactory, SoftDeletes;
  

  protected $fillable = [
    'item_name',
    'item_desc',
    'item_quantity',
    'item_error',
    'item_value',
    'unit_id',
    'place_id',
  ];
  

  

  public function place()
  {
    return $this->belongsTo(Place::class);
  }

  public function unit()
  {
    return $this->belongsTo(Unit::class);
  }

  public function log()
  {
    return $this->hasMany(Log::class);
  }

  public static function search($search)
  {
    return empty($search) ? static::query()
      : static::query()->where('id', 'like', '%' . $search . '%')
      ->orWhere('item_name', 'like', '%' . $search . '%')
      ->orWhere('item_desc', 'like', '%' . $search . '%');
  }
  
  
}
