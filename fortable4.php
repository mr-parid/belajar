<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FOR TABLE 2</title>
    <style>
    .warna-baris {
        background-color: green;
    }
    </style>
</head>
<body>
    <!-- CONTOH PENGGUNAAN FOR DALAM TABLE DENGAN WARNA-->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i=1; $i<=3; $i++) : ?>
            <?php if ($i % 2 == 0) : ?> <!-- Nomor 0 bisa diganti dengan nomor 1 untuk mengganti posisi warna ke bagian pertama -->
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for ($j=1; $j<5; $j++) : ?>
                    <td><?= "$i,$j"; ?> </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>