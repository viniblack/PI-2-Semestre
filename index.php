<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" href="imagens/logoprovisorio.png">

    <link href="style.css" rel="stylesheet">
    <title>Supermercado Vovó</title>
</head>


<body style="min-width: 372px;">
    <?php
  
    require_once('./php/config/session.php');
    require_once('./template/_menu.php');
 
    ?>

    <header class="container">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagens/banners/banner1.jpg" class="d-block w-100" alt="banner1">
                </div>
                <div class="carousel-item">
                    <img src="imagens/banners/banner2.jpg" class="d-block w-100" alt="banner2">
                </div>
                <div class="carousel-item">
                    <img src="imagens/banners/banner3.jpg" class="d-block w-100" alt="banner3">
                </div>
                <div class="carousel-item">
                    <img src="imagens/banners/banner5.jpg" class="d-block w-100" alt="banner5">
                </div>
                <div class="carousel-item">
                    <img src="imagens/banners/banner6.png" class="d-block w-100" alt="banner6">
                </div>
            </div>
        </div>
    </header>


    <main class="mb-5 pb-5 mb-md-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 p-3">
                    <form class="justify-content-center justify-md-start mb-3 mb-md-0">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="digite aqui o que procura">
                            <button class="btn btn-danger"> Buscar</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-7 p-3">
                    <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start ">
                        <form class="ml-3 d-inline-block">
                            <select class="form-select form-select-sm">
                                <option> Ordenar pelo nome</option>
                                <option> Ordenar pelo menor preço</option>
                                <option> Ordenar pelo maior preço</option>
                            </select>
                        </form>
                        <nav class="d-inline-block">
                            <ul class="pagination pagination-sm my-0">
                                <li class="page-item desabled"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--CARD1-->
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex text-center g-4">
                        <div class="card align-items-center p-2 text-center bg-light">
                            <img src="imagens/produtos/cafe.png" alt="produto1" class="rounded" width="160">
                            <div class="cost mt-3 text-dark">
                                <span>R$4,90</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Açucar</h5>
                                <p class="card-text"> Açucar Refinado União</p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-danger">
                                        Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--CARD2-->
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex text-center g-4">
                        <div class="card align-items-center p-2 text-center bg-light">
                            <img src="imagens/produtos/dolce.png" alt="produto1" class="rounded" width="160">
                            <div class="cost mt-3 text-dark">
                                <span>R$4,90</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Açucar</h5>
                                <p class="card-text"> Açucar Refinado União</p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-danger">
                                        Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--CARD3-->
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex text-center g-4">
                        <div class="card align-items-center p-2 text-center bg-light">
                            <img src="imagens/produtos/leite.png" alt="produto1" class="rounded" width="160">
                            <div class="cost mt-3 text-dark">
                                <span>R$4,90</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Açucar</h5>
                                <p class="card-text"> Açucar Refinado União</p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-danger">
                                        Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--CARD4-->
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex text-center g-4">
                        <div class="card align-items-center p-2 text-center bg-light">
                            <img src="imagens/produtos/nescau.png" alt="produto1" class="rounded" width="160">
                            <div class="cost mt-3 text-dark">
                                <span>R$4,90</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Açucar</h5>
                                <p class="card-text"> Açucar Refinado União</p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-danger">
                                        Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--CARD5-->
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex text-center g-4">
                        <div class="card align-items-center p-2 text-center bg-light">
                            <img src="imagens/produtos/pao.png" alt="produto1" class="rounded" width="160">
                            <div class="cost mt-3 text-dark">
                                <span>R$4,90</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Açucar</h5>
                                <p class="card-text"> Açucar Refinado União</p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-danger">
                                        Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--CARD6-->
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex g-4 ">
                        <div class="card align-items-center p-2 text-center bg-light ">
                            <img src="imagens/produtos/torrada.jpg" alt="produto1" class="rounded" width="160">
                            <div class="cost mt-3 text-dark">
                                <span>R$4,90</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Açucar</h5>
                                <p class="card-text"> Açucar Refinado União</p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-danger">
                                        Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="bg-primary text-light text-center p-3 rounded mx-auto mb-5 my-4">
                        <h2 class="display-4 fw-bold">Receba nossas ofertas</h2>
                        <p class="lead">Receba as promoções em primeira mão</p>
                        <span>Saiba mais</span>
                        <div class="cta-form position-relative mx-auto d-none d-md-block">
                            <input type="email" class="form-control" placeholder="E-mail">
                            <button type="submit" class="btn btn-primary position-absolute"> Cadastre-se</button>
                        </div>
                    </div>
                </div>
        </section>

        <section>
            <div class="float center" id="banner-categoria">
                <div class="row">
                    <div class="col col-sm-2 col-xs-6 align-content-between mt-3">
                        <a href="#">
                            <img src="imagens/setor/bebidas.JPG" alt="bebidas">
                        </a>
                    </div>
                    <div class="col col-sm-2 col-xs-6 align-mobile mt-3">
                        <a href="#">
                            <img src="imagens/setor/acougue.png" alt="acougue">
                        </a>
                    </div>
                    <div class="col col-sm-2 col-xs-6 align-mobile mt-3">
                        <a href="#">
                            <img src="imagens/setor/laticinios.png" alt="laticinios">
                        </a>
                    </div>
                    <div class="col col-sm-2 col-xs-6 align-mobile mt-3">
                        <a href="#">
                            <img src="imagens/setor/limpeza.png" alt="limpeza">
                        </a>
                    </div>
                    <div class="col col-sm-2 col-xs-6 align-mobile mt-3">
                        <a href="#">
                            <img src="imagens/setor/mercearia.JPG" alt="mercearia">
                        </a>
                    </div>
                    <div class="col col-sm-2 col-xs-6 align-mobile mt-3">
                        <a href="#">
                            <img src="imagens/setor/prefumaria.JPG" alt="perfumaria">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagens/banners/bannersadia.jpg" class="d-block w-100" alt="banner1">
                        </div>
                        <div class="carousel-item">
                            <img src="imagens/banners/bannersadia1.jpg" class="d-block w-100" alt="banner2">
                        </div>
                        <div class="carousel-item">
                            <img src="imagens/banners/bannersadia2.jpg" class="d-block w-100" alt="banner3">
                        </div>
                        <div class="carousel-item">
                            <img src="imagens/banners/banner9.JPG" class="d-block w-100" alt="banner5">
                        </div>
                    </div>
                </div>
            </div>
            <!--CARDSADIA1-->
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex text-center g-4">
                        <div class="card align-items-center p-2 text-center bg-light">
                            <img src="imagens/produtos/sadia1.jpg" alt="produto1" class="rounded" width="160">
                            <div class="cost mt-3 text-dark">
                                <span>R$4,90</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Açucar</h5>
                                <p class="card-text"> Açucar Refinado União</p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-danger">
                                        Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--CARDSADIA2-->
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex text-center g-4">
                        <div class="card align-items-center p-2 text-center bg-light">
                            <img src="imagens/produtos/sadia2.jpg" alt="produto1" class="rounded" width="160">
                            <div class="cost mt-3 text-dark">
                                <span>R$4,90</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Açucar</h5>
                                <p class="card-text"> Açucar Refinado União</p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-danger">
                                        Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--CARDSADIA3-->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex text-center g-4">
                        <div class="card align-items-center p-2 text-center bg-light">
                            <img src="imagens/produtos/sadia3.png" alt="produto1" class="rounded" width="160">
                            <div class="cost mt-3 text-dark">
                                <span>R$4,90</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Açucar</h5>
                                <p class="card-text"> Açucar Refinado União</p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-danger">
                                        Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--CARDSADIA4-->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex text-center g-4">
                        <div class="card align-items-center p-2 text-center bg-light">
                            <img src="imagens/produtos/sadia4.jpg" alt="produto1" class="rounded" width="160">
                            <div class="cost mt-3 text-dark">
                                <span>R$4,90</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Açucar</h5>
                                <p class="card-text"> Açucar Refinado União</p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-danger">
                                        Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--CARDSADIA5-->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex text-center g-4">
                        <div class="card align-items-center p-2 text-center bg-light">
                            <img src="imagens/produtos/sadia5.png" alt="produto1" class="rounded" width="160">
                            <div class="cost mt-3 text-dark">
                                <span>R$4,90</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Açucar</h5>
                                <p class="card-text"> Açucar Refinado União</p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-danger">
                                        Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--CARDSADIA6-->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex text-center g-4">
                        <div class="card align-items-center p-2 text-center bg-light">
                            <img src="imagens/produtos/sadia6.jpg" alt="produto1" class="rounded" width="160">
                            <div class="cost mt-3 text-dark">
                                <span>R$4,90</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Açucar</h5>
                                <p class="card-text"> Açucar Refinado União</p>
                            </div>
                            <div class="card-footer">
                                <form class="d-block">
                                    <button class="btn btn-danger">
                                        Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
        </section>


        <section>
            <div class="float center" id="banner-categoria">
                <div class="row">
                    <div class="col col-sm-5 col-xs-12 align-mobile mt-3">
                        <a href="#">
                            <img src="imagens/promo/rodape_unilever.png" alt="unilever">
                        </a>
                    </div>
                    <div class="col col-sm-2 col-xs-6 align-mobile mt-3">
                        <a href="#">
                            <img src="imagens/promo/rodape_cafe.png" alt="cafe">
                        </a>
                    </div>
                    <div class="col col-sm-2 col-xs-6 align-mobile mt-3">
                        <a href="#">
                            <img src="imagens/promo/rodape_pepsico.png" alt="pepsico">
                        </a>
                    </div>
                    <div class="col col-sm-3 col-xs-12 align-mobile mt-3">
                        <div class="row">
                            <div class="col col-sm-12 col-xs-12 align-mobile " style="padding-bottom:20px;">
                                <a href="#">
                                    <img src="imagens/promo/rodape_vinho.png" alt="vinho">
                                </a>
                            </div>
                            <div class="col col-sm-12 col-xs-12 align-mobile">
                                <a href="#">
                                    <img src="imagens/promo/rodape_tabloide.png" alt="tabloide">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    require_once('./template/_footer.php');
    ?>
</body>

</html>