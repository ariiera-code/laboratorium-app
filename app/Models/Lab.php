<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lab extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'item_name',
    'item_desc',
    'item_quantity',
    'item_error',
    'item_value',
    'item_total',
    'unit_id',
    'place_id',
    'comment_id',
    'log_id',
  ];

  public function place()
  {
    $this->belongsTo(Place::class);
  }

  public function units()
  {
    $this->belongsToMany(Unit::class);
  }

  public static function search($search)
  {
    return empty($search) ? static::query()
      : static::query()->where('id', 'like', '%' . $search . '%')
      ->orWhere('item_name', 'like', '%' . $search . '%')
      ->orWhere('item_desc', 'like', '%' . $search . '%');
  }
}
