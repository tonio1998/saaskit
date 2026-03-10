<div class="sidebar">
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a class="sidebar-link active" href="/dashboard">
                <i class="bi bi-speedometer2 sidebar-icon"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link"
               data-bs-toggle="collapse"
               href="#systemMenu"
               role="button"
            >
                <i class="bi bi-layers sidebar-icon"></i>
                <span>Systems</span>
                <i class="bi bi-chevron-down dropdown-icon"></i>
            </a>
            <div class="collapse sidebar-dropdown" id="systemMenu">
                <a href="#" class="sidebar-sublink">
                    <i class="bi bi-book sidebar-subicon"></i>
                    Library System
                </a>
                <a href="#" class="sidebar-sublink">
                    <i class="bi bi-arrow-left-right sidebar-subicon"></i>
                    Tracking System
                </a>
                <a href="#" class="sidebar-sublink">
                    <i class="bi bi-cash-coin sidebar-subicon"></i>
                    Finance System
                </a>
            </div>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link"
                data-bs-toggle="collapse"
                href="#usersMenu"
                role="button"
            >
                <i class="bi bi-layers sidebar-icon"></i>
                <span>User Management</span>
                <i class="bi bi-chevron-down dropdown-icon"></i>
            </a>
            <div class="collapse sidebar-dropdown" id="usersMenu">
                <a href="{{ route('users.create') }}" class="sidebar-sublink">
                    <i class="bi bi-book sidebar-subicon"></i>
                    Create
                </a>
                <a href="{{ route('users.index') }}" class="sidebar-sublink">
                    <i class="bi bi-cash-coin sidebar-subicon"></i>
                    Masterlist
                </a>
            </div>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="#">
                <i class="bi bi-bar-chart-line sidebar-icon"></i>
                <span>Reports</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="#">
                <i class="bi bi-gear sidebar-icon"></i>
                <span>Settings</span>
            </a>
        </li>
    </ul>
</div>
