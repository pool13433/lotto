<!DOCTYPE html>
<html>
    <head>
        <title>Lotto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url() . 'semantic/semantic.min.css' ?>">
        <script type="text/javascript" src="<?php echo base_url() . "js/require.js" ?>"></script>  
        <script type="text/javascript" src="<?php echo base_url() . "js/requires-main.js" ?>"></script>
        <script type="text/javascript">
            requirejs.config({
                baseUrl: '<?= base_url() ?>',
                paths: {
                    jquery: 'js/jquery-1.11.2.min',
                    semantic: 'semantic/semantic.min',
                    highcharts: 'plugins/highchart4.2.2/js/highcharts',
                }
            });
        </script>
    </head>
    <body>
        <?php $this->load->view('/include/layout_sidebar'); ?>
        <div class="pusher">
            <div class="ui container" style="margin-top: 20px;">
                <a href="#" class="sidebar-toggle" data-visible="open">
                    <i class="bordered inverted teal sidebar icon large"></i>
                </a>
                <div class="ui divider"></div>


