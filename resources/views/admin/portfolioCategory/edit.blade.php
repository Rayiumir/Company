<x-AdminLayout>
    <x-slot name="title">
        - ویرایش دسته بندی
    </x-slot>


    <a href="{{ route('portfolioCategory.index') }}" type="button" class="btn btn-light rounded-5"><i class="fa-duotone fa-rotate-back"></i> بازگشت به دسته بندی نمونه کار </a>
    <div class="row">
        <div class="col-md-4 mt-3">
            <div class="card border-0 rounded-4">
                <h2 class="text-center fw-bold fs-5 mt-3">ویرایش دسته بندی </h2>
                <div class="card-body">
                    <form action="{{ route('portfolioCategory.update', $portfolioCategory->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="Input1" class="form-label">عنوان</label>
                            <input type="text" class="form-control rounded-5 @error('name') is-invalid @enderror" name="name" id="Input1" value="{{ $portfolioCategory->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> ویرایش دسته بندی </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">نامک</th>
                        <th scope="col">عملیات</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</x-AdminLayout>
