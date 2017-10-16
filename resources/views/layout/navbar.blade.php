<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/" target="_top">Website</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="/" target="_top">Home</a></li>
            <li class="nav-item"><router-link class="nav-link" to="/dashboard">Dashboard</router-link></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="javascript:void(0);" class="nav-link" v-on:click="logoutUser">Logout</a></li>
        </ul>
    </div>
</nav>
