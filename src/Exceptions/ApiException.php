<?php
namespace App\Exceptions;
class ApiException implements ExceptionWrapperHandlerInterface
    {
    /**
    * @param array $data
    *
    * @return array
    */
    public function wrap($data)
    {
    // we get the original exception
    $exception = $data['exception'];

    // some operations
    // ...

    // return the array
    return array(
    'code'    => $code,
    'message' => $message,
    'value'   => $value
    );
    }
    }