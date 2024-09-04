<x-AdminLayout>
    <x-slot name="title">
        - ایجاد کاربر جدید
    </x-slot>

    <div class="col-md-6 offset-3">
        <div class="card border-0 rounded-4">
            <div class="card-body">
                <h2 class="fs-5 fw-bold text-center">ایجاد کاربر جدید</h2>
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Input1" class="form-label">نام و نام خانوادگی :</label>
                        <input type="text" name="name" class="form-control rounded-5 @error('name') is-invalid @enderror" id="Input1" placeholder="">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Input2" class="form-label">آدرس ایمیل :</label>
                        <input type="email" name="email" class="form-control rounded-5 @error('email') is-invalid @enderror" id="Input2" placeholder="">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <label for="Input3" class="form-label">رمز عبور :</label>
                            <input type="password" name="password" class="form-control rounded-5 @error('password') is-invalid @enderror" id="Input3" placeholder="">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="select1" class="form-label">دسترسی :</label>
                            <select class="form-select rounded-5 @error('role') is-invalid @enderror" name="role" id="select1">
                                <option value="user" selected>کاربر عادی</option>
                                <option value="admin">مدیر سایت</option>
                                <option value="author">نویسنده</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5 mt-3"><i class="fa-duotone fa-send"></i> ثبت کاربر جدید </button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
