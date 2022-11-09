<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../style/css/style.css" />
    <title>Accueil</title>

</head>

<body>
    <div class="wrapper">
        <?php
        include '../includes/header.inc.php'; ?>
        <main class="main">
            <section class="main__section-1">
                <div class="description__body">
                    <h1 class="description__title">
                        PARTICIPATION AU SPORT<br />
                        <b class="title__bold">GRATUIT</b>
                    </h1>
                </div>
                <div class="design__runner">
                    <img src="../../img/runner.png" class="runner__img" alt="" />
                    <span class="main__section__design"> </span>
                </div>
                <div class="main__section__description">
                    <h2 class="description__title__info">LOREM IPSUM</h2>
                    <p class="description__info">
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Ipsa porro tenetur, obcaecati est adipisci
                        provident, enim eius eos doloribus eveniet illo.
                        Iste animi, voluptatem itaque deleniti suscipit vel
                        exercitationem culpa.
                    </p>
                </div>
            </section>
            <div class="align__btn">
                <button class="btn__inscription btn__style" type="submit">
                    M'INSCRIRE
                </button>
            </div>
            <div class="align__arrow">
                <img src="../../img/arrow.svg" class="row__bottom" alt="" />
            </div>
            <div class="h1__body">
                <h1 class="main__h1">NOS ACTIVITÉS SPORTIVES</h1>
            </div>
            <section class="main__section-2">
                <div class="cards" id="#cards">
                    <div onclick="location.href='newurl.html';" class="card__box bgBoxe">
                        <div class="card__title__body">
                            <h2 class="card__title">
                                BOXE <br />
                                ANGLAISE
                            </h2>
                        </div>
                    </div>
                    <div class="card__box bgFooting">
                        <div class="card__title__body">
                            <h2 class="card__title">FOOTING</h2>
                        </div>
                    </div>
                    <div class="card__box football">
                        <div class="card__title__body">
                            <h2 class="card__title">FOOTBALL</h2>
                        </div>
                    </div>
                    <div class="card__box basketball">
                        <div class="card__title__body">
                            <h2 class="card__title">BASKETBALL</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main__section-3">
                <div class="split__box split__box-1">
                    <h3 class="split__title">ENVIE DE COACHER?</h3>
                    <p class="split__text" ">
                        Nous te proposens d'entrainer des gens gratuitement</p>
                    <p> <strong class=" split__strong">POURQUOI?</strong></p>
                    <p> 1) Sortir de sa routine en explorant de nouveaux horizons</p>
                    <p> 2) Se sentir utile en faisant de bonnes actions</p>
                    <p> 3) Acquérir de nouvelles connaissances et compétences</p>
                    <p> 4) Faire ce qui vous plaît</p>
                    <p> 5) Rencontrer de nouvelles personnes.</p>
                    </p>
                </div>
                <div class="split__box split__box-2">
                    <h3 class="split__title">ENVIE D'ENTRAINER?</h3>
                    <p class="split__text">
                        Nous te proposens d'entainer avec nous!</p>
                    <P> <strong class="split__strong">POURQUOI?</strong>
                    <p>
                    <p>1) Etre plus heureux</p>
                    <p> 2) Avoir plus confiance en soi</p>
                    <p> 3) Avoir plus d’énergie</p>
                    <p> 4) Atteindre tes objectifs</p>
                    <p> 5) Diminuer le stress</p>
                    </p>
                </div>
            </section>
        </main>
        <?php include '../includes/footer.inc.php'; ?>
    </div>
    <script src="../../../js/main.js"></script>
</body>

</html>