<form method="POST" action="../controllers/crear_tarea.php">
    <label for="titulo">Título de la tarea:</label>
    <input type="text" id="titulo" name="titulo" required><br>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required></textarea><br>

    <label for="fecha_limite">Fecha Limite:</label>
    <input type="date" id="fecha_limite" name="fecha_limite" required><br>

    <label for="id_tecnico">Asignar Técnico:</label>
    <select id="id_tecnico" name="id_tecnico" required>
        <option value="1">Técnico 1</option>
        <option value="2">Técnico 2</option>
    </select><br>

    <label for="comentarios">Comentarios:</label>
    <textarea id="comentarios" name="comentarios"></textarea><br>

    <button type="submit">Crear Tarea</button>
</form>