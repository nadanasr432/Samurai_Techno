<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .password-field {
            position: relative;
        }

        .password-field .fa-eye,
        .password-field .fa-eye-slash {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        body {
            display: flex;
            height: 100vh;
            margin: 0;
            overflow-x: hidden;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            position: fixed;
            height: 100%;
            padding-top: 20px;
            transition: margin-left 0.3s;
            z-index: 1; /* Ensure sidebar is above the icon */
        }

        .sidebar.collapsed {
            margin-left: -250px;
        }

        .sidebar::before {
            content: "\f0c9"; /* Font Awesome icon for the sidebar */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            font-size: 4rem;
            color: rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1; /* Place icon behind the sidebar */
            opacity: 0.5; /* Adjust opacity as needed */
        }

        .sidebar a {
            color: white;
            text-decoration: none;
        }

        .sidebar .nav-item .nav-link {
            color: white;
        }

        .sidebar .nav-link.active {
            background-color: #495057;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
            transition: margin-left 0.3s;
        }

        .main-content.collapsed {
            margin-left: 0;
        }

        .toggle-sidebar {
            position: fixed;
            top: 20px;
            left: 260px; /* Initial position */
            cursor: pointer;
            z-index: 1000;
        }
    </style>
</head>

<body>
    @php
        // Count unread messages
        $unreadCount = \App\Models\ContactUs::where('read', false)->count();
    @endphp
    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center">Samurai Techno</h3>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('projects*') ? 'active' : '' }}" data-toggle="collapse"
                    href="#submenuProjects" role="button"
                    aria-expanded="{{ Request::is('projects*') ? 'true' : 'false' }}" aria-controls="submenuProjects">
                    Projects
                </a>
                <div class="collapse {{ Request::is('projects*') ? 'show' : '' }}" id="submenuProjects">
                    <ul class="nav flex-column ml-3">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('projects/create') ? 'active' : '' }}"
                                href="{{ route('projects.project.create') }}">Create</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('projects/devops') ? 'active' : '' }}"
                                href="{{ route('projects.devops') }}">DevOps Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('projects/web') ? 'active' : '' }}"
                                href="{{ route('projects.web') }}">Web Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('projects/mobile') ? 'active' : '' }}"
                                href="{{ route('projects.mobile') }}">Mobile Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('projects/uiux') ? 'active' : '' }}"
                                href="{{ route('projects.uiux') }}">UI/UX Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('projects/graphic') ? 'active' : '' }}"
                                href="{{ route('projects.graphic') }}">Graphic Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('projects/testing') ? 'active' : '' }}"
                                href="{{ route('projects.testing') }}">Testing Projects</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contacts') ? 'active' : '' }}"
                    href="{{ route('contacts.index') }}">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contact_us') ? 'active' : '' }}"
                    href="{{ route('contact_us.index') }}">
                    Contact Us
                    @if ($unreadCount > 0)
                        <span class="badge badge-danger">{{ $unreadCount }}</span>
                    @endif
                </a>
            </li>
        </ul>
    </div>
    <!-- Sidebar Toggle Button -->
    <div class="toggle-sidebar">
<i class="fa fa-angle-double-right" aria-hidden="true"></i>
    </div>
    <!-- Main content -->
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profile</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
        <!-- Main content goes here -->
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.querySelector('.toggle-sidebar').addEventListener('click', function () {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');

            // Adjust the toggle button position based on the sidebar's state
            const isCollapsed = sidebar.classList.contains('collapsed');
            this.style.left = isCollapsed ? '20px' : '280px';
        });
    </script>
</body>

</html>
