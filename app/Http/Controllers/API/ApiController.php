<?php  namespace SnapClock\Http\Controllers\API; 

use Response;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use SnapClock\Http\Controllers\Controller;

class ApiController extends Controller {
    protected $fractal;
    protected $statusCode = 200;

    public function __construct(Manager $fractal)
    {
        $this->fractal = $fractal;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    protected function responseWithCollection($collection, $callback)
    {
        $resource = new Collection($collection, $callback);

        $rootScope = $this->fractal->createData($resource);

        return $this->respondWithArray($rootScope->toArray());
    }

    protected function responseWithItem($item, $callback)
    {
        $resource = new Item($item, $callback);

        $rootScope = $this->fractal->createData($resource);

        return $this->respondWithArray($rootScope->toArray());
    }

    protected function respondWithArray(array $array, array $headers = [])
    {
        return Response::json($array, $this->statusCode, $headers);
    }

    protected function respondWithError($message, $errorCode)
    {
        if ($this->statusCode === 200)
        {
            trigger_error("Terjadi kesalahan.", E_USER_WARNING);
        }

        return $this->respondWithArray([
            'error' => $errorCode,
            'http_code' => $this->statusCode,
            'message' => $message
        ]);
    }

    protected function errorForbidden($message = 'Forbidden')
    {
        return $this->setStatusCode(403)->respondWithError($message, "GENG-GTFO");
    }

    protected function errorInternalError($message = 'Internal Error')
    {
        return $this->setStatusCode(500)->respondWithError($message, "GENG-ERROR-MR-ROBINSON");
    }

    protected function errorUnauthorized($message = 'Unauthorized')
    {
        return $this->setStatusCode(401)->respondWithError($message, "GENG-NOT-IN-MYWATCH");
    }

    protected function errorWrongArgs($message = 'Wrong Arguments')
    {
        return $this->setStatusCode(400)->respondWithError($message, "GENG-MISS-MATE");
    }
}