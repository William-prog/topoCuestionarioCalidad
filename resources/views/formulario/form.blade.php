@extends('layouts.app')

@section('content')

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
    input[type='radio'] {
        display: none;
    }

    .radio {
        border: 2px solid #b3b4b4;
        border-radius: 50%;
        box-sizing: border-box;
        cursor: pointer;
        display: table-cell;
        float: left;
        line-height: 100%;
        margin: -3px 10px 0 0;
        padding: 10px;
        position: relative;
        width: 16px;
    }

    .fila:hover .radio {
        border: 2px solid #FF771F;
        box-shadow: inset 0 0 10px #FF771F;
    }

    input[type='radio']:checked+.radio {
        background-color: #FF771F;
        border: 2px solid #FF771F;
        bottom: 2.55;
    }

    input[type='radio']:checked+.radio::before {
        content: "✓ ";
        position: absolute;
        color: white;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        
    }

    .fila {
        border-bottom: 2px solid #dcdcdc;
        padding: 0 5px;
        /* box-shadow: 0 0 10px rgba(0, 128, 192, .3); */
    }

    .fila label {
        display: block;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 0px;
        bottom: 2.55;

    }

    .fila>label:last-child {
        padding: 0 0;
        width: 100%;
        cursor: pointer;
    }

    .btn-u {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-variant: small-caps;
        font-weight: bold;
    }

    .fila.bdr {
        display: block;
        position: relative;
        padding-bottom: 1.5px;
    }

    .fila.bdr::before {
        content: '';
        display: block;
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 0;
        transition: width 0s ease, background .5s ease;
    }

    .fila.bdr::after {
        content: '';
        display: block;
        position: absolute;
        right: 0;
        bottom: 0;
        height: 3px;
        width: 0;
        background: rgba(36, 36, 36, .8);
        transition: width .5s ease;
    }

    .fila.bdr:hover::before {
        width: 100%;
        background: rgba(255, 119, 31, .8);
        transition: width .5s ease;
    }

    .fila.bdr:hover::after {
        width: 100%;
        background: transparent;
        transition: all 0s ease;
    }
</style>


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

                <!-- <img  src="/img/carHead.jpg" alt="Card image cap"> -->
                <div class="card-body">
                    <h5 class="card-title">
                        <h4 class="text-center">
                            <!-- <h1>
                                <span style="color: #97C774">H</span>
                                <span style="color: #B63E98">e</span>
                                <span style="color: #D18E62">l</span>
                                <span style="color: #DB3E41">l</span>
                                <span style="color: #1BABA5">o</span>, I speak code.
                            </h1> -->
                            Encuesta de satisfacción del cliente
                        </h4>
                    </h5>

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

                        <div class="form-group col-md-12">
                            <label for="form_1"> <strong> A grandes rasgos, ¿Cuán satisfecho está con nuestro servicio técnico? </strong></label>
                            <div class="row mt-1">
                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_1A" type="radio" name="preg_1" value="Pesimo" />
                                        <label for="preg_1A" class='radio' tabindex='1'></label>
                                        <label for="preg_1A">Pesimo </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_1B" type="radio" name="preg_1" value="Insatisfecho" />
                                        <label for="preg_1B" class='radio' tabindex='1'></label>
                                        <label for="preg_1B">Insatisfecho </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_1C" type="radio" name="preg_1" value="Satisfecho" />
                                        <label for="preg_1C" class='radio' tabindex='1'></label>
                                        <label for="preg_1C">Satisfecho </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_1D" type="radio" name="preg_1" value="Muy Satisfecho" />
                                        <label for="preg_1D" class='radio' tabindex='1'></label>
                                        <label for="preg_1D">Muy Satisfecho </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="form_1"> <strong> Elige entre las opciones de calidad que considera el servicio realizado </strong></label>
                            <div class="row mt-1">
                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_2A" type="radio" name="preg_2" value="Pesima" />
                                        <label for="preg_2A" class='radio' tabindex='1'></label>
                                        <label for="preg_2A">Pesima </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_2B" type="radio" name="preg_2" value="Baja" />
                                        <label for="preg_2B" class='radio' tabindex='1'></label>
                                        <label for="preg_2B">Baja </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_2C" type="radio" name="preg_2" value="Normal" />
                                        <label for="preg_2C" class='radio' tabindex='1'></label>
                                        <label for="preg_2C">Normal </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_2D" type="radio" name="preg_2" value="Excelente" />
                                        <label for="preg_2D" class='radio' tabindex='1'></label>
                                        <label for="preg_2D">Excelente </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="form_1"> <strong> Comparado con otros servicios técnicos, este servicio técnico es: </strong></label>
                            <div class="row mt-1">
                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_3A" type="radio" name="preg_3" value="Pesimo" />
                                        <label for="preg_3A" class='radio' tabindex='1'></label>
                                        <label for="preg_3A">Peor </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_3B" type="radio" name="preg_3" value="Insatisfecho" />
                                        <label for="preg_3B" class='radio' tabindex='1'></label>
                                        <label for="preg_3B">Basico </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_3C" type="radio" name="preg_3" value="Satisfecho" />
                                        <label for="preg_3C" class='radio' tabindex='1'></label>
                                        <label for="preg_3C">Mejor </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_3D" type="radio" name="preg_3" value="Muy Satisfecho" />
                                        <label for="preg_3D" class='radio' tabindex='1'></label>
                                        <label for="preg_3D">Superior </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="form_1"> <strong> ccc </strong></label>
                            <div class="row mt-1">
                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_A" type="radio" name="preg_1" value="Pesimo" />
                                        <label for="preg_A" class='radio' tabindex='1'></label>
                                        <label for="preg_A">Pesimo </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_B" type="radio" name="preg_1" value="Insatisfecho" />
                                        <label for="preg_B" class='radio' tabindex='1'></label>
                                        <label for="preg_B">Insatisfecho </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_C" type="radio" name="preg_1" value="Satisfecho" />
                                        <label for="preg_C" class='radio' tabindex='1'></label>
                                        <label for="preg_C">Satisfecho </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class='fila bdr'>
                                        <input id="preg_D" type="radio" name="preg_1" value="Muy Satisfecho" />
                                        <label for="preg_D" class='radio' tabindex='1'></label>
                                        <label for="preg_D">Muy Satisfecho </label>
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