@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.contact-companies.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.contact-companies.fields.logo')</th>
                            <td field-key='logo'>@if($contact_company->logo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $contact_company->logo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $contact_company->logo) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-companies.fields.name')</th>
                            <td field-key='name'>{{ $contact_company->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-companies.fields.address')</th>
                            <td field-key='address'>{{ $contact_company->address }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-companies.fields.website')</th>
                            <td field-key='website'>{{ $contact_company->website }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-companies.fields.email')</th>
                            <td field-key='email'>{{ $contact_company->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contact-companies.fields.tel')</th>
                            <td field-key='tel'>{{ $contact_company->tel }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#contacts" aria-controls="contacts" role="tab" data-toggle="tab">Contacts</a></li>
<li role="presentation" class=""><a href="#contactdistrict" aria-controls="contactdistrict" role="tab" data-toggle="tab">Contacts District</a></li>
<li role="presentation" class=""><a href="#contactsregion" aria-controls="contactsregion" role="tab" data-toggle="tab">Contacts Région</a></li>
<li role="presentation" class=""><a href="#listegroupesectoriel" aria-controls="listegroupesectoriel" role="tab" data-toggle="tab">Groupe sectoriel</a></li>
<li role="presentation" class=""><a href="#om" aria-controls="om" role="tab" data-toggle="tab">OM</a></li>
<li role="presentation" class=""><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">Tâches</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="contacts">
<table class="table table-bordered table-striped {{ count($contacts) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.contacts.fields.company')</th>
                        <th>@lang('quickadmin.contacts.fields.fonction')</th>
                        <th>@lang('quickadmin.contacts.fields.first-name')</th>
                        <th>@lang('quickadmin.contacts.fields.phone1')</th>
                        <th>@lang('quickadmin.contacts.fields.phone2')</th>
                        <th>@lang('quickadmin.contacts.fields.email')</th>
                        <th>@lang('quickadmin.contacts.fields.address')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($contacts) > 0)
            @foreach ($contacts as $contact)
                <tr data-entry-id="{{ $contact->id }}">
                    <td field-key='company'>{{ $contact->company->name or '' }}</td>
                                <td field-key='fonction'>{{ $contact->fonction }}</td>
                                <td field-key='first_name'>{{ $contact->first_name }}</td>
                                <td field-key='phone1'>{{ $contact->phone1 }}</td>
                                <td field-key='phone2'>{{ $contact->phone2 }}</td>
                                <td field-key='email'>{{ $contact->email }}</td>
                                <td field-key='address'>{{ $contact->address }}</td>
                                                                <td>
                                    @can('contact_view')
                                    <a href="{{ route('admin.contacts.show',[$contact->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('contact_edit')
                                    <a href="{{ route('admin.contacts.edit',[$contact->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('contact_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts.destroy', $contact->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="12">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="contactdistrict">
<table class="table table-bordered table-striped {{ count($contact_districts) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.contact-district.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.contact-district.fields.organisme')</th>
                        <th>@lang('quickadmin.contact-district.fields.fonction')</th>
                        <th>@lang('quickadmin.contact-district.fields.tel')</th>
                        <th>@lang('quickadmin.contact-district.fields.email')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($contact_districts) > 0)
            @foreach ($contact_districts as $contact_district)
                <tr data-entry-id="{{ $contact_district->id }}">
                    <td field-key='nom_prenom'>{{ $contact_district->nom_prenom }}</td>
                                <td field-key='organisme'>{{ $contact_district->organisme->name or '' }}</td>
                                <td field-key='fonction'>{{ $contact_district->fonction }}</td>
                                <td field-key='tel'>{{ $contact_district->tel }}</td>
                                <td field-key='email'>{{ $contact_district->email }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('contact_district_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contact_districts.restore', $contact_district->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('contact_district_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contact_districts.perma_del', $contact_district->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('contact_district_view')
                                    <a href="{{ route('admin.contact_districts.show',[$contact_district->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('contact_district_edit')
                                    <a href="{{ route('admin.contact_districts.edit',[$contact_district->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('contact_district_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contact_districts.destroy', $contact_district->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="11">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="contactsregion">
<table class="table table-bordered table-striped {{ count($contacts_regions) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.contacts-region.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.contacts-region.fields.fonction')</th>
                        <th>@lang('quickadmin.contacts-region.fields.tel')</th>
                        <th>@lang('quickadmin.contacts-region.fields.email')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($contacts_regions) > 0)
            @foreach ($contacts_regions as $contacts_region)
                <tr data-entry-id="{{ $contacts_region->id }}">
                    <td field-key='nom_prenom'>{{ $contacts_region->nom_prenom }}</td>
                                <td field-key='fonction'>{{ $contacts_region->fonction }}</td>
                                <td field-key='tel'>{{ $contacts_region->tel }}</td>
                                <td field-key='email'>{{ $contacts_region->email }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('contacts_region_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts_regions.restore', $contacts_region->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('contacts_region_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts_regions.perma_del', $contacts_region->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('contacts_region_view')
                                    <a href="{{ route('admin.contacts_regions.show',[$contacts_region->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('contacts_region_edit')
                                    <a href="{{ route('admin.contacts_regions.edit',[$contacts_region->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('contacts_region_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contacts_regions.destroy', $contacts_region->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="11">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="listegroupesectoriel">
<table class="table table-bordered table-striped {{ count($liste_groupe_sectoriels) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.liste-groupe-sectoriel.fields.nom-prenom')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.fonction')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.tel')</th>
                        <th>@lang('quickadmin.liste-groupe-sectoriel.fields.email')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($liste_groupe_sectoriels) > 0)
            @foreach ($liste_groupe_sectoriels as $liste_groupe_sectoriel)
                <tr data-entry-id="{{ $liste_groupe_sectoriel->id }}">
                    <td field-key='nom_prenom'>{{ $liste_groupe_sectoriel->nom_prenom }}</td>
                                <td field-key='fonction'>{{ $liste_groupe_sectoriel->fonction }}</td>
                                <td field-key='tel'>{{ $liste_groupe_sectoriel->tel }}</td>
                                <td field-key='email'>{{ $liste_groupe_sectoriel->email }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('liste_groupe_sectoriel_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_groupe_sectoriels.restore', $liste_groupe_sectoriel->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('liste_groupe_sectoriel_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_groupe_sectoriels.perma_del', $liste_groupe_sectoriel->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('liste_groupe_sectoriel_view')
                                    <a href="{{ route('admin.liste_groupe_sectoriels.show',[$liste_groupe_sectoriel->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('liste_groupe_sectoriel_edit')
                                    <a href="{{ route('admin.liste_groupe_sectoriels.edit',[$liste_groupe_sectoriel->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('liste_groupe_sectoriel_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.liste_groupe_sectoriels.destroy', $liste_groupe_sectoriel->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="11">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="om">
<table class="table table-bordered table-striped {{ count($oms) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.om.fields.mission')</th>
                        <th>@lang('quickadmin.om.fields.ordonnee-a')</th>
                        <th>@lang('quickadmin.om.fields.destination')</th>
                        <th>@lang('quickadmin.om.fields.itineraire')</th>
                        <th>@lang('quickadmin.om.fields.depart')</th>
                        <th>@lang('quickadmin.om.fields.duree')</th>
                        <th>@lang('quickadmin.om.fields.prise-en-charge')</th>
                        <th>@lang('quickadmin.om.fields.fichier-om')</th>
                        <th>@lang('quickadmin.om.fields.etat')</th>
                        <th>@lang('quickadmin.om.fields.rapport-de-mission')</th>
                        <th>@lang('quickadmin.om.fields.remise-rapport')</th>
                        <th>@lang('quickadmin.om.fields.etat-rapport-de-mission')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($oms) > 0)
            @foreach ($oms as $om)
                <tr data-entry-id="{{ $om->id }}">
                    <td field-key='mission'>{{ $om->mission->objet or '' }}</td>
                                <td field-key='ordonnee_a'>{{ $om->ordonnee_a->nom_prenom or '' }}</td>
                                <td field-key='destination'>{{ $om->destination }}</td>
                                <td field-key='itineraire'>{{ $om->itineraire }}</td>
                                <td field-key='depart'>{{ $om->depart }}</td>
                                <td field-key='duree'>{{ $om->duree }}</td>
                                <td field-key='prise_en_charge'>
                                    @foreach ($om->prise_en_charge as $singlePriseEnCharge)
                                        <span class="label label-info label-many">{{ $singlePriseEnCharge->name }}</span>
                                    @endforeach
                                </td>
                                <td field-key='fichier_om'>@if($om->fichier_om)<a href="{{ asset(env('UPLOAD_PATH').'/' . $om->fichier_om) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='etat'>{{ $om->etat->nom or '' }}</td>
                                <td field-key='rapport_de_mission'>@if($om->rapport_de_mission)<a href="{{ asset(env('UPLOAD_PATH').'/' . $om->rapport_de_mission) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='remise_rapport'>{{ $om->remise_rapport }}</td>
                                <td field-key='etat_rapport_de_mission'>{{ $om->etat_rapport_de_mission->nom or '' }}</td>
                                                                <td>
                                    @can('om_view')
                                    <a href="{{ route('admin.oms.show',[$om->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('om_edit')
                                    <a href="{{ route('admin.oms.edit',[$om->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('om_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.oms.destroy', $om->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="17">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="tasks">
<table class="table table-bordered table-striped {{ count($tasks) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.tasks.fields.type')</th>
                        <th>@lang('quickadmin.tasks.fields.mission')</th>
                        <th>@lang('quickadmin.tasks.fields.name')</th>
                        <th>@lang('quickadmin.tasks.fields.description')</th>
                        <th>@lang('quickadmin.tasks.fields.status')</th>
                        <th>@lang('quickadmin.tasks.fields.attachment')</th>
                        <th>@lang('quickadmin.tasks.fields.due-date')</th>
                        <th>@lang('quickadmin.tasks.fields.heur')</th>
                        <th>@lang('quickadmin.tasks.fields.user')</th>
                        <th>@lang('quickadmin.tasks.fields.participant')</th>
                        <th>@lang('quickadmin.tasks.fields.organisme')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <tr data-entry-id="{{ $task->id }}">
                    <td field-key='type'>{{ $task->type->nom or '' }}</td>
                                <td field-key='mission'>{{ $task->mission->objet or '' }}</td>
                                <td field-key='name'>{{ $task->name }}</td>
                                <td field-key='description'>{!! $task->description !!}</td>
                                <td field-key='status'>{{ $task->status->name or '' }}</td>
                                <td field-key='attachment'>@if($task->attachment)<a href="{{ asset(env('UPLOAD_PATH').'/' . $task->attachment) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='due_date'>{{ $task->due_date }}</td>
                                <td field-key='heur'>{{ $task->heur }}</td>
                                <td field-key='user'>{{ $task->user->nom_prenom or '' }}</td>
                                <td field-key='participant'>
                                    @foreach ($task->participant as $singleParticipant)
                                        <span class="label label-info label-many">{{ $singleParticipant->nom_prenom }}</span>
                                    @endforeach
                                </td>
                                <td field-key='organisme'>
                                    @foreach ($task->organisme as $singleOrganisme)
                                        <span class="label label-info label-many">{{ $singleOrganisme->name }}</span>
                                    @endforeach
                                </td>
                                                                <td>
                                    @can('task_view')
                                    <a href="{{ route('admin.tasks.show',[$task->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('task_edit')
                                    <a href="{{ route('admin.tasks.edit',[$task->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('task_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.tasks.destroy', $task->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="16">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.contact_companies.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
