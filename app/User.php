<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  public $table = "user";
  protected $primaryKey = 'usr_id';
  protected $fillable =['usr_email'];
}
