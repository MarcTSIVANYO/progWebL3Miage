<?php
    if($_GET["task"]){
      echo "<script type='text/javascript'>
                       alert('test');
                    </script>"; 
    }

    

    if ($_POST) {
     echo "<script type='text/javascript'>
                        alert('sdsdssds'); 
                    </script>";      
        $insertion = $bdd->prepare('INSERT INTO coc_support SET 
                  idexp=:idexp,
                  iddest=:iddest,
                  typeexp=:typeexp,
                  messages=:messages,
                  typedesti=typedesti');
        $insertion->execute(array(
            'idexp' => $idexp, 
            'iddest' => $_POST["iddest"],
            'typeexp' => $_POST["typeexp"],
            'typedesti' => $_POST["typedesti"],
            'message' => $_POST["messages"]
        ));

    }

 ?>