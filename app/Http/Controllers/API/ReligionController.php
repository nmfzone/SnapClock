<?php namespace SnapClock\Http\Controllers\API;

use SnapClock\Religion;
use SnapClock\Transformers\ReligionTransformer;

class ReligionController extends ApiController {

	public function index(Religion $religion)
	{
	    $resources = $religion->all();

        return $this->responseWithCollection($resources, new ReligionTransformer());
	}

}
