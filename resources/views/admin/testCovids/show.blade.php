@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.testCovid.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.test-covids.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.date_rendez_vous') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->date_rendez_vous }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.date_voyage') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->date_voyage }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.nom') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->nom }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.prenoms') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->prenoms }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.statut') }}
                                    </th>
                                    <td>
                                        {{ App\Models\TestCovid::STATUT_SELECT[$testCovid->statut] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.telephone') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->telephone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.sexe') }}
                                    </th>
                                    <td>
                                        {{ App\Models\TestCovid::SEXE_RADIO[$testCovid->sexe] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.date_naissance') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->date_naissance }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.adresse') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->adresse }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.heure_rendez_vous') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->heure_rendez_vous }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.destination') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->destination }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.heure_voyage') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->heure_voyage }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.message') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->message }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.nom_complet') }}
                                    </th>
                                    <td>
                                        {{ $testCovid->nom_complet }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testCovid.fields.resultat') }}
                                    </th>
                                    <td>
                                        {{ App\Models\TestCovid::RESULTAT_SELECT[$testCovid->resultat] ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.test-covids.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection