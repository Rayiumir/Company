<x-AdminLayout>
    <x-slot name="title">
        - ایجاد کاربر جدید
    </x-slot>

    <div class="col-md-6 offset-3">
        <div class="card border-0 rounded-4">
            <div class="card-body">
                <h2 class="fs-5 fw-bold text-center">ایجاد کاربر جدید</h2>
                <form>
                    <div class="mb-3">
                        <label for="Input1" class="form-label">نام و نام خانوادگی :</label>
                        <input type="text" class="form-control rounded-5" id="Input1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="Input2" class="form-label">آدرس ایمیل :</label>
                        <input type="email" class="form-control rounded-5" id="Input2" placeholder="">
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <label for="Input3" class="form-label">رمز عبور :</label>
                            <input type="password" class="form-control rounded-5" id="Input3" placeholder="">
                        </div>
                        <div class="col-md-4">
                            <label for="select1" class="form-label">دسترسی :</label>
                            <select class="form-select rounded-5" id="select1" aria-label="Default select example">
                                <option selected>انتخاب کنید ... </option>
                                <option value="1">مدیر سایت</option>
                                <option value="2">کاربر عادی</option>
                                <option value="3">نویسنده</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5 mt-3"><i class="fa-duotone fa-send"></i> ثبت کاربر جدید </button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
