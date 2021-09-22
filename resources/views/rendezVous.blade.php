<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body> 
<div class="content">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nouveau Rendez-vous
                </div>
                <div class="panel-body">
                    {{-- <form method="POST" action="{{ route("admin.test-covids.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('date_rendez_vous') ? 'has-error' : '' }}">
                                    <label class="required" for="date_rendez_vous">{{ trans('cruds.testCovid.fields.date_rendez_vous') }}</label>
                                    <input class="form-control date" type="text" name="date_rendez_vous" id="date_rendez_vous" value="{{ old('date_rendez_vous') }}" required>
                                    @if($errors->has('date_rendez_vous'))
                                        <span class="help-block" role="alert">{{ $errors->first('date_rendez_vous') }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.testCovid.fields.date_rendez_vous_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('date_voyage') ? 'has-error' : '' }}">
                                    <label class="required" for="date_voyage">{{ trans('cruds.testCovid.fields.date_voyage') }}</label>
                                    <input class="form-control date" type="text" name="date_voyage" id="date_voyage" value="{{ old('date_voyage') }}" required>
                                    @if($errors->has('date_voyage'))
                                        <span class="help-block" role="alert">{{ $errors->first('date_voyage') }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.testCovid.fields.date_voyage_helper') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                            <label class="required" for="nom">{{ trans('cruds.testCovid.fields.nom') }}</label>
                            <input class="form-control" type="text" name="nom" id="nom" value="{{ old('nom', '') }}" required>
                            @if($errors->has('nom'))
                                <span class="help-block" role="alert">{{ $errors->first('nom') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.nom_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('prenoms') ? 'has-error' : '' }}">
                            <label for="prenoms">{{ trans('cruds.testCovid.fields.prenoms') }}</label>
                            <input class="form-control" type="text" name="prenoms" id="prenoms" value="{{ old('prenoms', '') }}">
                            @if($errors->has('prenoms'))
                                <span class="help-block" role="alert">{{ $errors->first('prenoms') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.prenoms_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('nom_complet') ? 'has-error' : '' }}">
                            <label for="nom_complet">{{ trans('cruds.testCovid.fields.nom_complet') }}</label>
                            <input class="form-control" type="text" name="nom_complet" id="nom_complet" value="{{ old('nom_complet', '') }}">
                            @if($errors->has('nom_complet'))
                                <span class="help-block" role="alert">{{ $errors->first('nom_complet') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.nom_complet_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('sexe') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.testCovid.fields.sexe') }}</label>
                            @foreach(App\Models\TestCovid::SEXE_RADIO as $key => $label)
                                <div>
                                    <input type="radio" id="sexe_{{ $key }}" name="sexe" value="{{ $key }}" {{ old('sexe', '') === (string) $key ? 'checked' : '' }}>
                                    <label for="sexe_{{ $key }}" style="font-weight: 400">{{ $label }}</label>
                                </div>
                            @endforeach
                            @if($errors->has('sexe'))
                                <span class="help-block" role="alert">{{ $errors->first('sexe') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.sexe_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                            <label class="required" for="telephone">{{ trans('cruds.testCovid.fields.telephone') }}</label>
                            <input class="form-control" type="number" name="telephone" id="telephone" value="{{ old('telephone', '') }}" step="1" required>
                            @if($errors->has('telephone'))
                                <span class="help-block" role="alert">{{ $errors->first('telephone') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.telephone_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('date_naissance') ? 'has-error' : '' }}">
                            <label class="required" for="date_naissance">{{ trans('cruds.testCovid.fields.date_naissance') }}</label>
                            <input class="form-control date" type="text" name="date_naissance" id="date_naissance" value="{{ old('date_naissance') }}" required>
                            @if($errors->has('date_naissance'))
                                <span class="help-block" role="alert">{{ $errors->first('date_naissance') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.date_naissance_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">{{ trans('cruds.testCovid.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
                            @if($errors->has('email'))
                                <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
                            <label for="adresse">{{ trans('cruds.testCovid.fields.adresse') }}</label>
                            <input class="form-control" type="text" name="adresse" id="adresse" value="{{ old('adresse', '') }}">
                            @if($errors->has('adresse'))
                                <span class="help-block" role="alert">{{ $errors->first('adresse') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.adresse_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('heure_rendez_vous') ? 'has-error' : '' }}">
                            <label class="required" for="heure_rendez_vous">{{ trans('cruds.testCovid.fields.heure_rendez_vous') }}</label>
                            <input class="form-control timepicker" type="text" name="heure_rendez_vous" id="heure_rendez_vous" value="{{ old('heure_rendez_vous') }}" required>
                            @if($errors->has('heure_rendez_vous'))
                                <span class="help-block" role="alert">{{ $errors->first('heure_rendez_vous') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.heure_rendez_vous_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('destination') ? 'has-error' : '' }}">
                            <label class="required" for="destination">{{ trans('cruds.testCovid.fields.destination') }}</label>
                            <input class="form-control" type="text" name="destination" id="destination" value="{{ old('destination', '') }}" required>
                            @if($errors->has('destination'))
                                <span class="help-block" role="alert">{{ $errors->first('destination') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.destination_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('heure_voyage') ? 'has-error' : '' }}">
                            <label for="heure_voyage">{{ trans('cruds.testCovid.fields.heure_voyage') }}</label>
                            <input class="form-control timepicker" type="text" name="heure_voyage" id="heure_voyage" value="{{ old('heure_voyage') }}">
                            @if($errors->has('heure_voyage'))
                                <span class="help-block" role="alert">{{ $errors->first('heure_voyage') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.heure_voyage_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                            <label for="message">{{ trans('cruds.testCovid.fields.message') }}</label>
                            <textarea class="form-control" name="message" id="message">{{ old('message') }}</textarea>
                            @if($errors->has('message'))
                                <span class="help-block" role="alert">{{ $errors->first('message') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.message_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('statut') ? 'has-error' : '' }}">
                            <label class="required">{{ trans('cruds.testCovid.fields.statut') }}</label>
                            <select class="form-control" name="statut" id="statut" required>
                                <option value disabled {{ old('statut', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\TestCovid::STATUT_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('statut', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('statut'))
                                <span class="help-block" role="alert">{{ $errors->first('statut') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.statut_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form> --}}


                    <form method="POST" action="{{ route("rdv") }}" enctype="multipart/form-data">
                        @csrf

                           {{-- Prenoms et Nom --}}
                           <div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                                    <label class="required" for="nom">{{ trans('cruds.testCovid.fields.nom') }}</label>
                                    <input class="form-control" type="text" name="nom" id="nom" value="{{ old('nom', '') }}" required>
                                    @if($errors->has('nom'))
                                        <span class="help-block" role="alert">{{ $errors->first('nom') }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.testCovid.fields.nom_helper') }}</span>
                                </div>
                                
                            </div>
                            <div class="col-lg-6"><div class="form-group {{ $errors->has('prenoms') ? 'has-error' : '' }}">
                                <label for="prenoms">{{ trans('cruds.testCovid.fields.prenoms') }}</label>
                                <input class="form-control" type="text" name="prenoms" id="prenoms" value="{{ old('prenoms', '') }}">
                                @if($errors->has('prenoms'))
                                    <span class="help-block" role="alert">{{ $errors->first('prenoms') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.prenoms_helper') }}</span>
                            </div></div>
                        </div>

                        {{-- Fin Prenoms et Nom --}}

                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('date_naissance') ? 'has-error' : '' }}">
                                <label class="required" for="date_naissance">{{ trans('cruds.testCovid.fields.date_naissance') }}</label>
                                <input class="form-control date" type="text" name="date_naissance" id="date_naissance" value="{{ old('date_naissance') }}" required>
                                @if($errors->has('date_naissance'))
                                    <span class="help-block" role="alert">{{ $errors->first('date_naissance') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.date_naissance_helper') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('sexe') ? 'has-error' : '' }}">
                                <label>{{ trans('cruds.testCovid.fields.sexe') }}</label>
                                @foreach(App\Models\TestCovid::SEXE_RADIO as $key => $label)
                                    <div>
                                        <input type="radio" id="sexe_{{ $key }}" name="sexe" value="{{ $key }}" {{ old('sexe', '') === (string) $key ? 'checked' : '' }}>
                                        <label for="sexe_{{ $key }}" style="font-weight: 400">{{ $label }}</label>
                                    </div>
                                @endforeach
                                @if($errors->has('sexe'))
                                    <span class="help-block" role="alert">{{ $errors->first('sexe') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.sexe_helper') }}</span>
                            </div></div>
                        </div>
                        
                        
                        <div class="col-lg-12">

                               {{-- tELEPHONE --}}
                        <div class="col-lg-6">
                            <div class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                            <label class="required" for="telephone">{{ trans('cruds.testCovid.fields.telephone') }}</label>
                            <input class="form-control" type="number" name="telephone" id="telephone" value="{{ old('telephone', '') }}" step="1" required>
                            @if($errors->has('telephone'))
                                <span class="help-block" role="alert">{{ $errors->first('telephone') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.telephone_helper') }}</span>
                            </div>
                        </div>
                        {{-- FIN TELEPHONE --}}
                            
                            <div class="col-lg-6"><div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
                                <label for="adresse">{{ trans('cruds.testCovid.fields.adresse') }}</label>
                                <input class="form-control" type="text" name="adresse" id="adresse" value="{{ old('adresse', '') }}">
                                @if($errors->has('adresse'))
                                    <span class="help-block" role="alert">{{ $errors->first('adresse') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.adresse_helper') }}</span>
                            </div></div>

                        </div>

                        
                      
                        
                        <div class="col-lg-12">
                            <div class="col-lg-6"><div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email">{{ trans('cruds.testCovid.fields.email') }}</label>
                                <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" required>
                                @if($errors->has('email'))
                                    <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.email_helper') }}</span>
                            </div></div>

                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('date_rendez_vous') ? 'has-error' : '' }}">
                                    <label class="required" for="date_rendez_vous">{{ trans('cruds.testCovid.fields.date_rendez_vous') }}</label>
                                    <input class="form-control date" type="text" name="date_rendez_vous" id="date_rendez_vous" value="{{ old('date_rendez_vous') }}" required>
                                    @if($errors->has('date_rendez_vous'))
                                        <span class="help-block" role="alert">{{ $errors->first('date_rendez_vous') }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.testCovid.fields.date_rendez_vous_helper') }}</span>
                                </div>
                            </div>
                           
                        </div>


                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('heure_rendez_vous') ? 'has-error' : '' }}">
                                    <label class="required" for="heure_rendez_vous">{{ trans('cruds.testCovid.fields.heure_rendez_vous') }}</label>
                                    <input class="form-control timepicker" type="text" name="heure_rendez_vous" id="heure_rendez_vous" value="{{ old('heure_rendez_vous') }}" required>
                                    @if($errors->has('heure_rendez_vous'))
                                        <span class="help-block" role="alert">{{ $errors->first('heure_rendez_vous') }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.testCovid.fields.heure_rendez_vous_helper') }}</span>
                                </div></div>
                                <div class="col-lg-6">
                                    <div class="form-group {{ $errors->has('date_voyage') ? 'has-error' : '' }}">
                                        <label class="required" for="date_voyage">{{ trans('cruds.testCovid.fields.date_voyage') }}</label>
                                        <input class="form-control date" type="text" name="date_voyage" id="date_voyage" value="{{ old('date_voyage') }}" required>
                                        @if($errors->has('date_voyage'))
                                            <span class="help-block" role="alert">{{ $errors->first('date_voyage') }}</span>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.testCovid.fields.date_voyage_helper') }}</span>
                                    </div>
                                </div>
                            
                        </div>



                        <div class="col-lg-12">

                            <div class="col-lg-6"><div class="form-group {{ $errors->has('heure_voyage') ? 'has-error' : '' }}">
                                <label for="heure_voyage">{{ trans('cruds.testCovid.fields.heure_voyage') }}</label>
                                <input class="form-control timepicker" type="text" name="heure_voyage" id="heure_voyage" value="{{ old('heure_voyage') }}">
                                @if($errors->has('heure_voyage'))
                                    <span class="help-block" role="alert">{{ $errors->first('heure_voyage') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.testCovid.fields.heure_voyage_helper') }}</span>
                            </div></div>
                         
                                
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('destination') ? 'has-error' : '' }}">
                                    <label class="required" for="destination">{{ trans('cruds.testCovid.fields.destination') }}</label>
                                    <input class="form-control" type="text" name="destination" id="destination" value="{{ old('destination', '') }}" required>
                                    @if($errors->has('destination'))
                                        <span class="help-block" role="alert">{{ $errors->first('destination') }}</span>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.testCovid.fields.destination_helper') }}</span>
                                </div></div>
                        </div>

                        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                            <label for="message">{{ trans('cruds.testCovid.fields.message') }}</label>
                            <textarea class="form-control" name="message" id="message">{{ old('message') }}</textarea>
                            @if($errors->has('message'))
                                <span class="help-block" role="alert">{{ $errors->first('message') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.testCovid.fields.message_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                Valider
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>   



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>