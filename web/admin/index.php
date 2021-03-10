<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Content Manager</title>
</head>
<body>

<script>
    window.CMS_MANUAL_INIT = true;
</script>

<script src="https://unpkg.com/netlify-cms@^2.0.0/dist/netlify-cms.js"></script>

<script>
    <?php
        //TODO: Remove casts because this setup can now load this from config.json right?
    ?>
    const {CMS, initCMS: init} = window
    init(<?php echo file_get_contents('./config.json');?>);
</script>
</body>
</html>
