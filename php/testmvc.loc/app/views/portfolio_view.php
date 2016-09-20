<h1>Портфолио</h1>
<p>
<table>
    <tr>
        <td>Год</td>
        <td>Курс</td>
    </tr>
    <?php

    foreach($data as $row)
    {
        echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Course'].'</td></tr>';
    }

    ?>
</table>
</p>