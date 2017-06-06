<?php
/**
 * Шаблон модуля "Рейтинг учеников по уровню опыта".
 */
 
 defined('_JEXEC') or die; ?>
 
 <?php
// Подключение jquery для эффекта скрытия/раскрытия строк таблицы.
$document = JFactory::getDocument();
$document->addScript('/modules/mod_rating/js/hide.js');
?>

<!-- Таблица рейтинга разбивается на 2 части. 1 часть статичная - заголовок столбцов таблицы -->
<table id="practice">
<tbody>
<tr>
<td style="width: 33px;" align="center"><strong>№</strong></td>
<td style="width: 148px;"><strong>Ник</strong></td>
<td style="width: 107px;"><strong>Опыт</strong></td>
</tr>

<!-- 2 часть таблицы динамично формируется в зависимости от результата запроса к базе данных. -->
<?php
// Начинается отсчет позиций рейтинга.
$position = 1;	
	
	foreach ($rating as $row) {
		// Идет построчное построение таблицы.
		echo '<tr>';
		// № позиции
		echo '<td>' . $position . '</td>';
		// логин пользователя
        echo '<td>' . $row['0'] . '</td>';
		// сумма опыта пользователя
		echo '<td>' . $row['1'] . '</td>';
		echo '</tr>';
		// После отображения каждой строки прибавляется нумерация позиции в рейтинге.
		$position ++;
	}
?>
</table>
<input id="show_2" type="button" value="Раскрыть">
<input id="hide_2" type="button" value="Скрыть">