<?php namespace SnapClock;

use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model {

	protected $fillable = ['employee_id', 'week_number', 'sheet_date', 'work_hour', 'running'];
    
    public function entry()
    {
        return $this->hasOne('SnapClock\TimeEntry');
    }
}
