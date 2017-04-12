<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/all.min.css">
</head>
<body>
<div id="content">

    <form id="form" action="./module-creator.php">
        <fieldset id="formField"></fieldset>
        <input type="submit" value="submit">
    </form>
</div>
<script>var module = {};</script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="../js/core/generate-module-conf.js"></script>
<script>
    let properties = module.exports.properties;
    var html = '<ul>';
    for (let item in properties) {
        let itemProp = properties[item];
        var type = itemProp.type === 'boolean' ? 'checkbox' : 'text';
        var value = itemProp.type === 'boolean' ? 'true' : '';
        html += '<li>' +
            '<label for="' + item + '">' + itemProp.description + '</label>' +
            '<input value="' + value + '" type="' + type + '" id="' + item + '" name="' + item + '">' +
            '</li>'
    }
    html += '</ul>';
    document.getElementById('formField').insertAdjacentHTML('beforeend', html);

    $('#form').on('submit', function (e) {
        e.preventDefault();
        $.post(this.action, $(this).serializeArray()).done(function (result) {
            var html = '<p>';
            html += 'files ' + result.join(' ') + ' created';
            html += '</p>';
            document.getElementById('form').insertAdjacentHTML('afterend', html);
        });
    });
</script>
</body>
</html>


<?php
//exec('git st', $shellOutput);
//print_r($shellOutput);