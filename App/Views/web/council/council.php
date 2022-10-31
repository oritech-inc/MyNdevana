<section id="councillor">
    <div class="container section-fs border-top">

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="section-title text-center placeholder-glow">
                    <h6 class="title animate__animated animate__fadeInUp">
                        Our Council
                    </h6>
                    <h3 class="sub-title animate__animated animate__slideInDown "><span>Current </span>ward councillor with cabinet committee.</h3>
                </div>
            </div>
        </div>


        <div class="row py-5">
            <div class="text-center col-md-4  animate__animated animate__slideInDown animate__delay-1s">
                <img class="fluid rounded-4" height="300" src="<?= $url ?>public/img/web/dp/0.jpeg" alt="Councillor image">
            </div>
            <div class="col-md-8">
                <h2 class="card-header text-uppercase text-light text-center rounded-0" style="background-color: rgba(241, 73, 54, 0.829);">
                    AYANDA NKALA
                </h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fa-solid fa-square-phone"></i> 067 402 6339
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa--envelope"></i> mail@host.com
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-calendar-day"></i> November 2021
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-landmark-flag"></i> AFRICAN NATIONAL CONGRESS
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <?php require $app[2] . 'web/council/cabinet.php'; ?>
        </div>
    </div>

</section>