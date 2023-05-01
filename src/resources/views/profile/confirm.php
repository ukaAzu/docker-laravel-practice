<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Confirm | Profile</title>
    </head>
    <body>
        <h1>Confirm</h1>
        <table>
            <tr>
                <th>ユーザー名</th>
                <td><?php echo $data['username'];?></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><?php echo $data['password'];?></td>
            </tr>
            <tr>
                <th>現在地</th>
                <td>（緯度）<?php echo $data['latitude'];?>度（経度）<?php echo $data['longitude'];?>度</td>
            </tr>
        </table>
    </body>
</html>
