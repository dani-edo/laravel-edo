<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Data extends Model
{
    use HasFactory, UuidModel;
    protected $table = 'students';
}
