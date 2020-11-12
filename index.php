<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400i%2C700%2C700i%7CRoboto+Mono%3A400%2C700&#038;display=swap&#038;ver=5.0.9">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Fallen of Lanarkshire</title>
</head>

<body id="index">


    <?php   include "inc_header.php"  ?>








    <main>
        <!-- ***************************************************** -->
        <!-- ********************** Search *********************** -->
        <!-- ***************************************************** -->
        <section id="section_search">




            <h2>Find Fallen of Lanarkshire</h2>


            <form id="search_form" method="post" action="search_script.php">


                <!-- ********************** 1 *********************** -->
                <div class="field_box">
                    <div class="field_label">
                        <label for="last_name">Last Name</label>
                        <p>For example Smith</p>
                    </div>
                    <div class="field_input">
                        <input id="last_name" type="text" placeholder="Smith" name="last_name">
                    </div>
                </div>

                <!-- ********************** 2 *********************** -->
                <div class="field_box">
                    <div class="field_label">
                        <label for="first_name">First Name</label>
                        <p>For example John</p>
                    </div>
                    <div class="field_input">
                        <input id="first_name" type="text" placeholder="John" name="first_name">
                    </div>
                </div>

                <!-- ********************** 3 *********************** -->
                <div class="field_box">
                    <div class="field_label">
                        <label for="regiment">Regiment</label>
                        <p>For example Border Regiment 11th </p>
                    </div>
                    <div class="field_input">
                        <input id="regiment" type="text" placeholder="Border Regiment 11th " name="regiment">
                    </div>
                </div>

                <!-- ********************** 4 *********************** -->
                <div class="field_box">
                    <div class="field_label">
                        <label for="service_number">Service Number</label>
                        <p>For example S/18088</p>
                    </div>
                    <div class="field_input">
                        <input id="service_number" type="text" placeholder="S/18088" name="service_number">
                    </div>
                </div>

                <!-- ********************** 5 *********************** -->
                <div class="field_box">
                    <div class="field_label">
                        <label for="rank">Rank</label>
                        <p>For example Captain</p>
                    </div>
                    <div class="field_input">
                        <input id="rank" type="text" placeholder="Captain" name="rank">
                    </div>
                </div>

                <!-- ********************** 6 *********************** -->
                <div class="field_box">
                    <div class="field_label">
                        <label for="memorial_location">Memorial Location</label>
                        <p>For example Kilsyth</p>
                    </div>
                    <div class="field_input">
                        <input id="memorial_location" type="text" placeholder="Kilsyth" name="memorial_location">
                    </div>
                </div>





                <div class="btn_wrapper">
                    <input class="submit_btn" type="submit" value="Search" name="submit">
                </div>
            </form>


        </section>














        <!-- ***************************************************** -->
        <!-- ********************** About ************************ -->
        <!-- ***************************************************** -->
        <section id="section_about">



            <h2>About Fallen of Lanarkshire</h2>


            <div class="about_wrapper">
                <div class="row_about" id="row_one">
                    <div class="about_text" id="about_text_row1">
                        <p>
                            Part of the Lanarkshire Family History Society remit is to record names of those held in the
                            graveyards, and on memorials for enquirers into their family tree from anybody around the
                            globe. An extension to that is the fallen heroes in the Great War, by collating individual
                            Memorials, Plaques and Roll of Honour (MPRoH). It was noted that there is an overlap between
                            the various MPRoH’s, in a village or town and even between villages and towns, as many of
                            the fallen are remembered in more the than one village or town.
                        </p>
                    </div>

                    <div class="about_image" id="image1">

                    </div>
                </div>


                <div class="row_about" id="row_two">
                    <div class="about_text" id="about_text_row2">
                        <p>
                            That collection started a number of years past by a group of 6 volunteers, and once
                            amalgamated, it became clear from the amount of information being produced that there was no
                            cross referencing. So an index was required to prevent duplication of research and quick and
                            easy way to trace for enquiries received. Not all fallen soldiers with a connection to
                            Lanarkshire are recorded on MPRoH’s, as a number of Lanarkshire people ‘emigrated’ to
                            Australia, Canada, New Zealand and South Africa, and of course some moved, away from quiet
                            and sunny Lanarkshire.
                        </p>
                    </div>

                    <div class="about_image" id="image2">

                    </div>
                </div>


                <div class="row_about" id="row_three">
                    <div class="about_text" id="about_text_row3">
                        <p>
                            We adopted the criteria, of anybody with a connection with Lanarkshire; born, schooled,
                            worked, resided or even buried in Lanarkshire would be included in a Fallen database. Sounds
                            simple, but none of the MPRoH’s have service number (Officers did not have a service number
                            during WW1), and a vast number of UK Soldiers service records were destroyed during WW2:
                            through enemy action. So it is necessary to research multiple sources to correctly identify
                            anybody who has fallen. Fortunately we have a good team of researchers who trawl the web
                            joining up the pieces to make a picture. Resulting in over 30 books on the Fallen.
                        </p>
                    </div>

                    <div class="about_image" id="image3">

                    </div>
                </div>


                <div class="row_about" id="row_four">
                    <div class="about_text" id="about_text_row4">
                        <p>
                            The simple task of just recording the names produced an Excel spreadsheet, of over 23,000,
                            and expanding. Adding the missing information to the names was producing quite a large
                            spreadsheet. We therefore looked at developing a database to place an index for researchers,
                            with the aim to include it on the internet. With that aim, we are fortunate in have the
                            advice and guidance of Sandy Young of Specialist Services, towards a database. However,
                            looking at the depth and structured of a database it looked a prime candidate for a good
                            student’s project, therefore we approached New College Lanarkshire. They agreed and accepted
                            the challenge.
                        </p>
                    </div>

                    <div class="about_image" id="image4">

                    </div>
                </div>
            </div>
        </section>










    </main>




    <?php   include "inc_footer.php"  ?>




</body>

</html>