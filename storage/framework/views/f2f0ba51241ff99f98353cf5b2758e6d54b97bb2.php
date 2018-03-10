<tr data-index="<?php echo e($index); ?>">
    <td><?php echo Form::text('sorties['.$index.'][quantite]', old('sorties['.$index.'][quantite]', isset($field) ? $field->quantite: ''), ['class' => 'form-control']); ?></td>
<td><?php echo Form::text('sorties['.$index.'][unite]', old('sorties['.$index.'][unite]', isset($field) ? $field->unite: ''), ['class' => 'form-control']); ?></td>
<td><?php echo Form::text('sorties['.$index.'][reponsable_sortie]', old('sorties['.$index.'][reponsable_sortie]', isset($field) ? $field->reponsable_sortie: ''), ['class' => 'form-control']); ?></td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger"><?php echo app('translator')->getFromJson('quickadmin.qa_delete'); ?></a>
    </td>
</tr>