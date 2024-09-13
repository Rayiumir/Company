<x-AdminLayout>
    <x-slot name="title">
        - ویرایش پست
    </x-slot>

    <div class="col-md-6 offset-3">
        <div class="card border-0 rounded-4">
            <div class="card-body">
                <h2 class="fs-5 fw-bold text-center">ویرایش پست</h2>

                <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Input1" class="form-label">عنوان :</label>
                                <input type="text" name="title" class="form-control rounded-5 @error('title') is-invalid @enderror" id="Input1" value="{{ $post->title }}">
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
                        <textarea name="content" class="form-control rounded-5 @error('content') is-invalid @enderror" id="Input3" placeholder="">{{ $post->content }}</textarea>
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
                                    <option value="{{ $row->id }}" @if($post->category_id === $row->id) selected @endif>{{ $row->name }}</option>
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
                                <option value="zoom-in" @if($post->aos === 'zoom-in') selected @endif>zoom-in</option>
                                <option value="zoom-in-up" @if($post->aos === 'zoom-in-up') selected @endif>zoom-in-up</option>
                                <option value="zoom-in-down" @if($post->aos === 'zoom-in-down') selected @endif>zoom-in-down</option>
                                <option value="zoom-in-left" @if($post->aos === 'zoom-in-left') selected @endif>zoom-in-left</option>
                                <option value="zoom-in-right" @if($post->aos === 'zoom-in-right') selected @endif>zoom-in-right</option>
                                <option value="zoom-out-up" @if($post->aos === 'zoom-out-up') selected @endif>zoom-out-up</option>
                                <option value="zoom-out-down" @if($post->aos === 'zoom-out-down') selected @endif>zoom-out-down</option>
                                <option value="zoom-out-right" @if($post->aos === 'zoom-out-right') selected @endif>zoom-out-right</option>
                                <option value="zoom-out-left" @if($post->aos === 'zoom-out-left') selected @endif>zoom-out-left</option>
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
                                <option value="linear" @if($post->easing === 'linear') selected @endif>linear</option>
                                <option value="ease-in-sine" @if($post->easing === 'ease-in-sine') selected @endif>ease-in-sine</option>
                                <option value="ease-in-back" @if($post->easing === 'ease-in-back') selected @endif>ease-in-back</option>
                                <option value="ease-out-cubic" @if($post->easing === 'ease-out-cubic') selected @endif>ease-out-cubic</option>
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
                                <option value="300" @if($post->delay === '300') selected @endif>300</option>
                                <option value="600" @if($post->delay === '600') selected @endif>600</option>
                                <option value="900" @if($post->delay === '900') selected @endif>900</option>
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
                                <option value="0" @if($post->offset === '0') selected @endif>0</option>
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

