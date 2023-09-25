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
