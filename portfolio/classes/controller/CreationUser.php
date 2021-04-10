<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1  shrink-to-fit=no" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/all.min.css" />
    <link rel="stylesheet" href="../../css/styles.css" />
    <title>HTML</title>
</head>

<body>

  <?php
   
 
   require_once "../view/ViewUser.php" ;
   require_once "../model/ModelUser.php";
    

    if (isset($_POST['ajout'])) {
        

        ModelUser::ajoutUser($_POST['nom'], $_POST['prenom'],$_POST['mail'], $_POST['tel'], $_POST['adresse'], $_POST['photo'], $_POST['description']);

    ?>
        <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
        </div>
    <?php
    } else {
        ViewUser::ajoutUser();
    }

    ?>



 


    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
</body>

</html>