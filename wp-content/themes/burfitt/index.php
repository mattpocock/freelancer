<?php get_header(); ?>

<section class="main-section">
<div class="container">
    <div class="col-12 skills-area__container">
        <div class="col-4 col-sm-12 skills-area__skill">
            <h2>Translation</h2>
            <a href="/translating">
                <img src="https://i1.wp.com/www.frauleinlouise.com/wp-content/uploads/2017/12/IMG_5852.jpg?resize=1200%2C800"/>
            </a>
            <p><?php echo get_theme_mod("first_skill");?></p>
            <a class="skills-area__link" href="/translating">Learn More</a>
        </div>
        <div class="col-4 col-sm-12 skills-area__skill">
            <h2>Writing & Editing</h2>
            <a href="/writing-editing">
                <img src="https://i2.wp.com/www.frauleinlouise.com/wp-content/uploads/2017/12/IMG_5853.jpg?resize=1200%2C800"/>
            </a>
            <p><?php echo get_theme_mod("second_skill");?></p>
            <a class="skills-area__link" href="/writing-editing">Learn More</a>
        </div>
        <div class="col-4 col-sm-12 skills-area__skill">
            <h2>Photography</h2>
            <a href="/photography">
                <img src="https://i2.wp.com/www.frauleinlouise.com/wp-content/uploads/2017/12/IMG_5864.jpg?resize=1200%2C800"/>
            </a>
            <p><?php echo get_theme_mod("third_skill");?></p>
            <a class="skills-area__link" href="/photography">Learn More</a>
        </div>
    </div>
    <hr/>
    <div class="col-10 align-center big-image-area__container hidden-xs">
        <div class="col-6">
            <img class="big-image-area__image" src="https://media-exp2.licdn.com/media-proxy/ext?w=800&h=800&f=n&hash=YnVW6KdSRBhMjlimvTQQhILT4Yk%3D&ora=1%2CaFBCTXdkRmpGL2lvQUFBPQ%2CxAVta9Er0Vinkhwfjw8177yE41y87UNCVordEGXyD3u0qYrdf3K7f8HWLbunuV5FeywclAZmd_L6Q2GyD5PpeYLtfoh5isOwI424ZxUBbFI8lWxI"/>
        </div>
        <div class="col-6 big-image-area__floater">
        <h1><?php echo get_theme_mod("big-image-title");?></h2>
        <p><?php echo get_theme_mod("big-image-text");?></p>
        <a href="/portfolio">Learn More</a>
        </div>
    </div>
    <hr class="hidden-xs"/>
    <form name="contactform" method="post" action="/send_form_email.php">
    <div class="col-10 col-sm-12 align-center contact-form">
        <h1>Get In Touch</h1>
        <div class="col-6 col-sm-12 contact-form__box">
            <h4>Full Name (required)</h4>
            <input required type="text" name="name"/>
        </div>
        <div class="col-6 col-sm-12 contact-form__box">
            <h4>Email (required)</h4>
            <input required type="text" name="email"/>
        </div>
        <div class="col-12 contact-form__box">
            <h4>Message</h4>
            <textarea name="message"></textarea>
        </div>
        <div class="col-12 contact-form__box">
            <input type="submit"/>
        </div>
    </form>
    </div>
    <hr/>

<?php get_footer(); ?>