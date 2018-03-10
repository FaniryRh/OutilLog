<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreOmsRequest extends FormRequest
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
            'mission_id' => 'required',
            'ordonnee_a_id' => 'required',
            'destination' => 'required',
            'itineraire' => 'required',
            'depart' => 'required|date_format:'.config('app.date_format').' H:i:s',
            'duree' => 'max:2147483647|required|numeric',
            'prise_en_charge.*' => 'exists:contact_companies,id',
            'remise_rapport' => 'nullable|date_format:'.config('app.date_format').' H:i:s',
        ];
    }
}
