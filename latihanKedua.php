<form method="post">
    <table>
        <tr>
            <td>Angka Pertama</td>
            <td><input type="text" name="angkapertama"></td>
        </tr>
        <tr>
            <td>Angka Kedua</td>
            <td><input type="text" name="angkakedua"></td>
        </tr>
        <tr>
            <td>Operator</td>
            <td>
                <input type="radio" name="hitung" value="tambah" checked> +
                <input type="radio" name="hitung" value="kurang"> -
                <input type="radio" name="hitung" value="kali"> *
                <input type="radio" name="hitung" value="bagi"> /
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><button type="submit" name="btn">Hitung</button></td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['btn'])) {
    $angkapertama = $_POST['angkapertama'];
    $angkakedua = $_POST['angkakedua'];
    $hitung = $_POST['hitung'];

    switch ($hitung) {
        case 'tambah':
            $hasil = $angkapertama + $angkakedua;
            echo $hasil;
            break;
        case 'kurang':
            $hasil = $angkapertama - $angkakedua;
            echo  $hasil;
            break;
        case 'kali':
            $hasil = $angkapertama * $angkakedua;
            echo  $hasil;
            break;
        case 'bagi':
            $hasil = $angkapertama / $angkakedua;
            echo  $hasil;
            break;
    }
}

?>