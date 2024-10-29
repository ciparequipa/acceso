<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\FHPERSON;
use App\Models\FHPERID;
use App\Models\FHPERTAR;

class IntegracionController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function crearEntrada(Request $request)
    {
        $newperson = FHPERSON::create([
            "v_codper" => $request["v_codper"],
            "v_codcom" => "001",
            "v_codtpr" => "00000001",
            "v_nom" => $request["v_nom"],
            "v_apell" => $request["v_apell"],
            "v_ndoc" => $request["v_ndoc"],
            "v_direc" => "AREQUIPA",
            "t_sex" => 1,
            "d_fnac" => "1999-01-01 00:00:00.000",
            "v_codsuc" => "00000001",
            "v_codtdc" => "001",
            "v_codsec" => "00000001",
            "t_estado" => 1,
            "v_cusu" => "001",
            "b_estreg" => 1
        ]);

        $newid = FHPERID::create([
            "v_codper" => $request["v_codper"],
            "v_codcom" => "001",
            "v_idbio" => $request["v_codper"],
            "v_codmod" => "033",
            "v_codtip" => "001000",
            "i_sensib" => 5,
            "v_clv" => "1234",
            "v_nom" => $request["v_codper"],
            "v_zon" => "0",
            "v_tipid" => "0",
            "t_estado" => 1,
            "b_estreg" => 1,
            "v_cusu" => "001"
 
        ]);
        $newtar = FHPERTAR::create([
            "v_codper" => $request["v_codper"],
            "v_codcom" => "001",
            "v_idbio" => $request["v_codper"],
            "v_codtar" => $request["v_codper"],
            "t_estado" => 1,
            "b_estreg" => 1,
            "v_cusu" => "001",
            "v_codmod" => "033" 
        ]);


    }

    public function modificarEntrada(Request $request){
        FHPERSON::where('v_codper',$request["v_codper"])->update(["t_estado"=>$request["t_estado"]]);
        FHPERTAR::where('v_codper',$request["v_codper"])->update(["t_estado"=>$request["t_estado"]]);
        FHPERID::where('v_codper',$request["v_codper"])->update(["t_estado"=>$request["t_estado"]]);
    }

}
