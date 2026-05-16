header.php

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB - Laboratorio Territorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="app-bar">
        <nav class="nav-container">
            <!-- Logo LAB vinculado a Inicio -->
            <a href="index.php" class="logo">LAB</a>

            <ul class="nav-links">
                <!-- 1. Pestaña Home con sub-puntos seleccionados [1] -->
                <li class="dropdown">
                    <a href="index.php">Home</a>
                    <ul class="dropdown-content">
                        <li><a href="#introduccion">Introducción</a></li>
                        <li><a href="#accesos">Accesos directos</a></li>
                    </ul>
                </li>

                <!-- 2. Sobre el proyecto [1] -->
                <li class="dropdown">
                    <a href="#sobre">Sobre el proyecto</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Contexto y origen</a></li>
                        <li><a href="#">Problema abordado</a></li>
                        <li><a href="#">Objetivos</a></li>
                        <li><a href="#">Alcance geográfico</a></li>
                        <li><a href="#">Enfoque conceptual</a></li>
                    </ul>
                </li>

                <!-- 3. Marco metodológico [1] -->
                <li class="dropdown">
                    <a href="#metodologia">Marco metodológico</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Explicación metodología</a></li>
                        <li><a href="#">Fases del proceso</a></li>
                        <li><a href="#">Enfoques teóricos</a></li>
                        <li><a href="#">Instrumentos</a></li>
                    </ul>
                </li>

                <!-- 4. Casos de estudio [1] -->
                <li class="dropdown">
                    <a href="#casos">Casos de estudio</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Perú</a></li>
                        <li><a href="#">Chile</a></li>
                        <li><a href="#">México</a></li>
                    </ul>
                </li>

                <!-- 5. Proyectos de estudiantes [1] -->
                <li class="dropdown">
                    <a href="#proyectos">Proyectos</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Propuestas arquitectónicas</a></li>
                        <li><a href="#">Registro visual</a></li>
                        <li><a href="#">Concepto de diseño</a></li>
                        <li><a href="#">Relación con el paisaje</a></li>
                    </ul>
                </li>

                <!-- 6. Experiencia pedagógica [1] -->
                <li class="dropdown">
                    <a href="#experiencia">Experiencia</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Aplicación en aula</a></li>
                        <li><a href="#">Rol del estudiante</a></li>
                        <li><a href="#">Aprendizajes</a></li>
                        <li><a href="#">Testimonios</a></li>
                    </ul>
                </li>

                <!-- 7. Resultados e impacto [2] -->
                <li class="dropdown">
                    <a href="#resultados">Resultados</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Principales hallazgos</a></li>
                        <li><a href="#">Aportes metodológicos</a></li>
                        <li><a href="#">Impacto territorial</a></li>
                    </ul>
                </li>

                <!-- 8. Publicaciones y productos [2] -->
                <li class="dropdown">
                    <a href="#publicaciones">Publicaciones</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Artículos académicos</a></li>
                        <li><a href="#">Ponencias</a></li>
                        <li><a href="#">Material descargable (PDF)</a></li>
                    </ul>
                </li>

                <!-- 9. Recursos / repositorio [2] -->
                <li class="dropdown">
                    <a href="#recursos">Recursos</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Fichas metodológicas</a></li>
                        <li><a href="#">Mapas</a></li>
                        <li><a href="#">Material audiovisual</a></li>
                    </ul>
                </li>

                <!-- 10. Equipo [2] -->
                <li class="dropdown">
                    <a href="#equipo">Equipo</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Investigadores</a></li>
                        <li><a href="#">Instituciones</a></li>
                    </ul>
                </li>

                <!-- 11. Contacto [2] -->
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

index.php

<?php include 'header.php'; ?>

