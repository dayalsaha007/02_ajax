
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
            {!! $products->links() !!}
        </div>
    </div>
</div>
