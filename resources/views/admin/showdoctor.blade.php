@include('admin.header')
@include('admin.sidebar')
<div class="col-12 grid-margin">
    <div class="main-panel">
        <div> @if (session()->has('message'))
            <div class="alert alert-success mt-4 mx-4">
                <button type="button" class="close float-right" data-dismiss="alert">
                    X </button>
                {{session()->get('message')}}
                @endif
            </div>
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card my-5" style="margin: auto;">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title"><b> Doctors </b> </h1>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="text-uppercase font-weight-bold bg-success">
                                                <th>Sno.</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Speciality</th>
                                                <th>Room</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $datas)
                                            <tr>
                                                <td>{{$datas->id}}</td>
                                                <td>{{$datas->name}}</td>
                                                <td>{{$datas->phone}}</td>
                                                <td>{{$datas->speciality}}</td>
                                                <td>{{$datas->room}}</td>
                                                <td><img src="doctorimages/{{$datas->image}}"></td>
                                                <td><a class="btn btn-primary"
                                                        href="{{url('updatedoctor',$datas->id)}}">Update</a>
                                                    <a onclick="return confirm('Are You Sure')" class="btn btn-danger"
                                                        href="{{url('deletedoctor',$datas->id)}}">Delete</a>
                                                </td>
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
        </div>
    </div>

    @include('admin.footer')