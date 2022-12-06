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
            color:white; 
            background-color:#636363
        }
        .panel{
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-auto-rows: minmax(100px, auto);

    }
    .carrusel {
        grid-column-start: 3;
        grid-column-end: 5;
    }
    .botonees {
        grid-column-start: 1;
        grid-column-end: 2;
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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
                                <button type="button" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Listar IPS</button>
                                <button type="button" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist ">Afiliado Activos</button>
                                <button type="button" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Aportes Recibidos</button>
                                <button type="button" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Afiliado Inactivos</button>
                            </div>
                        </div>
                        <!-- Carusel-->
                        <div id="carouselExampleFade" class="carousel carrusel slide carousel-fade col-xl-18 col-xxl-9 d-none d-xl-block" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="../img/imagen1.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="/../img/imagen2.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="/../img/imagen3.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
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
                    <h3>Empresa</h3>
                    <div class="iconos">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"/>
                            <path d="M12 21a9 9 0 1 1 0 -18a9 8 0 0 1 9 8a4.5 4 0 0 1 -4.5 4h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                            <circle cx="7.5" cy="10.5" r=".5" fill="currentColor" />
                            <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
                            <circle cx="16.5" cy="10.5" r=".5" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="btn-group-vertical">
                                <a href = "http://petardashd.com/">
                                    <button  type="button"class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Gestionar Contrato IPS</button>
                                </a>
                                <a href = "bienvenida.php">
                                    <button  type="button"class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Gestionar Orden de servicio</button>
                                </a>
                            </div>
                    </section>
            
                <section class="servicio">
                    <h3>Afiliados</h3>
                    <div class="iconos">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-android" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"/>
                            <line x1="4" y1="10" x2="4" y2="16" />
                            <line x1="20" y1="10" x2="20" y2="16" />
                            <path d="M7 9h10v8a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-8a5 5 0 0 1 10 0" />
                            <line x1="8" y1="3" x2="9" y2="5" />
                            <line x1="16" y1="3" x2="15" y2="5" />
                            <line x1="9" y1="18" x2="9" y2="21" />
                            <line x1="15" y1="18" x2="15" y2="21" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"/>
                            <path d="M9 7c-3 0-4 3-4 5.5 0 3 2 7.5 4 7.5 1.088-.046 1.679-.5 3-.5 1.312 0 1.5.5 3 .5s4-3 4-5c-.028-.01-2.472-.403-2.5-3-.019-2.17 2.416-2.954 2.5-3-1.023-1.492-2.951-1.963-3.5-2-1.433-.111-2.83 1-3.5 1-.68 0-1.9-1-3-1z" />
                            <path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2" />
                        </svg>
                    </div>
                    <div class="btn-group-vertical">
                                <a href = "bienvenida.php">
                                    <button  type="button"class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Gestionar Afiliación</button>
                                </a>
                                <a href = "aportes.php">
                                    <button  type="button"class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Gestionar Reportes</button>
                                </a>
                            </div>
                </section>

                <section class="servicio">
                    <h3>IPS</h3>
                    <div class="iconos">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"/>
                            <rect x="3" y="5" width="18" height="14" rx="3" />
                            <line x1="3" y1="10" x2="21" y2="10" />
                            <line x1="7" y1="15" x2="7.01" y2="15" />
                            <line x1="11" y1="15" x2="13" y2="15" />
                        </svg>
                    </div>
                    <div class="btn-group-vertical">
                                <button type="button" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary buttonlist">Gestionar Empresa</button>
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