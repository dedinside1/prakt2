<h1>Портфолио</h1>
<p>
<table class="table table-bordered">
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    </td>td><td>Год</td><td>Проект</td><td>Описание</td></tr>
    <?php

    foreach($data as $row)
    {
        echo '</td><td>'.$row['year'].'</td><td>'.$row['site'].'</td><td>'.$row['description'].'</td></tr>';
    }

    ?>
</table>
</p>
