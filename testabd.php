<?php
        $idaluno = 2;
        $conn = new PDO('mysql:host=localhost;dbname=aluno','root', ''); 
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare('SELECT * FROM aluno WHERE idaluno = :idaluno');
        $stmt-> execute(array(':idaluno' => $idaluno));

        while($row = $stmt->fetch()) {  
            print_r($row);
        }

        
?>