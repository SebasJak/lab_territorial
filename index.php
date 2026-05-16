<?php include 'header.php'; ?>

<main>
    <!-- Hero Section con diseño dividido (Imagen al costado/arriba) [3] -->
    <section class="hero-split">
        <div class="hero-visual">
            <!-- La imagen bg.jpeg ahora es un elemento directo -->
            <img src="img/bg.jpeg" alt="Inmersión territorial en el paisaje" class="hero-img">
        </div>

        <div class="hero-content-text">
            <!-- Título y Frase Síntesis de LAB Códigos [3] -->
            <h1 class="project-title">Laboratorio Territorial para la Innovación</h1>
            <p class="tagline">
                "Aprender desde el desierto para transformar el territorio: una red académica
                que forma agentes de cambio en paisajes desérticos de América Latina"
            </p>
            
            <div class="intro-text" id="introduccion">
                <p>El Laboratorio Territorial es una plataforma de innovación pedagógica que 
                articula universidades del <strong>Perú, Chile y México</strong> en torno al 
                estudio de los paisajes desérticos. A través del aprendizaje situado y la 
                experiencia directa en el territorio, promueve la comprensión crítica de sus 
                dinámicas y problemáticas.
                <br>
                Este espacio busca integrar academia, comunidad y paisaje para formar agentes
                de cambio comprometidos con el desarrollo sostenible. Asimismo, impulsa la 
                construcción de redes académicas y la generación de conocimiento aplicado desde
                el territorio.</p>
            </div>

            <!-- Accesos directos [1] -->
            <div class="cta-container" id="accesos">
                <a href="#metodologia" class="btn-primary">Metodología</a>
                <a href="#casos" class="btn-primary">Casos de Estudio</a>
                <a href="#resultados" class="btn-primary">Resultados</a>
            </div>
        </div>
    </section>

    <!-- Nueva Sección de Instituciones Involucradas -->
    <section id="logos" class="institutional-section">
        <p class="institutional-label">Instituciones involucradas en la investigación:</p>
        <div class="logos-container">
            <!-- Logos basados en las nuevas fuentes importadas -->
            <div class="logo-item"><img src="img/logo-unjbg.png" alt="UNJBG Perú"></div>
            <div class="logo-item"><img src="img/logo-unap.png" alt="UNAP Chile"></div>
            <div class="logo-item"><img src="img/logo-uacj.svg" alt="UACJ México"></div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>