<footer class="l-footer u-display-center">
    <small class="c-copyright">&copy; 2021 Wish Design</small>
</footer>
</div>

<!-- サイドメニューが表示されたときの背景画面 -->
<div class="c-box--overlay"></div>

<?php get_sidebar(); ?>
<?php wp_footer(); ?>

<!-- reCAPTCHAの実装 -->
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