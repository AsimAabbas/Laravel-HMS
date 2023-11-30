@include('user.header')
@include('user.navbar')
<div class="main-panel">
    <div class="content-wrapper">
        @if (session()->has('message'))

        <div class="alert alert-success mt-4 mx-4">
            <button type="button" class="close float-right" data-dismiss="alert">
                X </button>
            {{session()->get('message')}}
            @endif
        </div>
        <div class="row">
            <div class="col-lg-10 grid-margin stretch-card my-5" style="margin: auto;">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title"><b> Your Appointments </b> </h1>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email.</th>
                                        <th>Date</th>
                                        <th>Doctor</th>
                                        <th>Number</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach($appoint as $appoints)
                                <tbody>

                                    <tr>

                                        <td>{{$appoints->name}}</td>
                                        <td>{{$appoints->email}}</td>
                                        <td>{{$appoints->date}}</td>
                                        <td>{{$appoints->doctor}}</td>
                                        <td>{{$appoints->phone}}</td>
                                        <td>{{$appoints->message}}</td>
                                        @if($appoints->status=='In Progress')
                                        <td><label class="badge badge-warning">{{$appoints->status}}</label></td>
                                        @elseif($appoints->status=='Approved')
                                        <td><label class="badge badge-success">{{$appoints->status}}</label></td>
                                        @else
                                        <td><label class="badge badge-danger">{{$appoints->status}}</label></td>
                                        @endif
                                        @if($appoints->status=='In Progress')
                                        <td><a class="btn btn-sm btn-success" onclick="return confirm('Are You Sure')"
                                                href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a>
                                            @else
                                        <td><a class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure')"
                                                href="{{url('cancel_appoint',$appoints->id)}}">Delete</a>
                                        </td>
                                        @endif
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

@include('user.footer')