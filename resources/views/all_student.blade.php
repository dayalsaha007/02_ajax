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

</head>
<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>All Student</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-data">
                            <table class="table table-bordered table-striped">
                                <div class="t-head">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </div>

                                    <div class="t-body">
                                        <div class="t-body">
                                            @foreach ($students as $student)
                                                <tr>
                                                    <td>{{ $student->id }}</td>
                                                    <td>{{ $student->name }}</td>
                                                    <td>{{ $student->email }}</td>
                                                    <td>
                                                        <img src="{{ asset('storage/'.$student->image) }}" alt="" width="50px">
                                                    </td>
                                                    <td>

                                        <a href="" class="btn btn-info"><i class="ri-eye-fill"></i></a>

                                        <a href="{{ route('edit_student', $student->id) }}" class="btn btn-primary"> <i class="ri-edit-box-line"></i></a>

                                     <a href="" data-id="{{ $student->id }}" id="del_btn" class="btn btn-danger"><i class="ri-close-circle-fill"></i></a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </div>
                                    </div>
                            </table>
                            {!! $students->links() !!}
                        </div>
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
        $(document).ready(function() {
            $(document).on('click', '#del_btn', function(e){
                e.preventDefault();

                var id = $(this).data('id');

                $.ajax({
                    type:"GET",
                    url:'/delete_student/'+id,
                    data:{id:id},
                    success:function(data){
                        $('.table').load(location.href+' .table');
                    },
                    error:function(){

                    }
                });

            });
        });
    </script>

    <script>

            $(document).on('click', '.pagination a', function(){
                e.preventDefault();

                let page = $(this).attr('href').split('page=')[1];
                student(page);
            });

            function student(page){
                $.ajax({
                    url:"pagination/paginate-data?page"+page,
                    success:function(res){
                        $('.table-data').html(res);
                    }
                });
            }

    </script>




</body>
</html>
