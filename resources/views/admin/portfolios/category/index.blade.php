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
                    <form>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">عنوان</label>
                            <input type="text" class="form-control rounded-5" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">نامک</label>
                            <input type="text" class="form-control rounded-5" id="formGroupExampleInput2">
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
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row" style="width: 50px">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td class="text-center" style="width: 100px"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-AdminLayout>
