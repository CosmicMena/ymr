<?php
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);


if ($result) {
    echo '<table class="tabela">';
    echo '<thead>
            <tr>
                <th>Usuário</th>
                <th>Id User</th>
                <th>E-mail</th>
                <th>Criação da conta</th>
                <th>Último acesso</th>
                <th>Encomendas Confirmadas</th>
            </tr>
          </thead>';
    echo '<tbody>';


    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>
                <div class="img-perfil">
                    <img src="images/user.png">
                    <p>' . $row['username'] . '</p>';

                    $rule = $row['id_rule'];
                    if ($rule == 2) {
                       echo '<div class="rule"></div>'; 
                    } 

                echo '</div>
              </td>';
        echo '<td>' . $row['id_user'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . date('d-m-Y', strtotime($row['data_criacao'])) . '</td>';
        echo '<td>' . date('d-m-Y', strtotime($row['acesso'])) . '</td>';
        echo '<td>' . $row['encomendas'] . ' - (' . $row['valor_encomendas'] . ' kz)</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'Erro na consulta: ' . mysqli_error($conn);
}
mysqli_close($conn);
?>
