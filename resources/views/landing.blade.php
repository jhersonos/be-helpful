@extends('layouts.main')

@section('content')<style>
*{
    outline:none;
}
html,body{
    margin:0;
}
section{
    width:100%;
}
img{
    max-width: 100%;
}
.general{
    background-image:url("trama.png");
    background-size:35%;
    background-repeat:no-repeat;
}
.home{
    background-image:url(ban.jpg);
    background-size:cover;
    background-repeat:no-repeat;
    min-height:0;
    border-radius:0px 0px 0px 150px;
    position:relative;
    overflow: hidden;
}
.home:before{
    content:'';
    background-color:#000000;
    position:absolute;
    width: 100%;
    height: 100%;
    top:0;
    left:0;
    opacity: .5;
}
.home *{
    position:relative;
    z-index: 4;
}
.row{
    padding:0;
    margin:0;
}
.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto{
    padding:0;
}
#cnt_campana{
    padding:50px 0;
}
#cnt_campana .campana_banner{
    padding:50px;
    border-radius:100px 0px 0px 0px;
    background-image:url(parallax.jpg);
    background-position:center;
    background-size:cover;
    position:relative;
    overflow: hidden;
}
#cnt_campana .campana_banner:before{
    content:'';
    background-color:#000000;
    position:absolute;
    width: 100%;
    height: 100%;
    top:0;
    left:0;
    opacity: .5;
}
#cnt_campana .campana_banner *{
    position:relative;
    z-index:3;
    color:#fff;
}
.content{
    padding: 0 50px;
}
.card_tab{
    border-radius:100px 0px 0px 0px;
    max-width:250px;
    overflow:hidden;
    position:relative;
}
.card_tab:before{
    content:'';
    background-color:#000000;
    position:absolute;
    width: 100%;
    height: 100%;
    top:0;
    left:0;
    opacity: .5;
}
.card_tab img{
    /* border-radius:100px 0px 0px 0px;
    max-width:250px; */
    display:block;
    margin:auto;
}
.card_tab{
    margin-bottom:20px;
}
.counter .banner_counter{
    padding:50px;
    border-radius:0px 100px 0px 0px;
    background-image:url(parallax.jpg);
    background-position: center;
    background-size:cover;
    color:#fff;
    position:relative;
    overflow: hidden;
}
.counter .banner_counter:before{
    content:'';
    background-color:#000000;
    position:absolute;
    width: 100%;
    height: 100%;
    top:0;
    left:0;
    opacity: .5;
}
#quienes{
    padding: 0;
    background-image:url(trama_fuccia.png);
}
.content_quienes{
    background-color:#fff;
}
.content_quienes img{
    width:100%;
    max-width:100%;
    display:block;
    margin-left:auto;
    border-radius:0px 0px 0px 100px;
}
.content_quienes{
    border-radius:0px 0px 0px 100px;
    padding: 40px 0px 40px 80px;
}
.m-center{
    display: flex;
    align-items: center;
    justify-content: center;
    /* text-align: center; */
}
.bg_blue{
    background-color:rgba(68, 126, 237);
    padding:20px 0;
}
.logo img{
    display:block;
    max-width:45px;
    margin: auto;
}
.white{
    color:#fff;
}
.space-b{
    margin-bottom:20px;
}
.box_item{
    width:100%;
}
.box_item .item{
    width:100%;
    cursor:pointer;
    min-height:40px;
    padding: 0 10px 10px;
}
.box_item .item.active{
    background-color:rgba(255, 255, 255, 0.23921568627450981);
}
.box_item .item:hover{
    background-color:rgba(255, 255, 255, 0.23921568627450981);
}
.box_item .item p{
    color:#fff;
}
.box_item .item h2{
    margin:50px 0;
    display:none;
    color:#fff;
}
.top-80{
    margin-top:80px;
}
.box_item .item.active h2{
    display:block !important;
}
.help_button{
    cursor: pointer;
    padding: 10px 20px;
    border-radius: 20px;
    background-color: #ff5656;
    color: #fff !important;
    display: block;
    margin:auto;
    margin-bottom: 80px;
    max-width: 150px;
}
.nav{
    display: flex;
    flex-wrap: nowrap;
}
.nav .banner-principal ul{
    display: flex;
    justify-content: flex-end;
    margin-top: 0px
}
.nav .banner-principal ul li{
    list-style: none;
    margin: 20px 80px;
    color: #ffffff;
    font-size: 25px;
}
.nav .banner-principal ul li a{
    color: #ffffff;
    text-decoration: none;
}
a:hover,  a:link{
    text-decoration: none;
}
footer{
    background-color:#424242;
    padding-bottom: 60px
}
footer img{
    /* max-width:60px; */
}
footer div{
    background: #5b5b5b;
    display: flex;
    justify-content: space-evenly
}
.text_group{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    z-index: 4;
    color:#fff;
    width:55%;
}
.cta{
    position:relative;
    bottom:30px;
    text-align:center;
}
.cta a{
    background-color:rgba(68, 126, 237);
    border-radius: 20px;
    color:#fff;
    text-decoration:none;
    padding:5px 10px;
}
</style>

