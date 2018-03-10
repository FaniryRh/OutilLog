<tr data-index="<?php echo e($index); ?>">
    <td><?php echo Form::text('contacts_regions['.$index.'][nom_prenom]', old('contacts_regions['.$index.'][nom_prenom]', isset($field) ? $field->nom_prenom: ''), ['class' => 'form-control']); ?></td>
<td><?php echo Form::text('contacts_regions['.$index.'][fonction]', old('contacts_regions['.$index.'][fonction]', isset($field) ? $field->fonction: ''), ['class' => 'form-control']); ?></td>
<td><?php echo Form::text('contacts_regions['.$index.'][tel]', old('contacts_regions['.$index.'][tel]', isset($field) ? $field->tel: ''), ['class' => 'form-control']); ?></td>
<td><?php echo Form::text('contacts_regions['.$index.'][email]', old('contacts_regions['.$index.'][email]', isset($field) ? $field->email: ''), ['class' => 'form-control']); ?></td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger"><?php echo app('translator')->getFromJson('quickadmin.qa_delete'); ?></a>
    </td>
</tr>