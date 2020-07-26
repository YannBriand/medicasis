<section id="services">
    <div id="vueapp" class="container">
        <p>{{ message }}</p>
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-red">Nos Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card mb-5">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/service-salle-de-sport.jpg'; ?>" class="card-img-top" alt="Service Salle de Sport">
                    <div class="card-body">
                        <h3 class="card-title text-blue"><span class="badge text-red">01.</span> Salle de Sport</h3>
                        <p class="card-text">15 sports adaptés à vos capacités motrices, physiques et cognitives.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?= the_permalink(111); ?>" class="btn btn-lg bg-blue text-white text-uppercase text-decoration-none font-weight-bold">Découvrir<span class="btn-icon"><i class="fas fa-angle-double-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card mb-5">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/service-sport-a-domicile.jpg'; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title text-blue"><span class="badge text-red">02.</span> Sport à domicile</h3>
                        <p class="card-text">Le sport pour ceux qui ne peuvent pas se déplacer.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?= the_permalink(113); ?>" class="btn btn-lg bg-blue text-white text-uppercase text-decoration-none font-weight-bold">Découvrir<span class="btn-icon"><i class="fas fa-angle-double-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card mb-5">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/service-sensorizen.jpg'; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title text-blue"><span class="badge text-red">03.</span> Sensorizen</h3>
                        <p class="card-text">La détente par les 5 sens et le vibratoire dans un espace ludique.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?= the_permalink(117); ?>" class="btn btn-lg bg-blue text-white text-uppercase text-decoration-none font-weight-bold">Découvrir<span class="btn-icon"><i class="fas fa-angle-double-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card mb-5">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/service-innov-mobilite.jpg'; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title text-blue"><span class="badge text-red">04.</span> Innov'mobilité</h3>
                        <p class="card-text">La réhabilitation motrice et articulaire avec des outils interactifs innovants.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?= the_permalink(115); ?>" class="btn btn-lg bg-blue text-white text-uppercase text-decoration-none font-weight-bold">Découvrir<span class="btn-icon"><i class="fas fa-angle-double-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="dominos">
    <div class="container-fluid">
        <div class="row">
            <div class="domino col-12 col-md-6 col-xl-3">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/service-carte-departement-02.jpg'; ?>" class="card-img-top" alt="Lusis Sport dans le département de l'aisne">
                <div class="card bg-blue">
                    <div class="card-body">
                        <h3 class="card-title text-center px-3"><span><i class="fab fa-2x fa-accessible-icon"></i></span><br />Un accueil adapté</h3>
                        <p class="card-text text-justify px-3 px-xl-5">L’ensemble des salles sont accessibles à toutes personnes à mobilité réduite. Une rampe à 5% avec un seuil à l’entrée, un couloir centrale adapté à tous les pivots et tous les outils sont accessibles.</p>
                    </div>
                </div>
            </div>
            <div class="domino col-12 col-md-6 col-xl-3">
                <div class="card bg-yellow">
                    <div class="card-body">
                        <h3 class="card-title text-center px-3"><span><i class="fas fa-2x fa-map-marker-alt"></i></span><br />Un service de proximité</h3>
                        <p class="card-text text-justify px-3 px-xl-5">Au c&oelig;ur de Laon avec un grand parking et desservie par la ligne de bus N°2 (arrêt Descartes), Lusis Sport accueille toute personne en situation de handicap, souffrant d’affection de longue durée ou personne vieillissante.</p>
                    </div>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/service-accueil-adapte.jpg'; ?>" class="card-img-bottom" alt="Lusis Sport dans le département de l'aisne">
            </div>
            <div class="domino col-12 col-md-6 col-xl-3">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/service-educateur-a-vos-cotes.jpg'; ?>" class="card-img-top" alt="Lusis Sport dans le département de l'aisne">
                <div class="card bg-red">
                    <div class="card-body">
                        <h3 class="card-title text-center px-3"><span><i class="fas fa-2x fa-dumbbell"></i></span><br />Un éducateur sportif à vos côtés</h3>
                        <p class="card-text text-justify px-3 px-xl-5">Toutes les séances de sports, collectives ou individuels, sont encadrées par notre éducateur sportif. Il sera là pour vous conseiller en fonction de vos capacités, animer les séances et corriger vos mouvements.</p>
                    </div>
                </div>
            </div>
            <div class="domino col-12 col-md-6 col-xl-3">
                <div class="card bg-grey">
                    <div class="card-body">
                        <h3 class="card-title text-center px-3"><span><i class="fas fa-2x fa-users"></i></span><br />Le sport en famille</h3>
                        <p class="card-text text-justify px-3 px-xl-5">Notre association est ouverte aux séances de sport en famille. Quelle joie de pouvoir faire une ou plusieurs activités sportives avec l’ensemble de la famille (enfants, parents, grand-parents, oncles, tantes, cousins ou cousines) toute l’année ou durant les vacances scolaires.</p>
                    </div>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/service-sport-en-famille.jpg'; ?>" class="card-img-bottom" alt="Lusis Sport dans le département de l'aisne">
            </div>
        </div>
    </div>
</section>