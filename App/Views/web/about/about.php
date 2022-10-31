<style>
    .title{
        font-weight: 900;
        letter-spacing: 3px;
    }
     .card-link
    {
        border-bottom: 5px solid #000;
        cursor: pointer;
        transform:scale(1);
    }
    .fa-stack.small { font-size: .5em; }
    .fa-stack i { vertical-align: middle; }
    .modal-body{vertical-align:left;text-align:left}

</style>
<section id="about" class="about-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center placeholder-glow">
                    <h6 class="title animate__animated animate__fadeInDown">
                        ABOUT US
                    </h6>
                    <h3 class="sub-title wow fadeInUp animate__animated animate__fadeInUp">
                        <span>Brief history </span>about ndevana Location.
                    </h3>
                </div>
            </div>
        </div>
        <p class="my-5 animate__animated animate__fadeIn animate__delay-1s">
            Ndevana Location is a rural settlement between to township Ilitha and Phakamisa was founded in 26 August 1976,  it is located between to township Ilitha and Phakamisa
            in the Eastern Cape Province under Buffalo City Metro Municipality and is classified as ward 49.
            Ndevana is 100% Black African and the 96% Xhosa speaking language. Female gender is dominating by 51% over 49% male.
            It is made out of these areas Bhongweni, Thubalethu, Ekuphumleni, Gesini, Velwano, Mpolweni, Masijongane, New Rest, Lusaka, Mthombo, Santini, Highway, Ezintenteni, Gugulethu and <Ntakazilali class=""></Ntakazilali>
        </p>
        <?php
            require $app[2] . 'web/about/cards.php';
        ?>


    </div>

</section>
<?php
    require $app[2] . 'web/about/ajs.php';
?>
