document.addEventListener('DOMContentLoaded', function() {
    emailjs.init('zXYUOS_SSda5EmkBm');

    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();

        const emailInput = document.getElementById('reply_to');
        const emailValue = emailInput.value;
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (!emailPattern.test(emailValue)) {
            alert('Veuillez entrer une adresse email valide.');
            return;
        }

        const btn = document.getElementById('button');
        btn.value = 'Envoi en cours...';

        const serviceID = 'service_kca5r5p';
        const templateID = 'template_0j3uubm';

        emailjs.sendForm(serviceID, templateID, this)
            .then(() => {
                btn.value = 'Envoyer';
                document.getElementById('success-message').style.display = 'block';
                setTimeout(() => {
                    document.getElementById('success-message').style.opacity = '0';
                    setTimeout(() => document.getElementById('success-message').style.display = 'none', 1000);
                }, 5000);
            }, (err) => {
                btn.value = 'Envoyer';
                alert(JSON.stringify(err));
            });
    });
});
