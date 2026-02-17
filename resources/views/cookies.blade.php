<div style="position: fixed; bottom: 0; width: 97%; background: #DF9E42; color: #fff; padding: 10px; text-align: center; z-index: 1000; border-radius: 20px; margin: 0px 5px 5px 5px;">
    We use cookies to improve your experience. 🍪
    <button id="accept-cookies" style="background: #12e83c; color: #fff; border: none; padding: 5px 10px; margin: 0 5px;">Accept</button>
    <button id="decline-cookies" style="background: #dc3545; color: #fff; border: none; padding: 5px 10px; margin: 0 5px;">Decline</button>
</div>

<script>
    document.getElementById('accept-cookies').addEventListener('click', () => {
        document.cookie = "cookie_consent=true; path=/; max-age=31536000";
        document.querySelector('div[style*="fixed"]').style.display = 'none';
    });

    document.getElementById('decline-cookies').addEventListener('click', () => {
        document.cookie = "cookie_consent=false; path=/; max-age=31536000";
        document.querySelector('div[style*="fixed"]').style.display = 'none';
    });
</script>