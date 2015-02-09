<?php  namespace SnapClock\Transformers;

use League\Fractal\TransformerAbstract;
use SnapClock\Gender;

class GenderTransformer extends TransformerAbstract {
    public function transform(Gender $gender)
    {
        return [
            'id' => (int) $gender->id,
            'code' => $gender->code,
            'name' => $gender->name
        ];
    }
}