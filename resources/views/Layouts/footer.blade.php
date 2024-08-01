<footer class="footer">
    <div class="container-fluid d-flex justify-content-center">
        <div class="copyright">
            Copyright <span id="year"></span> © Mahaka
        </div>
    </div>
</footer>
<script>
    const yearElement = document.getElementById('year');
    const currentYear = new Date().getFullYear();
    yearElement.textContent = currentYear;
</script>