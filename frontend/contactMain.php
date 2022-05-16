<main class="consumer-site-main">
    <section>
        <h2 class="contact-title">Liên lạc với chúng tôi</h2>

        <div class="form-container">
            <form action="https://formspree.io/f/mjvjekwv" method="POST" id="my-form">

                <div class="form-group">
                    <label for="firstName"> First Name</label>
                    <input type="text" id="firstName" name="firstName">
                </div>

                <div class="form-group">
                    <label for="latsName">Last Name</label>
                    <input type="text" id="lastName" name="lastName">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
        <div id="status"></div>
    </section>

    <script src="script/formScript.js"></script>
</main>