            </div>

            <footer>&copy; 2026 WE GO GYM &mdash; Jobsheet 10.</footer>
        </main>
    </div>
    <script src="<?php echo $base; ?>assets/js/shell.js"></script>
    <script src="<?php echo $base; ?>assets/js/app.js"></script>
    <?php if (!empty($extra_scripts)): foreach ($extra_scripts as $src): ?>
    <script src="<?php echo $src; ?>"></script>
    <?php endforeach;
    endif; ?>
</body>
</html>
