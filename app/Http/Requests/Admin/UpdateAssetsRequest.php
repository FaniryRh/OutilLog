<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetsRequest extends FormRequest
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
            
            'category_id' => 'required',
            'title' => 'required',
            'date_acquisition' => 'nullable|date_format:'.config('app.date_format').' H:i:s',
            'quantite_stock' => 'max:2147483647|nullable|numeric',
            'status_id' => 'required',
            'location_id' => 'required',
        ];
    }
}
