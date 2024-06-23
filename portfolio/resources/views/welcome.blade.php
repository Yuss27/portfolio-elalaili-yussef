@extends('layouts.app')

@section('content')
<!-- Header -->
<header class="bg-aqua-dark text-white p-4 fixed w-full top-0 z-50" data-aos="fade-down">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Elalaili Yussef</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#home" class="text-white hover:text-aqua-light">Accueil</a></li>
                <li><a href="#about" class="text-white hover:text-aqua-light">À propos</a></li>
                <li><a href="#skills" class="text-white hover:text-aqua-light">Compétences</a></li>
                <li><a href="#projects" class="text-white hover:text-aqua-light">Projets</a></li>
                <li><a href="#contact" class="text-white hover:text-aqua-light">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Display Success Message -->
<div id="success-message" class="container mx-auto mt-16" style="display: none;" data-aos="fade-in">
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        Votre message a été envoyé avec succès !
    </div>
</div>

<!-- Home Section -->
<section id="home" class="h-screen flex items-center justify-center" data-aos="fade-in">
    <div class="text-center">
        <h2 class="text-5xl font-bold mb-4 text-aqua-dark">Transformer vos idées en réalité digitale</h2>
        <p class="text-xl mb-5"><b>Apprenti développeur web full stack</b></p>
        <p class="text-lg mb-5">Actuellement en recherche d'une alternance dans le développement web.</p>
        <img src="images/Photo 3 Yussef ELALAILI.jpeg" alt="Elalaili Yussef" class="w-30 h-60 rounded-full mx-auto mb-4">
    </div>
</section>

<!-- About Section -->
<section id="about" class="container mx-auto py-20 px-4" data-aos="fade-right">
    <h2 class="text-3xl text-aqua-dark font-bold mb-6">À propos de moi</h2>
    <p class="text-lg mb-5">Je m'appelle Yussef, j'ai 25 ans et j'habite à Lambersart</p>
    <p class="text-lg mb-4">Actuellement en 1ère année de formation en web développement à la Web@academie à Epitech Lille.</p>
    <a href="images/CV developpeur web.pdf" download class="text-aqua-dark underline">Télécharger mon CV</a>
    <p>Contactez-moi : <a href="mailto:yelalaili@gmail.com" class="text-aqua-dark underline">yelalaili@gmail.com</a></p>
</section>

