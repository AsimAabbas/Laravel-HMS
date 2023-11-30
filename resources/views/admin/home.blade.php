@include('admin.header')
</div>
<div style="background-color: #e8eff9;" class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close typcn typcn-delete-outline"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>
                    Light
                </div>
                <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                    Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles primary"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default border"></div>
                </div>
            </div>
        </div>
        @include('admin.sidebar')
        <center>
            <div class="row">
                <div class="col-lg-12 col-md-8 col-md-12 grid-margin stretch-card ">
                    <div style="width: 500px;" class="card">
                        <div class="card-body">
                            <h1 class="card-title p-3 bg-success rounded text-light text-center"><b> Welcome Admin </b>
                            </h1>
                            <a href="{{url('add_doctor')}}" class="btn btn-dark col-lg-12">Add Doctor</a>
                            <a href="{{url('showdoctor')}}" class="btn btn-primary col-lg-12 mt-4">View Doctors</a>
                            <a href="{{url('add_speciality')}}" class="btn btn-danger col-lg-12 mt-4">Add Speciality</a>
                            <a href="{{url('showappointment')}}" class="btn btn-info col-lg-12 mt-4">View Appoinment</a>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
</div>
</div>
</div>
@include('admin.footer')