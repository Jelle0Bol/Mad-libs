<?php
$geenPet = $persoon = $land = $saai = $speelgoed = $slaOver = $Geld = $hobby =  "";
$formDisplay = "grid";
$answerDisplay = "none";
if ( $_SERVER[ 'REQUEST_METHOD' ] == "POST" ) {
    if ( !empty( $_POST[ 'geenPet' ] ) ) {
        $geenPet = testInput( $_POST[ 'geenPet' ] );
    }
    if ( !empty( $_POST[ 'persoon' ] ) ) {
        $persoon = testInput( $_POST[ 'persoon' ] );
    }
    if ( !empty( $_POST[ 'land' ] ) ) {
        $land = testInput( $_POST[ 'land' ] );
    }
    if ( !empty( $_POST[ 'saai' ] ) ) {
        $saai = testInput( $_POST[ 'saai' ] );
    }
    if ( !empty( $_POST[ 'speelgoed' ] ) ) {
        $speelgoed = testInput( $_POST[ 'speelgoed' ] );
    }
    if ( !empty( $_POST[ 'slaOver' ] ) ) {
        $slaOver = testInput( $_POST[ 'slaOver' ] );
    }
    if ( !empty( $_POST[ 'Geld' ] ) ) {
        $Geld = testInput( $_POST[ 'Geld' ] );
    }
    if ( !empty( $_POST[ 'hobby' ] ) ) {
        $hobby = testInput( $_POST[ 'hobby' ] );
    }
    $formDisplay = "none";
    $answerDisplay = "block";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>MadLibs - Paniek</title>
</head>
<body>
<div class="container">
<img src="logo.png" alt="logo">
        <div class="container-content">
            <header>
                <nav>
                    <a href="panic.php">Er heerst paniek...</a>
                    <a href="ignorance.php">Onkunde</a>
                </nav>
            </header>
            
            <main>
                <h1>Er heerst paniek...</h1>
                <form style="display: <?php echo $formDisplay; ?>;" class="form" action="<?php echo htmlspecialchars( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
                    <label for="geenPet">Welk dier zou je nooit als huisdier willen hebben?</label>
                    <input type="text" name="geenPet" id="geenPet">
                    <label for="persoon">Wie is de belangrijkste persoon in je leven?</label>
                    <input type="text" name="persoon" id="persoon">
                    <label for="land">In welk land zou je graag willen wonen?</label>
                    <input type="text" name="land" id="land">
                    <label for="saai">Wat doe je als je je verveelt?</label>
                    <input type="text" name="saai" id="saai">
                    <label for="speelgoed">Met welk speelgoed speelde je als kind het meest?</label>
                    <input type="text" name="speelgoed" id="speelgoed">
                    <label for="slaOver">Bij welke docent spijbel je het liefst?</label>
                    <input type="text" name="slaOver" id="slaOver">
                    <label for="Geld">Als je 100.000 euro had, wat zou je dan kopen?</label>
                    <input type="text" name="Geld" id="Geld">
                    <label for="hobby">Wat is je favoriete bezigheid?</label>
                    <input type="text" name="hobby" id="hobby">
                    <br>
                    <input type="submit" name="submit" id="submit" value="Verzenden">
                </form>
                <p style="display: <?php echo $answerDisplay; ?>;"></p>
            </main>
            <footer>
                <p>&copy; Jelle Bol 2023</p>
            </footer>
        </div>
    </div>
</body>
</html>