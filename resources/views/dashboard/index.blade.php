@extends('layouts.default')

@section('content')
<div class="contentAlt">
    <div class="row">
        <div class="col-md-4">
            <div class="dashBlk">
                <div class="iconBlk primary">
                    <i class="fa fa-envelope-o"></i>
                </div>
                <div class="contentBlk">
                    Anda memiliki<br />
					<span class="msgCount" data-toggle="tooltip" data-placement="top" title="Tampilkan Pesan">
                        0
					</span><br />
                    Pesan
                </div>
            </div>
        </div>

        <div class="col-md-4 col-dashBlk">
            <div class="dashBlk">
                <div class="iconBlk info">
                    <i class="fa fa-calendar"></i>
                </div>
                <div class="contentBlk">
                    Anda telah bekerja<br />
                    <span class="timeWorked" data-toggle="tooltip" data-placement="top" title="2 jam">00:02:00</span><br />
                    Minggu ini
                </div>
            </div>
        </div>

        <div class="col-md-4 col-dashBlk">
            <div class="dashBlk">
                <div class="iconBlk success">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="contentBlk">
                    Anda telah absen masuk<br />
                    <span class="clockstatus workStatus"></span>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="contentAlt">
    <div class="row">
        <div class="col-md-6">
            <div class="content setHeight no-margin">
                <h4>Task</h4>
                <div class="alertMsg default">
                    <i class="fa fa-minus-square-o"></i> Tidak ada task.
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="content setHeight no-margin">
                <h4>Pesan</h4>
                <div class="alertMsg default">
                    <i class="fa fa-minus-square-o"></i> Tidak ada pesan
                </div>
            </div>
        </div>
    </div>
</div>
@stop