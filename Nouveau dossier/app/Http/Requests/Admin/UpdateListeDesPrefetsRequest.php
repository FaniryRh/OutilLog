<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateListeDesPrefetsRequest extends FormRequest
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
            
            'province_id' => 'required',
            'region_id' => 'required',
            'prefecture_id' => 'required',
            'nom_prenom' => 'required|unique:liste_des_prefets,nom_prenom,'.$this->route('liste_des_prefet'),
            'tel1' => 'required',
            'email' => 'email',
        ];
    }
}
