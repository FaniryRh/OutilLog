<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreTasksRequest extends FormRequest
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
            'type_id' => 'required',
            'name' => 'required',
            'status_id' => 'required',
            'due_date' => 'nullable|date_format:'.config('app.date_format'),
            'heur' => 'nullable|date_format:H:i:s',
            'participant.*' => 'exists:personnel_du_bngrcs,id',
            'organisme.*' => 'exists:contact_companies,id',
        ];
    }
}
