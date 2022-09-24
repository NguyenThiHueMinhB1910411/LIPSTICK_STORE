<nav class="navbar shadow  bg-white ">
    <div class="container-fluid navbar">
        <div class="justify">
            <i class="fas fa-align-justify"></i>
        </div>
        <form role="search" method="POST" class="search-form justify-content-end" action="/search_admin"
            name="search-form">
            <label>
                <input class="form-control justify-content-en" type="search" placeholder="Search" aria-label="Search"
                    value="" name="search_admin">
            </label>
        </form>
        <div class="icon-menu">
            <i class="far fa-bell"></i>

            <!-- <img src="img/admin.jpg" width="50px" height="40px" class="rounded-circle mb-3"> -->
            <a href="/logout"><i class="fas fa-sign-out-alt text-danger ml-2"></i></a>
        </div>
    </div>
</nav>