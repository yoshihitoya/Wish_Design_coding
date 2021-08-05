<footer class="l-footer u-display-center">
    <small class="c-copyright">&copy; 2021 Wish Design</small>
</footer>
</div>

<div class="c-box--overlay"></div>

<?php get_sidebar(); ?>
<?php wp_footer(); ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
function validateRecaptcha(code) {
    if (!!code) {
        var form = document.querySelector(".recaptcha");
        form.removeAttribute('disabled');
    }
}
</script>
</body>

</html>