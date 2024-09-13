<x-AdminLayout>
    <x-slot name="title">
        - مدیریت پست ها
    </x-slot>

    <a href="{{ route('posts.create') }}" type="button" class="btn btn-primary rounded-5 mb-4"><i class="fa-duotone fa-plus"></i> ایجاد پست جدید </a>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">عکس</th>
                <th scope="col">عنوان</th>
                <th scope="col">تاریخ ایجاد</th>
                <th scope="col">عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $row)
                <tr>
                    <th scope="row" width="50px">{{ $row->id }}</th>
                    <td width="100px"><img src="{{ asset('posts/img/' . $row->img) }}" width="100px"></td>
                    <td>{{ $row->title }}</td>
                    <td width="150px">{{ $row->getCreatedAtShamsi() }}</td>
                    <td class="text-center" width="100px">
                        <a href="{{ route('posts.edit', $row->id ) }}" class="text-decoration-none text-secondary"><i class="fa-duotone fa-edit"></i></a>
                        <a class="text-decoration-none text-danger" onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash"></i></a>
                        <form id="trash-{{$row->id}}" action="{{ route('posts.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-AdminLayout>
