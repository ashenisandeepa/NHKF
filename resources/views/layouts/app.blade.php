<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Laravel application for managing members, children, and withdrawals.">
    <meta name="author" content="Your Name">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Forms</title>

    <!-- Link to CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Optional Bootstrap (for quick styling) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Navigation Menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Laravel App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('members.index') }}">Members</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('children_members.index') }}">Children Members</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('withdrawals.index') }}">Withdrawals</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <!-- Success and Error Messages -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Content Section -->
        @yield('content')
    </div>

    <!-- Link to JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Optional Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
