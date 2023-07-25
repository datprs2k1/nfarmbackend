<?php

namespace App\Http\Requests\_Abstract;
use App\Http\Requests\_Abstract\BaseRequest;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Exceptions\HttpResponseException;
abstract class ApiBaseRequest extends BaseRequest
{
    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        throw new HttpResponseException(response()->json([
            'error_msg' => $errors->first()
        ], Response::HTTP_UNPROCESSABLE_ENTITY));
//        $errors = (new ValidationException($validator))->errors();
//
//        throw new HttpResponseException(response()->json([
//            'errors' => $errors
//        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}