<main>
    <!-- Hero Section con diseño dividido (Imagen al costado/arriba) [3] -->
    <section class="hero-split">
        <div class="hero-visual">
            <!-- Imagen bg.jpeg protagónica del recorrido territorial [5] -->
            <img src="img/bg.jpeg" alt="Inmersión en el paisaje desértico" class="hero-img">
        </div>

        <div class="hero-content-text">
            <!-- Título y Frase Síntesis de LAB Códigos [3] -->
            <h1 class="project-title">Laboratorio Territorial para la Innovación</h1>
            <p class="tagline">"Innovación pedagógica desde la sensibilidad de los paisajes del desierto"</p>

            <!-- Introducción actualizada de LAB Códigos [3] -->
            <div class="intro-text" id="introduccion">
                <p>Este laboratorio investiga entornos experimentales de aprendizaje en facultades de arquitectura de <strong>Perú, Chile y México</strong>. A través del reconocimiento del territorio árido, buscamos desarrollar competencias disciplinares que conecten la enseñanza con la realidad de paisajes vulnerables.</p>
            </div>

            <!-- Accesos directos [1] -->
            <div class="cta-container" id="accesos">
                <a href="#metodologia" class="btn-primary">Metodología</a>
                <a href="#casos" class="btn-primary">Casos de Estudio</a>
                <a href="#resultados" class="btn-primary">Resultados</a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

footer.php

<footer class="main-footer" id="logos">
        <div class="footer-grid">
            <div class="footer-col">
                <h4>Laboratorio Territorial</h4>
                <p>Innovación en la enseñanza-aprendizaje de la arquitectura en paisajes del desierto.</p>
            </div>
            <div class="footer-col">
                <h4>Red Académica</h4>
                <div class="logos-grid">
                    <span>UNJBG (Perú)</span> |
                    <span>UNALM (Perú)</span> |
                    <span>Tec de Monterrey (México)</span>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> LAB - Investigación Territorial Aplicada</p>
        </div>
    </footer>
</body>
</html>

style.css

:root {
    --bg-color: #ffffff;
    --text-main: #1A1A1A;
    --accent-earth: #A0522D; /* Acento de tierra de las fuentes [4] */
    --accent-soft: #f4f4f4;
}

body {
    margin: 0;
    font-family: 'Helvetica Neue', Arial, sans-serif;
    color: var(--text-main);
    background-color: var(--bg-color);
}

/* Navbar Responsivo con muchos enlaces */
.app-bar {
    padding: 15px 3%;
    background: #fff;
    border-bottom: 1px solid #eee;
    display: flex;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo {
    font-weight: bold;
    font-size: 1.3rem;
    text-decoration: none;
    color: #000;
    margin-right: 20px;
}

.nav-links {
    display: flex;
    list-style: none;
    gap: 12px;
    margin-left: auto;
    font-size: 0.65rem; /* Tamaño reducido para acomodar todos los links */
    text-transform: uppercase;
}

.nav-links a {
    text-decoration: none;
    color: #666;
    transition: 0.3s;
}

.nav-links a:hover { color: #000; }

/* Menús Desplegables */
.nav-links li { position: relative; }

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 180px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    z-index: 1;
    top: 100%;
    border-top: 2px solid var(--accent-earth);
}

.dropdown-content li a {
    padding: 10px 15px;
    text-transform: none;
    display: block;
    font-size: 0.75rem;
}

.dropdown:hover .dropdown-content { display: block; }

/* Hero Section Split [3, 4] */
.hero-split {
    display: flex;
    flex-direction: column;
    padding: 40px 5%;
    gap: 30px;
}

.hero-img {
    width: 100%;
    height: auto;
    border-radius: 2px;
}

.hero-content-text { max-width: 600px; }

.project-title {
    font-size: 2.2rem;
    border-left: 5px solid var(--accent-earth);
    padding-left: 20px;
    margin-bottom: 20px;
}

.tagline {
    font-style: italic;
    color: #555;
    margin-bottom: 25px;
}

/* Adaptación para Escritorio */
@media (min-width: 1024px) {
    .hero-split {
        flex-direction: row;
        align-items: center;
        height: 80vh;
    }
    .hero-visual, .hero-content-text { flex: 1; }
    .nav-links { font-size: 0.7rem; gap: 15px; }
}

.main-footer {
    background: #1a1a1a;
    color: #fff;
    padding: 40px 5%;
    margin-top: 50px;
}

.footer-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}