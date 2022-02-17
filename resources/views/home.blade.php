@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-center">
                    <style>
                        .hover_effect {
                            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                            display: block;
                            width: 100%;
                            padding: 1px;
                            position: relative;
                            z-index: 2;
                            text-decoration: none;
                            color: #2C3E50;
                            box-sizing: border-box;
                            -moz-box-sizing: border-box;
                            -webkit-box-sizing: border-box;
                            font-size: 3em;
                            font-weight: 600;
                            -webkit-user-select: none;
                            -webkit-touch-callout: none;
                        }

                        .hover_effect:after {
                            content: "";
                            height: 5px;
                            left: 0;
                            width: 1px;
                            position: absolute;
                            -webkit-transition: width 1s ease, background-color 1s ease;
                            -moz-transition: width 1s ease, background-color 1s ease;
                            ;
                            -ms-transition: width 1s ease, background-color 1s ease;
                            ;
                            -o-transition: width 1s ease, background-color 1s ease;
                            ;
                            transition: width 1s ease, background-color 1s ease;
                            ;
                            right: 0;
                            margin: 0 auto;
                        }

                        .hover_effect:hover {
                            color: #000;
                            -webkit-transition: color 1s ease;
                            -moz-transition: color 1s ease;
                            -ms-transition: color 1s ease;
                            -o-transition: color 1s ease;
                            transition: color 1s ease;
                            cursor: pointer;
                        }

                        .hover_effect:hover:after,
                        .hover_effect:focus:after {
                            width: 100%;
                            background-color: #FF771F;
                        }

                        .ua {
                            position: absolute;
                            right: 20px;
                            bottom: 20px;
                            color: #fff;
                            font-size: 2em;
                        }

                        .fa {
                            color: #2C3E50;
                            -webkit-transition: all 1s ease;
                            -moz-transition: all 1s ease;
                            -ms-transition: all 1s ease;
                            -o-transition: all 1s ease;
                            transition: all 1s ease;
                        }

                        .ua:hover .fa {
                            color: #2C3E50;
                            -webkit-transform: scale(1.5);
                            -moz-transform: scale(1.5);
                            -ms-transform: scale(1.5);
                            -o-transform: scale(1.5);
                            transform: scale(1.5);
                            -webkit-transition: all 1s ease;
                            -moz-transition: all 1s ease;
                            -ms-transition: all 1s ease;
                            -o-transition: all 1s ease;
                            transition: all 1s ease;
                        }

                        .anchor {
                            position: absolute;
                            text-align: center;
                            top: 5px;
                            right: 20px;
                        }

                        .anchor a {
                            color: #fff;
                            text-decoration: none;
                        }
                    </style>

                    <p class="main-paragraph hover_effect">Bienvenido</p>
                </div>

                <div class="card-body text-center">
                    {{ __('Gracias ') }} {{ Auth::user()->name }}, por atender la peticion.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection