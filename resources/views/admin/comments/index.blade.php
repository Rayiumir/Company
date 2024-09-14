<x-AdminLayout>
    <x-slot name="title">
        - مدیریت نظرات
    </x-slot>

    <div class="mt-3">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ارسال کننده</th>
                    <th scope="col">برای</th>
                    <th scope="col">دیدگاه</th>
                    <th scope="col">تاریخ</th>
                    <th scope="col">تعداد</th>
                    <th scope="col">وضعیت</th>
                    <th scope="col">عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $row)
                    <tr>
                        <th scope="row" width="50">{{ $row->id }}</th>
                        <td width="150">{{ $row->user->name }}</td>
                        <td>{{ $row->post->title }}</td>
                        <td>{{ $row->content }}</td>
                        <td width="100">{{ $row->getCreatedAtShamsi() }}</td>
                        <td width="50">{{ $row->replies_count }}</td>
                        <td class="{{ $row->is_approved ? 'text-success' : 'text-error' }}" width="100">{{ $row->getStatus() }}</td>
                        <td class="text-center" width="60">
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    @if($row->is_approved)
                                        <a class="text-decoration-none text-danger" onclick="event.preventDefault();document.getElementById('check-{{$row->id}}').submit()"><i class="fa-duotone fa-xmark"></i></a>
                                        <form id="check-{{$row->id}}" action="{{ route('comments.update', $row->id) }}" method="POST">@csrf @method('PUT')</form>
                                    @else
                                        <a class="text-decoration-none text-success" onclick="event.preventDefault();document.getElementById('check-{{$row->id}}').submit()"><i class="fa-duotone fa-check"></i></a>
                                        <form id="check-{{$row->id}}" action="{{ route('comments.update', $row->id) }}" method="POST">@csrf @method('PUT')</form>
                                    @endif
                                </div>
                                <div class="col-6 col-md-6">
                                    <a class="text-decoration-none text-danger" onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash"></i></a>
                                    <form id="trash-{{$row->id}}" action="{{ route('comments.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>

                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-AdminLayout>
