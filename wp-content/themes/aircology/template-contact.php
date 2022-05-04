<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
    <form class="form" action="#" method="post">
        <label for="firstname" class="form__label">Votre prénom</label>
        <input type="text" name="firstname" id="firstname" class="form__input" placeholder="Veuillez saisir votre prénom">
        <label for="lastname" class="form__label">Votre nom</label>
        <input type="text" name="lastname" id="lastname" class="form__input" placeholder="Veuillez saisir votre nom">
        <label for="email" class="form__label">Votre adresse mail</label>
        <input type="email" name="email" id="email" class="form__input" placeholder="Veuillez saisir votre adresse mail">
        <label for="message" class="form__label">Votre message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form__textarea" placeholder="Veuillez saisir votre message"></textarea>
        <button type="submit">Envoyer</button>
    </form>
<?php get_footer(); ?>