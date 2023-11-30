<base href="/public">
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
            <form class="form-sample" action="{{url('editdoctor',$data->id)}}" method="POST"
                enctype="multipart/form-data">
                <!-- now go to web.php and creat route for upload doctor -->
                @csrf
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Doctor Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" value="{{$data->name}}" required />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Doctor Number</label>
                        <div class="col-sm-9">
                            <input type="number" name="phone" class="form-control" value="{{$data->phone}}" required />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Speciality</label>
                        <div class="col-sm-9">
                            <input type="text" name="speciality" class="form-control" value="{{$data->speciality}}"
                                required />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Room no.</label>
                        <div class="col-sm-9">
                            <input type="text" name="room" class="form-control" value="{{$data->room}}" required />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Old Image</label>
                        <div class="col-sm-9">
                            <img class="w-50" src="doctorimages/{{$data->image}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Change Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" accept="image/png, image/jpeg" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 btn">
                    <div class="form-group row">
                        <div class="col-sm-9">
                            <button type="submit" name="update"
                                class="btn btn-inverse-primary btn-fw bg-primary text-light">Update</button>
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