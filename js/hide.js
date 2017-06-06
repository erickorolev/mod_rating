// Файл для модуля "Рейтинг по опыту"
// Файл содержит инструкции для эффекта скрытия всех строк после 10-й при загрузке страницы,
// отображения всех имеющихся строк в таблице после нажатия кнопки "Раскрыть" и снова скрытия после нажатия кнопки "Скрыть".
(function($){
        $(document).ready(function(){
			// Скрыть строки таблицы после 10-й.
            $("#practice tr:gt(10)").hide();
			// Скрыть кнопку "Скрыть".
			$("#hide_2").hide();
			// Действия при нажатии кнопки "Раскрыть".
			$("#show_2").click(function(){
				// Раскрыть строки таблицы после 10-й.
				$("#practice tr:gt(10)").show();
				// Скрыть кнопку "Раскрыть".
				$("#show_2").hide();
				// Показать кнопку "Скрыть".
				$("#hide_2").show();
			});
			// Действия при нажатии кнопки "Скрыть".
			$("#hide_2").click(function(){
				// Скрыть строки таблицы после 10-й.
				$("#practice tr:gt(10)").hide();
				// Скрыть кнопку "Скрыть".
				$("#hide_2").hide();
				// Показать кнопку "Раскрыть".
				$("#show_2").show();
			});
		});
    })(jQuery);