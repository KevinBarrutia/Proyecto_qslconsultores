<section id="nosotros">
    <h2>Sobre Nosotros</h2>
    <p>Bienvenido a nuestra página informativa. Aquí puedes encontrar toda la información que necesitas.</p>
</section>

<section id="contacto">
    <h2>Contáctanos</h2>
    <form action="../../app/helpers/send_email.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo</label>
        <input type="email" id="email" name="email" required>

        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</section>
