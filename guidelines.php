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

                    <li class="guidelines-point">Competition Duration:</li>
                    <ul>
                        <li>
                            <p>
                                The competition will run for 48 consecutive hours, starting from [start time] to [end
                                time].
                            </p>
                        </li>

                        <li>
                            <p>
                                Teams are expected to remain engaged and actively working on challenges throughout
                                the entire duration.
                            </p>
                        </li>
                    </ul>

                    <li class="guidelines-point">Equipment:</li>
                    <ul>
                        <li>
                            <p>
                                Every team is required to bring their own laptops with the necessary development
                                environments and tools pre-installed.
                            </p>
                        </li>
                    </ul>

                    <li class="guidelines-point">Challenges:</li>
                    <ul>
                        <li>
                            <p>
                                A variety of coding challenges will be provided to test your problem-solving skills,
                                algorithmic knowledge, and programming prowess.
                            </p>
                        </li>

                        <li>
                            <p>
                                Challenges may encompass different domains such as algorithms, data structures,
                                mathematics, and more.
                            </p>
                        </li>
                    </ul>

                    <li class="guidelines-point">Code of Conduct:</li>
                    <ul>
                        <li>
                            <p>
                                Any form of cheating, plagiarism, or misconduct will result in immediate
                                disqualification.
                            </p>
                        </li>
                    </ul>

                    <li class="guidelines-point">Submission and Evaluation:</li>
                    <ul>
                        <li>
                            <p>
                                Solutions to challenges must be submitted within the specified deadlines.

                            </p>
                        </li>

                        <li>
                            <p>
                                Submissions will be evaluated based on correctness, efficiency, and adherence to the
                                problem requirements.
                            </p>
                        </li>

                        <li>
                            <p>
                                Results and rankings will be announced after the evaluation process is completed
                            </p>
                        </li>
                    </ul>

                    <li class="guidelines-point">Awards and Recognition:</li>
                    <ul>
                        <li>
                            <p>
                                Prizes and recognition will be awarded to the top-performing teams based on their
                                performance in the competition.
                            </p>
                        </li>

                        <li>
                            <p>
                                Additionally, special awards may be given for exceptional achievements or innovative
                                solutions.
                            </p>
                        </li>
                    </ul>

                    <li class="guidelines-point">Have Fun and Learn:</li>
                    <ul>
                        <li>
                            <p>
                                Above all, remember that the competition is an opportunity to learn, grow, and
                                showcase your skills.
                            </p>
                        </li>

                        <li>
                            <p>
                                Embrace the challenges, collaborate with your team, and enjoy the thrill of coding!
                            </p>
                        </li>
                    </ul>
                </ol>
            </div>

            <p class="guidelines-wish">
                Wishing all participants the best of luck and an unforgettable coding experience!
            </p>
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