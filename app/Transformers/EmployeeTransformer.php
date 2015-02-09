<?php  namespace SnapClock\Transformers;

use League\Fractal\TransformerAbstract;
use SnapClock\Employee;

class EmployeeTransformer extends TransformerAbstract {
    public function transform(Employee $employee)
    {
        return [
            'id' => (int) $employee->id,
            'employee_number' => $employee->employee_number,
            'firstname' => $employee->firstname,
            'lastname'  => $employee->lastname,
            'email' => $employee->email,
            'departement_id' => $employee->departement_id,
            'address1' => $employee->address1,
            'address2' => $employee->address2,
            'phone_number' => $employee->phone_number,
            'mobile_number' => $employee->mobile_number,
            'gender_id' => $employee->gender_id
        ];
    }
}