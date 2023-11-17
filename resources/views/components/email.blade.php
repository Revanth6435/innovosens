<section class="email email-bg">
            <div class="email-container slidedown">
                <h4>If you have any questions or concerns, please do contact us.</h4>
                <button onclick="composeEmail()" class="primary-btn">Email Us</button>
            </div>
        </section>

        <script>
        function composeEmail() {
            // Replace 'subject' and 'body' with your desired subject and body text
            var subject = encodeURIComponent('Subject: Inquiry from Website');
            var body = encodeURIComponent('Hello Innovosens team,\n\nI am reaching out to you regarding...');

            // Create the mailto link
            var mailtoLink = 'mailto:contact@innovosens.com?subject=' + subject + '&body=' + body;

            // Open the default email client
            window.location.href = mailtoLink;
        }
    </script>