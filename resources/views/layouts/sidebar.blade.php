<aside class="w-64 bg-gray-800 text-white min-h-screen p-4">
    <h2 class="text-xl font-bold mb-6">Sidebar</h2>

    <x-sidebar-submenu :title="'Main'" :items="[
        [
            'url' => '/dashboard',
            'label' => 'Dashboard'
        ],
        [
            'label' => 'Users',
            'submenu' => [
                ['url' => '/users', 'label' => 'User List'],
                ['url' => '/users/create', 'label' => 'Add User'],
            ]
        ],
        [
            'label' => 'Posts',
            'submenu' => [
                ['url' => '/posts', 'label' => 'All Posts'],
                ['url' => '/posts/create', 'label' => 'Add Post'],
            ]
        ]
    ]" />

    <x-sidebar-submenu :title="'Settings'" :items="[
        ['url' => '/profile', 'label' => 'Profile'],
        ['url' => '/settings', 'label' => 'App Settings']
    ]" />
</aside>
