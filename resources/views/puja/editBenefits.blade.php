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
                            <li><a href="#">Benefits</a></li>
                            <li class="active">Edit-Puja-Benefits</li>
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
                        <strong>Edit </strong> Puja Benefits
                    </div>
                    <div class="card-body card-block">
                        <form id="pujaForm" action="{{url('update-benefits', $benefitDetails->id)}}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="puja_name" class="form-control-label">Puja Name </label></div>
                                <div class="col-12 col-md-9">
                                    <select name="status" id="puja_name" name="puja_name" class="form-control-sm form-control">
                                        <option value="{{$benefitDetails->puja_id}}" selected>{{$benefitDetails->puja_benefit->puja_name}}</option>
                                    </select>
                                    <span class="error" id="puja_name_error"></span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="benefits" class="form-control-label">Benefits</label></div>
                                <div class="col-12 col-md-9">
                                    <div id="fieldsContainer" class="field-container">
                                        @foreach (json_decode($benefitDetails->benefits_header) as $header)
                                        @foreach (json_decode($benefitDetails->benefits_description) as $title)
                                        <div class="field">
                                            <input type="text" name="header[]" class="form-control" value="{{$header}}" placeholder="Enter header">
                                            <textarea name="title[]" class="form-control">{{$title}}</textarea> &nbsp;
                                            <button type="button" class="btn btn-danger" onclick="removeField(this)">Remove</button>
                                        </div>
                                        @endforeach
                                        @endforeach
                                    </div>
                                    <button type="button" class="btn btn-dark" onclick="addBenefitsField()">Add Benefit</button>
                                </div>
                                
                            </div>

                            <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                            <button type="button" class="btn btn-danger" onclick="resetForm()">Reset</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>


</div><!-- .animated -->
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
        var pujaImage = document.getElementById('puja_image').value;
        var status = document.getElementById('selectSm').value;

        // Clear previous errors
        document.getElementById('puja_name_error').innerText = '';
        document.getElementById('puja_price_error').innerText = '';
        document.getElementById('puja_title_error').innerText = '';
        document.getElementById('puja_description_error').innerText = '';
        document.getElementById('status_error').innerText = '';
        document.getElementById('puja_image_error').innerText = '';

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

        // Puja Image validation
        if (pujaImage === '') {
            isValid = false;
            document.getElementById('puja_image_error').innerText = 'Please upload an image.';
        }

        return isValid;
    }

    // function addField() {
    //     var container = document.getElementById('fieldsContainer');
    //     var div = document.createElement('div');
    //     div.classList.add('field');
    //     div.innerHTML = '<input type="text" name="header[]" class="form-control" placeholder="Enter header"><input type="text" name="title[]" class="form-control" placeholder="Enter title"><button type="button" onclick="removeField(this)">Remove</button>';
    //     container.appendChild(div);
    // }

    // function removeField(button) {
    //     var field = button.parentNode;
    //     field.parentNode.removeChild(field);
    // }

    // function resetForm() {
    //     document.getElementById('pujaForm').reset();
    //     var errorElements = document.getElementsByClassName('error');
    //     for (var i = 0; i < errorElements.length; i++) {
    //         errorElements[i].innerText = '';
    //     }
    // }
</script>

<script>
    function addBenefitsField() {
        // Create a new div for the field
        const newFieldDiv = document.createElement('div');
        newFieldDiv.classList.add('field');

        // Create the new input field
        const newField = document.createElement('input');
        newField.type = 'text';
        newField.name = 'header[]';
        newField.placeholder = 'Enter header';

        const newField1 = document.createElement('textarea');
        // newField1.type = 'text';
        newField1.name = 'title[]';
        // newField1.placeholder = 'Enter title';

        // Create the remove button
        const removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.textContent = 'Remove';
        removeButton.onclick = function() {
            removeField(removeButton);
        };

        // Add the new input field and remove button to the div
        newFieldDiv.appendChild(newField);
        newFieldDiv.appendChild(newField1);
        newFieldDiv.appendChild(removeButton);

        // Append the new field to the container
        document.getElementById('fieldsContainer').appendChild(newFieldDiv);
    }

    function removeField(button) {
        const fieldDiv = button.parentElement;
        fieldDiv.remove();
    }

    // Add event listener for form submission to handle data
    document.getElementById('dynamicForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get all the field values
        const fields = document.querySelectorAll('input[name="header[]"]');
        const values = Array.from(fields).map(field => field.value);

        const fields1 = document.querySelectorAll('textarea[name="title[]"]');
        const values1 = Array.from(fields1).map(field => field.value);

        // Log the values to the console (you can send these values to a server if needed)
        console.log(values);
    });
</script>

@endsection