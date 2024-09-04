<x-AdminLayout>
    <x-slot name="title">
        - مدیریت کاربران
    </x-slot>

    <a href="{{ route('users.create') }}" type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-plus"></i> کاربر جدید </a>
    <table class="table table-striped table-bordered mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">نام و نام خانوادگی</th>
            <th scope="col">ایمیل</th>
            <th scope="col">دسترسی کاربر</th>
            <th scope="col">تاریخ ایجاد</th>
            <th scope="col">عملیات</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $row)
                <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->role}}</td>
                    <td>@mdo</td>
                    <td class="text-center">
                        <a href="{{ route('users.edit', $row->id) }}" class="text-decoration-none text-secondary me-2"><i class="fa-duotone fa-user-edit"></i></a>
                        <a class="text-decoration-none text-danger" onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash"></i></a>
                        <form id="trash-{{$row->id}}" action="{{ route('users.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}
</x-AdminLayout>
