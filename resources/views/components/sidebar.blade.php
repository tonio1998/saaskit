<div class="sidebar">
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a class="sidebar-link active" href="/dashboard">
                <i class="bi bi-speedometer2 sidebar-icon"></i>
                <span>Scanner</span>
            </a>
        </li>
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
                <span>Logs Monitoring</span>
                <i class="bi bi-chevron-down dropdown-icon"></i>
            </a>
            <div class="collapse sidebar-dropdown" id="systemMenu">
                <a href="{{ route('logs.index') }}" class="sidebar-sublink">
                    <i class="bi bi-book sidebar-subicon"></i>
                    All Logs
                </a>
            </div>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link"
               data-bs-toggle="collapse"
               href="#studentMenu"
               role="button"
            >
                <i class="bi bi-layers sidebar-icon"></i>
                <span>Student Management</span>
                <i class="bi bi-chevron-down dropdown-icon"></i>
            </a>
            <div class="collapse sidebar-dropdown" id="studentMenu">
                <a href="{{ route('students.create') }}" class="sidebar-sublink">
                    <i class="bi bi-book sidebar-subicon"></i>
                   Add Student
                </a>
                <a href="{{ route('students.index') }}" class="sidebar-sublink">
                    <i class="bi bi-book sidebar-subicon"></i>
                    Masterlist
                </a>
            </div>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link"
               data-bs-toggle="collapse"
               href="#guardianMenu"
               role="button"
            >
                <i class="bi bi-layers sidebar-icon"></i>
                <span>Parent Management</span>
                <i class="bi bi-chevron-down dropdown-icon"></i>
            </a>
            <div class="collapse sidebar-dropdown" id="guardianMenu">
                <a href="{{ route('parents.create') }}" class="sidebar-sublink">
                    <i class="bi bi-book sidebar-subicon"></i>
                    Add Parent
                </a>
                <a href="{{ route('parents.index') }}" class="sidebar-sublink">
                    <i class="bi bi-book sidebar-subicon"></i>
                    Masterlist
                </a>
            </div>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link"
               data-bs-toggle="collapse"
               href="#teacherMenu"
               role="button"
            >
                <i class="bi bi-layers sidebar-icon"></i>
                <span>Teacher Management</span>
                <i class="bi bi-chevron-down dropdown-icon"></i>
            </a>
            <div class="collapse sidebar-dropdown" id="teacherMenu">
                <a href="{{ route('teachers.create') }}" class="sidebar-sublink">
                    <i class="bi bi-book sidebar-subicon"></i>
                    Add Teacher
                </a>
                <a href="{{ route('teachers.index') }}" class="sidebar-sublink">
                    <i class="bi bi-book sidebar-subicon"></i>
                    Masterlist
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
