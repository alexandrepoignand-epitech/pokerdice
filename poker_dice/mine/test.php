<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="scipt" href="script.js">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
    <?php
    if (isset($_POST['de1']))
        echo  $value1 . $value2 . $value3 . $value4 . $value5 . $value6;
    ?>
    <form action="" method="post">
        <button id="submit" type="submit" type="button" name="roll" class="btn btn-primary">Roll!</button>
        <?php
        $de2 = rand(1, 6);
        switch ($de2):
            case 1: ?>
                    <label class="fancy-checkbox-label">
                        <input type="checkbox" name="de1" class="checkbox">

                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                            <circle cx="8" cy="8" r="1.5" />
                        </svg>
                    </label>
                <?php $value1 = 1; ?>
                <?php break; ?>
            <?php
            case 2: ?>
                <label class="fancy-checkbox-label">
                    <input type="checkbox" name="de1" class="checkbox">

                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                        <circle cx="4" cy="4" r="1.5" />
                        <circle cx="12" cy="12" r="1.5" />
                    </svg>
                </label>

                <?php $value2 = 2; ?>
                <?php break; ?>
            <?php
            case 3: ?>
                <label class="fancy-checkbox-label">
                    <input type="checkbox" name="de1" class="checkbox">

                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                        <circle cx="4" cy="4" r="1.5" />
                        <circle cx="12" cy="12" r="1.5" />
                        <circle cx="8" cy="8" r="1.5" />
                    </svg>
                </label>

                <?php $value3 = 3; ?>
                <?php break; ?>
            <?php
            case 4: ?>
                <label class="fancy-checkbox-label">
                    <input type="checkbox" name="de1" class="checkbox">

                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                        <circle cx="4" cy="4" r="1.5" />
                        <circle cx="12" cy="4" r="1.5" />
                        <circle cx="12" cy="12" r="1.5" />
                        <circle cx="4" cy="12" r="1.5" />
                    </svg>
                </label>

                <?php $value4 = 4; ?>
                <?php break; ?>
            <?php
            case 5: ?>
                <label class="fancy-checkbox-label">
                    <input type="checkbox" name="de1" class="checkbox">

                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                        <circle cx="4" cy="4" r="1.5" />
                        <circle cx="12" cy="4" r="1.5" />
                        <circle cx="12" cy="12" r="1.5" />
                        <circle cx="4" cy="12" r="1.5" />
                        <circle cx="8" cy="8" r="1.5" />
                    </svg>
                </label>

                <?php $value5 = 5; ?>
                <?php break; ?>
            <?php
            case 6: ?>
                <label class="fancy-checkbox-label">
                    <input type="checkbox" name="de1" class="checkbox">

                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                        <circle cx="4" cy="4" r="1.5" />
                        <circle cx="12" cy="4" r="1.5" />
                        <circle cx="12" cy="12" r="1.5" />
                        <circle cx="12" cy="8" r="1.5" />
                        <circle cx="4" cy="12" r="1.5" />
                        <circle cx="4" cy="8" r="1.5" />
                    </svg>
                </label>

                <?php $value6 = 6; ?>
                <?php break; ?>
        <?php endswitch; ?>
        <?php
        $value = array($value1, $value2, $value3, $value4, $value5, $value6);
        var_dump($value);
        if (isset($_POST['de1']))
            echo $value1;

        ?>
        </form>


<script>
        function getRandomInt(max) {
            return Math.floor(Math.random() * Math.floor(max));
        }
        console.log(getRandomInt(5));

        function lancerde() {
            switch (getRandomInt) {
                case 0:
                    console.log('le dé afficherais un 1');
                    break;
                case 1:
                    console.log('le dé afficherais un 2');
                case 2:
                    console.log('le dé afficherais un 3');
                    break;
                case 3:
                    console.log('le dé afficherais un 4');
                    break;
                case 4:
                    console.log('le dé afficherais un 5');
                    break;
                case 5:
                    console.log('le dé afficherais un 6');
                    break;
            }
        }
        getRandomInt(5)
        lancerde()
    </script>
    <script>
        document.getElementById("demo").innerHTML = "My First JavaScript";
    </script>
  

    </body>


<!--premire lancer de dé melanger les dé vide le tableau sauf si c'est cliqué -->