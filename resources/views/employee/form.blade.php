@extends('layouts.default')

@section('content')
<div class="content">
    <h3>Tambah Karyawan</h3>

    <ul class="nav nav-tabs">
        <li><a href="index.php?page=activeEmployees"><i class="fa fa-group"></i> Karyawan Aktif</a></li>
        <li><a href="index.php?page=inactiveEmployees"><i class="fa fa-ban"></i> Karyawan Non Aktif</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane in active" id="home">
            <form action="{{ route('employee.store') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Username <sup>*</sup></label>
                            <input type="text" class="form-control" required="" name="username" value="{{ old('username') }}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="empLast">Nomor Karyawan<sup>*</sup></label>
                            <input type="text" class="form-control" required="" name="employee_number" value="{{ old('employee_number') }}" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Nama Karyawan <sup>*</sup></label>
                            <input type="text" class="form-control" required="" name="firstname" id="firstname" value="{{ old('firstname') }}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email <sup>*</sup></label>
                            <input type="text" class="form-control" required="" name="email" value="{{ old('email') }}" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password1">Password <sup>*</sup></label>
                            <div class="input-group">
                                <input type="password" class="form-control" required="" name="password" id="password" value="" />
                                <span class="input-group-addon"><a href="" id="generate" data-toggle="tooltip" data-placement="top" title="Ciptakan Password"><i class="fa fa-key"></i></a></span>
                            </div>
								<span class="help-block">
									<a href="" id="showIt" class="btn btn-warning btn-xs">Tampilkan Password</a>
									<a href="" id="hideIt" class="btn btn-info btn-xs">Sembunyikan Password</a>
								</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password2">Ulangi Password <sup>*</sup></label>
                            <input type="password" class="form-control" required="" name="password2" id="password2" value="" />
                            <span class="help-block">Ulangi password yang telah dimasukkan.</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone_number">Nomor Telepon <sup>*</sup></label>
                            <input type="text" class="form-control" required="" name="phone_number" value="{{ old('phone_number') }}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mobile_phone">Nomor Mobile (Handphone) <sup>*</sup></label>
                            <input type="text" class="form-control" name="mobile_phone" id="mobile_phone" value="{{ old('mobile_phone') }}" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address1">Alamat <sup>*</sup></label>
                            <textarea class="form-control" name="address1" required="" rows="3">{{ old('address1') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="setAdmin">Admin?</label>
                            <select class="form-control" name="setAdmin">
                                <option value="0" selected>Tidak</option>
                                <option value="1">Ya</option>
                            </select>
                            <span class="help-block">Karyawan yang dapat menjadi administrator.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="setManager">Departemen</label>
                            <select class="form-control" name="setManager">
                                <option value="0" selected>fdasfdas</option>
                                <option value="1">dfadadsafdas</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="input" name="submit" value="newEmployee" class="btn btn-success btn-lg btn-icon"><i class="fa fa-check-square-o"></i> Tambahkan Karyawan Baru</button>
            </form>
        </div>
    </div>
</div>
@stop

@section('script')
    <script>
        $(document).ready(function() {

            // Hide the two links on page load
            $('#hideIt').hide();

            // Show the Password field as plain text
            $('#showIt').click(function(e) {
                e.preventDefault();
                $('#password').prop('type', 'text');
                $('#password2').prop('type', 'text');
                $('#showIt').hide();
                $('#hideIt').show();
            });
            // Show the Password field as asterisks
            $('#hideIt').click(function(e) {
                e.preventDefault();
                $('#password').prop('type', 'password');
                $('#password2').prop('type', 'password');
                $('#hideIt').hide();
                $('#showIt').show();
            });

            // Generate Random Password
            $('#generate').click(function(e) {
                e.preventDefault();

                // You can change the password length by changing the
                // integer to the length you want in generatePassword(8).
                var pwd = generatePassword(8);

                // Populates the fields with the new generated password
                $('#password').val(pwd);
                $('#password2').val(pwd);
            });

            /** ******************************
             * Date Picker
             ****************************** **/
            $('#empHireDate').datetimepicker({
                format: 'yyyy-mm-dd',
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                minView: 2,
                forceParse: 0
            });

        });
    </script>
@stop
