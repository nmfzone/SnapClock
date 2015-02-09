<?php  namespace SnapClock; 

use Illuminate\Database\Eloquent\Model;

class Departement extends Model {
    public function organization()
    {
        return $this->belongsTo('SnapClock\Organization');
    }
}