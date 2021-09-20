<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyTestCovidRequest;
use App\Http\Requests\StoreTestCovidRequest;
use App\Http\Requests\UpdateTestCovidRequest;
use App\Models\TestCovid;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestCovidController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('test_covid_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $testCovids = TestCovid::all();

        return view('frontend.testCovids.index', compact('testCovids'));
    }

    public function create()
    {
        abort_if(Gate::denies('test_covid_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.testCovids.create');
    }

    public function store(StoreTestCovidRequest $request)
    {
        $testCovid = TestCovid::create($request->all());

        return redirect()->route('frontend.test-covids.index');
    }

    public function edit(TestCovid $testCovid)
    {
        abort_if(Gate::denies('test_covid_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.testCovids.edit', compact('testCovid'));
    }

    public function update(UpdateTestCovidRequest $request, TestCovid $testCovid)
    {
        $testCovid->update($request->all());

        return redirect()->route('frontend.test-covids.index');
    }

    public function show(TestCovid $testCovid)
    {
        abort_if(Gate::denies('test_covid_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.testCovids.show', compact('testCovid'));
    }

    public function destroy(TestCovid $testCovid)
    {
        abort_if(Gate::denies('test_covid_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $testCovid->delete();

        return back();
    }

    public function massDestroy(MassDestroyTestCovidRequest $request)
    {
        TestCovid::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
