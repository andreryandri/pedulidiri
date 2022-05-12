<div class="sidebar-wrapper active" style="background-image: url('../assets/img/pattern.jpeg')">
    <div class="sidebar-header text-center">
        <h4 style="color: black"><i data-feather="globe" style="color: black"></i>Peduli Diri</h4>
    </div>
    <hr>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-item {{ request()->is('profile') ? 'active' : '' }}">
                <a href="/profile" class='sidebar-link'>
                    <i data-feather="book" width="20" style="color: black"></i>
                    <span style="color: black">Home</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard" class='sidebar-link'>
                    <i data-feather="archive" width="20" style="color: black"></i>
                    <span style="color: black">Data</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->is('formPerjalanan') ? 'active' : '' }}">
                <a href="/formPerjalanan" class='sidebar-link'>
                    <i data-feather="file" width="20" style="color: black"></i>
                    <span style="color: black">Input Data</span>
                </a>
            </li>
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
