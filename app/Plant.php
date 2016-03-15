<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $table = 'plants';
    public $timestamps = false;
    protected $fillable = ['naam', 'latijnsenaam', 'beschrijving', 'familie', 'geslacht', 'habitat', 'cultivar', 'geschiedenisfolklore', 'onderhoud', 'teeltoogst', 'medicinaal', 'bloemschikken'];
}
