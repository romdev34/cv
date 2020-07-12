<!DOCTYPE html>
<html>
    <?php
    $t = filemtime('css/index.css');
    ?>
    <head>
        <title>CV</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css?<?= $t ?>">
        <script type="text/javascript" src="jquery/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="index.js"></script>
    </head>

    <body>
        <div id="bouton_top"><img src="img/Scroll-to-top-button.png" alt="toTop" /></div>
        <div id="bouton_top_responsive"> CLIQUER POUR REMONTER</div>
        <div id="globale_box">
            <header>
                <svg version="1.1" id="header_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 754.2 83.9" enable-background="new 0 0 754.2 83.9" xml:space="preserve">
                <polygon fill="#00A1A3" points="754.2,83.9 545.1,0 0,83.9 0,0 754.2,0 "/>
                </svg>

                <div id="titre">
                    <div>DEVELOPPEUR WEB</div>
                </div>

            </header>

            <section class="photo_part">
                <div id="titre_developpeur"> </div>
                <div id="photo_nom"><img id="photo" src="img/maphoto.png" width="150" height="250" alt="ma photo" /></div>
                <div id="nom">ITOFO ROMAIN</div>
            </section>
            <section class="svg_part">
                <svg id="svg_header"  width="700" height="550" x="0px" y="0px"
                     viewBox="300 0 550 560" enable-background="new 0 0 350 560" xml:space="preserve">
                <path id="XMLID_37_" fill="#F39B42" stroke="#000000" stroke-miterlimit="10" d="M671.3,306.9L646,262.1c-2.7-4.7-2.7-10.5,0-15.2l25.2-44.8
                      c2.6-4.7,7.5-7.6,12.8-7.6h50.5c5.3,0,10.2,2.9,12.8,7.6l25.2,44.8c2.7,4.7,2.7,10.5,0,15.2l-25.2,44.8c-2.6,4.7-7.5,7.6-12.8,7.6
                      h-50.5C678.8,314.5,673.9,311.6,671.3,306.9z"/>
                <path id="XMLID_53_" fill="#F39B42" stroke="#000000" stroke-miterlimit="10" d="M417.9,306.9l-25.2-44.8c-2.7-4.7-2.7-10.5,0-15.2l25.2-44.8
                      c2.6-4.7,7.5-7.6,12.8-7.6h50.5c5.3,0,10.2,2.9,12.8,7.6l25.2,44.8c2.7,4.7,2.7,10.5,0,15.2l-25.2,44.8c-2.6,4.7-7.5,7.6-12.8,7.6
                      h-50.5C425.5,314.5,420.6,311.6,417.9,306.9z"/>
                <path id="XMLID_47_" fill="#F39B42" stroke="#000000" stroke-miterlimit="10" d="M630.2,161.8l-40.8,24.3c-4.3,2.5-9.6,2.5-13.9,0l-40.8-24.3
                      c-4.3-2.5-6.9-7.2-6.9-12.3V101c0-5.1,2.6-9.8,6.9-12.3l40.8-24.3c4.3-2.5,9.6-2.5,13.9,0l40.8,24.3c4.3,2.5,6.9,7.2,6.9,12.3v48.6
                      C637.1,154.6,634.5,159.3,630.2,161.8z"/>
                <path id="XMLID_48_" fill="#F39B42" stroke="#000000" stroke-miterlimit="10" d="M630.2,421.8l-40.8,24.3c-4.3,2.5-9.6,2.5-13.9,0l-40.8-24.3
                      c-4.3-2.5-6.9-7.2-6.9-12.3V361c0-5.1,2.6-9.8,6.9-12.3l40.8-24.3c4.3-2.5,9.6-2.5,13.9,0l40.8,24.3c4.3,2.5,6.9,7.2,6.9,12.3v48.6
                      C637.1,414.6,634.5,419.3,630.2,421.8z"/>
                <path id="projet" fill="#007E7F" stroke="#000000" stroke-miterlimit="10" d="M640.6,262.1c-2.7-4.7-2.7-10.5,0-15.2l22.9-40.6v-32.8h-42.9
                      l-31,18.5c-4.3,2.5-9.6,2.5-13.9,0l-31-18.5h-43.3v31.7l23.5,41.7c2.7,4.7,2.7,10.5,0,15.2l-23.5,41.7v31.7h44.1l30.1-18.2
                      c4.3-2.5,9.6-2.4,13.9,0.1l30.1,18h43.8v-32.8L640.6,262.1z"/>
                <text id="XMLID_55_" transform="matrix(1 0 0 1 548.333 127.2579)" font-family="'MyriadPro-Regular'" font-size="15">Formations</text>
                <text id="projet_text" transform="matrix(1 0 0 1 528.9997 259.5002)" font-family="'MyriadPro-Regular'" font-size="15">REALISATIONS</text>
                <text id="XMLID_51_" transform="matrix(1 0 0 1 542.3333 392)" font-family="'MyriadPro-Regular'" font-size="15">Me contacter</text>
                <text id="XMLID_54_" transform="matrix(1 0 0 1 680.9993 257.5)" font-family="'MyriadPro-Regular'" font-size="15">Parcours</text>
                <text id="XMLID_49_" transform="matrix(1 0 0 1 415 258.3332)" font-family="'MyriadPro-Regular'" font-size="15">Compétences</text>
                </svg>
            </section>
            <div class="hr1"></div>
            <section class="competences_box_gauche ">
                <div id="liste_cercles">
                    <div class="cercle_div">
                        <svg style="display:block; margin-top:15px" height="150" width="200" xmlns="http://www.w3.org/2000/svg" viewbox="20 45 200 200">
                        <defs>
                        <linearGradient id="gradient-3" gradientUnits="userSpaceOnUse" x1="122.588" y1="86.071" x2="122.588" y2="192.691" spreadMethod="pad">
                        <stop offset="0" style="stop-color: #F39B42;" />
                        <stop offset="1" style="stop-color: #007E7F;" /> </linearGradient>
                        </defs>
                        <ellipse fill="none" stroke="#ebe9e9" stroke-width="15" cx="122.588" cy="139.381" rx="50.31" ry="50.31"> </ellipse>
                        <ellipse class="cercle" stroke-dasharray="335" stroke-dashoffset="335" fill="white" stroke-width="9px" stroke="url(#gradient-3)" data-percentage="70" cx="122.588" cy="139.381" rx="53.31" ry="53.31" /> <span class="nombre_pourcentage"></span> <span class="tool_tip"> HTML5, CSS3, JS, JQUERY, BOOSTRAP, TWIG, GRUNT JS ...</span> </svg> <span class="label_cercle">FRONT-END</span> </div>
                    <div class="cercle_div">
                        <svg height="150" width="200" style="height:150; width:200; display:block; margin-top:15px;" xmlns="http://www.w3.org/2000/svg" viewbox="20 45 200 200">
                        <ellipse fill="none" stroke="#ebe9e9" stroke-width="15" cx="122.588" cy="139.381" rx="50.31" ry="50.31"> </ellipse>
                        <ellipse class="cercle" stroke-dasharray="335" stroke-dashoffset="335" fill="white" stroke-width="9px" stroke="url(#gradient-3)" data-percentage="50" cx="122.588" cy="139.381" rx="53.31" ry="53.31" /> <span class="nombre_pourcentage"> </span><span class="tool_tip">PHP orienté objet, Symfony (remise à niveau nécessaire), Angular (remise à niveau nécessaire), GIT, API REST, API SOAP </span> </svg> <span class="label_cercle">BACK-END</span> </div>
                    <div class="cercle_div">
                        <svg height="150" width="200" style="height:150; width:200; display:block; margin-top:15px;" xmlns="http://www.w3.org/2000/svg" viewbox="20 45 200 200">
                        <ellipse fill="none" stroke="#ebe9e9" stroke-width="15" cx="122.588" cy="139.381" rx="50.31" ry="50.31"> </ellipse>
                        <ellipse class="cercle" stroke-dasharray="335" stroke-dashoffset="335" fill="white" stroke-width="9px" stroke="url(#gradient-3)" data-percentage="60" cx="122.588" cy="139.381" rx="53.31" ry="53.31" /> <span class="nombre_pourcentage"> </span> </svg> <span class="label_cercle">SGBD</span><span class="tool_tip">Requêtes d'agrégation avec Mongo DB et requêtes avancées en MYSQL pour les extractions de données. Connaissances également de REDIS</span> </div>
                    <div class="cercle_div">
                        <svg height="150" width="200" style="height:150; width:200; display:block; margin-top:15px;" xmlns="http://www.w3.org/2000/svg" viewbox="20 45 200 200">
                        <ellipse fill="none" stroke="#ebe9e9" stroke-width="15" cx="122.588" cy="139.381" rx="50.31" ry="50.31"> </ellipse>
                        <ellipse class="cercle" stroke-dasharray="335" stroke-dashoffset="335" fill="white" stroke-width="9px" stroke="url(#gradient-3)" data-percentage="60" cx="122.588" cy="139.381" rx="53.31" ry="53.31" /> <span class="nombre_pourcentage"> </span> </svg> <span class="label_cercle">PRE ET POST DEV</span><span class="tool_tip">Maquettage graphique (suite Adobe),  conception de bases de données (Power AMC, Jmerise) et de diagrammes UML. Maitrise du référencement SEO.</span> </div>
                    <div class="cercle_div">
                        <svg height="150" width="200" style="height:150; width:200; display:block; margin-top:15px;" xmlns="http://www.w3.org/2000/svg" viewbox="20 45 200 200">
                        <ellipse fill="none" stroke="#ebe9e9" stroke-width="15" cx="122.588" cy="139.381" rx="50.31" ry="50.31"> </ellipse>
                        <ellipse class="cercle" stroke-dasharray="335" stroke-dashoffset="335" fill="white" stroke-width="9px" stroke="url(#gradient-3)" data-percentage="40" cx="122.588" cy="139.381" rx="53.31" ry="53.31" /> <span class="nombre_pourcentage"> </span> </svg> <span class="label_cercle">Applications mobiles</span><span class="tool_tip">Ionic 3, Cordova et les bases d'Android Studio. <br>Remise à niveau nécessaire</span> </div>
                    <div class="cercle_div">
                        <svg height="150" width="200" style="height:150; width:200; display:block; margin-top:15px;" xmlns="http://www.w3.org/2000/svg" viewbox="20 45 200 200">
                        <ellipse fill="none" stroke="#ebe9e9" stroke-width="15" cx="122.588" cy="139.381" rx="50.31" ry="50.31"> </ellipse>
                        <ellipse class="cercle" stroke-dasharray="335" stroke-dashoffset="335" fill="white" stroke-width="9px" stroke="url(#gradient-3)" data-percentage="40" cx="122.588" cy="139.381" rx="53.31" ry="53.31" /> <span class="nombre_pourcentage"></span> </svg> <span class="label_cercle">LINUX</span><span class="tool_tip">Utilisation des commandes GREP, SED, JOIN pour les manipulations de données dans les fichiers.</span> </div>
                </div>
                <div id="titre_info">
                    <div id="titre_competences"> COMPETENCES </div>
                    <div id="info_competence">
                        <p> Passer la souris sur l'un des cercles à gauche pour avoir plus de détails </p>
                    </div>
                </div>
            </section>
            <div id="hr2"></div>
            <section class="formations_box_droite ">
                <div id="formation_left_part">
                    <div id="titre_formations">FORMATIONS</div>
                    <div id="info_formations">
                        <p> Passer la souris sur une formation pour avoir plus de détails </p>
                    </div>
                </div>
                <div id="formation_right_part">
                    <div id="dates">
                        <div class="year">2016</div>
                        <div class="year">2012</div>
                        <div class="year">2002</div>
                        <div class="year">2001</div>
                    </div>
                    <div id="noms_formations">
                        <div>Titre développeur logiciel PHP<span class="tool_tip_formation">Formation de niveau III (BAC +2) incluant  entre autres: maquettage, modélisation, conception de base de données et développement sur ordinateur et mobile.</span></div>
                        <div>Titre d'assistant import-export bilingue anglais<span class="tool_tip_formation">Formation de niveau III (bac+2) sur les métiers du commerce international avec un gros module d'anglais.</span></div>
                        <div>DEUG STPI (science et techniques pour l'ingénieur génie des systèmes (niveau)<span class="tool_tip_formation">Maths physiques et informatique</span></div>
                        <div>Bac scientifique<span class="tool_tip_formation">Spécialité Mathématiques</span></div>
                    </div>
                </div>
            </section>
            <div class="hr1"></div>
            <section class="parcours_box_gauche">
                <div id="titre_parcours">PARCOURS</div>
                <ul id="liste_parcours">
                    <li>Développeur full-stack chez Orchestra <span class="duree_job"><b>Nombre 2017 à aujourd'hui</b></span></li>
                    <li>Développeur full-stack chez Azko <span class="duree_job">3 MOIS</span></li>
                    <li>Développeur web full stack chez CIF Expertise <span class="duree_job">3 MOIS</span></li>
                    <li>Administrateur de comptes utilisateurs chez Arkadin <span class="duree_job"><b>3 ANS</b></span></li>
                    <li>Chargé d'affaires chez SGS <span class="duree_job"><b>2 ANS</b></span></li>
                    <li>Gestionnaire comptable dans l'armée de l'air<span class="duree_job"> <b>5 ANS</b></span></li>
                </ul>
            </section>
            <section class="contact_box_droite">
                <div id="titre_contact">CONTACT</div>
                <div id="coordonnees">
                    <div id="phone"> <img src="img/Mobile-Phone-icon.png" alt="phone" />
                        <P>+33 (0)6 52 91 15 00</P>
                    </div>
                    <div id="mail"> <img src="img/email.png" alt="mail" />
                        <p> romain.itofo@gmail.com</p>
                    </div>
                </div>
            </section>
            <section id="p1">
                <div class="source">
                    <a href="https://github.com/romrad34/agenda">S<br>O<br>U<br>R<br>C<br>E<br>S</a>
                </div>
                <a href="http://www.heyoup.fr/projets/agenda">
                    <p>PROJET AGENDA</p>
                    <p>Un agenda réalisé en full javascript JQUERY</p>
                </a>
            </section>
            <section id="p2">
                <div class="source">
                    <a href="https://github.com/romrad34/db_manager">S<br>O<br>U<br>R<br>C<br>E<br>S</a>
                </div>
                <a href="http://www.heyoup.fr/projets/db_manager/">
                    <p>PROJET PHPMYADMIN PERSONNALISE</p>
                    <p>Fonctions basiques permettant de gérer sa base de données</p>
                </a>
            </section>
            <section id="p3">
                <div class="source">
                    <a href="https://github.com/romrad34/pizza">S<br>O<br>U<br>R<br>C<br>E<br>S</a>
                </div>
                <a href="http://zeneatpizza.fr">
                    <p>SITE VITRINE SNACK PIZZAS</p>
                    <p>Ce site a été développé avec pour seul framework JQUERY. <br>Il y a une partie back-office pour la gestion de contenu</p>
                </a>
            </section>
            <section id="p4">
                <div class="source">
                    <a href="https://github.com/romrad34/drh">S<br>O<br>U<br>R<br>C<br>E<br>S</a>
                </div>
                <a href="http://heyoup.fr/projets/mvc/">
                    <p>PROJET DRH</p>.
                    <p>
                        J'ai concu mon propre framework en respectant l'architecture MVC en PHP orienté objet. Pour se connecter utilisateur:<b style="text-decoration:underline; color:rgb(61, 48, 28);">demo</b>, mot de passe <b style="text-decoration:underline; color:rgb(61, 48, 28);">demo</b>. A noter que le projet est en cours de réalisation. la gestion des absences n'est pas faite. Pour le reste tout fonctionne.</p>
                </a>
            </section>
            <section id="p5">
                <div class="source">
                    <a href="#p8">N<br>O<br>N<br><br>D<br>I<br>S<br>P<br>O</a>
                </div>
                <a href="https://monessentieldoucheure.fr">
                    <p>Mon Essentiel Douc'heure</p>
                    <p>
                        Site réalisé en php pour l'activité d'esthéticienne de mon amie avec une partie back office également pour la gestion du contenu.
                        <!-- login <b style="text-decoration:underline; color:rgb(122, 213, 164);"> demo</b> mdp <b style="text-decoration:underline; color:rgb(122, 213, 164);">Demo2017</b> -->
                    </p>
                </a>
            </section>
            <section id="p8">
                <div class="source">
                    <a href="#p8">N<br>O<br>N<br><br>D<br>I<br>S<br>P<br>O</a>
                </div>
                <a href="http://heyoup.fr/projets/api/apidoc.pdf">
                    <p>CREATION DE WEB SERVICES</p>
                    <p>API rest que j'ai développée, vous pouvez utiliser des webs services basiques pour générer, modifier ou supprimer des annonces.

                    </p>
                </a>
            </section>
            <footer>
                <div>Compatible avec</div><img width="30%" src="img/a3916afe-a5a6-4419-a6fb-6089752accda_display.png" alt="browsers" />
                <div id="footer_info">
                    <div id="left_footer">Derniere MAJ: Septembre 2019</div>
                    <div id="right_footer">Copyright @Romain ITOFO</div>
                </div>
            </footer>
        </div>
    </body>

</html>
