<div class="col-xl-6 d-flex h-50 mt-5">
    <div style="width: 1000px;" class="content-wrapper ">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card ">
                <div style="width: 500px;" class="card">
                    <div class="card-body">
                        <h1 class="card-title p-3 bg-success rounded text-light text-center"><b> All Doctors </b> </h1>
                        <div class="table-responsive ">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">Sno.</th>
                                        <th class="font-weight-bold">Name</th>
                                        <th class="font-weight-bold">Speciality</th>
                                    </tr>
                                    @foreach($data as $datas)
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$datas->id}}</td>
                                        <td>{{$datas->name}}</td>
                                        <td>{{$datas->speciality}}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between ">
                <h4 class="card-title mb-3">Appointments</h4>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="font-weight-bold">Sno.</th>
                                    <th class="font-weight-bold">Name</th>
                                    <th class="font-weight-bold">Email</th>
                                </tr>
                                @foreach($appointment as $appointments)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$appointments->id}}</td>
                                    <td>{{$appointments->name}}</td>
                                    <td>{{$appointments->email}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <canvas id="salesanalyticChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>