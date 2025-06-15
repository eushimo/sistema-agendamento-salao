<form method="POST">
    <label>Nome: <input type="text" name="nome" required></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Telefone: <input type="text" name="telefone" required></label><br>
    <label>Serviço:
        <select name="servico">
            <option value="Corte">Corte</option>
            <option value="Coloração">Coloração</option>
        </select>
    </label><br>
    <label>Profissional:
        <select name="profissional">
            <option value="Ana">Ana</option>
            <option value="João">João</option>
        </select>
    </label><br>
    <label>Data e Hora: <input type="datetime-local" name="data_hora" required></label><br>
    <button type="submit">Agendar</button>
</form>