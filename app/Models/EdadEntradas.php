<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EdadEntradas extends Model
{
    protected $table = 'edad_entradas';

    protected $fillable = [
        'age',
        'classification',
    ];

    public $timestamps = false;


}
