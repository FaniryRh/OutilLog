<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegionsRequest extends FormRequest
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
            'name' => 'min:1|required',
            'contacts_regions.*.nom_prenom' => 'required|unique:contacts_regions,nom_prenom,'.$this->route('contacts_region'),
            'districts.*.name' => 'min:1|required',
            'prefectures.*.name' => 'required|unique:prefectures,name,'.$this->route('prefecture'),
        ];
    }
}
