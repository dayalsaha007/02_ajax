<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div>
                    <select name="c_id" id="category">
                        <option value="">Select Category</option>
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
                    <tbody id="tbody">
                       @foreach ($products as $all=>$product)
                         <tr>
                             <td>{{ $all+1 }}</td>
                             <td>{{ $product->p_name}}</td>
                             <td>{{ $product->price }}</td>
                             <td>{{ $product->c_id }}</td>
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
        $(document).ready(function(){
            $('#category').on('change', function(){
                var category = $(this).val();
                $.ajax({
                        url:"{{ route('product_filter') }}",
                        method:"GET",
                        data:{category:category},
                        success:function(data){
                            var products = data.products;
                            var html = '';
                            if(products.length > 0){
                            products.forEach((product, i) => {
                                        html += `
                                        <tr>
                                            <td>${i}</td>
                                            <td>${product.p_name}</td>
                                            <td>${product.price}</td>
                                            <td>${product.c_id}</td>
                                            <td>${product.description}</td>
                                        </tr>`;
                                    });
                                }
                            else{
                                html += `<tr>
                                         <td>No products Found</td>
                                        </tr>`;
                                    }
                                $('#tbody').html(html);
                        },
                        error:function(e){
                            console.log(e);
                        }
                    });

                });
        });
    </script>

</body>
</html>
