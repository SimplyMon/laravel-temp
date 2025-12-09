<aside id="sidebar"
    class="w-64 bg-gray-900 text-gray-200 flex flex-col transition-all duration-300 overflow-hidden relative">

    <div id="sidebar-header"
        class="flex items-center justify-between px-4 py-6 border-b border-gray-800 transition-all duration-300">
        <div class="flex items-center space-x-3">
            <img src="/images/logo4.svg" alt="Logo" class="w-10 h-10">
            <span id="sidebar-title" class="text-2xl font-bold text-white transition-opacity duration-300">Mondev</span>
        </div>
        <button id="sidebar-toggle"
            class="text-gray-200 hover:text-white bg-gray-800 hover:bg-gray-700 rounded-full p-2 focus:outline-none border border-gray-700 transition-all duration-300 shadow-sm hover:shadow-md">
            <i class="fa-solid fa-angle-left transition-transform duration-300"></i>
        </button>
    </div>

    <nav class="flex-1 px-2 py-4 space-y-2">
        <a href="/dashboard"
            class="nav-link flex items-center px-4 py-2 rounded-lg group relative transition-all duration-300 hover:bg-gray-700 hover:shadow-sm">
            <i
                class="fa-solid fa-tachometer-alt w-6 text-center transition-colors duration-300 group-hover:text-white"></i>
            <span class="ml-3 sidebar-text transition-opacity duration-300">Dashboard</span>
            <span
                class="tooltip absolute left-full top-1/2 transform -translate-y-1/2 ml-2 px-2 py-1 rounded bg-gray-800 text-sm text-white opacity-0 pointer-events-none transition-all duration-300">Dashboard</span>
        </a>
        <a href="/departments"
            class="nav-link flex items-center px-4 py-2 rounded-lg group relative transition-all duration-300 hover:bg-gray-700 hover:shadow-sm">
            <i class="fa-solid fa-briefcase w-6 text-center transition-colors duration-300 group-hover:text-white"></i>
            <span class="ml-3 sidebar-text transition-opacity duration-300">Departments</span>
            <span
                class="tooltip absolute left-full top-1/2 transform -translate-y-1/2 ml-2 px-2 py-1 rounded bg-gray-800 text-sm text-white opacity-0 pointer-events-none transition-all duration-300">Departments</span>
        </a>
        <a href="/reports"
            class="nav-link flex items-center px-4 py-2 rounded-lg group relative transition-all duration-300 hover:bg-gray-700 hover:shadow-sm">
            <i class="fa-solid fa-chart-line w-6 text-center transition-colors duration-300 group-hover:text-white"></i>
            <span class="ml-3 sidebar-text transition-opacity duration-300">Reports</span>
            <span
                class="tooltip absolute left-full top-1/2 transform -translate-y-1/2 ml-2 px-2 py-1 rounded bg-gray-800 text-sm text-white opacity-0 pointer-events-none transition-all duration-300">Reports</span>
        </a>
        <a href="/profile"
            class="nav-link flex items-center px-4 py-2 rounded-lg group relative transition-all duration-300 hover:bg-gray-700 hover:shadow-sm">
            <i class="fa-solid fa-user w-6 text-center transition-colors duration-300 group-hover:text-white"></i>
            <span class="ml-3 sidebar-text transition-opacity duration-300">Profile</span>
            <span
                class="tooltip absolute left-full top-1/2 transform -translate-y-1/2 ml-2 px-2 py-1 rounded bg-gray-800 text-sm text-white opacity-0 pointer-events-none transition-all duration-300">Profile</span>
        </a>
        <a href="/settings"
            class="nav-link flex items-center px-4 py-2 rounded-lg group relative transition-all duration-300 hover:bg-gray-700 hover:shadow-sm">
            <i class="fa-solid fa-cog w-6 text-center transition-colors duration-300 group-hover:text-white"></i>
            <span class="ml-3 sidebar-text transition-opacity duration-300">Settings</span>
            <span
                class="tooltip absolute left-full top-1/2 transform -translate-y-1/2 ml-2 px-2 py-1 rounded bg-gray-800 text-sm text-white opacity-0 pointer-events-none transition-all duration-300">Settings</span>
        </a>
    </nav>

    <div class="px-4 py-4 border-t border-gray-800">
        <button
            class="w-full flex items-center px-4 py-2 rounded-lg group relative transition-all duration-300 hover:bg-gray-700 hover:shadow-sm">
            <i
                class="fa-solid fa-right-from-bracket w-6 text-center transition-colors duration-300 group-hover:text-white"></i>
            <span class="ml-3 sidebar-text transition-opacity duration-300">Logout</span>
            <span
                class="tooltip absolute left-full top-1/2 transform -translate-y-1/2 ml-2 px-2 py-1 rounded bg-gray-800 text-sm text-white opacity-0 pointer-events-none transition-all duration-300">Logout</span>
        </button>
    </div>
</aside>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebar-toggle');
    const sidebarText = document.querySelectorAll('.sidebar-text');
    const sidebarTitle = document.getElementById('sidebar-title');
    const navLinks = document.querySelectorAll('.nav-link');
    const header = document.getElementById('sidebar-header');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('w-20');
        sidebar.classList.toggle('w-64');
        sidebarText.forEach(text => text.classList.toggle('hidden'));
        sidebarTitle.classList.toggle('hidden');

        if (sidebar.classList.contains('w-20')) {
            toggleBtn.classList.add('absolute', 'top-full', 'mt-2', 'right-1/2', 'translate-x-1/2');
        } else {
            toggleBtn.classList.remove('absolute', 'top-full', 'mt-2', 'right-1/2', 'translate-x-1/2');
        }

        toggleBtn.querySelector('i').classList.toggle('rotate-180');
    });

    navLinks.forEach(link => {
        const tooltip = link.querySelector('.tooltip');
        link.addEventListener('mouseenter', () => {
            if (sidebar.classList.contains('w-20')) {
                tooltip.style.opacity = '1';
                tooltip.style.transform = 'translateY(-50%) translateX(6px)';
            }
        });
        link.addEventListener('mouseleave', () => {
            tooltip.style.opacity = '0';
            tooltip.style.transform = 'translateY(-50%) translateX(0)';
        });
    });

    const currentPath = window.location.pathname;
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('bg-gray-700', 'font-semibold');
        }
    });
</script>
