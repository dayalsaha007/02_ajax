<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pagination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>


    <div id="table-data">

        @include('pagination.child_pagination')

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

                $(document).on('click', '.pagination a', function(e){
                        e.preventDefault();

                        var page = $(this).attr('href').split('page=')[1];
                        fetch_data(page);
                });

                function fetch_data(page){
                        $.ajax({
                            type:"POST",
                            url:"{{ route('pagination_fetch') }}",
                            data: { page:page },
                            success:function(data){
                                $('#table-data').html(data);
                            }
                        });
                }

            });
         </script>

</body>
</html>
