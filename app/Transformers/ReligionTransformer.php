<?php  namespace SnapClock\Transformers;

use League\Fractal\TransformerAbstract;

class ReligionTransformer extends TransformerAbstract {
    public function transform(Religion $religion)
    {
        return [
            'id' => (int) $religion->id,
            'code' => $religion->code,
            'name' => $religion->name
        ];
    }
}