<?php

namespace App\Http\Requests;

use App\Models\TestCovid;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTestCovidRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('test_covid_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:test_covids,id',
        ];
    }
}
