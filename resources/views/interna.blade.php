@extends('layouts.main')

@section('content')
<style>
    .body-1{
        background: url('trama.png');
        background-size: 50%;
        background-repeat: repeat-y;

    }
    .nav{
        display: flex;
        flex-wrap: nowrap;
    }
    .banner-principal{
        background: url({{ asset('banner.png') }});
        background-position: center;
        background-size: cover;
        width: 100%;
        border-bottom-left-radius: 250px;
        height: 400px;
        margin-bottom: 40px;
        position: relative;
        overflow: hidden;
    }
    .banner-principal:before{
        content: '';
        background: rgba(0,0,0,0.3);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .nav .banner-principal ul{
        display: flex;
        justify-content: flex-end;
        margin-top: 40px;
        z-index: 10;
        position: relative;
    }
    .nav .banner-principal ul li{
        list-style: none;
        margin: 20px 80px;
        color: #ffffff;
        font-size: 20px;

    }
    .nav .banner-principal ul li a{
        color: #ffffff;
        text-decoration: none;
        z-index: 10;
        position: relative;
        letter-spacing: 5px;

    }
    a:hover,  a:link{
        text-decoration: none;
    }
    .banner-principal h1{
        font-weight: bolder;
        color: #ffffff;
        font-size: 70px;
        margin-left: 200px;
        z-index: 10;
        position: relative;
    }
    .banner-principal .aporta{
        padding: 10px 50px;
        background: #ff5656;
        border-radius: 40px;
        margin-left: 200px;
        color: #ffffff;
        font-size: 25px;
        z-index: 10;
        position: relative;
    }


    .porques{
        width: 280px;
        text-align: justify;
        margin-left: 40px
    }
    .porques p{
        font-size: 18px;
    }
    .porques h3{
        color: rgb(68,126,237);
        font-size: 33px;
        font-weight: bold;
    }
    #carouselExampleIndicators{
        margin-left: 80px;
    }
    #carouselExampleIndicators ol li{
        width: 15px;
        height: 15px;
        top: -30px;
        border-radius: 50%;
    }
    #carouselExampleIndicators ol{
        bottom: auto;
    }
    .barra{
        background: #005af0;
        position: absolute;
        top: 0;
        right: 0;
        margin: 30px 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 90%;
    }
    .barra img{
        margin: 0 20px;
    }
    .body-2{
        background: #ff5656;
    }

    .dos img{
        width: 450px;
        margin: auto;
    }
    .blanco{
        background: #ffffff;
        border-bottom-right-radius: 250px;
        overflow: hidden;
    }
    .blanco .tarjeta{
        background: #7aacf2;
        width: 500px;
        float: right;
        margin-top: 80px;
        height: 100%;
        position: relative;
        text-align: center
    }
    .hash{
        margin-top: -10px;
    }
    .hash a{
        padding: 20px 50px;
        color: white;
        border-radius: 40px;
        background: rebeccapurple;
    }
    .bola{
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: #5b5b5b;
        position: absolute;
        top: 140px;
        left: 175px;
    }
    .tarjeta .visita{
        background: #007ef0;
        color: white;
        padding: 15px 30px;
        font-size: 30px;
        text-align: center;
        border-radius: 40px
    }
    footer{
        background: #424242;
        padding-bottom: 60px
    }
    footer div{
        background: #5b5b5b;
        display: flex;
        justify-content: space-evenly
    }
</style>
<div class="body-1">

    <div class="nav">
        <div style="background: rgba(68, 126, 237); padding: 10px;" class="logo">
            <img width="50px" src="logo.png" alt="">
        </div>
        <div class="banner-principal">
            <ul>
                <li><a href="{{ route('landing') }}">CAMPAÑAS</a></li>
                <li><a href="#">ALERTAS</a></li>
                <li><a href="{{ route('foro') }}">COMPARTE</a></li>
            </ul>
            <h1>Casas Don Bosco</h1><br>
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="aporta">Aporta tu granito</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active text-center">
                          <div class="row text-center">
                              <div class="col-md-6 text-center">
                                  <img src="campana.png" alt="">
                              </div>
                          </div>
                      </div>
                      <div class="carousel-item  text-center">
                          <div class="row text-center">
                              <div class="col-md-6 text-center">
                                  <img src="campana.png" alt="">
                              </div>
                          </div>
                      </div>
                      <div class="carousel-item  text-center">
                          <div class="row text-center">
                              <div class="col-md-6 text-center">
                                  <img src="campana.png" alt="">
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
        </div>
        <div class="col-md-6" style="position: relative;
        position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
  }">
            <div class="porques">
                <h3>Porqué</h3>
                <p> Sequi sapiente iusto numquam sint.
                    Ullam reprehenderit ipsum deleniti</p>
            </div>
            <div class="porques">
                <h3>Cómo</h3>
                <p> Sequi sapiente iusto numquam sint.
                    Ullam reprehenderit ipsum deleniti</p>
            </div>
            <div class="porques">
                <h3>Cuando</h3>
                <p> Sequi sapiente iusto numquam sint.
                    Ullam reprehenderit ipsum deleniti</p>
            </div>
            <div class="porques">
                <h3>Dónde</h3>
                <p> Sequi sapiente iusto numquam sint.
                    Ullam reprehenderit ipsum deleniti</p>
            </div>
            <div class="barra">
                <div>
                    <img src="campana.svg" alt=""><br>
                </div>
                <div>
                    <img src="cohete.png" alt=""><br>
                </div>
                <div>
                    <img src="cohete.png" alt=""><br>
                </div>
                <div>
                    <img src="corazon.png" alt=""><br>
                </div>
            </div>
        </div>
    </div>

