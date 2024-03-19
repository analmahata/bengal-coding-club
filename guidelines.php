<?php 
    $pageTitle = "Bengal Coding Club - Empowering Coders, Fostering Innovation";
    include './components/common/header.php'; 
?>

<?php
    // Include the configuration file
    require_once('./config/contact-form.php');
?>

<!----------| Hero section start |-------->
<div class="hero">
    <div class="hero-container">
        <div class="hero-container-text">
            <h4>Guidelines for upcoming coding competition <i class="fa-solid fa-code"></i></h4>
        </div>
        <div class="hero-image-container">
            <img src="./assets/images/guidelines.png" alt="" />
        </div>
    </div>
</div>
<!----------| Hero section end |---------->

<section class="guidelines">
    <div class="guidelines-container">
        <!-- <div class="guidelines-image-container">
            <img src="./assets/images/guidelines.png" alt="" />
        </div> -->

        <div class="guidelines-text-container">
            <h1>
                Welcome to Bengal Coding Club's exhilarating 48-hour live coding competition! Below are
                the guidelines to ensure a smooth and exciting experience for all participants:
            </h1>

            <div class="detail-guidelines-container">
                <ol>
                    <li class="guidelines-point">Team Composition:</li>
                    <ul>
                        <li>
                            <p>
                                Each team must consist of a minimum of three members: one designated leader and
                                two additional members.
                            </p>
                        </li>

                        <li>
                            <p>
                                Teams are encouraged to have diverse skill sets to tackle a wide range of challenges
                                effectively.
                            </p>
                        </li>
                    </ul>
                </ol>
            </div>
        </div>
    </div>
</section>

<?php
    // Include the configuration file
    include('./components/contact.php');
?>


<!----------| Import footer component |---------->
<?php 
    include './components/common/footer.php'; 
?>