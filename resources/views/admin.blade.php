@extends('index')

@section('content')
    <div class="row hirdetes_lista">
        <h1>Hirdetések</h1>
        <ol>
        <?php
            for ($i = 1; $i <= 20; $i++) {
                echo "<li><input type='text' name='item$i' value=''></li>";
            }
        ?>
        </ol>
    </div>
    <div class="row mise_lista">
        <h1>Miserend</h1>
        <table>
            <tr><th>Dátum</th><th>Időpont</th><th>Szándék</th><th>Típus</th><th>Végzi</th></tr>
            <?php
            for ($i = 1; $i <= 20; $i++) {
                echo "<tr>";
                echo "<td><input type='text' name='datum$i' value=''></td>";
                echo "<td><input type='text' name='ido$i' value=''></td>";
                echo "<td><input type='text' name='szandek$i' value=''></td>";
                echo "<td><input type='text' name='tipus$i' value=''></td>";
                echo "<td><input type='text' name='vegzi$i' value=''></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <br />
    <input type="button" name="save" value="Mentés">
    <br />
    <br />
    <br />
@endsection