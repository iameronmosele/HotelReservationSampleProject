<?php

namespace App\Exceptions\HotelReservartionAppException;

use Exception;

class EloquentException extends Exception
{
    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Flare, Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        if ($exception instanceof CustomException) {
            //
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof CustomException) {
            return response()->view('errors.custom', [], 500);
        }

        return parent::render($request, $exception);
    }
}
