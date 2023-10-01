<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>02_Ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <style>
        .error{
            color: red;
        }
    </style>

</head>
<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Student Form</h3>
                    </div>
                    <div class="card-body">
                        <form id="my_form" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="in_name" class="form-control"  id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Email</label>
                                <input type="email" name="in_email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Image</label>
                                <input type="file" name="file" class="form-control" id="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" >

                                <img src="" style="width:40px" class="d-block my-2" id="blah" alt="">

                            </div>

                            <input type="submit" class="btn btn-primary btn-sm" value="Add Student" id="add_student">

                            <div class="mb-3"
                        </form>
                        <span id="output"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" ></script>


<script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

<script>
   $(document).ready(function () {
        $('#my_form').validate({
            rules: {
                in_name: "required",
                in_email: {
                    required: true,
                    email: true
                }
            }

          });
        });
    </script>


    <script>
        $(document).ready(function(){
            $('#my_form').submit(function(e){
                e.preventDefault();
                var form = $('#my_form')[0];
                var data = new FormData(form);
                $.ajax({
                    type: "POST",
                    url: "{{ route('add_student') }}",
                    data:data,
                    processData:false,
                    contentType:false,
                    success:function(data){
                        $('#my_form')[0].reset();
                        $('#output').text(data.res);
                        $("input[type='file']").val('');
                    },
                    error:function(e){
                        $('#output').text(e.res);
                    }
                });
            });
        });
    </script>

</body>
</html>
