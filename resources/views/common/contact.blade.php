<section id="contact">
    <h2 class="sub-headline">CONTACT</h2>

    <form>
        <label for="name">Name</label>
        <input id="name" name="name" type="text" placeholder="Dein Name">

        <label for="email">E-Mail</label>
        <input id="email" name="email" type="email" placeholder="Deine Email Adresse">

        <label for="text">Nachricht</label>
        <textarea id="text" name="text" rows="6"></textarea>

        <button type="submit">SENDEN</button>
        <span>
            *Diese Nachricht wird an den allgemeinen Verteiler „<?php echo config('goodHoodMusicConfig.bookingEmail'); ?>“ geschickt. <br>
            Bei spezifischen Anfragen bitte an Jenny der Raik wenden.
        </span>
    </form>

    <div class="seperator"></div>
</section>