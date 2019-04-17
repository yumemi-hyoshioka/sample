<?php

namespace App\Http\Requests;

use Urameshibr\Requests\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class CommonRequest extends FormRequest
{
    public function failedValidation(Validator $validator, string $code = null)
    {
        /**
         * エラーレスポンスを明記
         */
    }
}
