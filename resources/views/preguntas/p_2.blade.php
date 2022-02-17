<style>
    .main-container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .main-container h2 {
        margin: 0 0 80px 0;
        color: #FF771F;
        font-size: 30px;
        font-family: "Raleway", sans-serif;
        font-weight: 400;
    }

    .radio-buttons {
        margin: 0 auto;
        text-align: center;
    }

    .custom-radio input {
        display: none;
    }

    .radio-btn {
        margin: 10px;
        width: 100%;
        height: 250px;
        border: 3px solid transparent;
        display: inline-block;
        border-radius: 10px;
        position: relative;
        text-align: center;
        box-shadow: 0 0 20px #c3c3c367;
        cursor: pointer;
    }

    label.custom-radio {
        width: 100%;
    }

    .radio-btn>i {
        color: #ffffff;
        background-color: #FF771F;
        font-size: 20px;
        position: absolute;
        top: -15px;
        left: 50%;
        transform: translateX(-50%) scale(4);
        border-radius: 50px;
        padding: 3px;
        transition: 0.2s;
        pointer-events: none;
        opacity: 0;
    }

    .radio-btn .hobbies-icon {
        width: 95%;
        height: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .radio-btn .hobbies-icon i {
        color: #FF771F;
        line-height: 80px;
        font-size: 60px;
    }

    .radio-btn .hobbies-icon h4 {
        color: #FF771F;
        font-family: "Raleway", sans-serif;
        font-weight: 400;
        text-align: center;
    }

    .custom-radio input:checked+.radio-btn {
        border: 3px solid #FF771F;
    }

    .custom-radio input:checked+.radio-btn>i {
        opacity: 1;
        transform: translateX(-50%) scale(1);
    }
</style>


<div class="col-md-12">
    <label for="form_1"> <strong> Contacto con el representante del cliente. </strong></label>
    <div class="radio-buttons">
        <div class="row mt-1">
            <div class="form-group col-md-4">
                <label class="custom-radio">
                    <input type="radio" name="radioP_2" checked />
                    <span class="radio-btn"><i class="las la-check"></i>
                        <div class="hobbies-icon ">
                            <!-- <i class="las la-biking"></i> -->
                            <h4>Bueno</h4>
                            <p class="text-justify">
                                El personal de ventas técnicas efectuó el contacto con el representante del cliente de forma respetuosa , clara, eficiente a los puntos de servicio requeridos por el cliente.
                            </p>
                        </div>
                    </span>
                </label>
            </div>
            <div class="form-group col-md-4">
                <label class="custom-radio">
                    <input type="radio" name="radioP_2" />
                    <span class="radio-btn"><i class="las la-check"></i>
                        <div class="hobbies-icon ">
                            <i class="fa-thin fa-face-smile-beam"></i>
                            <h4>Malo</h4>
                            <p class="text-justify">
                                No respeto las indicaciones acerca de las necesidades del cliente respecto a horarios de contacto, seguimiento información requerida
                            </p>
                        </div>
                    </span>
                </label>
            </div>
            <div class="form-group col-md-4">
                <label class="custom-radio">
                    <input type="radio" name="radioP_2" />
                    <span class="radio-btn"><i class="las la-check"></i>
                        <div class="hobbies-icon ">
                            <i class="fa-thin fa-face-smile-beam"></i>
                            <h4>Regular</h4>
                            <p class="text-justify">
                                No respeto las indicaciones acerca de las necesidades del cliente respecto a horarios de contacto, seguimiento información requerida
                            </p>
                        </div>
                    </span>
                </label>
            </div>
        </div>
    </div>



</div>


<div class="col-md-12">
    <div class="row mt-1">
        <div class="form-group col-md-12 text-center">
            <label for="form_1"> <strong> Calificacion: </strong></label>
            <br>
            <style>
                .star {
                    width: 250px;
                    margin: 0 auto;
                }

                .clasificacion p {
                    text-align: center;
                }

                .clasificacion label {
                    font-size: 50px;
                }

                .clasificacion input[type="radio"] {
                    display: none;
                }

                .clasificacion label {
                    color: grey;
                }

                .clasificacion {
                    direction: rtl;
                    unicode-bidi: bidi-override;
                }

                .star label:hover,
                .star label:hover~label {
                    color: #FF771F;
                }

                .star input[type="radio"]:checked~label {
                    color: #FF771F;
                }
            </style>
            <div class="star">
                <p class="clasificacion text-center">
                    <input id="radio1" type="radio" name="estrellasP_2" value="5">
                    <label for="radio1">★</label>
                    <input id="radio2" type="radio" name="estrellasP_2" value="4">
                    <label for="radio2">★</label>
                    <input id="radio3" type="radio" name="estrellasP_2" value="3">
                    <label for="radio3">★</label>
                    <input id="radio4" type="radio" name="estrellasP_2" value="2">
                    <label for="radio4">★</label>
                    <input id="radio5" type="radio" name="estrellasP_2" value="1">
                    <label for="radio5">★</label>
                </p>
            </div>
        </div>
        <div class="form-group col-md-12">

        </div>
    </div>
</div>