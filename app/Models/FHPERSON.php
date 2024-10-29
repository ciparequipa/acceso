<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FHPERSON extends Model
{
    protected $table = "FHPERSON";
    protected $fillable = [
        "v_codper",
        "v_codcom",
        "v_codtpr",
        "v_nom",
        "v_apell",
        "v_ndoc",
        "v_direc",
        "t_sex",
        "d_fnac",
        "v_codsuc",
        "v_codtdc",
        "v_codsec",
        "t_estado",
        "v_cusu",
        "b_estreg"
    ];
}
