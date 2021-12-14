<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    use HasFactory ,Filterable;

    protected $primaryKey = 'dimension_id';
    protected $fillable = ['dimension_id', 'nom_dimension'];
}
