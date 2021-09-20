<?php

namespace App\Http\Requests;

use App\Models\TestCovid;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTestCovidRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('test_covid_create');
    }

    public function rules()
    {
        return [
            'date_rendez_vous' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'date_voyage' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'nom' => [
                'string',
                'required',
            ],
            'prenoms' => [
                'string',
                'nullable',
            ],
            'telephone' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'date_naissance' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'adresse' => [
                'string',
                'nullable',
            ],
            'heure_rendez_vous' => [
                'required',
                'date_format:' . config('panel.time_format'),
            ],
            'destination' => [
                'string',
                'required',
            ],
            'statut' => [
                'required',
            ],
            'heure_voyage' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'nom_complet' => [
                'string',
                'nullable',
            ],
        ];
    }
}
