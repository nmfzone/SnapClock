<?php  namespace SnapClock\Transformers;

use League\Fractal\TransformerAbstract;
use SnapClock\Timesheet;

class TimesheetTransformer extends TransformerAbstract {
    public function transform(Timesheet $timesheet)
    {
        return [
            'id' => (int) $timesheet->id
        ];
    }
}