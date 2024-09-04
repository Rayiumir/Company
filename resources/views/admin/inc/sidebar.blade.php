<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">میزکار رنجر</div>
    <div style="width: 250px">
        <div class="p-3">
            <div class="text-center">
                <i class="fa-duotone fa-user fa-4x"></i>
                <div class="mt-2 mb-2">
                    <span class="badge text-bg-primary"><i class="fa-duotone fa-user me-2"></i>نام : {{ auth()->user()->name }}</span>
                    <span class="badge text-bg-success"><i class="fa-duotone fa-lock me-2"></i>دسترسی :  {{ auth()->user()->getRoleName() }}</span>
                </div>
                <br>
                <a href="" type="button" class="btn btn-danger rounded-5 btn-sm"><i class="fa-duotone fa-sign-out"></i> خروج</a>
            </div>
            <div class="d-grid gap-2 mt-3">
                <a href="{{route('admin.index')}}" type="button" class="btn {{ request()->routeIs('admin.index') ? 'btn-light active' : 'btn-light' }} rounded-5 text-start"><i class="fa-duotone fa-home"></i> پیشخوان </a>
                <a href="{{route('users.index')}}" type="button" class="btn {{ request()->routeIs('users.index') || request()->routeIs('users.create') || request()->routeIs('users.edit') ? 'btn-light active' : 'btn-light' }} rounded-5 text-start"><i class="fa-duotone fa-users"></i> کاربران </a>

            </div>
        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->


