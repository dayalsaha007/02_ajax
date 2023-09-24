<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="" id="form">
                            @csrf

                            <label class="my-2" > <b>Category Name</b> </label>
                            <input type="text" name="c_name" class="form-control">
                            <button class="btn btn-info my-2"  >Add Category</button>
                            <div id="output"></div>

                        </form>
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
        $('#form').on('submit',function(e){
            e.preventDefault();

            var form = $('#form')[0];
            var form_data = new FormData(form);

            $.ajax({
                url:"{{route('category.store')}}",
                method:"POST",
                data: form_data, // Corrected this line
                contentType: false, // Set to false when sending FormData
                 processData: false,
                success:function(data){
                    $('#form')[0].reset();
                    $('#output').text(data.res);
                },
                error:function(e){
                    $('#output').text(e.responseText);
                }
            });
        })
    });

</script>

</body>
</html>
