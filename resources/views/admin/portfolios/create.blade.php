<x-AdminLayout>
    <x-slot name="title">
        - ایجاد نمونه کار جدید
    </x-slot>

    <div class="col-md-6 offset-3">
        <div class="card border-0 rounded-4">
            <div class="card-body">
                <h2 class="fs-5 fw-bold text-center">ایجاد نمونه کار جدید</h2>
                <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                                <label for="Input1" class="form-label">نامک :</label>
                                <input type="text" name="slug" class="form-control rounded-5 @error('slug') is-invalid @enderror" id="Input1" placeholder="">
                                @error('slug')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
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
                        <textarea name="body" class="form-control rounded-5 @error('body') is-invalid @enderror" id="Input3" placeholder=""></textarea>
                        @error('body')
                        <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="Input1" class="form-label">تکنولوژی استفاده شده :</label>
                                <input type="text" name="tech" class="form-control rounded-5 @error('tech') is-invalid @enderror" id="Input1" placeholder="">
                                @error('tech')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="Input1" class="form-label">زمان تکمیل :</label>
                                <input type="text" name="time" class="form-control rounded-5 @error('time') is-invalid @enderror" id="Input1" placeholder="">
                                @error('time')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="Input1" class="form-label">پشتیبانی :</label>
                                <input type="text" name="support" class="form-control rounded-5 @error('support') is-invalid @enderror" id="Input1" placeholder="">
                                @error('support')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="Input1" class="form-label">هزینه پروژه :</label>
                                <input type="text" name="cost" class="form-control rounded-5 @error('cost') is-invalid @enderror" id="Input1" placeholder="">
                                @error('cost')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="Input1" class="form-label">زبان پروژه :</label>
                                <input type="text" name="lang" class="form-control rounded-5 @error('lang') is-invalid @enderror" id="Input1" placeholder="">
                                @error('lang')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5 mt-3"><i class="fa-duotone fa-send"></i> ثبت بخش جدید </button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
