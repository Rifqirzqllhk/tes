<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Menu Admin</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/setUser">Atur User</a>
                        <a class="dropdown-item" href="/setBuku">Atur Buku</a>
                    </div>
                </li>
            </ul>
            <div class="d-flex">
                <a href="/logout" class="navbar-nav nav-item nav-link" aria-current="page">logout</a>
            </div>
        </div>
    </div>
</nav>
