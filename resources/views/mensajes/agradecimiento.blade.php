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
                                <span style="color: #97C774">G</span>
                                <span style="color: #B63E98">R</span>
                                <span style="color: #D18E62">A</span>
                                <span style="color: #DB3E41">C</span>
                                <span style="color: #DB3E41">I</span>
                                <span style="color: #DB3E41">A</span>
                                <span style="color: #1BABA5">S</span>, por contestar.
                            <!-- Encuesta de satisfacción del cliente -->
                        </h4>
                    </h5>

                    <div class="row mt-1">

                        <div class="form-group col-md-12 text-justify">
                            Estamos comprometidos en ofrecerles un servicio de calidad y por ello agradecemos su preferencia. 
                            Durante todo este tiempo, su confianza y fidelidad nos han hecho crecer. Gracias por su apoyo. 
                            Esperamos siempre contar con su presencia y cada día nos esforzamos por ser su mejor opción. 
                            Nuestra clientela es nuestro mejor aliado para seguir creciendo, gracias.
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection