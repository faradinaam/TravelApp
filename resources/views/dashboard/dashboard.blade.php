<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="d-flex">
    {{-- Sidebar --}}
    <div class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
        <h4 class="mb-4">Dashboard</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="/dashboard" class="nav-link text-white">Home</a>
            </li>
            <li class="nav-item mb-2">
                <a href="/dashboard/posts/create" class="nav-link text-white">Tambah Post</a>
            </li>
            <li class="nav-item">
                <a href="/dashboard/posts/manage" class="nav-link text-white">Manage</a>
            </li>
            <li class="nav-item">
                <a href="/posts" class="nav-link text-white">Lihat Post</a>
            </li>

        </ul>
    </div>

    {{-- Content --}}
    <div class="flex-fill p-4">
        @yield('content')
    </div>
</div>
</body>
</html>
