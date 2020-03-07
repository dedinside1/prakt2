<h1>Панель админа</h1>
<p>
<table class="table table-bordered">
    <tr><td>Год</td><td>Проект</td><td>Описание</td></tr>
    <?php

    foreach($data as $row)
    {
        echo '</td><td>'.$row['year'].'</td><td>'.$row['site'].'</td><td>'.$row['description'].'</td></tr>';

    }
    ?>

</form>
</table>
</p>
