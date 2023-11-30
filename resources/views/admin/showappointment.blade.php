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
                                <h1 class="card-title"><b> All Appointments </b> </h1>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="font-weight-bold">Sno.</th>
                                                <th class="font-weight-bold">Patient Name</th>
                                                <th class="font-weight-bold">Email</th>
                                                <th class="font-weight-bold">Date</th>
                                                <th class="font-weight-bold">Doctor</th>
                                                <th class="font-weight-bold">Number</th>
                                                <th class="font-weight-bold">Message</th>
                                                <th class="font-weight-bold">Status</th>
                                                <th class="font-weight-bold">Approve</th>
                                                <th class="font-weight-bold">Cancel</th>
                                                <th class="font-weight-bold">Delete</th>
                                            </tr>
                                            @foreach($data as $datas)
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$datas->id}}</td>
                                                <td>{{$datas->name}}</td>
                                                <td>{{$datas->email}}</td>
                                                <td>{{$datas->date}}</td>
                                                <td>{{$datas->doctor}}</td>
                                                <td>{{$datas->phone}}</td>
                                                <td>{{$datas->message}}</td>
                                                @if($datas->status=='In Progress')
                                                <td> <label class="badge badge-warning">{{$datas->status}}</label></td>
                                                @elseif($datas->status=='Canceled')
                                                <td> <label class="badge badge-danger">{{$datas->status}}</label></td>
                                                @else
                                                <td> <label class="badge badge-success">{{$datas->status}}</label>
                                                </td>
                                                @endif
                                                <td>
                                                    @if($datas->status=='Approved')
                                                    <a class="btn btn-sm btn-success disabled"
                                                        onclick="return confirm('Are You Sure')"
                                                        href="{{url('approved',$datas->id)}}">Approved</a>
                                                    @else
                                                    <a class="btn btn-sm btn-success"
                                                        onclick="return confirm('Are You Sure')"
                                                        href="{{url('approved',$datas->id)}}">Approved</a>
                                                </td>
                                                @endif
                                                @if($datas->status=='Canceled')
                                                <td><a class="btn btn-sm btn-danger disabled"
                                                        onclick="return confirm('Are You Sure')"
                                                        href="{{url('cancel',$datas->id)}}">Cancel</a>
                                                    @else
                                                <td><a class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are You Sure')"
                                                        href="{{url('cancel',$datas->id)}}">Cancel</a>
                                                </td>
                                                @endif
                                                <td><a class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are You Sure')"
                                                        href="{{url('deleteappointment',$datas->id)}}">Delete</a>
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