<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Mockery\Exception;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];



//    public function render($request )
//    {
//        if ($exception instanceof ModelNotFoundException && $request->wantsJson()) {
//            return response()->json(['message' => 'Not Found!'], 404);
//        }
//    }
}
