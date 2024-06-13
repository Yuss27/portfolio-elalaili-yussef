@extends('layouts.app')

@section('content')
<!-- Header -->
<header class="bg-aqua-dark text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Mon Portfolio</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#home" class="hover:text-aqua-light">Accueil</a></li>
                <li><a href="#about" class="hover:text-aqua-light">À propos</a></li>
                <li><a href="#skills" class="hover:text-aqua-light">Compétences</a></li>
                <li><a href="#contact" class="hover:text-aqua-light">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Home Section -->
<section id="home" class="h-screen bg-aqua flex items-center justify-center">
    <div class="text-center">
        <h2 class="text-4xl font-bold mb-4">Bienvenue sur mon Portfolio</h2>
        <p class="text-xl mb-4">Je suis un développeur web passionné par la création de sites web innovants.</p>
        <img src="path/to/photo.jpg" alt="Votre nom" class="w-32 h-32 rounded-full mx-auto mb-4">
        <p class="text-lg">Actuellement en recherche d'un emploi en développement web.</p>
        <p>Contactez-moi : <a href="mailto:email@example.com" class="text-aqua-dark">email@example.com</a></p>
    </div>
</section>

<!-- About Section -->
<section id="about" class="container mx-auto py-20 px-4">
    <h2 class="text-3xl font-bold mb-6">À propos de moi</h2>
    <p class="text-lg mb-4">[Votre texte de présentation personnel]</p>
    <a href="path/to/cv.pdf" class="text-aqua-dark underline">Télécharger mon CV</a>
</section>

<!-- Skills Section -->
<section id="skills" class="bg-aqua-light py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6 text-center">Compétences</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4">HTML</h3>
                <p>Expérience dans la création de structures sémantiques et accessibles.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4">CSS</h3>
                <p>Maîtrise de la mise en page avec Flexbox, Grid, et des préprocesseurs comme SASS.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4">JavaScript</h3>
                <p>Développement d'interactions dynamiques et de SPA avec React et Vue.js.</p>
            </div>
            <!-- Ajoute plus de compétences ici -->
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="container mx-auto py-20 px-4">
    <h2 class="text-3xl font-bold mb-6">Contact</h2>
    <form action="/contact" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nom :</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-aqua-dark">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email :</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-aqua-dark">
        </div>
        <div class="mb-4">
            <label for="subject" class="block text-gray-700">Sujet :</label>
            <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-aqua-dark">
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700">Message :</label>
            <textarea id="message" name="message" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-aqua-dark"></textarea>
        </div>
        <button type="submit" class="w-full bg-aqua-dark text-white py-2 px-4 rounded-lg hover:bg-aqua">Envoyer</button>
    </form>
</section>

<!-- Footer -->
<footer class="bg-aqua-dark text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2023 [Votre Nom]. Tous droits réservés.</p>
    </div>
</footer>
@endsection
