<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary d-flex flex-column">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Jajanan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0 pt-lg-3 overflow-y-auto flex-grow-1">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active text-black" aria-current="page" href="/dashboard">
                        <i class="bi bi-house-door-fill"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black" href="/profil">
                        <i class="bi bi-person"></i> 
                        My Profil 
                    </a>
                </li>
                <!-- More Nav Links -->
            </ul>
        </div>
        <hr class="my-2">
        <div class="offcanvas-body p-0 pt-lg-3 overflow-y-auto flex-grow-1">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black" href="/menu">
                        <i class="bi bi-file-text"></i>
                        Menu               
                    </a>
                </li>
                <!-- More Nav Links -->
            </ul>
        </div>
        <hr class="my-2">
        <div class="offcanvas-body p-0 pt-lg-3 overflow-y-auto flex-grow-1">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black" href="/seting">
                        <i class="bi bi-gear"></i>
                        Settings
                    </a>
                </li>
                <!-- More Nav Links -->
            </ul>
        </div>
        @can('admin')
        <hr class="my-2">
        <div class="offcanvas-body p-0 pt-lg-3 overflow-y-auto flex-grow-1">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black" href="/admin/drink">
                        <i class="bi bi-grid"></i>
                        Edit Menu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black" href="/admin/category">
                        <i class="bi bi-grid"></i>
                        Edit Category
                    </a>
                </li>
            </ul>
        </div>
        @endcan
    </div>
</div>