<div class="general">
        <section id="app" class="">
            <div class="row">
                <div class="text-center logo col-xs-12 col-md-1">
                    <div class="bg_blue">
                        <img src="LOGO.png" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-md-11">
                    <div class="home">
                        <div class="nav justify-content-end">
                            <div class="banner-principal">
                                <ul>
                                    <li><a href="{{ route('landing') }}">CAMPAÑAS</a></li>
                                    <li><a href="#">ALERTAS</a></li>
                                    <li><a href="{{ route('foro') }}">COMPARTE</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-2">
                            <div class="contenido">
                                <h1 class="top-80 text-center white">Be helpful</h1>
                                <p class="white text-center">la gran comunidad del mundo desde <br>que empezamos.</p>
                                <a href="{{ route('interna') }}" class="help_button">Quiero ayudar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cnt_campana">
            <div class="col-xs-12 col-md-10 offset-md-1">
                <div class="campana_banner text-center">
                    <h3 class="white">
                        Comparte lo que importa
                    </h3><br>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br>nibh euismod tincidunt ut</p>
                </div>
            </div>
        </section>
        <section id="tabs">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="box_item">
                        <div id="alerta" class="item text-center">
                            <p>Alertas</p>
                            <h2>Hay personas que te necesitan</h2>
                        </div>
                        <div id="campana" class="item text-center active">
                            <p>Campañas</p>
                            <h2>Hay personas que te necesitan</h2>
                        </div>
                        <div id="comunidad" class="item text-center">
                            <p>Comunidad</p>
                            <h2>Hay personas que te necesitan</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <div class="card_tab">
                                    <img src="miraflores2.jpg" alt="">
                                    <div class="text_group">
                                        <h3>Campaña 1</h3>
                                        <p>descripcion</p>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="{{ route('interna') }}">ver campaña</a>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <div class="card_tab">
                                    <img src="miraflores2.jpg" alt="">
                                    <div class="text_group">
                                        <h3>Campaña 2</h3>
                                        <p>descripcion</p>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="{{ route('interna') }}">ver campaña</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <div class="card_tab">
                                    <img src="miraflores2.jpg" alt="">
                                    <div class="text_group">
                                        <h3>Campaña 3</h3>
                                        <p>descripcion</p>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="{{ route('interna') }}">ver campaña</a>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <div class="card_tab">
                                    <img src="miraflores2.jpg" alt="">
                                    <div class="text_group">
                                        <h3>Campaña 3</h3>
                                        <p>descripcion</p>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="{{ route('interna') }}">ver campaña</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <div class="card_tab">
                                    <img src="miraflores2.jpg" alt="">
                                    <div class="text_group">
                                        <h3>Campaña 3</h3>
                                        <p>descripcion</p>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="{{ route('interna') }}">ver campaña</a>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <div class="card_tab">
                                    <img src="miraflores2.jpg" alt="">
                                    <div class="text_group">
                                        <h3>Campaña 3</h3>
                                        <p>descripcion</p>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="{{ route('interna') }}">ver campaña</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="counter">
            <div class="banner_counter">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <h2 class="text-center">0</h2>
                        <h3 class="text-center">donaciones <br> recibidas</h3>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <h2 class="text-center">0</h2>
                        <h3 class="text-center">donaciones <br> recibidas</h3>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <h2 class="text-center">0</h2>
                        <h3 class="text-center">donaciones <br> recibidas</h3>
                    </div>
                </div>
            </div>
        </section>
        <section id="quienes">
            <div class="row m-center">
                <div class="col-md-4 text-center">
                    <img class="space-b" src="LOGO.png" alt="">
                    <h2 class="white">Cada <br> granito <br> hace la <br> diferencia</h2>
                </div>
                <div class="col-md-8">
                    <div class="content_quienes">
                        <h2>
                           <strong> Quienes somos </strong>
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, sed diam<br> nonummy nibh euismod tincidunt<br> ut
                        </p>
                        <img src="miraflores.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
            <div>
                <img src="ico1.png" alt="">
                <img src="ico2.png" alt="">
                <img src="ico3.png" alt="">
            </div>

        </footer>
@endsection
