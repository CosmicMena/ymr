<?php
    $query = "SELECT * FROM messages";
    $result = mysqli_query($conn, $query);
?>

<table class="tabela">
    <thead>
        <tr>
            <th>Usuário</th>
            <th>Email</th>
            <th>Data</th>
            <th>Mensagem</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>
                        
                        <td>
                            <div class="img-perfil">
                                <img src="images/user.png">
                                <p>'. $row['username'] . '</p>
                            </div>
                        </td>
                        <td><p>'. $row['email'] . '</p></td>
                        <td><p>'. date('d-m-Y', strtotime($row['data_message'])) . '</p></td>
                        <td class="message-td"><p>'. $row['mensagem'] . '</p></td>';
                        if ($row['status'] == 0) {
                            echo '<td><a href="mailto: '.$row['email'].'"><span class="status pending">Pendente</span></a></td>';
                        } else {
                            echo '<td><span class="status completed">Respondido</span></td>';
                        }
                    echo '</tr>';
                }
            }
        ?>
    </tbody>
</table>
