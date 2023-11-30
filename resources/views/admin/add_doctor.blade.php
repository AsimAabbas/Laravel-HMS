@include('admin.header')
@include('admin.sidebar')
<div class="col-10 grid-margin">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4>Add Doctor</h4>
            </div>
            @if (session()->has('message'))
            <div style="width: 500px;" class="alert alert-success">
                <button type="button" class="close float-right" data-dismiss="alert">
                    X </button>
                {{session()->get('message')}}
                @endif
            </div>
            <form class="form-sample" action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                <!-- now go to web.php and creat route for upload doctor -->
                @csrf
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Doctor Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" placeholder="Enter Doctor name"
                                required />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Doctor Number</label>
                        <div class="col-sm-9">
                            <input type="number" name="phone" class="form-control" placeholder="Enter Doctor Phone No."
                                required />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Speciality</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="speciality" required>
                                <option>... Select Specialist ...</option>
                                @foreach($speciality as $specialitys)
                                <option value="{{$specialitys->speciality}}">{{$specialitys->speciality}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Room no.</label>
                        <div class="col-sm-9">
                            <input type="text" name="room" class="form-control" placeholder="Enter Doctor Room No."
                                required />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" accept="image/png, image/jpeg"
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
    </div>
</div>
</div>
</div>
</div>

@include('admin.footer')