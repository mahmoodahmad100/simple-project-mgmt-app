<?php

namespace Core\Tracker\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'project_id' => 'required|integer',
                    'time'       => 'required|date_format:h:i',
                    'comment'    => 'nullable|string',
                    'via'        => 'nullable|in:stopwatch,manually',
                ];
            }
            case 'PUT': {
                return [
                    'project_id' => 'required|integer',
                    'time'       => 'required|date_format:h:i',
                    'comment'    => 'nullable|string',
                    'via'        => 'nullable|in:stopwatch,manually',
                ];
            }
        }
    }
}
