<x-AdminLayout>
    <x-slot name="title">
        - مدیریت مشتریان ما
    </x-slot>

    <div class="row">
        <div class="col-md-4 mt-3">
            <div class="card border-0 rounded-4">
                <h2 class="text-center fw-bold fs-5 mt-3">ایجاد مشتری جدید </h2>
                <div class="card-body">
                    <form action="{{ route('customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="Input1" class="form-label">عنوان</label>
                            <input type="text" class="form-control rounded-5 @error('title') is-invalid @enderror" name="title" id="Input1" value="{{ $customer->title }}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Input2" class="form-label">پیوند</label>
                            <input type="text" class="form-control rounded-5 @error('url') is-invalid @enderror" name="url" id="Input2" value="{{ $customer->url }}">
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
                                    <option value="zoom-in" @if($customer->aos === 'zoom-in') selected @endif>zoom-in</option>
                                    <option value="zoom-in-up" @if($customer->aos === 'zoom-in-up') selected @endif>zoom-in-up</option>
                                    <option value="zoom-in-down" @if($customer->aos === 'zoom-in-down') selected @endif>zoom-in-down</option>
                                    <option value="zoom-in-left" @if($customer->aos === 'zoom-in-left') selected @endif>zoom-in-left</option>
                                    <option value="zoom-in-right" @if($customer->aos === 'zoom-in-right') selected @endif>zoom-in-right</option>
                                    <option value="zoom-out-up" @if($customer->aos === 'zoom-out-up') selected @endif>zoom-out-up</option>
                                    <option value="zoom-out-down" @if($customer->aos === 'zoom-out-down') selected @endif>zoom-out-down</option>
                                    <option value="zoom-out-right" @if($customer->aos === 'zoom-out-right') selected @endif>zoom-out-right</option>
                                    <option value="zoom-out-left" @if($customer->aos === 'zoom-out-left') selected @endif>zoom-out-left</option>
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
                                    <option value="linear" @if($customer->easing === 'linear') selected @endif>linear</option>
                                    <option value="ease-in-sine" @if($customer->easing === 'ease-in-sine') selected @endif>ease-in-sine</option>
                                    <option value="ease-in-back" @if($customer->easing === 'ease-in-back') selected @endif>ease-in-back</option>
                                    <option value="ease-out-cubic" @if($customer->easing === 'ease-out-cubic') selected @endif>ease-out-cubic</option>
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
                                    <option value="300" @if($customer->delay === '300') selected @endif>300</option>
                                    <option value="600" @if($customer->delay === '600') selected @endif>600</option>
                                    <option value="900" @if($customer->delay === '900') selected @endif>900</option>
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
                                    <option value="0" @if($customer->offset === '0') selected @endif>0</option>
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

                </tbody>
            </table>
        </div>
    </div>
</x-AdminLayout>
