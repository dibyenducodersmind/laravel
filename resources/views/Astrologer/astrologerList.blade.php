@extends('adminLayout.adminHeader')
@section('admin-page')

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th> Image</th>
                                    <th>Astrologer Name</th>
                                    <th>Mobile Number</th>
                                    <th>Gender</th>
                                    <th>Email Id</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: green;">Approve</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                    <!-- <td>
                                                <div class="user-area dropdown float-right">
                                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Change Status</a>
                            
                                                    <div class="user-menu dropdown-menu">
                                                        <a class="nav-link" href="#"><i class="fa fa-user"></i>Approve</a>
                            
                                                        <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Pending</a>
                            
                                                        <a class="nav-link" href="#"><i class="fa fa-cog"></i>Reject</a>
                            
                                                        
                                                    </div>
                                                </div>
                                            </td> -->
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: orange;">Pending</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: orange;">Pending</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color:red">Rejected</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: orange;">Pending</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: orange;">Pending</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: orange;">Pending</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: green;">Approve</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: green;">Approve</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: green;">Approve</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: green;">Approve</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: green;">Approve</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: green;">Approve</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: green;">Approve</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: green;">Approve</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: green;">Approve</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color: green;">Approve</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color:red">Rejected</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color:red">Rejected</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color:red">Rejected</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color:red">Rejected</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="https://media.istockphoto.com/id/1347480695/photo/beard-priest-holy-astrologer-guru-or-jyotishi-placing-cowrie-shells-on-chart-and-counting-to.jpg?s=612x612&w=0&k=20&c=Fa0mG3pfB7X_odMXwU4rM0lyyVFIradeKZjgmo3sd0Y=" alt="" style="width: 100px;height: 100px;"></a>
                                        </div>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>89699787854</td>
                                    <td>Male</td>
                                    <td>astro@gmail.com</td>
                                    <td>
                                        <span class="badge badge-complete" style="background-color:red">Rejected</span>
                                    </td>
                                    <td>
                                        <span class="ti-user"></span><a href="index.html"><span class="icon-name">Edit</span></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

@endsection