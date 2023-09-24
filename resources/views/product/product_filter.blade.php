<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div>
                    <select name="" id="">
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->c_name }}</option>
                      @endforeach
                    </select>
                </div>

                <table class="table table-bordered table-striped mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($products as $all=>$product)
                         <tr>
                             <td>{{ $all++ }}</td>
                             <td>{{ $product->p_name}}</td>
                             <td>{{ $product->price }}</td>
                             <td>{{ $product->category }}</td>
                             <td>{{ $product->description }}</td>
                         </tr>
                       @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


    <script>

    </script>

</body>
</html>
