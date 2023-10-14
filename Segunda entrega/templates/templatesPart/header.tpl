<!-- main header -->
<header>
    <nav class="navbar navbar-expand-lg bg-light " >
        <div class="container-fluid">
            <a class="navbar-brand" href="home"><img src="templates\css\img\logo.png" alt="Logo" class="logo" ></a>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home">Vinos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="cellar">Bodegas</a>
                </li>
                {if $userAdmin}
                    <li class="nav-item element">
                        <a id="loginActive" class="nav-link " aria-current="page" href="login">Usuario: {$userAdmin}</a>
                    </li>
                    <li class="nav-item element">
                        <a id="logout" class="nav-link" aria-current="page" href="logout">Logout</a>
                    </li>
                    {else}
                        <li class="nav-item element">
                        <a id="login" class="nav-link" aria-current="page" href="login">Login</a>
                    </li>
                    {/if}
                        </ul>
                        </div>
        </div>
        </nav>
</header>

        <!-- aca va el contenido de la seccion -->