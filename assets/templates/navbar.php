<nav class="navbar bg-light" id="main-nav" data=<?php echo BASE_URL ?>>
        <div class="container-fluid">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-axe" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M13 9l7.383 7.418c.823 .82 .823 2.148 0 2.967a2.11 2.11 0 0 1 -2.976 0l-7.407 -7.385" />
                    <path d="M6.66 15.66l-3.32 -3.32a1.25 1.25 0 0 1 .42 -2.044l3.24 -1.296l6 -6l3 3l-6 6l-1.296 3.24a1.25 1.25 0 0 1 -2.044 .42z" />
                </svg>
            </div>
            <div class="">
                <h1>Employee <span class="">management</span></h1>
            </div>
            <div class="">
                <ol class="navigator">
                    <li id="dashboardTag" class="navigator-item"><a href="dashboard">Dashboard&nbsp;</a></li>
                    <span class="span-line"> / </span>
                    <li id="employeeTag" class="navigator-item"><a href="employee">&nbsp;Employee</a></li>
                </ol>
            </div>
            <div class=""><a type="submit" class="btn btn-outline-primary" href=<?php echo BASE_URL . "login/logoutUser" ?>>Logout</a></div>
        </div>
    </nav>