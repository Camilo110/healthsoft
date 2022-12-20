<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <style>
        .buttonlist {
            color: white;
            background-color: #636363
        }

        .panel {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-auto-rows: minmax(100px, auto);

        }

        .carrusel {
            grid-column-start: 5;
            grid-column-end: 12;
        }

        .botonees {
            grid-column-start: 1;
            grid-column-end: 4;
        }

        /** Servicios **/
        @media (min-width: 768px) {
            .servicios {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                column-gap: 1rem;
            }
        }

        @media (min-width: 768px) {
            .boton {
                width: auto;
            }
        }

        .servicio {
            display: flex;
            flex-direction: column;
            align-items: center;
            ;
        }

        .servicio h3 {
            color: var(--secundario);
            font-weight: normal;
        }

        .servicio p {
            line-height: 2;
            text-align: center;
        }

        .servicio .iconos {
            height: 15rem;
            width: 15rem;
            background-color: #636363;
            border-radius: 50%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .butooon {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .contenedor {
            max-width: 120rem;
            margin: 0 auto;
        }

        .sombra {
            /* box-shadow: 0px 5px 15px 0px rgba(112,112,112,0.48); */
            background-color #636363;
            padding: 2rem;
            color: white;
            /* border-radius: 1rem; */
        }
    </style>


</head>


<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">HealthSoft</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center panel justify-content-center">
                    <div class="botonees col-lg-17 col-xl-18 col-xxl-18">
                        <div class="btn-group-vertical">
                            <a href="listarIPS.php" class="w-100">
                                <button type="button"
                                    class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Listar
                                    IPS</button>
                            </a>

                            <form action="listarActivos.php" method="POST" class="bg-dark mt-4 w-100 ">
                                <select hidden="true" class="form-control bg-dark align-items-center w-100"
                                    style="color: gray" name="niti">

                                    <?php
                                    include "conex.php";
                                    $con = conectar();
                                    $consulta = "SELECT * FROM `ips`";
                                    $resultado = mysqli_query($con, $consulta);
                                    $contador = 0;

                                    while ($misdatos = mysqli_fetch_assoc($resultado)) {
                                        $contador++; ?>
                                    <option>
                                        <?php echo $misdatos['nit']; ?>
                                    </option>
                                    <?php } ?>
                                </select>

                                <a href="listarActivos.php" class="w-100">
                                    <button type="submit"
                                        class="btn btn-info text-white w-100  fw-semibold shadow-sm btn-primary buttonlist">Afiliados
                                        Activos</button>
                                </a>

                            </form>

                            <form action="listarAportes.php" method="POST" class="bg-dark w-100">

                                <select hidden="true" class="form-control bg-dark align-items-center w-100"
                                    style="color: gray" name="fecha1">

                                    <?php

                                    $consulta = "SELECT min(fechapago) FROM `aportes`;";
                                    $resultado = mysqli_query($con, $consulta);
                                    $contador = 0;

                                    while ($misdatos = mysqli_fetch_assoc($resultado)) {
                                        $contador++; ?>
                                    <option>
                                        <?php echo $misdatos['fechapago']; ?>
                                    </option>
                                    <?php } ?>
                                </select>

                                <select hidden="true" class="form-control bg-dark align-items-center w-100"
                                    style="color: gray" name="fecha2">

                                    <?php

                                    $consulta = "SELECT max(fechapago) FROM `aportes`;";
                                    $resultado = mysqli_query($con, $consulta);
                                    $contador = 0;

                                    while ($misdatos = mysqli_fetch_assoc($resultado)) {
                                        $contador++; ?>
                                    <option>
                                        <?php echo $misdatos['fechapago']; ?>
                                    </option>
                                    <?php } ?>
                                </select>

                                <a href="listarAportes.php" class="w-100">
                                    <button type="submit"
                                        class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Aportes
                                        Recibidos</button>
                                </a>

                            </form>

                            <a href="listarInactivos.php" class="w-100">
                                <button type="submit"
                                    class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Afiliado
                                    Inactivos</button>
                            </a>


                            <form action="listarCitas.php" method="POST" class="bg-dark w-100">

                                <select hidden="true" class="form-control bg-dark align-items-center w-100"
                                    style="color: gray" name="fecha1">

                                    <?php

                                    $consulta = "SELECT * FROM `ordendeservicio`";
                                    $resultado = mysqli_query($con, $consulta);
                                    $contador = 0;

                                    while ($misdatos = mysqli_fetch_assoc($resultado)) {
                                        $contador++; ?>
                                    <option>
                                        <?php echo $misdatos['fechapago']; ?>
                                    </option>
                                    <?php } ?>
                                </select>


                                <select hidden="true" action="index.php" method="post" class="form-control bg-dark"
                                    style="color: gray" name="nit">

                                    <?php
                                      

                                        $consulta = "SELECT * FROM `ips`";
                                        $resultado = mysqli_query($con, $consulta);
                                        $contador = 0;

                                        while ($misdatos = mysqli_fetch_assoc($resultado)) {
                                            $contador++; ?>
                                    <option>
                                        <?php echo $misdatos['nit']; ?>
                                    </option>
                                    <?php } ?>

                                </select>




                                <a href="listarCitas.php" class="w-100">
                                    <button type="submit"
                                        class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Listar
                                        Citas</button>
                                </a>

                            </form>






                        </div>
                    </div>
                    <!-- Carusel-->
                    <div id="carouselExampleFade"
                        class="carousel carrusel slide carousel-fade col-xl-18 col-xxl-9 d-none d-xl-block"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/guia1.png" class="d-block " width="610" height="350" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/../img/guiaInferior .png" class="d-block " width="610" height="350"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/../img/guiaLateral .png" class="d-block " width="610" height="350" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <div class="contenedor sombra bg-dark ">
            <div class="servicios contenedor">
                <section class="servicio">
                    <h3>IPS</h3>
                    <div class="iconos">
                        <img src="../img/IPS.png" alt="" width="240rem" height="240rem">

                    </div>
                    <div class="btn-group-vertical butooon">
                        <a href="ips.php">
                            <button type="button"
                                class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Gestionar
                                IPS</button>
                        </a>
                        <a href="registrarOrdenes.php">
                            <button type="button"
                                class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Orden
                                de Servicios</button>
                        </a>
                    </div>
                </section>

                <section class="servicio">
                    <h3>Afiliados</h3>
                    <div class="iconos">


                        <img src="../img/afiliado.png" alt="" width="240rem" height="240rem">
                    </div>
                    <div class="btn-group-vertical">
                        <a href="afiliado.php">
                            <button type="button"
                                class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Gestionar
                                Cotizante</button>
                        </a>
                        <a href="beneficiario.php">
                            <button type="button"
                                class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Gestionar
                                Beneficiario</button>
                        </a>
                    </div>
                </section>

                <section class="servicio">
                    <h3>Empresa</h3>
                    <div class="iconos">
                        <img src="../img/empresa.png" alt="" width="265rem" height="265rem">
                    </div>
                    <div class="btn-group-vertical">
                        <a href="empresa.php">
                            <button type="button"
                                class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Gestionar
                                Empresa</button>
                        </a>
                        <a href="gestionarContrato.php">
                            <button type="button"
                                class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Gestionar
                                Contrato</button>
                        </a>
                    </div>
                </section>
            </div>
        </div>

    </main>

    <!-- Footer-->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2022 SinegiaSoft, Inc</p>


        </footer>
    </div>

</body>

</html>