<!-- Skills Section -->
<section id="skills" class="bg-aqua-light py-20" data-aos="fade-left">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6 text-center">Langages informatiques</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
            <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="zoom-in">
                <h3 class="text-2xl font-bold mb-4">HTML</h3>
                <p>Expérience dans la création de structures accessibles.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="zoom-in">
                <h3 class="text-2xl font-bold mb-4">CSS</h3>
                <p>Maîtrise de la mise en page avec Flexbox, Grid et le framework Tailwind</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="zoom-in">
                <h3 class="text-2xl font-bold mb-4">JavaScript</h3>
                <p>Développement d'interactions dynamiques avec React et Vue.js.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 pt-10">
            <div class="bg-white p-6 rounded-lg shadow-lg ml-20" data-aos="fade-up">
                <h3 class="text-2xl font-bold mb-4">PHP</h3>
                <p>Développement d'applications web robustes notamment avec les frameworks Laravel et Symfony.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg mr-20" data-aos="fade-up">
                <h3 class="text-2xl font-bold mb-4">Base de données SQL</h3>
                <p>Gestion et conception de bases de données notamment MySQL</p>
            </div>
        </div>         
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="container mx-auto py-20 px-4">
    <h2 data-aos="fade-left" class="text-3xl text-aqua-dark font-bold mb-6 animate__animated animate__fadeIn">Projets</h2>

    <div class="mt-10">
        <h3 class="text-2xl font-bold mb-4 animate__animated animate__fadeInLeft" data-aos="fade-left">My Tweet Academie</h3>
        <p data-aos="fade-left">Le but de ce projet réalisé en groupe de 4 étudiants était de créer un réseau social pour les étudiants de la promotion, qui a les mêmes
        fonctionnalités que le réseau social Twitter. Il devait y être le plus ressemblant possible en terme de fonctionnalités</p>
        <p data-aos="fade-left"><b>Outils utilisés :</b> PHP, HTML & CSS/Tailwind, JS/Ajax, base de données</p>
        <p data-aos="fade-left"><b>Durée :</b> 1 mois </p>
        <button type="button" class="btn btn-primary animate__animated animate__fadeInRight bg-aqua-darkk" data-toggle="modal" data-target="#project1Modal">
            Déroulement du projet
        </button>
    <div id="carousel1" class="carousel slide mb-10 w-4/5 mx-auto animate__animated animate__fadeIn" data-ride="carousel" data-aos="fade-left">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/tweet_academy1.png" class="w-full h-auto object-cover" alt="tweet_academy">
            </div>
            <div class="carousel-item">
                <img src="images/tweet_academy2.png" class="w-full h-auto object-cover" alt="tweet_academy">
            </div>
            <div class="carousel-item">
                <img src="images/tweet_academy3.png" class="w-full h-auto object-cover" alt="tweet_academy">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Modal for Project 1 -->
    <div class="modal fade animate__animated animate__fadeInDown" id="project1Modal" tabindex="-1" role="dialog" aria-labelledby="project1ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="project1ModalLabel">Déroulement du projet My Tweet Academie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Organisation :</b> utilisation de Trello</p>
                    <p><b>Difficultés rencontrées :</b></p>
                    <ul>
                        <li>Connexion Tailwind et back (tweet)</li>
                        <li>Tag</li>
                        <li>Recherche</li>
                        <li>Gestion du temps</li>
                    </ul>
                    <p><b>Axes d'améliorations :</b></p>
                    <ul>
                        <li>Gestion du temps</li>
                        <li>Images lors du rafraîchissement des pages</li>
                        <li>Thèmes du site (clair/sombre)</li>
                    </ul>
                    <p><b>Conclusion :</b> Projet très intéressant dans la conception comme dans le développement avec un joli résultat.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <h3 data-aos="fade-right" class="text-2xl font-bold mb-4 animate__animated animate__fadeInLeft">My Snapchat</h3>
        <p data-aos="fade-right">Le but de ce projet réalisé en groupe de 2 étudiants était de créer une application mobile qui envoie des images à nos amis pour un certain laps de temps, puis qui sont supprimées par la suite.
        Pour résumer, l'objectif était de réaliser une application avec les fonctionnalités de la célèbre application Snapchat.</p>
        <p data-aos="fade-right"><b>Outils utilisés :</b> JavaScript/React</p>
        <p data-aos="fade-right"><b>Durée :</b> 1 semaine </p>
        <button data-aos="fade-right" type="button" class="btn btn-primary animate__animated animate__fadeInRight bg-aqua-dark" data-toggle="modal" data-target="#project2Modal">
            Déroulement du projet
        </button>
    <div data-aos="fade-right" id="carousel2" class="carousel slide mb-10 w-1/4 mx-auto animate__animated animate__fadeIn" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/my_snapchat1.JPG" class="w-full h-auto object-cover" alt="my_snapchat1">
            </div>
            <div class="carousel-item">
                <img src="images/my_snapchat2.JPG" class="w-full h-auto object-cover" alt="my_snapchat1">
            </div>
            <div class="carousel-item">
                <img src="images/my_snapchat3.JPG" class="w-full h-auto object-cover" alt="my_snapchat1">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Modal for Project 2 -->
    <div class="modal fade animate__animated animate__fadeInDown" id="project2Modal" tabindex="-1" role="dialog" aria-labelledby="project2ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="project2ModalLabel">Déroulement du projet My Snapchat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Organisation :</b> utilisation de Trello</p>
                    <p><b>Difficultés rencontrées :</b></p>
                    <ul>
                        <li>Comprendre l'utilisation de l'API</li>
                        <li>Découverte totale du développement d’une application mobile</li>
                        <li>Codes différents qui doivent fonctionner pour les deux types de support</li>
                    </ul>
                    <p><b>Axes d'améliorations :</b></p>
                    <ul>
                        <li>L'envoi de snaps à plusieurs contacts en même temps</li>
                        <li>Thèmes de l'application (clair/sombre)</li>
                    </ul>
                    <p><b>Conclusion :</b> Une totale découverte du développement mobile qui nous a beaucoup plu, en particulier pour la reproduction d'une application déjà utilisée et que l'on apprécie.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <h3 data-aos="fade-left" class="text-2xl font-bold mb-4 animate__animated animate__fadeInLeft">My Spotify</h3>
        <p data-aos="fade-left">Le but de ce projet réalisé en groupe de 4 étudiants était de créer un site exploitant une API.
        Après avoir récupéré les données de l'API, nous devions les afficher sur notre site web comme par exemple
        la liste des albums, des genre, les détails d'un artiste. </p>
        <p data-aos="fade-left"><b>Outils utilisés :</b> HTML, CSS, Javascript/React, les APIs, le JSON</p>
        <p data-aos="fade-left"><b>Durée :</b> 3 jours </p>
        <button data-aos="fade-left" type="button" class="btn btn-primary animate__animated animate__fadeInRight bg-aqua-dark" data-toggle="modal" data-target="#project3Modal">
            Déroulement du projet
        </button>
    <div data-aos="fade-left" id="carousel3" class="carousel slide mb-10 w-4/5 mx-auto animate__animated animate__fadeIn" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/my_spotify1.png" class="w-full h-auto object-cover" alt="my_spotify">
            </div>
            <div class="carousel-item">
                <img src="images/my_spotify2.png" class="w-full h-auto object-cover" alt="my_spotify">
            </div>
            <div class="carousel-item">
                <img src="images/my_spotify3.png" class="w-full h-auto object-cover" alt="my_spotify">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Modal for Project 3 -->
    <div class="modal fade animate__animated animate__fadeInDown" id="project3Modal" tabindex="-1" role="dialog" aria-labelledby="project3ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="project3ModalLabel">Déroulement du projet My Spotify</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Organisation :</b> utilisation de Trello</p>
                    <p><b>Difficultés rencontrées :</b></p>
                    <ul>
                        <li>Comprendre l'utilisation de l'API</li>
                        <li>Affichage des détails d'un album</li>
                        <li>Barre de recherche</li>
                    </ul>
                    <p><b>Axes d'améliorations :</b></p>
                    <ul>
                        <li>Gestion du temps</li>
                        <li>Barre de recherche complète (recherches des artistes et albums en même temps)</li>
                    </ul>
                    <p><b>Conclusion :</b> Projet court et intense mais qui nous a beaucoup appris, une application agréable à développée.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <h3 data-aos="fade-left" class="text-2xl font-bold mb-4 animate__animated animate__fadeInLeft"><b>Compétences acquises durant ces projets</b></h3>
        <ul data-aos="fade-left" class="list-disc list-inside animate__animated animate__fadeIn">
            <li>Rédiger des spécifications techniques en analysant un CDC, afin de cadrer techniquement un projet de développement de solution web.</li>
            <li>Déployer un environnement de travail en mettant en place les outils de versionnage, de partage et de collaboration/communication nécessaires, afin de cadrer opérationnellement un projet de développement de solution web.</li>
            <li>Réaliser une maquette afin de permettre au client de valider la structure de la solution web en respectant les bonnes pratiques en termes d’ergonomie et d’accessibilité.</li>
            <li>Identifier les fonctionnalités à développer, en modélisant les divers éléments et leurs interconnexions, afin de structurer l'architecture de la solution web et de Base De Données (BDD).</li>
            <li>Rédiger une présentation pour présenter les choix techniques, les maquettes, et le schéma de la solution web en argumentant les choix faits afin de permettre au client ou au décideur de valider la proposition de solution.</li>
            <li>Rédiger le code de la solution en transcrivant les fonctionnalités du CDC, en respectant les normes d’accessibilité, d’ergonomie, de référencement, et la réglementation en vigueur afin de développer la solution web.</li>
            <li>Intégrer les différents éléments de la solution web en fonction des maquettes, en respectant les dernières normes des langages utilisés (HTML, CSS, JS, …).</li>
            <li>Implémenter la partie "front-end" d'une solution web.</li>
            <li>Implémenter la logique et la base de données assurant la persistance des données côté serveur (le "back-end").</li>
            <li>Implémenter des règles d'authentification, en respectant les bonnes pratiques en matière de sécurité, afin de sécuriser l'accès à une solution web.</li>
            <li>Implémenter un plan de tests en concevant les différents tests unitaires et d’intégration afin de vérifier que l’ensemble des fonctionnalités développées fonctionne bien séparément et à l’unisson.</li>
            <li>Déployer une application web en utilisant un serveur afin de rendre l’application accessible aux utilisateurs.</li>
            <li>Analyser la qualité de l’ergonomie et la qualité de l’accessibilité de la solution (normes, design, ergonomie, navigation, référencement, bonnes pratiques, etc.) pour identifier les axes d’amélioration.</li>
        </ul>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="container mx-auto py-20 px-4" data-aos="fade-up">
    <h2 class="text-3xl text-aqua-dark font-bold mb-6">Contact</h2>
    <form id="contact-form" class="bg-white p-6 rounded-lg shadow-lg" data-aos="zoom-in">
        @csrf
        <div class="mb-4">
            <label for="from_name" class="block text-gray-700">Nom :</label>
            <input type="text" id="from_name" name="from_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-aqua-dark" required>
        </div>
        <div class="mb-4">
            <label for="reply_to" class="block text-gray-700">Email :</label>
            <input type="email" id="reply_to" name="reply_to" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-aqua-dark" required>
        </div>
        <div class="mb-4">
            <label for="to_name" class="block text-gray-700">Sujet :</label>
            <input type="text" id="to_name" name="to_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-aqua-dark" required>
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700">Message :</label>
            <textarea id="message" name="message" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-aqua-dark" required></textarea>
        </div>
        <button type="submit" id="button" class="w-full bg-aqua-dark text-white py-2 px-4 rounded-lg hover:bg-aqua">Envoyer</button>
    </form>
</section>

<!-- Footer -->
<footer class="bg-aqua-dark text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 Elalaili Yussef. Tous droits réservés.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script src="{{ asset('js/email.js') }}" defer></script>
<script src="{{ asset('js/smooth-scroll.js') }}" defer></script>

<!-- AOS Animation -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }

    h1, h2, h3, h4, h5, h6 {
        font-family: 'Montserrat', sans-serif;
    }

    pre, code, .code-block {
        font-family: 'Courier New', Courier, monospace;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 128, 128, 0.5); /* Change this to your desired color */
        border-radius: 50%;
        width: 50px; 
        height: 50px;
    }

    .carousel-item img {
        width: 100%; 
        height: auto; 
        object-fit: cover;
    }
</style>
@endsection
