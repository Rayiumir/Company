<x-AdminLayout>
    <x-slot name="title">
        - خدمات ما
    </x-slot>
    <a href="{{ route('services.create') }}" type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-plus"></i> بخش جدید </a>
    <div class="mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">کلاس آیکون</th>
                    <th scope="col">متن</th>
                    <th scope="col">data-aos</th>
                    <th scope="col">aos-easing</th>
                    <th scope="col">aos-delay</th>
                    <th scope="col">aos-offset</th>
                    <th scope="col">عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $row)
                    <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td>{{$row->title}}</td>
                        <td>{{$row->iconClass}}</td>
                        <td>{{ \Illuminate\Support\Str::limit($row->body, 50) }}</td>
                        <td>{{$row->aos}}</td>
                        <td>{{$row->easing}}</td>
                        <td>{{$row->delay}}</td>
                        <td>{{$row->offset}}</td>
                        <td class="text-center">
                            <a href="{{ route('services.edit', $row->id) }}" class="text-decoration-none text-secondary"><i class="fa-duotone fa-edit text-secondary"></i></a>
                            <a class="text-decoration-none text-danger" onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash"></i></a>
                            <form id="trash-{{$row->id}}" action="{{ route('services.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $services->links() }}
    </div>
</x-AdminLayout>
