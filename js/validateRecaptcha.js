function validateRecaptcha(code) {
    if (!!code) {
        var form = document.querySelector(".g-recaptcha");
        form.removeAttribute('disabled');
    }
}