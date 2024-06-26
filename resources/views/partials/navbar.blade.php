<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            {{-- Membuat kondisi pada html, Text active when same as title (from route) --}}
            <li class="nav-item {{ ($title === "Home") ? 'active' : ''}}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ ($title === "About") ? 'active' : ''}}">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item {{ ($title === "Posts") ? 'active' : ''}}">
                <a class="nav-link" href="/posts">Posts</a>
            </li>
        </ul>
    </div>
    </div>
</nav>

