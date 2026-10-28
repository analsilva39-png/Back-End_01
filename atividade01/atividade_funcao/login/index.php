<form action="login.php" method="post">

    <?php 
        $msg= $_GET ["msg"] ?? "";
        if ($msg === "erro") {
            echo 
        }
        
    login <br>
    <input type="text" name="usuario"> <br>
    senha <br>
    <input type="password" name="senha"> <br><br>
    <input type="submit" value="Entrar">

</form>