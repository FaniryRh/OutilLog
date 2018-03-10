<tr data-index="{{ $index }}">
    <td>{!! Form::text('contact_districts['.$index.'][nom_prenom]', old('contact_districts['.$index.'][nom_prenom]', isset($field) ? $field->nom_prenom: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contact_districts['.$index.'][fonction]', old('contact_districts['.$index.'][fonction]', isset($field) ? $field->fonction: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contact_districts['.$index.'][tel]', old('contact_districts['.$index.'][tel]', isset($field) ? $field->tel: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contact_districts['.$index.'][email]', old('contact_districts['.$index.'][email]', isset($field) ? $field->email: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>