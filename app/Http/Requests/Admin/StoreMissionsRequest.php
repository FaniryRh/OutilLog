<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreMissionsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date_deb' => 'nullable|date_format:'.config('app.date_format').' H:i:s',
            'date_fin' => 'nullable|date_format:'.config('app.date_format').' H:i:s',
            'personnel_id.*' => 'exists:personnel_du_bngrcs,id',
            'stat_id' => 'required',
            'sorties.*.quantite' => 'numeric|required',
        ];
    }
}