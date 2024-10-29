<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FHPERID extends Model
{
    protected $table = "FHPERID";
    protected $fillable = [
        "v_codper",
        "v_codcom",
        "v_idbio",
        "v_codmod",
        "v_codtip",
        "i_sensib",
        "v_clv",
        "v_nom",
        "v_zon",
        "v_tipid",
        "t_estado",
        "b_estreg",
        "v_cusu"    
    ];
}
