<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyTestCovidRequest;
use App\Http\Requests\StoreTestCovidRequest;
use App\Http\Requests\UpdateTestCovidRequest;
use App\Models\TestCovid;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TestCovidController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('test_covid_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = TestCovid::query()->select(sprintf('%s.*', (new TestCovid())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'test_covid_show';
                $editGate = 'test_covid_edit';
                $deleteGate = 'test_covid_delete';
                $crudRoutePart = 'test-covids';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('nom', function ($row) {
                return $row->nom ? $row->nom : '';
            });
            $table->editColumn('prenoms', function ($row) {
                return $row->prenoms ? $row->prenoms : '';
            });
            $table->editColumn('statut', function ($row) {
                return $row->statut ? TestCovid::STATUT_SELECT[$row->statut] : '';
            });
            $table->editColumn('telephone', function ($row) {
                return $row->telephone ? $row->telephone : '';
            });
            $table->editColumn('sexe', function ($row) {
                return $row->sexe ? TestCovid::SEXE_RADIO[$row->sexe] : '';
            });

            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });
            $table->editColumn('adresse', function ($row) {
                return $row->adresse ? $row->adresse : '';
            });
            $table->editColumn('heure_rendez_vous', function ($row) {
                return $row->heure_rendez_vous ? $row->heure_rendez_vous : '';
            });
            $table->editColumn('destination', function ($row) {
                return $row->destination ? $row->destination : '';
            });
            $table->editColumn('heure_voyage', function ($row) {
                return $row->heure_voyage ? $row->heure_voyage : '';
            });
            $table->editColumn('message', function ($row) {
                return $row->message ? $row->message : '';
            });
            $table->editColumn('nom_complet', function ($row) {
                return $row->nom_complet ? $row->nom_complet : '';
            });
            $table->editColumn('resultat', function ($row) {
                return $row->resultat ? TestCovid::RESULTAT_SELECT[$row->resultat] : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.testCovids.index');
    }

    public function create()
    {
        abort_if(Gate::denies('test_covid_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.testCovids.create');
    }

    public function store(StoreTestCovidRequest $request)
    {
        $testCovid = TestCovid::create($request->all());

        return redirect()->route('admin.test-covids.index');
    }

    public function edit(TestCovid $testCovid)
    {
        abort_if(Gate::denies('test_covid_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.testCovids.edit', compact('testCovid'));
    }

    public function update(UpdateTestCovidRequest $request, TestCovid $testCovid)
    {
        $testCovid->update($request->all());

        return redirect()->route('admin.test-covids.index');
    }

    public function show(TestCovid $testCovid)
    {
        abort_if(Gate::denies('test_covid_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.testCovids.show', compact('testCovid'));
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
