<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Months extends Model
{
    use HasFactory;

    protected $fillable = [ 'img_url', 'festival_img', 'month-mm', 'month_en', 'festival_mm', 'festival_en', 'description', 'detail'];
}
