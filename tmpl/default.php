<?php
/**
 * Шаблон модуля "Рейтинг учеников по опыту".
 */

defined('_JEXEC') or die; ?>
<?php

// Подключение css стилей модуля
$document = JFactory::getDocument();
// Подключение стиля для подсказок
$document->addStyleSheet('/modules/mod_rating/css/tooltips.css');
// Подключение стиля для скроллирования области
$document->addStyleSheet('/modules/mod_rating/css/scroll.css');
?>

<h3>Рейтинг по <span data-tooltip="+ 1 за подход, + 10 за свидание, + 100 за секс. Опыт подтверждается аудиозаписью">опыту</span></h3>

<div class="scroll">
    <table id="practice">
        <tbody>
        <tr>
            <td style="width: 33px;" align="center"><strong>№</strong></td>
            <td style="width: 148px;"><strong>Ник</strong></td>
            <td style="width: 107px;"><strong>Опыт</strong></td>
        </tr>
        <?php

        $position = 1;

        foreach ($rating as $row) {
            echo '<tr>';
            echo '<td>' . $position . '</td>';
            echo '<td>' . $row['0'] . '</td>';
            echo '<td>' . $row['1'] . '</td>';
            echo '</tr>';
            $position ++;
        }
        ?>
    </table>
</div>