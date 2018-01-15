<?php get_header(); ?>

<section class="main-section">
<div class="container">
    <div class="col-12 skills-area__container">
        <div class="col-4 col-sm-12 skills-area__skill">
            <h2>Translation</h2>
            <a href="<?php echo get_theme_mod("first_skill_link");?>">
                <img src="<?php echo get_theme_mod("first_skill_image");?>"/>
            </a>
            <p><?php echo get_theme_mod("first_skill_text");?></p>
            <a class="skills-area__link" href="<?php echo get_theme_mod("first_skill_link");?>">Learn More</a>
        </div>
        <div class="col-4 col-sm-12 skills-area__skill">
            <h2>Writing & Editing</h2>
            <a href="<?php echo get_theme_mod("second_skill_link");?>">
                <img src="<?php echo get_theme_mod("second_skill_image");?>"/>
            </a>
            <p><?php echo get_theme_mod("second_skill_text");?></p>
            <a class="skills-area__link" href="<?php echo get_theme_mod("second_skill_link");?>">Learn More</a>
        </div>
        <div class="col-4 col-sm-12 skills-area__skill">
            <h2>Photography</h2>
            <a href="<?php echo get_theme_mod("third_skill_link");?>">
                <img src="<?php echo get_theme_mod("third_skill_image");?>"/>
            </a>
            <p><?php echo get_theme_mod("third_skill_text");?></p>
            <a class="skills-area__link" href="<?php echo get_theme_mod("third_skill_link");?>">Learn More</a>
        </div>
    </div>
    <hr/>
    <div class="col-10 align-center big-image-area__container hidden-xs">
        <div class="col-6">
            <img class="big-image-area__image" src="<?php echo get_theme_mod("big-image-link");?>"/>
        </div>
        <div class="col-6 big-image-area__floater">
        <h1><?php echo get_theme_mod("big-image-title");?></h2>
        <p><?php echo get_theme_mod("big-image-text");?></p>
        <a href="<?php echo get_theme_mod("big-image-a-href");?>">Learn More</a>
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