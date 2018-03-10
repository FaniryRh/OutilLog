<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonnelDuBngrcsRequest extends FormRequest
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
            'fonction' => 'required',
            'nom_prenom' => 'required|unique:personnel_du_bngrcs,nom_prenom,'.$this->route('personnel_du_bngrc'),
            'competence_formation.*' => 'exists:competance_formations,id',
            'capacites.*' => 'exists:capacites,id',
            'date_embauche' => 'nullable|date_format:'.config('app.date_format'),
        ];
    }
}
