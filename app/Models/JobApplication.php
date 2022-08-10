<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
  use HasFactory;

  protected $fillable = ["first_name", "last_name", "phone", "personal_statement", "cv_file", "position",];
}
