<!----------| Import header component |-------->
<?php 
    $pageTitle = "Bengal Coding Club - Empowering Coders, Fostering Innovation";
    include './components/common/header.php'; 
?>

<?php
    // Include the configuration file
    require_once('./config/config.php');
?>






<!----------| Hero section start |-------->
<div class="hero">
    <div class="hero-container">
        <div class="hero-container-text">
            <h4>Bengal Coding Club <i class="fa-solid fa-code"></i></h4>
            <p>
                Bengal Coding Club is a vibrant community dedicated to nurturing tech enthusiasts in Bengal. Through
                workshops, seminars, and collaborative projects, we empower members to explore coding languages,
                develop
                software, and embrace innovation. Our inclusive environment fosters creativity, teamwork, and
                lifelong
                learning. Whether you're a beginner or a seasoned coder, join us to sharpen your skills, expand your
                network, and embark on a journey of digital excellence. Become part of Bengal Coding Club today and
                unlock your potential in the dynamic world of technology.
            </p>

            <button class="shadow-btn">
                <span>Learn more</span>
            </button>
        </div>
        <div class="hero-image-container">
            <img src="./assets/images/hand-coding.png" alt="" />
        </div>
    </div>
</div>
<!----------| Hero section end |---------->



<!----------| About section start |---------->
<section class="about">
    <div class="about-container">
        <div class="about-image-container">
            <img src="./assets/images/developer-activity.png" alt="" />
        </div>
        <div class="about-text-container">
            <span class="about-heading">About Us</span>
            <p>
                Established in the heart of Bengal, Bengal Coding Club stands as a beacon for aspiring coders and
                tech
                enthusiasts alike. Our club is a bustling hub of innovation, where individuals gather to explore the
                fascinating realms of programming languages and software development. Through a diverse array of
                workshops, seminars, and hands-on projects, we provide a nurturing environment for members to hone
                their
                coding skills and unleash their creativity. From Python to Java, web development to machine
                learning,
                our club offers a rich tapestry of opportunities for learning and growth.

                With a strong emphasis on collaboration and community, Bengal Coding Club fosters connections among
                like-minded individuals, creating a supportive network that propels members towards success. Whether
                you're a novice eager to dip your toes into the world of coding or an experienced developer seeking
                to
                expand your horizons, our club welcomes you with open arms. Join us at Bengal Coding Club and embark
                on
                an exciting journey of exploration, discovery, and technological innovation.
            </p>

            <p>
                Bengal Coding Club, nestled in the vibrant landscape of Bengal, serves as a dynamic platform for
                individuals passionate about coding and technology. Through a myriad of engaging activities such as
                workshops, seminars, and collaborative projects, our club provides members with the tools and
                resources
                needed to thrive in the ever-evolving field of software development. From mastering programming
                languages to delving into cutting-edge technologies like artificial intelligence and data science,
                Bengal Coding Club offers a holistic learning experience tailored to the diverse interests and skill
                levels of its members. Join our community today and unlock your potential as a coder, innovator, and
                changemaker in the digital age.
            </p>

            <button class="shadow-btn">
                <span> Learn more </span>
            </button>
        </div>
    </div>
</section>
<!----------| About section end |---------->

<!----------| Contact Us section start |---------->
<section class="contact-us">
    <div class="contect-us-container">
        <div class="contact-us-image-container">
            <img src="./assets/images/contact-us.png" alt="">
        </div>

        <div class="contact-us-form-container">
            <form action="" method="post" class="contact-us-form">
                <div class="contact-us-inputes">
                    <label for="name">Full name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>

                <div class="contact-us-inputes">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" placeholder="example@domain.com" required>
                </div>

                <div class="contact-us-inputes">
                    <label for="name">Message</label>
                    <textarea id="message" name="message" placeholder="Describe your quary"></textarea>
                </div>

                <div class="contact-us-btn">
                    <button type="submit" class="contact-us-submit-btn"> Send message </button>
                </div>
            </form>
        </div>
    </div>
</section>
<!----------| Contact Us section end |---------->





<!----------| Import footer component |---------->
<?php 
    include './components/common/footer.php'; 
?>