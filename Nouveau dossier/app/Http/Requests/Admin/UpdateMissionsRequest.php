<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMissionsRequest extends FormRequest
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
            'materiel_id.*' => 'exists:assets,id',
            'stat_id' => 'required',
        ];
    }
}
