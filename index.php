<!DOCTYPE html>
<html>
    <head>
        <title>
            Kalkulator
        </title>
        <link rel="stylesheet" type="text/css" href="kalkulator.css">
    </head>
    <body>
        <h1>
            Kalkulator
        </h1>
        <form action="hasil.php" method="post">
            <table class="kalkulator">
                <tr>
                    <td>
                        Bilangan Pertama
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="bilangan_pertama">
                    </td>
                </tr>
                <tr>
                    <td>
                        Operasi
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="operasi">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Bilangan Kedua
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="bilangan_kedua">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="tengah">
                        <input type="submit" name="aksi" value="Hitung">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>