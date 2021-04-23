<?php
/**
 * User: Jeron, Timomthy, Milan
 * Date: 12-4-2021
 * File: formulier.php
 */
?>
<!DOCTYPE html>
<!--html taal set in nederlands-->
<html lang="nl">
<head>
    <!-- titel van het tablad-->
    <title>
        <?php
            echo 'Formulier';
        ?>
    </title>
    <!-- declaren karakterset -->
    <meta charset="UTF-8">
    <!-- declareren viewpoint -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    koppeling van opmaak website-->
    <link  rel="stylesheet" href="../css/style.css">
</head>

<header>
    <!--    Verbind het navigatie php bestand-->
    <?php
        require "../includes/Navigation.php";
    ?>
</header>
<main>
        <div id="opmaak">
<!--    titel van het formulier-->
            <h1> Uitschrijfformulie KW1C</h1>
                    <p>
                        Dit formulier gaat over of je de juiste keuze heb gemaakt van je opleiding.
                        Na de eerste of 2e periode komen studenten die pas klaar zijn met de middelbare dat de sector die ze hebben gekozen niet bij hun past.
                        Daardoor willen ze van opleiding veranderen.
                    </p>
        </div>
    <hr>

    <div id="form">
    <!--    link naar het resultaat bestand en het formulier-->
            <form action="resultaat.php" method="post">
                <p>
                    <label> Je voor en achternaam  </label>
                    <input type="text" value="" class="input" name="firstlast">
                </p>
        <!--        vraag 1 -->
                <p>
                    <label>Kun je zorgvuldig werken?</label> <br>
                    <input type="radio" required  name="vraag1"  value=2> ja <br>
                    <input type="radio" required  name="vraag1"  value=1> nee <br>
                </p>
                <!--        vraag 2 -->
                <p>
                    <label>Kun je goed in groepsverband werken?</label> <br>
                    <input type="radio" required  name="vraag2"  value=2> ja <br>
                    <input type="radio" required  name="vraag2"  value=1> nee <br>
                </p>
                <!--        vraag 3 -->
                <p>
                    <label>Kun je goed omgaan met computers?</label> <br>
                    <input type="radio" required  name="vraag3"  value=2> ja <br>
                    <input type="radio" required  name="vraag3"  value=1> nee <br>
                </p>
                <!--        vraag 4: -->
                <p>
                    <label>Zou jij later bij een ict bedrijf willen werken?</label> <br>
                    <input type="radio" required  name="vraag4"  value=2> ja <br>
                    <input type="radio" required  name="vraag4"  value=1> nee <br>
                </p>
                <!--        vraag 5: -->
                <p>
                    <label>Vind je servers en computers intressant?</label> <br>
                    <input type="radio" required  name="vraag5"  value=2> ja <br>
                    <input type="radio" required  name="vraag5"  value=1> nee <br>
                </p>
                <!--        vraag 6: -->
                <p>
                    <label>Zou je het leuk vinden om verschillende programmeertalen te leren?</label> <br>
                    <input type="radio" required  name="vraag6"  value=2> ja <br>
                    <input type="radio" required  name="vraag6"  value=1> nee <br>
                </p>
                <!--        vraag 7 -->
                <p>
                    <label>Ben je stress bestendig?</label> <br>
                    <input type="radio" required  name="vraag7"  value=2 > ja <br>
                    <input type="radio" required  name="vraag7"  value=1> nee <br>
                </p>
                <!--        vraag 8: -->
                <p>
                    <label>Lijkt het je leuk om servers te configureren?</label> <br>
                    <input type="radio" required  name="vraag8"  value=2 > ja <br>
                    <input type="radio" required  name="vraag8"  value=1 > nee <br>
                </p>
                <!--        vraag 9:  -->
                <p>
                    <label>Ben je gedreven om te leren?</label> <br>
                    <input type="radio" required  name="vraag9"  value= 2> ja <br>
                    <input type="radio"  required name="vraag9"  value= 1> nee <br>
                </p>
                <!--        vraag 10: -->
                <p>
                    <label>Wil je geen kennis delen met andere en het voor jezelf houden?</label> <br>
                    <input type="radio" required  name="vraag10"  value= 2 > ja <br>
                    <input type="radio" required  name="vraag10"  value= 1 > nee <br>
                </p>
                <!--        vraag 11: -->
                <p>
                    <label>Heb je ervaring met computers? </label> <br>
                    <input type="radio" required name="vraag11"  value= 1>  ja <br>
                    <input type="radio" required name="vraag11"  value= 2> nee <br>
                </p>
                <!--        vraag 12 -->
                <p>
                    <label>Denk je dat jouw toekomst in de ICT is? </label> <br>
                    <input type="radio" required name="vraag12"  value= 1> ja <br>
                    <input type="radio" required name="vraag12"  value= 1> nee <br>
                </p>
                <!--        vraag 13: -->
                 <p>
                    <label > In welke sector wilt u een opleiding gaan doen? </label>
                        <select required name="reden1" class="input" >
                            <option value= 1> Economie</option>
                            <option value= 1> Techniek</option>
                            <option value= 1> Zorg en Welzijn</option>
                            <option value= 2> ICT</option>
                        </select>
                 </p>
                <!--        vraag 14: -->
                <p>
                    <label > Welke ICT opleding wil je gaan volgen? </label>
                        <select required name="reden2" class="input">
                            <option value=1> Software Developer</option>
                            <option value=1> Expert System Devices</option>
                            <option value=1> Allround Medewerker </option>
                            <option value=1> Systems and Devices</option>
                        </select>
                </p>
                <!--        vraag 15: -->
                <p>
                    <label > Wat van volgend benoemde dingen doet u het liefst in u vrije tijd? </label>
                        <select required name="reden3" class="input">
                            <option value=2> Bezig zijn met code schrijven</option>
                            <option value=1> Prijzen Berekenen</option>
                            <option value=1> Mensen in de zorg helpen</option>
                            <option value=2>  Een machine in elkaar zetten</option>
                        </select>
                </p>
                <!--        verzend knop -->
                <p>
                    <input type="submit" name="verzend" value="Send" id="knop">
                </p>
            </form>
        </div>
    </main>
<!--Footer bestand-->
        <footer>
            <?php
                require "../includes/footer.php";
            ?>
        </footer>
    </body>
</html>


