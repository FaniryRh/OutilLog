<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInventairesRequest extends FormRequest
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
            
            'date' => 'nullable|date_format:'.config('app.date_format').' H:i:s',
            'mission_id' => 'required',
            'quantite' => 'numeric',
            'materiel_id.*' => 'exists:assets,id',
            'responsable_id' => 'required',
            'responsable_id.*' => 'exists:personnel_du_bngrcs,id',
        ];
    }
}
