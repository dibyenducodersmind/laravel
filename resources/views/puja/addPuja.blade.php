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
                            <li class="active">Add-Puja</li>
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
                        <strong>Add </strong> Puja
                    </div>
                    <div class="card-body card-block">
                        <form id="pujaForm" action="{{url('add-puja')}}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="puja_name" class="form-control-label">Puja Name </label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="puja_name" name="puja_name" placeholder="puja name" class="form-control">

                                    <span class="error" id="puja_name_error"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="puja_price" class="form-control-label">Puja Price</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="puja_price" name="puja_price" placeholder="puja price" class="form-control">
                                    <span class="error" id="puja_price_error"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="puja_title" class="form-control-label">Puja Title</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="puja_title" name="puja_title" placeholder="puja title" class="form-control">
                                    <span class="error" id="puja_title_error"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="puja_description" class="form-control-label">Puja Description</label></div>
                                <div class="col-12 col-md-9">
                                    <textarea name="puja_description" id="puja_description" rows="9" placeholder="description...." class="form-control"></textarea>
                                    <span class="error" id="puja_description_error"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="benefits" class="form-control-label">Benefits</label></div>
                                <div class="col-12 col-md-9">
                                    <div id="fieldsContainer" class="field-container">
                                        <div class="field">
                                            <input type="date" name="field[]" class="form-control" placeholder="Enter benefit">
                                            <button type="button" onclick="removeField(this)">Remove</button>
                                        </div>
                                    </div>
                                    <button type="button" onclick="addField()">Add Field</button>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class="form-control-label">Status</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="status" id="selectSm" class="form-control-sm form-control">
                                        <option value="">-- select status --</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <span class="error" id="status_error"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="puja_image" class="form-control-label">Upload Image</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="puja_image" name="puja_image" class="form-control-file">
                                    <span class="error" id="puja_image_error"></span>
                                </div>
                            </div><br>

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

<script>
    function addField() {
        // Create a new div for the field
        const newFieldDiv = document.createElement('div');
        newFieldDiv.classList.add('field');

        // Create the new input field
        const newField = document.createElement('input');
        newField.type = 'text';
        newField.name = 'field[]';
        newField.placeholder = 'Enter benefit';

        // Create the remove button
        const removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.textContent = 'Remove';
        removeButton.onclick = function() {
            removeField(removeButton);
        };

        // Add the new input field and remove button to the div
        newFieldDiv.appendChild(newField);
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
        const fields = document.querySelectorAll('input[name="field[]"]');
        const values = Array.from(fields).map(field => field.value);

        // Log the values to the console (you can send these values to a server if needed)
        console.log(values);
    });
</script>

@endsection