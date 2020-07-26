<?php

$page_slug = basename(get_permalink());

switch ($page_slug) {
    case "salle-multisports":
        get_template_part( 'template-parts/multisports', 'home');
        $rdvbg = 'bg-blue';
        $rdvtxt = 'text-white';
        $questbg = 'bg-yellow';
        $questtxt = 'text-blue';
        $ctatelbg = 'bg-yellow';
        $ctateltxt = 'text-blue';
        $ctamailbg = 'bg-blue';
        $ctamailtxt = 'text-white';
        break;
    case "sport-a-domicile":
        //get_template_part( 'template-parts/', 'home');
        $rdvbg = 'bg-blue';
        $rdvtxt = 'text-white';
        $questbg = 'bg-yellow';
        $questtxt = 'text-blue';
        $ctatelbg = 'bg-yellow';
        $ctateltxt = 'text-blue';
        $ctamailbg = 'bg-blue';
        $ctamailtxt = 'text-white';
        break;
    case "innovmobilite":
        //get_template_part( 'template-parts/', 'home');
        $rdvbg = 'bg-yellow';
        $rdvtxt = 'text-blue';
        $questbg = 'bg-blue';
        $questtxt = 'text-white';
        $ctatelbg = 'bg-blue';
        $ctateltxt = 'text-white';
        $ctamailbg = 'bg-yellow';
        $ctamailtxt = 'text-blue';
        break;
    case "sensorizen":
        //get_template_part( 'template-parts/', 'home');
        $rdvbg = 'bg-purple';
        $rdvtxt = 'text-white';
        $questbg = 'bg-yellow';
        $questtxt = 'text-blue';
        $ctatelbg = 'bg-yellow';
        $ctateltxt = 'text-purple';
        $ctamailbg = 'bg-blue';
        $ctamailtxt = 'text-white';
        break;
    default :
        $rdvbg = 'bg-blue';
        $rdvtxt = 'text-white';
        $questbg = 'bg-yellow';
        $questtxt = 'text-blue';
        $ctatelbg = 'bg-yellow';
        $ctateltxt = 'text-blue';
        $ctamailbg = 'bg-blue';
        $ctamailtxt = 'text-white';
}

?>

<section id="rendez-vous" class="<?php echo $rdvbg; ?> text-center text-lg-left">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="<?php echo $rdvtxt; ?>">Prenez rendez-vous dès aujourd'hui !</h2>
                <h3 class="<?php echo $rdvtxt; ?>">Directement depuis l'agenda ou via notre formulaire de contact ou par téléphone.</h3>
                <a href="tel:+33665059253" class="<?php echo $ctatelbg .' '. $ctateltxt; ?> btn btn-lg text-uppercase text-decoration-none font-weight-bold">Nous appeler<span class="btn-icon"><i class="fas fa-phone-alt"></i></span></a>
            </div>
            <div class="col-lg-2 m-5 m-lg-0 d-flex justify-content-center align-items-center arrow-container">
            <i class="<?php echo $rdvtxt; ?> fas fa-long-arrow-alt-right fa-5x anim-arrow"></i>
            </div>
            <div class="col-lg-4 text-center d-flex justify-content-center mt-5 mt-lg-0">
                <a href="<?php the_permalink(307); ?>" target="_self" rel="nofollow">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/iconographie/calendrier.png'; ?>" class="figure-img img-fluid" alt="Lusis-Sport | Prenez rendez-vous facilement">
                </a>
            </div>
        </div>
    </div>
</section>
<section id="questions" class="<?php echo $questbg; ?> container-fluid text-center text-xl-left">
    <div class="row">
        <div class="container my-5">
            <div class="row">
                <div class="col-xl-8">
                    <h2 class="<?php echo $questtxt; ?>">Nous sommes là pour répondre à toutes vos questions</h2>
                    <p class="<?php echo $questtxt; ?>">Besoin de plus de renseignements ? Vous souhaitez connaître nos tarifs ?</p>
                </div>
                <div class="col-xl-4 d-flex justify-content-center align-items-center">
                    <a href="<?= the_permalink(36) ?>" target="_self" class="<?php echo $ctamailbg .' '. $ctamailtxt; ?> btn btn-lg text-uppercase text-decoration-none font-weight-bold">Contactez-nous<span class="btn-icon"><i class="fas fa-envelope"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="laissez-vous-guider" class="bg-blue px-5 px-xl-0">
    <div class="row">
        <div class="container my-5">
            <div class="row">
                <div class="col-xl-8">
                    <h2 class="text-red">Laissez-vous guider</h2>
                    <h3 class="text-blue">Vous êtes ...</h3>
                    <p class="text-white">Une personne en situation de handicap dès 3 ans, une personne vieillissante, une personne souffrante d’Affection de Longue Durée, une structure sanitaire-sociale, une structure médico-éducative, une profession libérale, un professionnel de santé… mais également une entreprise, prenez contact avec nous pour une visite de nos installations et un essai gratuit.</p>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="card border border-0">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/particulier.jpg'; ?>" class="card-img-top" alt="Vous êtes un particulier">
                                <div class="card-body bg-yellow text-center d-flex justify-content-center align-items-center">
                                    <p class="text-white text-uppercase">Un particulier</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card border border-0">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/pro-sante.jpg'; ?>" class="card-img-top" alt="Vous êtes un professionnel de santé">
                                <div class="card-body bg-yellow text-center d-flex justify-content-center align-items-center">
                                    <p class="text-white text-uppercase">Un professionnel de santé</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card border border-0">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/structure-adaptee.jpg'; ?>" class="card-img-top" alt="Vous êtes une structure adaptée">
                                <div class="card-body bg-yellow text-center d-flex justify-content-center align-items-center">
                                    <p class="text-white text-uppercase">Une structure adaptée</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card border border-0">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/entreprise.jpg'; ?>" class="card-img-top" alt="Vous êtes une entreprise">
                                <div class="card-body bg-yellow text-center d-flex justify-content-center align-items-center">
                                    <p class="text-white text-uppercase">Une entreprise</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
