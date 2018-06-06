<?php View::render("layouts/header") ?>

<section class="contact-list-container">
    <table>
        <thead>
        <tr>
            <th>Eesnimi</th>
            <th>Perekonnanimi</th>
            <th>Telefonid</th>
        </tr>
        </thead>
        <tbody>
            <?php View::render("partials/contacts", $data) ?>
        </tbody>
    </table>
</section>

<?php View::render("layouts/footer") ?>