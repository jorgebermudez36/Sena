<template>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1"
            />
            <meta name="description" content="" />
            <meta
                name="author"
                content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
            />
            <meta name="generator" content="Hugo 0.101.0" />
            <title>Dashboard Template · Bootstrap v5.2</title>

            <link
                rel="canonical"
                href="https://getbootstrap.com/docs/5.2/examples/dashboard/"
            />

            <link
                href="../assets/dist/css/bootstrap.min.css"
                rel="stylesheet"
            />

            <!-- Custom styles for this template -->
        </head>

        <body>
            <header
                class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"
            >
                <a
                    class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6"
                    href="#"
                    >Pnnto Mak SysInf</a
                >
                <button
                    class="navbar-toggler position-absolute d-md-none collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu"
                    aria-controls="sidebarMenu"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <input
                    class="form-control form-control-dark w-100 rounded-0 border-0"
                    type="text"
                    placeholder="Search"
                    aria-label="Search"
                />
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                        <a class="nav-link px-3" href="/home">Home</a>
                    </div>
                </div>
            </header>

            <div class="container-fluid">
                <div class="row">
                    <nav
                        id="sidebarMenu"
                        class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
                    >
                        <div class="position-sticky pt-3 sidebar-sticky">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        aria-current="page"
                                        href="#"
                                    >
                                        <span
                                            data-feather="home"
                                            class="align-text-bottom"
                                        ></span>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span
                                            data-feather="file"
                                            class="align-text-bottom"
                                        ></span>
                                        Orders
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span
                                            data-feather="shopping-cart"
                                            class="align-text-bottom"
                                        ></span>
                                        Products
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span
                                            data-feather="users"
                                            class="align-text-bottom"
                                        ></span>
                                        Customers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span
                                            data-feather="bar-chart-2"
                                            class="align-text-bottom"
                                        ></span>
                                        Reports
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span
                                            data-feather="layers"
                                            class="align-text-bottom"
                                        ></span>
                                        Integrations
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <!-- <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>Saved reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle" class="align-text-bottom"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Year-end sale
                            </a>
                        </li>
                    </ul>-->

                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
                        >
                            <h1 class="h2">Dashboard</h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary"
                                    >
                                        Share
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary"
                                    >
                                        Export
                                    </button>
                                </div>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                >
                                    <span
                                        data-feather="calendar"
                                        class="align-text-bottom"
                                    ></span>
                                    This week
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Tarjeta de Cargos
                                        </h5>
                                        <table
                                            class="table table-success table-striped-columns table-bordered"
                                        >
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">
                                                        Descripcion
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <tr
                                                    class="table-info"
                                                    v-for="cargo in cargos"
                                                    :key="cargo.id">
                                                    <td>{{ cargo.id }}</td>
                                                    <td>{{ cargo.cargo }}</td>
                                                    <td>{{ cargo.descripcion }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <a href="#" class="btn btn-primary"
                                            >Editar</a>
                                        <a href="#" class="btn btn-primary"
                                            >Eliminar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Special title treatment
                                        </h5>
                                        <table
                                            class="table table-success table-striped-columns table-bordered"
                                        >
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">
                                                        Descripcion
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <tr
                                                    class="table-info"
                                                    v-for="cargo in cargos"
                                                    :key="cargo.id">
                                                    <td>{{ cargo.id }}</td>
                                                    <td>{{ cargo.cargo }}</td>
                                                    <td>{{ cargo.descripcion }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <a href="#" class="btn btn-primary"
                                            >Editar</a>
                                        <a href="#" class="btn btn-primary"
                                            >Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Tarjeta de Cargos
                                        </h5>
                                        <table
                                            class="table table-success table-striped-columns table-bordered"
                                        >
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">
                                                        Descripcion
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <tr
                                                    class="table-info"
                                                    v-for="cargo in cargos"
                                                    :key="cargo.id">
                                                    <td>{{ cargo.id }}</td>
                                                    <td>{{ cargo.cargo }}</td>
                                                    <td>{{ cargo.descripcion }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <a href="#" class="btn btn-primary"
                                            >Editar</a>
                                        <a href="#" class="btn btn-primary"
                                            >Eliminar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Special title treatment
                                        </h5>
                                        <table
                                            class="table table-success table-striped-columns table-bordered"
                                        >
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">
                                                        Descripcion
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <tr
                                                    class="table-info"
                                                    v-for="cargo in cargos"
                                                    :key="cargo.id">
                                                    <td>{{ cargo.id }}</td>
                                                    <td>{{ cargo.cargo }}</td>
                                                    <td>{{ cargo.descripcion }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <a href="#" class="btn btn-primary"
                                            >Editar</a>
                                        <a href="#" class="btn btn-primary"
                                            >Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </main>
                </div>
            </div>
        </body>

        <!-- <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1,001</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                            </tr>
                        </tbody>
                    </table>
                 </div> -->
    </html>
</template>

<script>


</script>

<style>
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}

.b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, 0.1);
    border: solid rgba(0, 0, 0, 0.15);
    border-width: 1px 0;
    box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
        inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
}

.b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
}

.bi {
    vertical-align: -0.125em;
    fill: currentColor;
}

.nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
}

.nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
}
</style>
