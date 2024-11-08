<?php

namespace App\Http\Controllers;


use App\Models\fondopalenque;
use App\Models\interiorespalenque;
use App\Models\localpalenque;
use App\Models\sociospalenque;

use App\Models\fondoviaplaza;
use App\Models\interioresviaplaza;
use App\Models\localviaplaza;
use App\Models\sociosviaplaza;

use App\Models\fondopinotepa;
use App\Models\interiorespinotepa;
use App\Models\localpinotepa;
use App\Models\sociospinotepa;

use App\Models\fondovillaflores;
use App\Models\sociosvillaflores;
use App\Models\interioresvillaflores;
use App\Models\localvillaflores;

use Illuminate\Http\Request;
use App\Models\interioresinicios;
use App\Models\index;
use App\Models\scinicio;

use App\Models\localcomitan;
use App\Models\fondocomitan;
use App\Models\socioscomitan;
use App\Models\interiorescomitan;

use App\Models\fondotonala;
use App\Models\interiorestonala;
use App\Models\localtonala;
use App\Models\sociostonala;

class PaginaController extends Controller
{
    public function index (){

        $inicio = index::paginate();
        $socios = scinicio::paginate();
        $interiores = interioresinicios::paginate();

        return view ('index', compact('inicio','socios', 'interiores'));
    }
    public function comitan (){

        $locales = localcomitan::get();
        $fondos = fondocomitan::paginate();
        $socios = socioscomitan::paginate();
        $interiores = interiorescomitan::paginate();

        return view ('comitan', compact('locales','fondos','socios','interiores'));
    }
    public function tonala (){

        $fondos = fondotonala::paginate();
        $interiores = interiorestonala::paginate();
        $locales = localtonala::get();
        $socios = sociostonala::paginate();

        return view ('tonala', compact('fondos','interiores','locales','socios'));
    }
    public function villaflores (){

        $fondos = fondovillaflores::paginate();
        $socios = sociosvillaflores::paginate();
        $interiores = interioresvillaflores::paginate();
        $locales = localvillaflores::get();

        return view ('villaflores', compact('fondos','socios','interiores','locales'));
    }
    public function pinotepa (){

        $interiores = interiorespinotepa::paginate();
        $socios = sociospinotepa::paginate();
        $locales = localpinotepa::get();
        $fondos = fondopinotepa::paginate();

        return view ('pinotepa', compact('interiores','socios','locales','fondos'));
    }
    public function viaplaza (){

        $interiores = interioresviaplaza::paginate();
        $fondos = fondoviaplaza::paginate();
        $socios = sociosviaplaza::paginate();
        $locales = localviaplaza::get();
        
        return view ('ciudadhidalgo', compact('fondos','interiores','socios','locales'));
    }
    public function palenque (){

        $fondos = fondopalenque::paginate();
        $interiores = interiorespalenque::paginate();
        $socios = sociospalenque::paginate();
        $locales = localpalenque::get();

        return view ('palenque', compact('fondos','interiores','socios','locales'));
    }
}