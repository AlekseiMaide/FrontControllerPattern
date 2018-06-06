<?php View::render("layouts/header") ?>
    
    <section class="add-contact-form">
        <form method="POST" action="/uus">
            <input class="contact-form-input" name="firstName" placeholder="Eesnimi">
            <input class="contact-form-input" name="lastName" placeholder="Perekonnanimi">
            <textarea rows="4" class="contact-form-input" name="phone" placeholder="Telefonid"></textarea>
            <button class="contact-form-submit" name="submit-button" type="submit">Salvesta</button>
        </form>
    </section>
    
<?php View::render("layouts/footer") ?>
