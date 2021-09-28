@extends('layouts.admin')
@section('content')
<div class="content">
    @can('test_covid_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.test-covids.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.testCovid.title_singular') }}
                </a>
                <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                    {{ trans('global.app_csvImport') }}
                </button>
                @include('csvImport.modal', ['model' => 'TestCovid', 'route' => 'admin.test-covids.parseCsvImport'])
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.testCovid.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">
                    <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-TestCovid">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.date_rendez_vous') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.date_voyage') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.nom') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.prenoms') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.statut') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.telephone') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.sexe') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.date_naissance') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.email') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.adresse') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.heure_rendez_vous') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.destination') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.heure_voyage') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.message') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.nom_complet') }}
                                </th>
                                <th>
                                    {{ trans('cruds.testCovid.fields.resultat') }}
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                </td>
                                <td>
                                    <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                </td>
                                <td>
                                    <select class="search" strict="true">
                                        <option value>{{ trans('global.all') }}</option>
                                        @foreach(App\Models\TestCovid::STATUT_SELECT as $key => $item)
                                            <option value="{{ $key }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                </td>
                                <td>
                                    <select class="search" strict="true">
                                        <option value>{{ trans('global.all') }}</option>
                                        @foreach(App\Models\TestCovid::SEXE_RADIO as $key => $item)
                                            <option value="{{ $key }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                </td>
                                <td>
                                    <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                </td>
                                <td>
                                    <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                </td>
                                <td>
                                    <select class="search" strict="true">
                                        <option value>{{ trans('global.all') }}</option>
                                        @foreach(App\Models\TestCovid::RESULTAT_SELECT as $key => $item)
                                            <option value="{{ $key }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('test_covid_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.test-covids.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.test-covids.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'date_rendez_vous', name: 'date_rendez_vous' },
{ data: 'date_voyage', name: 'date_voyage' },
{ data: 'nom', name: 'nom' },
{ data: 'prenoms', name: 'prenoms' },
{ data: 'statut', name: 'statut' },
{ data: 'telephone', name: 'telephone' },
{ data: 'sexe', name: 'sexe' },
{ data: 'date_naissance', name: 'date_naissance' },
{ data: 'email', name: 'email' },
{ data: 'adresse', name: 'adresse' },
{ data: 'heure_rendez_vous', name: 'heure_rendez_vous' },
{ data: 'destination', name: 'destination' },
{ data: 'heure_voyage', name: 'heure_voyage' },
{ data: 'message', name: 'message' },
{ data: 'nom_complet', name: 'nom_complet' },
{ data: 'resultat', name: 'resultat' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-TestCovid').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
});

</script>
@endsection