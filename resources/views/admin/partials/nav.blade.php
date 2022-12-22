<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li  >
                    <a href="{{ route('admin')}}" class="waves-effect active">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-starter-page">Inicio</span>
                    </a>
                </li>

                

                <li class="menu-title" key="t-pages">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication">Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.posts.index') }}" key="t-login">Ver todos los Posts</a></li>
                        <li><a href="{{ route('admin.posts.create') }}" key="t-two-step-verification-2">Crear Post</a></li>
                    </ul>
                </li>

               

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>