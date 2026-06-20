<?php include 'header.php'; ?>

<main>
    <section class="hero-split">
        <div class="hero-visual">
            <img src="img/bg.jpeg" alt="Inmersión territorial en el paisaje" class="hero-img">
        </div>

        <div class="hero-content-text" id="introduccion">
            <h1 class="project-title">Laboratorio Territorial para la Innovación</h1>
            <p class="tagline">
                "Aprender desde el desierto para transformar el territorio: una red académica que forma agentes de
                cambio en paisajes desérticos de América Latina"
            </p>

            <div class="intro-text">
                <p>El Laboratorio Territorial es una plataforma de innovación pedagógica que articula universidades del
                    <strong>Perú, Chile y México</strong> en torno al estudio de los paisajes desérticos. A través del
                    aprendizaje situado y la experiencia directa en el territorio, promueve la comprensión crítica de
                    sus dinámicas y problemáticas.
                </p>
                <p>Este espacio busca integrar academia, comunidad y paisaje para formar agentes de cambio comprometidos
                    con el desarrollo sostenible. Asimismo, impulsa la construcción de redes académicas y la generación
                    de conocimiento aplicado desde el territorio.
                </p>
            </div>

            <div class="cta-container">
                <a href="#metodologia" class="btn-primary">Metodología</a>
                <a href="#casos" class="btn-primary">Casos de Estudio</a>
                <a href="#resultados" class="btn-primary">Resultados</a>
            </div>
        </div>
    </section>

    <section id="logos" class="institutional-section">
        <p class="institutional-label">Instituciones involucradas en la investigación:</p>
        <div class="logos-container">
            <div class="logo-item"><img src="img/logo-unjbg.png" alt="UNJBG Perú"></div>
            <div class="logo-item"><img src="img/logo-unap.png" alt="UNAP Chile"></div>
            <div class="logo-item"><img src="img/logo-uacj.svg" alt="UACJ México"></div>
        </div>
    </section>

    <section id="equipo" class="team-section">
        <h2 class="section-title">Equipo de Investigación</h2>
        <div class="team-grid">
            <div class="team-member">
                <div class="member-photo-placeholder"></div>
                <h4>Investigador Principal</h4>
                <p>Facultad de Arquitectura - Perú</p>
            </div>
            <div class="team-member">
                <div class="member-photo-placeholder"></div>
                <h4>Investigador Asociado</h4>
                <p>Facultad de Arquitectura - Chile</p>
            </div>
            <div class="team-member">
                <div class="member-photo-placeholder"></div>
                <h4>Investigador Asociado</h4>
                <p>Facultad de Arquitectura - México</p>
            </div>
        </div>
    </section>

    <section id="contacto" class="contact-section">
        <h2 class="section-title">Contacto</h2>
        <div class="contact-container">
            <div class="contact-info">
                <p><strong>Correo:</strong> contacto@labterritorial.edu</p>
                <p><strong>Ubicación:</strong> Red Académica Trilateral (PE/CH/MX)</p>
            </div>
            <form class="contact-form-mock">
                <input type="text" placeholder="Nombre">
                <input type="email" placeholder="Email">
                <textarea placeholder="Mensaje"></textarea>
                <button type="button" class="btn-primary">Enviar Mensaje</button>
            </form>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>