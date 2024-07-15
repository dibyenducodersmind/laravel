@extends('adminLayout.adminHeader')
@section('admin-page')

<?php 
use App\Models\WEB\PujaBenefits;
?>
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
                            <li class="active">Puja List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    @if (session('success'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">

        <span class="badge badge-pill badge-success">Success</span>
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Puja Table</strong>
                        <a href="add-puja-page" class="btn btn-success">Add Puja + </a>
                    </div>

                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="avatar">Puja Image</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th colspan="5" style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($getPujaList)) {
                                ?>
                                    @foreach($getPujaList as $key => $puja)
                                    <tr>
                                        <td class="serial">{{$key+1}}.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{asset('puja-image/'.$puja->image)}}" alt="" style="height:78px;max-width:66px"></a>
                                            </div>
                                        </td>
                                        <td> {{$puja->puja_name}}</td>
                                        <td> <span class="name"> {{$puja->title}}</span> </td>
                                        <td> <span class="name">{{$puja->description}}</span> </td>
                                        <td> <span class="name">₹ {{$puja->price}}</span> </td>
                                        <td>
                                            @if($puja->status == '1')
                                            <span class="badge badge-complete">Active</span>
                                            @else
                                            <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('puja-edit',$puja->id)}}" style="color: #09aeff;">Edit</a>&nbsp; &nbsp;&nbsp;
                                            <a href="{{url('puja-delete',$puja->id)}}" style="color: #ff0909">Delete</a>
                                        </td>
                                        <td>
                                            <?php 
                                             $count = PujaBenefits::where('puja_id',$puja->id)->count();
                                            if($count > 0){  ?>
                                                <a href="{{url('edit-benefits',$puja->id)}}"  class="badge badge-complete" style="background: #14770c;">Update Benefits +</a>&nbsp; &nbsp;&nbsp;
                                            <?php }else if($count == 0){ ?>
                                                <a href="{{url('add-puja-benefits',$puja->id)}}"  class="badge badge-complete" style="background: #14770c;">Add Benefits +</a>&nbsp; &nbsp;&nbsp;
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    @endforeach
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="8"><h1 style="text-align: center;color:#ff0909">No Puja found.</h1></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection