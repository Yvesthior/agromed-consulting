<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestCovidRequest;
use App\Models\TestCovid;

use Gate;

class TestCovidControllerRV extends Controller
{
    
    public function rdv()
    {
        
        return view('rendezVous');
    }

    public function success()
    {
        
        return view('success');
    }

    
    public function storerv(StoreTestCovidRequest $request)
    {
        /* if(Gate::denies('test_covid_access')){
            
        }
        $testCovid = TestCovid::create($request->all()); */

        return redirect()->route('/');
    }
}
