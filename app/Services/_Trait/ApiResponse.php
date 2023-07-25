<?php

namespace App\Services\_Trait;
use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    public function sendErrorResponse($message, $errors = null, $code = 400): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'errors' => $errors,
            "success" => false
        ], $code);
    }

    public function sendSuccessResponse($data, $message = 'success'): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
            "success" => true
        ]);
    }
}
