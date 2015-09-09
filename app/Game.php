<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'games';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['lat','lng','name','description'];
    public function getCreatedAtAttribute($value)
{
return Carbon::parse($value)->format('l jS \\of F Y h:i A');
}

}
