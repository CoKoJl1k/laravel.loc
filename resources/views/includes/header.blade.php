<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/projects">projects</a>
                <a class="nav-link" href="/contact">Contact</a>

                <a class="nav-link" href="/create-greeting">CREATE-greeting</a>
                <a class="nav-link" href="/all-greeting">ALL-greeting</a>
                <a class="nav-link" href="/first-greeting">FIRST-greeting</a>

                <a class="nav-link" href="/profile">profile</a>
                <a class="nav-link" href="/users/1">USERS</a>
                <a class="nav-link" href="/dashboard">dashboard</a>
                <a class="nav-link" href="/dashboard/users">dashboard/users</a>
                <a class="nav-link" href="{{route('tasks.index')}}"><b>Tasks</b> </a>
                <a class="nav-link" href="{{route('tasks.create')}}"> <b>Task create</b> </a>
            </div>
        </div>
    </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="{{route('posts.index')}}"><b>Posts</b> </a>
                <a class="nav-link" href="{{route('posts.create')}}"> <b>Posts create</b> </a>

                <a class="nav-link" href="{{route('comments.index')}}"><b>comments</b> </a>
                <a class="nav-link" href="{{route('comments.create')}}"> <b>comments create</b> </a>

                <a class="nav-link" href="{{route('job')}}"> <b>JOB</b> </a>
            </div>
        </div>
    </div>
</nav>

