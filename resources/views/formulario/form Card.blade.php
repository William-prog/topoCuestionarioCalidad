@extends('layouts.app')

@section('content')

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


<style>
    .column {
        margin: 0 0 0;
        padding: 0;
    }

    .column:last-child {
        padding-bottom: 60px;
    }

    .column::after {
        content: '';
        clear: both;
        display: block;
    }

    .column div {
        position: relative;
        float: left;
        margin: 0 0 0 25px;
        padding: 0;
    }

    .column div:first-child {
        margin-left: 0;
    }

    .column div span {
        position: absolute;
        bottom: -20px;
        left: 0;
        z-index: -1;
        display: block;
        width: 300px;
        margin: 0;
        padding: 0;
        color: #444;
        font-size: 18px;
        text-decoration: none;
        text-align: center;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
        opacity: 0;
    }

    figure {
        margin: 0;
        padding: 0;
        background: #fff;
        overflow: hidden;
    }

    figure:hover+span {
        bottom: -36px;
        opacity: 1;
    }


    .hover14 figure {
        position: relative;
    }

    .hover14 figure::before {
        position: absolute;
        top: 0;
        left: -75%;
        z-index: 2;
        display: block;
        content: '';
        width: 50%;
        height: 100%;
        background: -webkit-linear-gradient(left, rgba(255, 119, 31, 0) 0%, rgba(255, 119, 31, .3) 100%);
        background: linear-gradient(to right, rgba(255, 119, 31, 0) 0%, rgba(255, 119, 31, .3) 100%);
        -webkit-transform: skewX(-25deg);
        transform: skewX(-25deg);
    }

    .hover14 figure:hover::before {
        -webkit-animation: shine .95s;
        animation: shine .95s;
    }

    @-webkit-keyframes shine {
        100% {
            left: 125%;
        }
    }

    @keyframes shine {
        100% {
            left: 125%;
        }
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="hover14 column">
                    <figure>
                        <img class="card-img-top" src="/img/carHead.jpg" />
                    </figure>
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <h4 class="text-center">
                            Encuesta de satisfacción del cliente
                        </h4>
                    </h5>

                    <!-- DATOS DE FECHA  Y CLIENTE-->
                    <div class="row mt-1">
                        <label for="valeCombustibleFecha"><strong>Fecha:</strong> </label>
                        <div class="form-group col-md-3">
                            <input type="date" placeholder="000" class="effect-1" name="valeCombustibleFecha" id="valeCombustibleFecha" required>
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group col-md-9">
                            <input type="text" placeholder="Dia, Dia de Mes de Año" class="effect-3" name="valeCombustibleFechaLarga" id="valeCombustibleFechaLarga">
                            <span class="focus-border"></span>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="form-group col-md-9">
                            <label for="valeCombustibleFecha"><strong>Cliente (Opcional):</strong> </label>
                            <input type="text" placeholder="Opcional" class="effect-3" name="valeCombustibleFecha" id="valeCombustibleFecha" required>
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <script>
                        window.onload = function() {
                            var fecha = new Date(); //Fecha actual
                            var mes = fecha.getMonth() + 1; //obteniendo mes
                            var dia = fecha.getDate(); //obteniendo dia
                            var ano = fecha.getFullYear(); //obteniendo año
                            if (dia < 10)
                                dia = '0' + dia; //agrega cero si el menor de 10
                            if (mes < 10)
                                mes = '0' + mes //agrega cero si el menor de 10


                            var options = {
                                weekday: 'long',
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric'
                            };
                            document.getElementById('valeCombustibleFechaLarga').value = fecha.toLocaleDateString("es-ES", options);
                            fecha = new Date(ano + "-" + mes + "-" + dia);
                            document.getElementById('valeCombustibleFecha').value = ano + "-" + mes + "-" + dia;
                        }
                    </script>


                    <div class="row mt-1">
                        <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    @include('preguntas.p_1')
                                </div>
                                <div class="carousel-item">
                                    @include('preguntas.p_2')
                                </div>
                            </div>

                        </div>

                        <div class="form-group col-md-12">
                            <div class="row mt-1">
                                <div class="form-group col-md-6">
                                    <div class="buttonForm-holder">
                                        <button style="width: 100%;" class="buttonForm buttonForm-2 hover-slide-left" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span>Anterior</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="buttonForm-holder">
                                        <button style="width: 100%;" class="buttonForm buttonForm-2 hover-slide-right" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span>Siguiente</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for=""> <strong> Experiencia del cliente: </strong> </label>
                            <textarea name="" id="" class="effect-3" rows="3"></textarea>
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group col-md-12">
                            <div class="buttonForm-holder">
                                <button class="buttonForm buttonForm-4 hover-border-9">
                                    <span>Enviar</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection