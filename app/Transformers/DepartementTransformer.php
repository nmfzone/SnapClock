<?php  namespace SnapClock\Transformers;

use League\Fractal\TransformerAbstract;
use SnapClock\Departement;

class DepartementTransformer extends TransformerAbstract {
    public function transform(Departement $departement)
    {
        return [
            'id'            => (int) $departement->id,
            'organization'  => $departement->organization->name,
            'name'          => $departement->name
        ];
    }
}