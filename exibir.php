<?php
include 'conexao.php';

 $q=mysqli_query($con, "SELECT * FROM tblusuario"); 
        ?>
        <center>
            <table border=1>
                <tr><td>Código</td><td>Nome</td><td>Telefone</td><td>Email</td><td>Senha</td></tr>
                <?php
                while ($row=mysqli_fetch_array($q)){		
                    echo("<tr><td>$row[codigo]</td><td>$row[nome]</td><td>$row[telefone]</td><td>$row[email]</td><td>$row[senha]</td></tr>"); 
                }
                ?>
            </table>
        </center>