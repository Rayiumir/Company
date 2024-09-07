<x-AdminLayout>
    <x-slot name="title">
        - دسته بندی نمونه کار
    </x-slot>

    <a href="{{ route('portfolios.index') }}" type="button" class="btn btn-light rounded-5"><i class="fa-duotone fa-rotate-back"></i> بازگشت به نمونه کار </a>
    <div class="row">
        <div class="col-md-4 mt-3">
            <div class="card border-0 rounded-4">
                <h2 class="text-center fw-bold fs-5 mt-3">ایجاد دسته بندی نمونه کار</h2>
                <div class="card-body">
                    <form action="{{ route('portfoliosCategory.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="Input1" class="form-label">عنوان</label>
                            <input type="text" class="form-control rounded-5 @error('name') is-invalid @enderror" name="name" id="Input1">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Input2" class="form-label">نامک</label>
                            <input type="text" class="form-control rounded-5 @error('slug') is-invalid @enderror" name="slug" id="Input2">
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="form-select" class="form-label">زیر مجموعه</label>
                            <select class="form-select rounded-5 @error('portfolio_category_id') is-invalid @enderror" id="form-select" name="portfolio_category_id" aria-label="Default select example">
                                <option selected>ندارد</option>
                                @foreach($CategoryParent as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('portfolio_category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> ثبت دسته بندی جدید </button>
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
                    <th scope="col">زیر مجموعه</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($PortfolioCategories as $row)
                        <tr>
                            <th scope="row" style="width: 50px">{{ $row->id }}</th>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->slug }}</td>
                            <td>{{ $row->getParentName() }}</td>
                            <td class="text-center" style="width: 100px"></td>
                        </tr>
                    @empty
                        دسته بندی تعریف نشده است
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-AdminLayout>
