<x-AdminLayout>
    <x-slot name="title">
        - ایجاد پست جدید
    </x-slot>

    <div class="col-md-6 offset-3">
        <div class="card border-0 rounded-4">
            <div class="card-body">
                <h2 class="fs-5 fw-bold text-center">ایجاد پست جدید</h2>

                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Input1" class="form-label">عنوان :</label>
                                <input type="text" name="title" class="form-control rounded-5 @error('title') is-invalid @enderror" id="Input1" placeholder="">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">تصویر شاخص :</label>
                                <input class="form-control rounded-5 @error('img') is-invalid @enderror" name="img" type="file" id="formFile" accept="image/*">
                                @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Input3" class="form-label">متن :</label>
                        <textarea name="content" class="form-control rounded-5 @error('content') is-invalid @enderror" id="Input3" placeholder=""></textarea>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <label for="select4" class="form-label">دسته بندی :</label>
                            <select class="form-select rounded-5 @error('category_id') is-invalid @enderror" name="category_id" id="select4">
                                <option value="0" selected>انتخاب کنید ...</option>
                                @foreach($categories as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-5">
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                    <button type="submit" class="btn btn-primary rounded-5 mt-3"><i class="fa-duotone fa-send"></i> ثبت پست جدید </button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
