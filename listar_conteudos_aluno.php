<?php
    include "conexao.php";

    $sql = "SELECT * FROM conteudos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "
            <table>
                <tr>
                    <td class='p-2 font-bold text-center'>Nome</td>
                    <td class='p-2 font-bold text-center'>Arquivo</td>
                    <td class='p-2 font-bold text-center'>Funções</td>
                </tr>
        ";
        while ($conteudo = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td class='p-2'>" . htmlspecialchars($conteudo['titulo_conteudo']) . "</td>
                    <td class='p-2'>" . htmlspecialchars($conteudo['nome_arquivo']) . "</td>
                    <td>
                        <a class='px-4 py-2 bg-blue-600 text-white rounded font-bold' href='baixar_arquivo.php?id=" . $conteudo['id'] . "' download>Download</a>
                    </td>
                </tr>
            ";
        }

        echo "</table>";
    }
?>
