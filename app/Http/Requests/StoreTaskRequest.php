<?php

namespace App\Http\Requests;

use App\Task;
use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('task_create');
    }

    public function rules()
    {
        return [
            'name'      => [
                'required',
            ],
            'status_id' => [
                'required',
                'integer',
            ],
            'tags.*'    => [
                'integer',
            ],
            'tags'      => [
                'array',
            ],
            'due_date'  => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}