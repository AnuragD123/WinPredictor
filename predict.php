<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $bteam= $_POST['batting-team'];
        $bowlteam= $_POST['bowling-team'];
        $city= $_POST['city'];
        $target= $_POST['target'];
        $score= $_POST['score'];
        $oversCompleted= $_POST['overs-completed'];
        $wicketsfallen= $_POST['wickets-out'];
        
        // $cmd ="python pythonFile.py ".$bteam." ".$bowlteam." ".$city." ".$target." ".$score." ".$oversCompleted." ".$wicketsfallen;
        $cmd = "python pythonFile.py $bteam $bowlteam $city $target $score $oversCompleted $wicketsfallen"; 
        $command = escapeshellcmd($cmd);

        $output = shell_exec($command);

    // echo $bteam." ".$bowlteam." ".$city." ".$target." ".$score." ".$oversCompleted." ";
        // echo $output;
        session_start();
        $_SESSION['output'] = $output;
        header("location:index.php");

    }
?>