<?php
    include "conexao.php";

   
    $sql = "SELECT * FROM conteudos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "
            <table>
                <tr>
                    <td class='p-2 font-bold text-center'>Id</td>
                    <td class='p-2 font-bold text-center'>Nome</td>
                    <td class='p-2 font-bold text-center'>Arquivo</td>
                    <td class='p-2 font-bold text-center'>Funções</td>
                </tr>
        ";
        while ($conteudo = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td class='p-2'>" . $conteudo['id'] . "</td>
                    <td class='p-2'>" . $conteudo['titulo_conteudo'] . "</td>
                    <td class='p-2'>" . $conteudo['nome_arquivo'] . "</td>
                    <td><a class='px-4 py-2 bg-blue-600 text-white rounded font-bold' href='editarConteudo.php?id=" . $conteudo['id'] . "' >Atualizar</a></td>
                    <td><a class='px-4 py-2 bg-red-600 text-white rounded font-bold' href='deletarConteudo.php?id=" . $conteudo['id'] . "'>Deletar</a></td>
                </tr>
            ";
        }

        echo "</table>";
    }
?>
