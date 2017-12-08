<?php
/**
 * Вспомогательный класс для модуля "Рейтинг по уровню опыта".
 */

class ModRatingHelper
{
    /**
     * Запрос к базе данных на построение списка всех учеников с сортировокой по уровню их опыта.
     * Опыт высчитывает сама база данных по формуле:
     * количество подходов + количество свиданий * 10 + количество сближений * 100;
     * Ученик - это зарегистрированный пользователь, который оплатил обучение,
     * т.е. у которго количество пожертвований(donat) больше нуля.
     * @return array
     */
    public static function getRating()
    {
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);

        $query->select('username,(num_contacts + (num_dates * 10 ) + (num_closenesses * 100)) AS Practice');
        $query->from($db->quoteName('#__users'));
        $query->where($db->quoteName('donat') . ' > '. $db->quote('0'));
        $query->order('Practice DESC');

        $db->setQuery($query);

        $result = $db->loadRowList();

        return $result;
    }
}