@include('admin.header')
@include('admin.sidebar')
<div class="col-10 grid-margin">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4>Add Speciality</h4>
            </div>
            @if (session()->has('message'))
            <div style="width: 500px;" class="alert alert-success">
                <button type="button" class="close float-right" data-dismiss="alert">
                    X </button>
                {{session()->get('message')}}
                @endif
            </div>
            <form class="form-sample" action="{{url('addspeciality')}}" method="POST">
                <!-- now go to web.php and creat route for upload doctor -->
                @csrf
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Add Speciality</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" placeholder="Enter Speciality"
                                required />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 btn">
                    <div class="form-group row">
                        <div class="col-sm-9">
                            <button type="submit" name="save"
                                class="btn btn-inverse-primary btn-fw bg-primary text-light">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br><br>
        <div class="card">
            <div class="card-body  ">
                <h1 class="card-title p-3 bg-primary rounded text-light text-center"><b> Added Specialities </b> </h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="font-weight-bold">Sno.</th>
                                    <th class="font-weight-bold">Name</th>

                                </tr>
                                @foreach($speciality as $specialitys)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$specialitys->id}}</td>
                                    <td>{{$specialitys->speciality}}</td>
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
</div>
</div>
</div>
</div>
</div>
@include('admin.footer')