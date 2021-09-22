<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyTestCovidRequest;
use App\Http\Requests\StoreTestCovidRequest;
use App\Http\Requests\UpdateTestCovidRequest;
use App\Models\TestCovid;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class TestCovidController extends Controller
{

    public function rdv()
    {
        
        return view('rendezVous');
    }


    public function storerv(StoreTestCovidRequest $request)
    {
        $testCovid = TestCovid::create($request->all());

        return redirect()->route('/');
    }
}
