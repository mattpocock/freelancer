<?php /* Template Name: Contact Form */ ?>

<?php get_header(); ?>

<section class="main-section">
    <div class="container">
        <div class="col-10 col-xs-12 align-center contact-form">
        <h1>Get In Touch</h1>
        <div class="col-6 col-xs-12 contact-form__box">
            <h4>Full Name (required)</h4>
            <input type="text" name="name"/>
        </div>
        <div class="col-6 col-xs-12 contact-form__box">
            <h4>Email (required)</h4>
            <input type="text" name="email"/>
        </div>
        <div class="col-12 contact-form__box">
            <h4>Message</h4>
            <textarea name="message"></textarea>
        </div>
        <div class="col-12 contact-form__box">
            <input type="submit"/>
        </div>
    </div>
<hr/>

<?php get_footer(); ?>