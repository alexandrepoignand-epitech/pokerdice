    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <h2 id="heading"> We're gonna roll a dice! <br><small>And you have to guess which number the dice will roll.</small></h2>
        <form action="" method="post">
            <button id="submit" type="submit" type="button" name="roll" class="btn btn-primary">Roll!</button>
            <?php
            if (isset($_POST['roll'])) :
                if (empty($keepd1)) :
                    echo "nul";
                    $de1 = rand(1, 6);
                    switch ($de1):
                        case 1: ?> <label class="fancy-checkbox-label">
                                <input type="checkbox" name="dice1" class="checkbox" value="$dice1">
                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                    <circle cx="8" cy="8" r="1.5" />
                                </svg>
                            </label>
                            <?php if (!empty($_POST["dice1"]))
                                $keepd1 = 1;
                            ?>
                            <?php break; ?>
                        <?php
                        case 2: ?>
                            <label class="fancy-checkbox-label">
                                <input type="checkbox" name="dice1" class="checkbox">

                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                    <circle cx="4" cy="4" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                </svg>
                            </label>
                            <?php if (!empty($_POST["dice1"]))
                                $keepd1 = 2;
                            ?>
                            <?php break; ?>
                        <?php
                        case 3: ?>
                            <label class="fancy-checkbox-label">
                                <input type="checkbox" name="dice3" class="checkbox">

                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                    <circle cx="4" cy="4" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                    <circle cx="8" cy="8" r="1.5" />
                                </svg>
                            </label>
                            <?php if (!empty($_POST["dice1"]))
                                $keepd1 = 3;
                            ?>
                            <?php break; ?>
                        <?php
                        case 4: ?>
                            <label class="fancy-checkbox-label">
                                <input type="checkbox" name="dice1" class="checkbox">

                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                    <circle cx="4" cy="4" r="1.5" />
                                    <circle cx="12" cy="4" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                    <circle cx="4" cy="12" r="1.5" />
                                </svg>
                            </label>
                            <?php if (!empty($_POST["dice1"]))
                                $keepd1 = 4;
                            ?>
                            <?php break; ?>
                        <?php
                        case 5: ?>
                            <label class="fancy-checkbox-label">
                                <input type="checkbox" name="dice1" class="checkbox">

                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                    <circle cx="4" cy="4" r="1.5" />
                                    <circle cx="12" cy="4" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                    <circle cx="4" cy="12" r="1.5" />
                                    <circle cx="8" cy="8" r="1.5" />
                                </svg>
                            </label>
                            <?php if (!empty($_POST["dice1"]))
                                $keepd1 = 5;
                            ?>
                            <?php break; ?>
                        <?php
                        case 6: ?>
                            <label class="fancy-checkbox-label">
                                <input type="checkbox" name="dice1" class="checkbox">

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
                            <?php if (!empty($_POST["dice1"]))
                                $keepd1 = 6;
                            ?>
                            <?php break; ?>
                    <?php endswitch; ?>
                <?php else : ?>
                    <?php switch ($keepd1):
                        case 1: ?>
                            <label class="fancy-checkbox-label">
                                <input type="checkbox" name="dice1" class="checkbox">
                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                    <circle cx="8" cy="8" r="1.5" />
                                </svg>
                            </label>

                            <?php break; ?>
                        <?php
                        case 2: ?>
                            <label class="fancy-checkbox-label">
                                <input type="checkbox" name="dice1" class="checkbox">

                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                    <circle cx="4" cy="4" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                </svg>
                            </label>
                            <?php break; ?>
                        <?php
                        case 3: ?>
                            <label class="fancy-checkbox-label">
                                <input type="checkbox" name="dice3" class="checkbox">

                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                    <circle cx="4" cy="4" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                    <circle cx="8" cy="8" r="1.5" />
                                </svg>
                            </label>
                            <?php break; ?>
                        <?php
                        case 4: ?>
                            <label class="fancy-checkbox-label">
                                <input type="checkbox" name="dice1" class="checkbox">

                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                    <circle cx="4" cy="4" r="1.5" />
                                    <circle cx="12" cy="4" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                    <circle cx="4" cy="12" r="1.5" />
                                </svg>
                            </label>
                            <?php break; ?>
                        <?php
                        case 5: ?>
                            <label class="fancy-checkbox-label">
                                <input type="checkbox" name="dice1" class="checkbox">

                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                    <circle cx="4" cy="4" r="1.5" />
                                    <circle cx="12" cy="4" r="1.5" />
                                    <circle cx="12" cy="12" r="1.5" />
                                    <circle cx="4" cy="12" r="1.5" />
                                    <circle cx="8" cy="8" r="1.5" />
                                </svg>
                            </label>
                            <?php break; ?>
                        <?php
                        case 6: ?>
                            <label class="fancy-checkbox-label">
                                <input type="checkbox" name="dice1" class="checkbox">

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
                            <?php break; ?>




                    <?php endswitch; ?>
                <?php endif; ?>
                <?php
                $de2 = rand(1, 6);
                switch ($de2):
                    case 1: ?>
                        <label class="fancy-checkbox-label">
                            <input type="checkbox" class="checkbox">

                            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                <circle cx="8" cy="8" r="1.5" />
                            </svg>
                        </label>
                        <?php break; ?>
                    <?php
                    case 2: ?>
                        <label class="fancy-checkbox-label">
                            <input type="checkbox" class="checkbox">

                            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                <circle cx="4" cy="4" r="1.5" />
                                <circle cx="12" cy="12" r="1.5" />
                            </svg>
                        </label>
                        <?php break; ?>
                    <?php
                    case 3: ?>
                        <label class="fancy-checkbox-label">
                            <input type="checkbox" class="checkbox">

                            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                <circle cx="4" cy="4" r="1.5" />
                                <circle cx="12" cy="12" r="1.5" />
                                <circle cx="8" cy="8" r="1.5" />
                            </svg>
                        </label>
                        <?php break; ?>
                    <?php
                    case 4: ?>
                        <label class="fancy-checkbox-label">
                            <input type="checkbox" class="checkbox">

                            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                <circle cx="4" cy="4" r="1.5" />
                                <circle cx="12" cy="4" r="1.5" />
                                <circle cx="12" cy="12" r="1.5" />
                                <circle cx="4" cy="12" r="1.5" />
                            </svg>
                        </label>
                        <?php break; ?>
                    <?php
                    case 5: ?>
                        <label class="fancy-checkbox-label">
                            <input type="checkbox" class="checkbox">

                            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                <circle cx="4" cy="4" r="1.5" />
                                <circle cx="12" cy="4" r="1.5" />
                                <circle cx="12" cy="12" r="1.5" />
                                <circle cx="4" cy="12" r="1.5" />
                                <circle cx="8" cy="8" r="1.5" />
                            </svg>
                        </label>
                        <?php break; ?>
                    <?php
                    case 6: ?>
                        <label class="fancy-checkbox-label">
                            <input type="checkbox" class="checkbox">

                            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                <circle cx="4" cy="4" r="1.5" />
                                <circle cx="12" cy="4" r="1.5" />
                                <circle cx="12" cy="12" r="1.5" />
                                <circle cx="12" cy="8" r="1.5" />
                                <circle cx="4" cy="12" r="1.5" />
                                <circle cx="4" cy="8" r="1.5" />
                            </svg>
                            <label>
                                <?php break; ?>

                        <?php endswitch; ?>
                        <?php
                        $de3 = rand(1, 6);
                        switch ($de3):
                            case 1: ?>
                                <label class="fancy-checkbox-label">
                                    <input type="checkbox" class="checkbox">

                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                        <circle cx="8" cy="8" r="1.5" />
                                    </svg>
                                </label>
                                <?php break; ?>
                            <?php
                            case 2: ?>
                                <label class="fancy-checkbox-label">
                                    <input type="checkbox" class="checkbox">

                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                        <circle cx="4" cy="4" r="1.5" />
                                        <circle cx="12" cy="12" r="1.5" />
                                    </svg>
                                </label>
                                <?php break; ?>
                            <?php
                            case 3: ?>
                                <label class="fancy-checkbox-label">
                                    <input type="checkbox" class="checkbox">

                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                        <circle cx="4" cy="4" r="1.5" />
                                        <circle cx="12" cy="12" r="1.5" />
                                        <circle cx="8" cy="8" r="1.5" />
                                    </svg>
                                </label>
                                <?php break; ?>
                            <?php
                            case 4: ?>
                                <label class="fancy-checkbox-label">
                                    <input type="checkbox" class="checkbox">

                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                        <circle cx="4" cy="4" r="1.5" />
                                        <circle cx="12" cy="4" r="1.5" />
                                        <circle cx="12" cy="12" r="1.5" />
                                        <circle cx="4" cy="12" r="1.5" />
                                    </svg>
                                </label>
                                <?php break; ?>
                            <?php
                            case 5: ?>
                                <label class="fancy-checkbox-label">
                                    <input type="checkbox" class="checkbox">

                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                        <circle cx="4" cy="4" r="1.5" />
                                        <circle cx="12" cy="4" r="1.5" />
                                        <circle cx="12" cy="12" r="1.5" />
                                        <circle cx="4" cy="12" r="1.5" />
                                        <circle cx="8" cy="8" r="1.5" />
                                    </svg>
                                </label>
                                <?php break; ?>
                            <?php
                            case 6: ?>
                                <label class="fancy-checkbox-label">
                                    <input type="checkbox" class="checkbox">

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
                                <?php break; ?>

                        <?php endswitch; ?>
                        <?php
                        $de4 = rand(1, 6);
                        switch ($de4):
                            case 1: ?><label class="fancy-checkbox-label">
                                    <input type="checkbox" class="checkbox">

                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                        <circle cx="8" cy="8" r="1.5" />
                                    </svg>
                                    <?php break; ?>
                                <?php
                            case 2: ?>
                                    <label class="fancy-checkbox-label">
                                        <input type="checkbox" class="checkbox">

                                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                            <circle cx="4" cy="4" r="1.5" />
                                            <circle cx="12" cy="12" r="1.5" />
                                        </svg>
                                    </label>
                                    <?php break; ?>
                                <?php
                            case 3: ?>
                                    <label class="fancy-checkbox-label">
                                        <input type="checkbox" class="checkbox">

                                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                            <circle cx="4" cy="4" r="1.5" />
                                            <circle cx="12" cy="12" r="1.5" />
                                            <circle cx="8" cy="8" r="1.5" />
                                        </svg>
                                    </label>
                                    <?php break; ?>
                                <?php
                            case 4: ?>
                                    <label class="fancy-checkbox-label">
                                        <input type="checkbox" class="checkbox">

                                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                            <circle cx="4" cy="4" r="1.5" />
                                            <circle cx="12" cy="4" r="1.5" />
                                            <circle cx="12" cy="12" r="1.5" />
                                            <circle cx="4" cy="12" r="1.5" />
                                        </svg>
                                    </label>
                                    <?php break; ?>
                                <?php
                            case 5: ?>
                                    <label class="fancy-checkbox-label">
                                        <input type="checkbox" class="checkbox">

                                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                            <circle cx="4" cy="4" r="1.5" />
                                            <circle cx="12" cy="4" r="1.5" />
                                            <circle cx="12" cy="12" r="1.5" />
                                            <circle cx="4" cy="12" r="1.5" />
                                            <circle cx="8" cy="8" r="1.5" />
                                        </svg>
                                    </label>
                                    <?php break; ?>
                                <?php
                            case 6: ?>
                                    <label class="fancy-checkbox-label">
                                        <input type="checkbox" class="checkbox">

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
                                    <?php break; ?>

                            <?php endswitch; ?>
                            <?php
                            $de5 = rand(1, 6);
                            switch ($de5):
                                case 1: ?>
                                    <label class="fancy-checkbox-label">
                                        <input type="checkbox" class="checkbox">

                                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                            <circle cx="8" cy="8" r="1.5" />
                                        </svg>
                                    </label>
                                    <?php break; ?>
                                <?php
                                case 2: ?>
                                    <label class="fancy-checkbox-label">
                                        <input type="checkbox" class="checkbox">

                                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                            <circle cx="4" cy="4" r="1.5" />
                                            <circle cx="12" cy="12" r="1.5" />
                                        </svg>
                                    </label>
                                    <?php break; ?>
                                <?php
                                case 3: ?>
                                    <label class="fancy-checkbox-label">
                                        <input type="checkbox" class="checkbox">

                                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                            <circle cx="4" cy="4" r="1.5" />
                                            <circle cx="12" cy="12" r="1.5" />
                                            <circle cx="8" cy="8" r="1.5" />
                                        </svg>
                                    </label>
                                    <?php break; ?>
                                <?php
                                case 4: ?>
                                    <label class="fancy-checkbox-label">
                                        <input type="checkbox" class="checkbox">

                                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                            <circle cx="4" cy="4" r="1.5" />
                                            <circle cx="12" cy="4" r="1.5" />
                                            <circle cx="12" cy="12" r="1.5" />
                                            <circle cx="4" cy="12" r="1.5" />
                                        </svg>
                                    </label>
                                    <?php break; ?>
                                <?php
                                case 5: ?>
                                    <label class="fancy-checkbox-label">
                                        <input type="checkbox" class="checkbox">

                                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-dice-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M13 1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                            <circle cx="4" cy="4" r="1.5" />
                                            <circle cx="12" cy="4" r="1.5" />
                                            <circle cx="12" cy="12" r="1.5" />
                                            <circle cx="4" cy="12" r="1.5" />
                                            <circle cx="8" cy="8" r="1.5" />
                                        </svg>
                                    </label>
                                    <?php break; ?>
                                <?php
                                case 6: ?>
                                    <label class="fancy-checkbox-label">
                                        <input type="checkbox" class="checkbox">

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
                                    <?php break; ?>

                            <?php endswitch; ?>
                            <?php
                            $valeurs = array(
                                $de1, $de2, $de3, $de4,
                            );
                            var_dump($valeurs['0'])

                            ?>
                            <form action="" method="post">
                                <button id="submit" type="submit" type="button" name="keep" class="btn btn-primary">keep</button>
                                <?php if (isset($_POST['roll']))
                                    if (isset($_POST['dice1']))
                                        // var_dump($de1);
                                        //  var_dump($keepd1)
                                ?>
                                <?php
                        $nbr1 = substr_count("$de1,$de2,$de3,$de4,$de5", '1');
                        $nbr2 = substr_count("$de1,$de2,$de3,$de4,$de5", '2');
                        $nbr3 = substr_count("$de1,$de2,$de3,$de4,$de5", '3');
                        $nbr4 = substr_count("$de1,$de2,$de3,$de4,$de5", '4');
                        $nbr5 = substr_count("$de1,$de2,$de3,$de4,$de5", '5');
                        $nbr6 = substr_count("$de1,$de2,$de3,$de4,$de5", '6'); ?>
                                <?php
                                echo $nbr1 . $nbr2 . $nbr3 . $nbr4 . $nbr5 . $nbr6;
                                if (($nbr1 == "2" || $nbr2 == "2" || $nbr3 == "2" || $nbr4 == "2" || $nbr5 == "2" || $nbr6 == "2") && ($nbr1 == "3" || $nbr2 == "3" || $nbr3 == "3" || $nbr4 == "3" || $nbr5 == "3" || $nbr6 == "3")) {
                                    echo "full";
                                    $full = 1;
                                }

                                if (($nbr1 == "2" xor $nbr2 == "2" xor $nbr3 == "2" xor $nbr4 == "2" xor $nbr5 == "2" xor $nbr6 == "2") && ($nbr1 == "2" xor $nbr2 == "2" xor $nbr3 == "2" xor $nbr4 == "2" xor $nbr5 == "2" xor $nbr6 == "2")) {
                                    if ($full == "1") {
                                    } else
                                        echo "doublepaire";
                                    $double = 1;
                                }

                                if ($nbr1 == "5" || $nbr2 == "5" || $nbr3 == "5" || $nbr4 == "5" || $nbr5 == "5" || $nbr6 == "") {
                                    echo "yamms";
                                }

                                if ($nbr1 == "4" || $nbr2 == "4" || $nbr3 == "4" || $nbr4 == "4" || $nbr5 == "4" || $nbr6 == "4") {
                                    echo "carré";
                                }

                                if ($nbr1 == "3" || $nbr2 == "3" || $nbr3 == "3" || $nbr4 == "3" || $nbr5 == "3" || $nbr6 == "3") {
                                    if ($full == "1") {
                                    } else
                                        echo "brelan";
                                }
                                if ($nbr1 == "2" || $nbr2 == "2" || $nbr3 == "2" || $nbr4 == "2" || $nbr5 == "2" || $nbr6 == "2") {
                                    if ($double == "1") {
                                    } else
                                        echo "paire";
                                }

                                if ($nbr1 == "1" && $nbr2 == "1" && $nbr3 == "1" && $nbr4 == "1" && $nbr5 == "1" || $nbr2 == "1" && $nbr3 == "1" && $nbr4 == "1" && $nbr5 == "1" && $nbr6 == "1") {
                                    echo "suite";
                                    $suite = 1;
                                }

                                if ($nbr1 == "1" && $nbr2 == "1" && $nbr3 == "1" && $nbr4 == "1" || $nbr2 == "1" && $nbr3 == "1" && $nbr4 == "1" && $nbr5 == "1" || $nbr3 == "1" && $nbr4 == "1" && $nbr5 == "1" && $nbr6 == "1") {
                                    if ($suite == "1") {
                                    } else
                                        echo "petite suite";
                                }

                                ?>

                            <?php endif; ?>


                            </form>

    </body>

    </html>