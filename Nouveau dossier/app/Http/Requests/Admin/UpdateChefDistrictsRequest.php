<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChefDistrictsRequest extends FormRequest
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
            
            'region_id' => 'required',
            'district_id' => 'required',
            'nom_prenom' => 'required|unique:chef_districts,nom_prenom,'.$this->route('chef_district'),
            'tel1' => 'required',
            'email' => 'email',
        ];
    }
}
