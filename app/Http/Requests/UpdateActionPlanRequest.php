<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateActionPlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $actionPlan = $this->action_plans();

        return [
            'title' => ['required', 'max:255', 'string'],
            'start_at' => [
                'required',
                'max:255',
                'datetime',
            ],
            'end_at' => [
                'required',
                'max:255',
                'datetime',
            ]
        ];
    }
}
