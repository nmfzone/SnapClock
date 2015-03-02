<?php  namespace SnapClock\Http\Controllers\API; 

use Carbon\Carbon;
use Illuminate\Auth\Guard;
use Illuminate\Http\Request;
use SnapClock\TimeEntry;
use SnapClock\Timesheet;

class AttendanceController extends ApiController {
    public function show(Request $request, Guard $auth, Carbon $carbon, Timesheet $timesheet)
    {
        $this->validate($request, [
            'username' => 'required', 'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if ($auth->attempt($credentials))
        {
            $employee = $auth->user();

            $sheet = $timesheet->where('employee_id', $employee->id)
                                    ->where('sheet_date', $carbon->now()->toDateString())
                                    ->first();

            $result = [];
            $result['employee_id'] = $employee->id;
            $result['username']    = $employee->username;
            $result['name']        = $employee->firstname . ' ' . $employee->lastname;
            $result['type']        = 'in';

            if ($sheet) {
                $result['type']  = 'out';
                $result['start'] = $sheet->entry->start_time;
                $result['entry_id'] = $sheet->entry->id;
                $result['sheet_id'] = $sheet->id;
            }

            return response()->json($result);
        }
    }

    public function store(Request $request, Timesheet $timesheet, Carbon $carbon)
    {
        $input = $request->all();

        if ($input['type'] == 'in') {
            $timesheet->employee_id = $input['employee_id'];
            $timesheet->week_number = $carbon->weekOfYear;
            $timesheet->sheet_date  = $carbon->now()->toDateString();
            $timesheet->save();

            $entry = new TimeEntry([
                'employee_id' => $input['employee_id'],
                'start_time' => $carbon->now(),
                //'entry_start_photo' => $input['photo']
            ]);

            $timesheet->entry()->save($entry);
        } else {
            $sheet = $timesheet->find($input['sheet_id']);
            $sheet->running = 0;
            $sheet->save();

            $sheet->entry()->update([
                'end_time' => $carbon->now(),
                'entry_end_photo' => $input['photo']
            ]);
        }
    }
}