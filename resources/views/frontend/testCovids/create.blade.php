@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.testCovid.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.test-covids.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="date_rendez_vous">{{ trans('cruds.testCovid.fields.date_rendez_vous') }}</label>
                            <input class="form-control date" type="text" name="date_rendez_vous" id="date_rendez_vous" value="{{ old('date_rendez_vous') }}" required>
                            @if($errors->has('date_rendez_vous'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('date_rendez_vous') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.date_rendez_vous_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="date_voyage">{{ trans('cruds.testCovid.fields.date_voyage') }}</label>
                            <input class="form-control date" type="text" name="date_voyage" id="date_voyage" value="{{ old('date_voyage') }}" required>
                            @if($errors->has('date_voyage'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('date_voyage') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.date_voyage_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="nom">{{ trans('cruds.testCovid.fields.nom') }}</label>
                            <input class="form-control" type="text" name="nom" id="nom" value="{{ old('nom', '') }}" required>
                            @if($errors->has('nom'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nom') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.nom_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="prenoms">{{ trans('cruds.testCovid.fields.prenoms') }}</label>
                            <input class="form-control" type="text" name="prenoms" id="prenoms" value="{{ old('prenoms', '') }}">
                            @if($errors->has('prenoms'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('prenoms') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.prenoms_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required">{{ trans('cruds.testCovid.fields.statut') }}</label>
                            <select class="form-control" name="statut" id="statut" required>
                                <option value disabled {{ old('statut', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\TestCovid::STATUT_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('statut', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('statut'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('statut') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.statut_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="telephone">{{ trans('cruds.testCovid.fields.telephone') }}</label>
                            <input class="form-control" type="number" name="telephone" id="telephone" value="{{ old('telephone', '') }}" step="1" required>
                            @if($errors->has('telephone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('telephone') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.telephone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.testCovid.fields.sexe') }}</label>
                            @foreach(App\Models\TestCovid::SEXE_RADIO as $key => $label)
                                <div>
                                    <input type="radio" id="sexe_{{ $key }}" name="sexe" value="{{ $key }}" {{ old('sexe', '') === (string) $key ? 'checked' : '' }}>
                                    <label for="sexe_{{ $key }}">{{ $label }}</label>
                                </div>
                            @endforeach
                            @if($errors->has('sexe'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('sexe') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.sexe_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="date_naissance">{{ trans('cruds.testCovid.fields.date_naissance') }}</label>
                            <input class="form-control date" type="text" name="date_naissance" id="date_naissance" value="{{ old('date_naissance') }}" required>
                            @if($errors->has('date_naissance'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('date_naissance') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.date_naissance_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="email">{{ trans('cruds.testCovid.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="adresse">{{ trans('cruds.testCovid.fields.adresse') }}</label>
                            <input class="form-control" type="text" name="adresse" id="adresse" value="{{ old('adresse', '') }}">
                            @if($errors->has('adresse'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('adresse') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.adresse_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="heure_rendez_vous">{{ trans('cruds.testCovid.fields.heure_rendez_vous') }}</label>
                            <input class="form-control timepicker" type="text" name="heure_rendez_vous" id="heure_rendez_vous" value="{{ old('heure_rendez_vous') }}" required>
                            @if($errors->has('heure_rendez_vous'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('heure_rendez_vous') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.heure_rendez_vous_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="destination">{{ trans('cruds.testCovid.fields.destination') }}</label>
                            <input class="form-control" type="text" name="destination" id="destination" value="{{ old('destination', '') }}" required>
                            @if($errors->has('destination'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('destination') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.destination_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="heure_voyage">{{ trans('cruds.testCovid.fields.heure_voyage') }}</label>
                            <input class="form-control timepicker" type="text" name="heure_voyage" id="heure_voyage" value="{{ old('heure_voyage') }}">
                            @if($errors->has('heure_voyage'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('heure_voyage') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.heure_voyage_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="message">{{ trans('cruds.testCovid.fields.message') }}</label>
                            <textarea class="form-control" name="message" id="message">{{ old('message') }}</textarea>
                            @if($errors->has('message'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.message_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="nom_complet">{{ trans('cruds.testCovid.fields.nom_complet') }}</label>
                            <input class="form-control" type="text" name="nom_complet" id="nom_complet" value="{{ old('nom_complet', '') }}">
                            @if($errors->has('nom_complet'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nom_complet') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.nom_complet_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection