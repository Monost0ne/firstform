<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Merci <?=$_POST['user_firstName']?> <?=$_POST['user_lastName']?> de nous avoir contacté à propos de “<?=$_POST['user_subject']?>”.<br><br>
Un de nos conseillers vous contactera soit à l’adresse <?=$_POST['user_email']?> ou par téléphone au <?='user_phone'?>
dans les plus brefs délais pour traiter votre demande :<br><br>
<?=$_POST['user_message']?>
</body>
</html>
