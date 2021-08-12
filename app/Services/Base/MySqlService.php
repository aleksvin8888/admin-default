<?php


namespace App\Services\Base;


use DB;
use Exception;
use Log;

abstract class MySqlService
{
    /**
     * @param Exception $exception
     * @param null $message
     * @param int $code
     * @param bool $withLog
     * @throws
     */
    protected function handleException(
        Exception $exception, $message = null, $code = 500, $withLog = true
    ): void
    {
        DB::rollBack();

        if ($withLog) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
        }

        throw new Exception($message ?: $exception->getMessage(), $code, $exception);
    }

}
