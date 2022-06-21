<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplicatoin</title>
</head>

<body>
    <div style="display: flex; gap: 5%; flex-wrap:wrap; margin-left: 30px;">
        <? for ($i = 1; $i <= 10; $i++) : ?>
            <div style="width: 15%; margin-bottom: 50px; background: #e5e5e5; border-radius: 30px; text-align:center">
                <? for ($j = 1; $j <= 10; $j++) : ?>
                    <span><?= "$i x $j = " . $i * $j . "<br>" ?></span>
                <? endfor ?>
            </div>
        <? endfor ?>
    </div>
</body>

</html>