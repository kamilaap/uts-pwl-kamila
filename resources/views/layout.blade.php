<!DOCTYPE html>
<html>
<head>
    <title>SiAkad Plus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f5f6f8;">

    <nav class="navbar navbar-expand bg-white border-bottom">
        <div class="container">
           <a class="navbar-brand d-flex align-items-center fw-normal text-secondary" href="#">
            <img src="https://thumb.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg/250px-Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png?utm_source=id.wikipedia.org&utm_campaign=parser&utm_content=thumbnail" alt="Logo" width="32" height="32" class="me-2"><span>SIAkad Plus</span>
           </a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">KRS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Keluar</a></li>
            </ul>
            <span class="navbar-text">{{ $mahasiswa['nama'] }} ({{ $mahasiswa['nim'] }})</span>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>