</div>
    <div class="body-2">
    <div class="row">
        <div class="col-md-6 blanco" style="padding: 0; ">
            <div class="tarjeta">
                <div class="hash">
                    <a href="#" >#ComunidadDomBosco</a>
                </div>
                <div class="bola"></div>
                <div></div>
                <div>
                    <div style="background: #424242;
                    margin-top: 200px; height: 490px">
                    <br>
                    <br>
                    <br>
                    <br><br>
                    <br>
                    <br>
                    <br>
                        <a class="visita" href="#">Visitar el perfil</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 dos" >
            <div class="text-center" style="width: 100%;">
                <img src="estadistica.gif" alt=""><br>
                <img src="estadistica.gif" alt="">
            </div>
        </div>
    </div>
</div>
<footer>
    <div>
        <img src="cohete.png" alt="">
        <img src="alerta.png" alt="">
        <img src="medalla.png" alt="">
    </div>

</footer>

<div class="modal fade" style="background: url(trama-form.png)" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
          <div class="modal-content" style="background: transparent; border: none;">
                <style>
                        .importe{
                            background: #ffffff;
                            width: 300px;
                            text-align: center;
                            webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
                            -moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
                            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
                        }
                        .importe .banner{
                            background: url('dona.jpg');
                            width: 100%;
                            height: 100px;
                            border-top-left-radius: 80px;
                            background-size: cover;
                            background-position: center;
                        }
                        .importe .ticket{
                            background: rgb(68, 126, 237);
                            height: 90px;
                            margin: 20px 40px;
                            position: relative;
                        }
                        .importe .bol{
                            width: 30px;
                            height: 30px;
                            border-radius: 50%;
                            background: #ffffff;
                            position: absolute;
                        }
                        .importe .bol:first-child{
                            top: 30px;
                            left: -15px;
                        }
                        .importe .bol:nth-child(2){
                            top: 30px;
                            right: -15px;
                        }
                        .importe img{
                            margin-top: 20px;
                        }
                        .importe h3{
                            font-size: 30px;
                            font-weight: lighter;
                            color: grey;
                            padding-top: 30px;
                            line-height: 0;
                            padding-right: 33px
                        }
                        .importe hr{
                            background: #ffffff;
                            height: 2px;
                            width: 80%;
                        }
                        .importe h4{
                            text-align: left;
                            padding-left: 30px;
                            padding-top: 40px;
                            line-height: .3;
                            font-size: 40px;
                            color: #ffffff;
                        }

                        .donar{
                            width: 400px;
                            background: #ffffff;
                            webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
                            -moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
                            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
                            border-top-left-radius: 90px;
                            overflow: hidden;
                            position: relative;
                            color: grey;
                        }
                        .donar .titulo{
                            background: rgb(68, 126, 237);
                        }
                        .donar .titulo h2{
                            color: #ffffff;
                            font-size: 20px;
                            padding: 10px;
                        }
                        .donar .form{
                            padding: 20px
                        }
                        .donar .form input{
                            border: none;
                            border-radius: 20px;
                            background: #ec4444;
                            color: #ffffff;
                        }
                        .donar img{
                            width: 100%;
                            height: 50px;
                        }
                        .donar .botones{
                            display: flex;
                            justify-content: space-between;
                            padding: 20px
                        }
                        .donar .botones button{
                            width: 130px;
                            border-radius: 40px
                        }
                    </style>
                    <div class="container my-5 row" style="
                    display: flex;
                  justify-content: center;
                  align-items: center;">
                        <div class="col-md-6">
                                <div class="importe">
                                    <h3 class="text-right">Importe:</h3>
                                    <div class="ticket">
                                        <div class="bol"></div>
                                        <div class="bol"></div>
                                        <h4 class="monto">$</h4>
                                        <hr>
                                    </div>

                                    <div class="banner"></div>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="donar">
                                    <div class="titulo text-right"><h2>¿Cuantos granitos<br>quieres aportar?</h2></div>
                                    <div class="form">

                                    <label class="form-label" for="text">N° de Tarjeta:</label>
                                    <i class="far fa-credit-card"></i><input type="text" class="form-control" placeholder="N° de Tarjeta">

                                    <div class="form-row">
                                        <div class="col">
                                            <label class="form-label" for="text">Caducidad:</label>
                                            <i class="fas fa-calendar-alt"></i><input type="text" class="form-control" placeholder="Mes">
                                        </div>
                                        <div class="col">
                                            <label style="visibility: hidden" class="form-label" for="text">.</label>
                                            <input type="text" class="form-control" placeholder="Ano">
                                        </div>
                                    </div>

                                    <label class="form-label" for="text">Codigo de seguridad:</label>
                                    <i class="fas fa-lock"></i><input type="text" class="form-control" placeholder="Codigo de seguridad">
                                </div>
                                <img class="tarjetas" src="{{ asset('tira.png') }}" alt="">
                                <div class="botones">
                                        <button style="background: gray; color: white;" class="btn" data-dismiss="modal" aria-label="Close">CANCELAR</button>
                                        <button style="background: rgb(68, 126, 237); color: white;" class="btn">PAGAR</button>
                                </div>
                            </div>
                        </div>
                    </div>

          </div>
        </div>
      </div>
      @endsection
