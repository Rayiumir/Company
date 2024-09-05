<x-AdminLayout>
    <x-slot name="title">
        - نمونه کارها
    </x-slot>

    <a href="{{ route('portfolios.create') }}" type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-plus"></i> نمونه کار جدید </a>
    <button type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-list-tree"></i> دسته بندی </button>

    <div class="mt-3">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" style="width: 50px">#</th>
                <th scope="col" style="width: 100px">عکس</th>
                <th scope="col">عنوان</th>
                <th scope="col">متن</th>
                <th scope="col" style="width: 150px">تاریخ ایجاد</th>
                <th scope="col" style="width: 100px">عملیات</th>
            </tr>
            </thead>
            <tbody>
                @foreach($portfolios as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>
                            <img src="{{ asset('portfolios/img/' . $row->img ) }}" style="width: 80px" alt="" srcset="">
                        </td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->body }}</td>
                        <td>{{ $row->getCreatedAtShamsi() }}</td>
                        <td>
                            <i class="fa-duotone fa-edit text-secondary"></i>
                            <i class="fa-duotone fa-trash text-danger"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-AdminLayout>
