<?= doctype("html5")?>
 
<html>
    <head>
        <title>How to create a like Counter Button</title>
<?php
   
    $link = array(
              'href' => base_url().'application/css/default.css',
              'rel' => 'stylesheet',
              'type' => 'text/css'
    );
    
    echo link_tag($link);
    echo $library_src = (! isset($library_src)) ? $library_src = '' : $library_src;
    echo $script_foot = (! isset($script_foot)) ? $script_foot = '': $script_foot;
?>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>How to create a like Counter Button</h1>
            
            
