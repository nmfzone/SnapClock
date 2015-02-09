<?php  namespace SnapClock\Http\Controllers\API; 

use SnapClock\Departement;
use SnapClock\Transformers\DepartementTransformer;

class DepartementsController extends ApiController {
    public function show()
    {
        $resources = Departement::all();

        return $this->responseWithCollection($resources, new DepartementTransformer());
    }
}