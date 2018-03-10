<tr data-index="{{ $index }}">
    <td>{!! Form::text('liste_groupe_sectoriels['.$index.'][nom_prenom]', old('liste_groupe_sectoriels['.$index.'][nom_prenom]', isset($field) ? $field->nom_prenom: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('liste_groupe_sectoriels['.$index.'][fonction]', old('liste_groupe_sectoriels['.$index.'][fonction]', isset($field) ? $field->fonction: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('liste_groupe_sectoriels['.$index.'][tel]', old('liste_groupe_sectoriels['.$index.'][tel]', isset($field) ? $field->tel: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('liste_groupe_sectoriels['.$index.'][email]', old('liste_groupe_sectoriels['.$index.'][email]', isset($field) ? $field->email: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>