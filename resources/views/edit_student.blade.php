<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>02_Ajax | Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

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
                        <form id="form" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" value="{{ $student->id }}" name="id">

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="up_name" class="form-control" value="{{ $student->name }}" required id="up_name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Email</label>
                                <input type="email" name="up_email" class="form-control" value="{{ $student->email }}" id="up_email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Image</label>
                                <input type="file" name="up_file" class="form-control" id="up_file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">

                                <img src="{{ asset('storage/'.$student->image) }}" style="width:40px" class="d-block my-2" id="blah" alt="">

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


<script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>


    <script>

        $(document).ready(function(){
            $('#form').submit(function(e){
                e.preventDefault();

                var form = $('#form')[0];
                var data = new FormData(form);

                    $.ajax({
                        type:"POST",
                        url:"{{ route('student_update') }}",
                        data:data,
                        contentType:false,
                        processData:false,
                        success:function(data){
                            $('#output').text(data.res);
                        },
                        error:function(e){
                            $('#output').text(e.responseText);
                        }
                    });
                 });
              });

    </script>

</body>
</html>
