<?php namespace SnapClock;

use Illuminate\Database\Eloquent\Model;

class TimeEntry extends Model {

	protected $fillable = ['timesheet_id', 'employee_id', 'start_time', 'end_time', 'entry_start_photo', 'entry_end_photo'];

}
