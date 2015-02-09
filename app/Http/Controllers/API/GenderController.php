<?php namespace SnapClock\Http\Controllers\API;

use SnapClock\Gender;
use SnapClock\Transformers\GenderTransformer;

class GenderController extends ApiController {

	public function index(Gender $gender)
	{
	    $resources = $gender->all();

        return $this->responseWithCollection($resources, new GenderTransformer());
	}

}
