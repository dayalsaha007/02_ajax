<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search | Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

</head>
<body>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                    <div class="card-header">
                        <h3>Search students name</h3>
                    </div>
                    <div class="card-body">
                        <label class="my-2" for="">Student</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="search student name...">
                        <div id="student_list">

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
            $('#name').on('keyup', function (e) {
                e.preventDefault();

                var name = $(this).val();

                $.ajax({
                    url: "{{route('search')}}",
                    method: "GET",
                    data: {name: name},
                    success: function (data) {
                        $('#student_list').html(data);
                    },
                    error:function(e){
                        console.log(e);
                    }
                });
            });

            $(document).on('click', 'li', function(e){
                e.preventDefault();
                var value = $(this).text();
                $('#name').val(value);
                $('#student_list').html('');


            })

        });
    </script>


</body>
</html>

