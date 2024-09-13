<x-AdminLayout>
    <x-slot name="title">
        - مدیریت مشتریان ما
    </x-slot>

    <div class="row">
        <div class="col-md-4 mt-3">
            <div class="card border-0 rounded-4">
                <h2 class="text-center fw-bold fs-5 mt-3">ایجاد مشتری جدید </h2>
                <div class="card-body">
                    <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="Input1" class="form-label">عنوان</label>
                            <input type="text" class="form-control rounded-5 @error('title') is-invalid @enderror" name="title" id="Input1">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Input2" class="form-label">پیوند</label>
                            <input type="text" class="form-control rounded-5 @error('url') is-invalid @enderror" name="url" id="Input2">
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">تصویر شاخص :</label>
                            <input class="form-control rounded-5 @error('img') is-invalid @enderror" name="img" type="file" id="formFile" accept="image/*">
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="select1" class="form-label">aos :</label>
                                <select class="form-select rounded-5 @error('aos') is-invalid @enderror" name="aos" id="select1">
                                    <option selected>انتخاب کنید ... </option>
                                    <option value="zoom-in">zoom-in</option>
                                    <option value="zoom-in-up">zoom-in-up</option>
                                    <option value="zoom-in-down">zoom-in-down</option>
                                    <option value="zoom-in-left">zoom-in-left</option>
                                    <option value="zoom-in-right">zoom-in-right</option>
                                    <option value="zoom-out-up">zoom-out-up</option>
                                    <option value="zoom-out-down">zoom-out-down</option>
                                    <option value="zoom-out-right">zoom-out-right</option>
                                    <option value="zoom-out-left">zoom-out-left</option>
                                </select>
                                @error('aos')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="select2" class="form-label">aos-easing :</label>
                                <select class="form-select rounded-5 @error('easing') is-invalid @enderror" name="easing" id="select2">
                                    <option selected>انتخاب کنید ... </option>
                                    <option value="linear">linear</option>
                                    <option value="ease-in-sine">ease-in-sine</option>
                                    <option value="ease-in-back">ease-in-back</option>
                                    <option value="ease-out-cubic">ease-out-cubic</option>
                                </select>
                                @error('easing')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="select3" class="form-label">aos-delay :</label>
                                <select class="form-select rounded-5 @error('delay') is-invalid @enderror" name="delay" id="select3">
                                    <option selected>انتخاب کنید ... </option>
                                    <option value="300">300</option>
                                    <option value="600">600</option>
                                    <option value="900">900</option>
                                </select>
                                @error('delay')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="select4" class="form-label">aos-offset :</label>
                                <select class="form-select rounded-5 @error('offset') is-invalid @enderror" name="offset" id="select4">
                                    <option value="0" selected>0</option>
                                </select>
                                @error('offset')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary rounded-5 mt-4"><i class="fa-duotone fa-send"></i> ثبت مشتری جدید </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">لوگو</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">پیوند</th>
                    <th scope="col">تاریخ ایجاد</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $row)
                    <tr>
                        <th scope="row" style="width: 50px">{{ $row->id }}</th>
                        <td width="100px"><img src="{{ asset('customers/img/' . $row->img ) }}" width="100px" alt="" srcset=""></td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->url }}</td>
                        <td>{{ $row->getCreatedAtShamsi() }}</td>
                        <td class="text-center" style="width: 100px">
                            <a href="{{ route('customers.edit', $row->id) }}" class="text-decoration-none text-secondary"><i class="fa-duotone fa-edit"></i></a>
                            <a class="text-decoration-none text-danger" onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash"></i></a>
                            <form id="trash-{{$row->id}}" action="{{ route('customers.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-AdminLayout>
