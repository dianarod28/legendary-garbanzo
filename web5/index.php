  
<?php
    session_start();

    $num_visits = $_SESSION['visitCount'];
    if (isset($_GET['reset']) || !isset($num_visits)){
        $num_visits = 0;
    }
    $num_visits++;
    $_SESSION['visitCount'] = $num_visits;
?>

<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>

<?php if ($num_visits >= 5): ?>
    <h2> Wow! </h2>
    <p> You sure come to this page a lot. </p>
<?php endif; ?>

<?php if ($num_visits>=10): ?>
    <?php
    header("Location: https://localhost/legendary-garbanzo/web5/congratulations.php");
    exit();
    ?>    
<?php endif; ?>    
