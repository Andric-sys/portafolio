<!-- index.html -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portafolio de Andric</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <h1>Hola, soy Andric 👨‍💻</h1>
    <p>Desarrollador Web | Diseñador | Técnico</p>
  </header>

  <section id="sobre-mi">
    <h2>Sobre mí</h2>
    <p>Soy un apasionado de la tecnología, diseño y sistemas web. Combino creatividad con funcionalidad para lograr resultados con impacto.</p>
  </section>

  <section id="proyectos">
    <h2>Proyectos</h2>
    <ul>
      <li><strong>Sistema de Tickets</strong> – Gestión de soporte técnico</li>
      <li><strong>Diseño de Invitaciones</strong> – Eventos sociales con código QR</li>
      <li><strong>Streaming Setup</strong> – Producción y edición de videos de Warzone</li>
    </ul>
  </section>

  <section id="contacto">
    <h2>Contacto</h2>
    <form id="contactForm">
      <input type="text" id="nombre" placeholder="Tu nombre" required />
      <input type="email" id="correo" placeholder="Tu correo" required />
      <textarea id="mensaje" placeholder="Tu mensaje" required></textarea>
      <button type="submit">Enviar</button>
    </form>
    <p id="respuesta"></p>
  </section>

  <footer>
    <p>© 2025 Andric. Todos los derechos reservados.</p>
  </footer>

  <script>
    // Simulación de envío (sin PHP)
    document.getElementById("contactForm").addEventListener("submit", function(e) {
      e.preventDefault();
      document.getElementById("respuesta").textContent = "Gracias por tu mensaje, te contactaré pronto.";
      this.reset();
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js/dist/umd/supabase.min.js"></script>
<script>
  const supabase = supabase.createClient(
    'https://euwfnkpjxcrbhlgqhfpk.supabase.co',
    'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImV1d2Zua3BqeGNyYmhsZ3FoZnBrIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NDcyMzQ3NjQsImV4cCI6MjA2MjgxMDc2NH0.fT0Q1iLQbLYDTL_JdlEE9sDYBwgdaroUO_DxqYC-Ipo'
  );
</script>
<script>
  const form = document.getElementById("contactForm");
  const respuesta = document.getElementById("respuesta");

  form.addEventListener("submit", async function (e) {
    e.preventDefault();

    const nombre = document.getElementById("nombre").value;
    const correo = document.getElementById("correo").value;
    const mensaje = document.getElementById("mensaje").value;

    const { data, error } = await supabase
      .from('mensajes_contacto')
      .insert([{ nombre, correo, mensaje }]);

    if (error) {
      respuesta.textContent = "Error al enviar mensaje 😓";
      console.error(error);
    } else {
      respuesta.textContent = "¡Mensaje enviado con éxito! 🎉";
      form.reset();
    }
  });
</script>


</body>
</html>
