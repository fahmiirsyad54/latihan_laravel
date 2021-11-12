<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title) === "Home" ? 'active' : '' }} " href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title) === "Profile" ? 'active' : '' }} " href="/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title) === "Inventory" ? 'active' : '' }} " href="/inventory">Inventory</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>