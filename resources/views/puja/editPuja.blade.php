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
                            <li><a href="#">Forms</a></li>
                            <li class="active">Edit-Puja</li>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit</strong> Puja
                    </div>
                    <div class="card-body card-block">
                        <form id="pujaForm" action="{{url('puja-update',$pujaDetails->id)}}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="puja_name" class="form-control-label">Puja Name </label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="puja_name" name="puja_name" value="{{$pujaDetails->puja_name}}" placeholder="puja name" class="form-control">
                                    <input type="hidden" name="puja_id" value="{{$pujaDetails->id}}" placeholder="puja name" class="form-control">
                                    <span class="error" id="puja_name_error"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="puja_price" class="form-control-label">Puja Price</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="puja_price" name="puja_price" value="{{$pujaDetails->price}}" placeholder="puja price" class="form-control">
                                    <span class="error" id="puja_price_error"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="puja_title" class="form-control-label">Puja Title</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="puja_title" name="puja_title" value="{{$pujaDetails->title}}" placeholder="puja title" class="form-control">
                                    <span class="error" id="puja_title_error"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="puja_description" class="form-control-label">Puja Description</label></div>
                                <div class="col-12 col-md-9">
                                    <textarea name="puja_description" id="puja_description" rows="9" placeholder="description...." class="form-control">{{$pujaDetails->description}}</textarea>
                                    <span class="error" id="puja_description_error"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="benefits" class="form-control-label">Date</label></div>
                                <div class="col-12 col-md-9">
                                    <div id="fieldsContainer" class="field-container">
                                    @foreach (json_decode($pujaDetails->date) as $date)
                                        <div class="field">
                                            <input type="date" name="field[]" class="form-control" value="{{ $date }}" placeholder="Enter benefit">
                                            <button type="button" onclick="removeField(this)">Remove</button>
                                        </div>
                                    @endforeach
                                    </div>
                                    <button type="button" onclick="addField()">Add Field</button>
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class="form-control-label">Status</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="status" id="selectSm" class="form-control-sm form-control">
                                        <option value="">-- select status --</option>
                                        <option value="1" {{ $pujaDetails->status == '1' ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $pujaDetails->status == '0' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    <span class="error" id="status_error"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="puja_image" class="form-control-label">Upload Image</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="puja_image" name="puja_image" class="form-control-file">
                                    <span class="error" ></span>
                                    <div class="round-img">
                                        <img src="{{asset('puja-image/'.$pujaDetails->image)}}" alt="puja-image" style="height:87px;max-width:112px;margin-top: 16px;">
                                    </div>
                                </div>

                            </div>
                            <br>

                            <input type="submit" name="update" value="Update" class="btn btn-warning">
                            <button type="button" class="btn btn-danger" onclick="resetForm()">Reset</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<style>
    .error {
        color: red;
        font-size: 0.9em;
    }
</style>

<script>
    function validateForm() {
        var isValid = true;

        var pujaName = document.getElementById('puja_name').value;
        var pujaPrice = document.getElementById('puja_price').value;
        var pujaTitle = document.getElementById('puja_title').value;
        var pujaDescription = document.getElementById('puja_description').value;
       
        var status = document.getElementById('selectSm').value;

        // Clear previous errors
        document.getElementById('puja_name_error').innerText = '';
        document.getElementById('puja_price_error').innerText = '';
        document.getElementById('puja_title_error').innerText = '';
        document.getElementById('puja_description_error').innerText = '';
        document.getElementById('status_error').innerText = '';
        

        // Puja Name validation
        if (pujaName.trim() === '') {
            isValid = false;
            document.getElementById('puja_name_error').innerText = 'Puja name is required.';
        }

        // Puja Price validation
        if (pujaPrice.trim() === '') {
            isValid = false;
            document.getElementById('puja_price_error').innerText = 'Puja price is required.';
        } else if (isNaN(pujaPrice) || Number(pujaPrice) <= 0) {
            isValid = false;
            document.getElementById('puja_price_error').innerText = 'Puja price must be a positive number.';
        }

        // Puja Title validation
        if (pujaTitle.trim() === '') {
            isValid = false;
            document.getElementById('puja_title_error').innerText = 'Puja title is required.';
        }

        // Puja Description validation
        if (pujaDescription.trim() === '') {
            isValid = false;
            document.getElementById('puja_description_error').innerText = 'Puja description is required.';
        }

        // Status validation
        if (status === '') {
            isValid = false;
            document.getElementById('status_error').innerText = 'Please select a status.';
        }

        return isValid;
    }

    function addField() {
        var container = document.getElementById('fieldsContainer');
        var div = document.createElement('div');
        div.classList.add('field');
        div.innerHTML = '<input type="text" name="benefits[]" class="form-control" placeholder="Enter benefit"><button type="button" onclick="removeField(this)">Remove</button>';
        container.appendChild(div);
    }

    function removeField(button) {
        var field = button.parentNode;
        field.parentNode.removeChild(field);
    }

    function resetForm() {
        document.getElementById('pujaForm').reset();
        var errorElements = document.getElementsByClassName('error');
        for (var i = 0; i < errorElements.length; i++) {
            errorElements[i].innerText = '';
        }
    }
</script>

@endsection