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
                <a href="{{route('categories.index')}}" type="button" class="btn {{ request()->routeIs('categories.index') || request()->routeIs('categories.edit') ? 'btn-light active' : 'btn-light' }} rounded-5 text-start"><i class="fa-duotone fa-list-tree"></i> دسته بندی </a>
                <a href="{{route('services.index')}}" type="button" class="btn {{ request()->routeIs('services.index') || request()->routeIs('services.create') || request()->routeIs('services.edit') ? 'btn-light active' : 'btn-light' }} rounded-5 text-start"><i class="fa-duotone fa-layer-group"></i> خدمات ما </a>
                <a href="{{route('portfolios.index')}}" type="button" class="btn {{ request()->routeIs('portfolios.index') || request()->routeIs('portfolios.create') || request()->routeIs('portfolios.edit') ? 'btn-light active' : 'btn-light' }} rounded-5 text-start"><i class="fa-duotone fa-file-archive"></i> نمونه کارها </a>
                <a href="{{route('posts.index')}}" type="button" class="btn {{ request()->routeIs('posts.index') || request()->routeIs('posts.create') || request()->routeIs('posts.edit') ? 'btn-light active' : 'btn-light' }} rounded-5 text-start"><i class="fa-duotone fa-blog"></i> پست ها </a>
                <a href="{{route('customers.index')}}" type="button" class="btn {{ request()->routeIs('customers.index') || request()->routeIs('customers.edit') ? 'btn-light active' : 'btn-light' }} rounded-5 text-start"><i class="fa-duotone fa-user-friends"></i> مشتریان ما </a>
            </div>
        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->


