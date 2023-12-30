<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Admin Panel</div>
                <a class="nav-link {{Request::Is('admin/dashboard')?'active':'' }}" href="{{url('admin/dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{url('admin/ticket-all')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    All Complaints
                </a>
                <a class="nav-link" href="{{url('admin/ticket-open')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Pending Complaints
                </a>
                <a class="nav-link" href="{{url('admin/ticket-pending')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    In Progress Complaints
                </a>
                <a class="nav-link" href="{{url('admin/ticket-closed')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Closed Complaints
                </a>
                {{-- <a class="nav-link collapsed  {{Request::Is('admin/add-category') || Request::Is('admin/category') || Request::Is('admin/edit-category/*') ? 'active':''}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-layer-group"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{Request::Is('admin/add-category')?'active':'' }}" href="{{url('admin/add-category')}}">Add Category</a>
                        <a class="nav-link {{Request::Is('admin/category') || Request::Is('admin/edit-category/*') ?'active':'' }}" href="{{url('admin/category')}}">View Category</a>
                    </nav>
                </div>
                <a class="nav-link collapsed {{Request::Is('admin/add-post') || Request::Is('admin/post') || Request::Is('admin/post/*') ? 'show active':''}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsepost" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsepost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{Request::Is('admin/add-post')?'active':'' }}" href="{{url('admin/add-post')}}">Add Posts</a>
                        <a class="nav-link {{Request::Is('admin/post') || Request::Is('admin/post/*') ?'active':'' }}" href="{{url('admin/post')}}">View Posts</a>
                    </nav>
                </div>

                <a class="nav-link" href="{{url('admin/approvalRequest')}}">
                    <div class="sb-nav-link-icon {{Request::Is('admin/dashboard/approvalRequest')?'active':'' }}"><i class="fas fa-address-book"></i></div>
                    Blog Approval Requests
                </a> --}}

                {{-- <a class="nav-link {{Request::Is('admin/users')?'active':'' }}" href="{{url('admin/users')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    User Management
                </a> --}}

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
         {{ Auth::user()->name}}
        </div>
    </nav>
</div>
