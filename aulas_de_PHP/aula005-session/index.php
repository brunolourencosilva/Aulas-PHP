<?php
//  Inicia a sessão (sempre deve estar no topo da pagina antes de qualquer TMHL)
session_start();

// Verifica se o nome ja foi enviado pelo formulario
if (isset($_POST['nome'])){
    // Armazenar o nome enviado na sessão
    $_SESSION['nome'] = $_POST['nome'];
}
?>

<!-- Formulario simples para o usuario digitar o nome-->
 <form method="POST">
    <label>Digitar seu nome:</label>
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>

<?php
// Verificar se ja existe um nome armazenado na sessão
if (isset($_SESSION['nome'])){
    // Exibe uma mensagem com o nome armazenado
    echo "<p>Ola, " . $_SESSION["nome"] . "! Seja bem-vindo de volta.</p>";
}
?>