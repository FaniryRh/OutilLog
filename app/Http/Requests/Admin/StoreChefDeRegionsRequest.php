<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreChefDeRegionsRequest extends FormRequest
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
            'nom_prenom' => 'required|unique:chef_de_regions,nom_prenom,'.$this->route('chef_de_region'),
            'tel' => 'required',
            'email' => 'email',
        ];
    }
}
