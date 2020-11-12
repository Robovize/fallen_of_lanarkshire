<footer>
    <section class="contact">
        <h2>Contact Us</h2>
        <form action="mail.php" method="POST">
            <div class="contact_field">
                <label for="name">Name</label>
                <input id="name" type="text" placeholder="Name" name="name">
            </div>

            <div class="contact_field">
                <label for="email">Email</label>
                <input id="email" type="text" placeholder="Email" name="email">
            </div>

            <div class="contact_field">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
            </div>

            <div class="btn_wrapper">
                <input class="submit_btn" type="submit" value="Send" name="submit">
            </div>

        </form>


    </section>

    <!-- copyright and invisible login -->
    <div class="footer_bottom">
        <a href="login.php">Login</a>
        ©2020 All Rights Reserved
    </div>


</footer>