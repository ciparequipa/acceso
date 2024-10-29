<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FHPERTAR extends Model
{
    protected $table = "FHPERTAR";
    public $timestamps = false;
    protected $fillable = [
        "v_codper",
        "v_codcom",
        "v_idbio",
        "v_codtar",
        "t_estado",
        "b_estreg",
        "v_cusu",
        "v_codmod"
    ];
}
