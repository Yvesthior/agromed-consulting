<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestCovidRequest;
use App\Http\Requests\UpdateTestCovidRequest;
use App\Http\Resources\Admin\TestCovidResource;
use App\Models\TestCovid;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestCovidApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('test_covid_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TestCovidResource(TestCovid::all());
    }

    public function store(StoreTestCovidRequest $request)
    {
        $testCovid = TestCovid::create($request->all());

        return (new TestCovidResource($testCovid))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(TestCovid $testCovid)
    {
        abort_if(Gate::denies('test_covid_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TestCovidResource($testCovid);
    }

    public function update(UpdateTestCovidRequest $request, TestCovid $testCovid)
    {
        $testCovid->update($request->all());

        return (new TestCovidResource($testCovid))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(TestCovid $testCovid)
    {
        abort_if(Gate::denies('test_covid_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $testCovid->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
