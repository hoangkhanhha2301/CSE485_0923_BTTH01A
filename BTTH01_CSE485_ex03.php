<?php
    $arrs= ['PHP', 'HTML', 'CSS', 'JS'];
?>
    <table border = "1">
        <tr>
            <th>Môn học</th>
        </tr>
        <?php foreach($arrs as $arr) { ?>
            <tr>
                <td><?php echo $arr; ?></td>
            </tr>
        <?php } ?>
    </table>