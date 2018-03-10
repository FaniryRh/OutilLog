<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSortiesRequest extends FormRequest
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
            
            'parsonnel_id' => 'required',
            'stock_id' => 'required',
            'quantite' => 'numeric|required',
            'date' => 'required|date_format:'.config('app.date_format').' H:i:s',
            'dateheurfin' => 'nullable|date_format:'.config('app.date_format'),
        ];
    }
}
