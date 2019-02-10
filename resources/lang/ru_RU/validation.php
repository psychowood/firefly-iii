<?php

/**
 * validation.php
 * Copyright (c) 2018 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'iban'                           => 'Это некорректный IBAN.',
    'zero_or_more'                   => 'Это значение не может быть отрицательным.',
    'date_or_time'                   => 'The value must be a valid date or time value (ISO 8601).',
    'source_equals_destination'      => 'Счёт источник и счёт назначения совпадают.',
    'unique_account_number_for_user' => 'Этот номер счёта уже используется.',
    'unique_iban_for_user'           => 'Этот IBAN уже используется.',
    'deleted_user'                   => 'По соображениям безопасности, вы не можете зарегистрироваться, используя этот адрес электронной почты.',
    'rule_trigger_value'             => 'Это значение является недопустимым для выбранного триггера.',
    'rule_action_value'              => 'Это значение является недопустимым для выбранного действия.',
    'file_already_attached'          => 'Загруженный файл ":name" уже прикреплён к этому объекту.',
    'file_attached'                  => 'Файл ":name". успешно загружен.',
    'must_exist'                     => 'ID в поле field :attribute не существует в базе данных.',
    'all_accounts_equal'             => 'Все счета в данном поле должны совпадать.',
    'invalid_selection'              => 'Вы сделали неправильный выбор.',
    'belongs_user'                   => 'Данное значение недопустимо для этого поля.',
    'at_least_one_transaction'       => 'Необходима как минимум одна транзакция.',
    'at_least_one_repetition'        => 'Необходима как минимум одна транзакция.',
    'require_repeat_until'           => 'Требуется либо несколько повторений, либо конечная дата (repeat_until). Но не оба параметра разом.',
    'require_currency_info'          => 'Содержимое этого поля недействительно без информации о валюте.',
    'equal_description'              => 'Описание транзакции не должно совпадать с глобальным описанием.',
    'file_invalid_mime'              => 'Файл ":name" имеет тип ":mime". Загрузка файлов такого типа невозможна.',
    'file_too_large'                 => 'Файл ":name" слишком большой.',
    'belongs_to_user'                => 'Значение :attribute неизвестно.',
    'accepted'                       => 'Необходимо принять :attribute.',
    'bic'                            => 'Это некорректный BIC.',
    'at_least_one_trigger'           => 'Правило должно иметь хотя бы одно условие.',
    'at_least_one_action'            => 'Правило должно иметь хотя бы одно действие.',
    'base64'                         => 'Это некорректный формат для данных, зашифрованных с помощью base64.',
    'model_id_invalid'               => 'Данный ID кажется недопустимым для этой модели.',
    'more'                           => ':attribute должен быть больше нуля.',
    'less'                           => ':attribute должен быть меньше 10,000,000',
    'active_url'                     => ':attribute не является допустимым URL-адресом.',
    'after'                          => ':attribute должна быть позже :date.',
    'alpha'                          => ':attribute может содержать только буквы.',
    'alpha_dash'                     => ':attribute может содержать только буквы, числа и дефис.',
    'alpha_num'                      => ':attribute может содержать только буквы и числа.',
    'array'                          => ':attribute должен быть массивом.',
    'unique_for_user'                => 'Уже существует запись с этим :attribute.',
    'before'                         => ':attribute должна быть раньше :date.',
    'unique_object_for_user'         => 'Это название уже используется.',
    'unique_account_for_user'        => 'Такое название счёта уже используется.',
    'between.numeric'                => ':attribute должен быть больше :min и меньше :max.',
    'between.file'                   => ':attribute должен быть размером :min - :max килобайт.',
    'between.string'                 => ':attribute должен содержать :min - :max символов.',
    'between.array'                  => ':attribute должен содержать :min - :max элементов.',
    'boolean'                        => 'Поле :attribute должно быть истинным или ложным.',
    'confirmed'                      => ':attribute не совпадает с подтверждением.',
    'date'                           => ':attribute не является верной датой.',
    'date_format'                    => ':attribute не совпадает с форматом :format.',
    'different'                      => ':attribute и :other не должны совпадать.',
    'digits'                         => ':attribute должно содержать :digits цифр.',
    'digits_between'                 => ':attribute должен содержать :min - :max цифр.',
    'email'                          => ':attribute не является верным email адресом.',
    'filled'                         => 'Поле :attribute должно быть заполнено.',
    'exists'                         => 'Выбран неверный :attribute.',
    'image'                          => ':attribute должен быть изображением.',
    'in'                             => 'Выбранный :attribute не верный.',
    'integer'                        => ':attribute должно быть целым числом.',
    'ip'                             => ':attribute должен быть верным IP-адресом.',
    'json'                           => ':attribute должно быть верной JSON строкой.',
    'max.numeric'                    => 'Значение :attribute не может быть больше :max.',
    'max.file'                       => 'Значение :attribute не может быть больше :max килобайт.',
    'max.string'                     => 'Значение :attribute не может быть больше :max символов.',
    'max.array'                      => 'Значение :attribute не может содержать более :max элементов.',
    'mimes'                          => ':attribute должен быть файлом типа :values.',
    'min.numeric'                    => ':attribute должен быть минимум :min.',
    'lte.numeric'                    => ':attribute должен быть меньше или равен :value.',
    'min.file'                       => ':attribute должен быть минимум :min килобайт.',
    'min.string'                     => 'Значение :attribute должно быть не меньше :min символов.',
    'min.array'                      => 'Значение :attribute должно содержать не меньше :min элементов.',
    'not_in'                         => 'Выбранный :attribute не верный.',
    'numeric'                        => ':attribute должен быть числом.',
    'numeric_native'                 => 'Сумма должна быть числом.',
    'numeric_destination'            => 'Сумма назначения должна быть числом.',
    'numeric_source'                 => 'Исходная сумма должна быть числом.',
    'regex'                          => 'Формат :attribute некорректен.',
    'required'                       => 'Поле :attribute является обязательным.',
    'required_if'                    => 'Значение :attribute является обязательным, когда :other равное :value.',
    'required_unless'                => 'Поле :attribute является обязательным, если :other не входит в список :values.',
    'required_with'                  => 'Поле :attribute является обязательным, когда есть :values.',
    'required_with_all'              => 'Поле :attribute является обязательным, когда есть :values.',
    'required_without'               => 'Поле :attribute является обязательным, когда отсутствует :values.',
    'required_without_all'           => ':attribute поле обязательно для заполнения, так как ни одно из :values не существует.',
    'same'                           => ':attribute и :other должны совпадать.',
    'size.numeric'                   => ':attribute должен быть размером :size.',
    'amount_min_over_max'            => 'Минимальная сумма не может быть больше максимальной суммы.',
    'size.file'                      => ':attribute должен быть размером :size килобайт.',
    'size.string'                    => ':attribute должен состоять из :size символов.',
    'size.array'                     => ':attribute должен содержать :size элементов.',
    'unique'                         => ':attribute уже занят.',
    'string'                         => 'Значение :attribute должно быть строкой.',
    'url'                            => 'Неверный формат ввода :attribute.',
    'timezone'                       => ':attribute должен быть в допустимом диапазоне.',
    '2fa_code'                       => ':attribute введен неверно.',
    'dimensions'                     => 'Недопустимые размеры изображения :attribute.',
    'distinct'                       => 'Поле :attribute содержит повторяющееся значение.',
    'file'                           => ':attribute должен быть файлом.',
    'in_array'                       => 'Поле :attribute не существует в :other.',
    'present'                        => 'Поле :attribute должно быть заполнено.',
    'amount_zero'                    => 'Сумма не может быть равна нулю.',
    'unique_piggy_bank_for_user'     => 'Название копилки должно быть уникальным.',
    'secure_password'                => 'Это не безопасный пароль. Попробуйте еще раз. Подробнее можно узнать по ссылке https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'      => 'Недопустимый тип для повторяющихся транзакций.',
    'valid_recurrence_rep_moment'    => 'Неверный период повторения для данного типа повторений.',
    'invalid_account_info'           => 'Неверные данные о счёте.',
    'attributes'                     => [
        'email'                   => '"Адрес электронной почты"',
        'description'             => '"Описание"',
        'amount'                  => 'Сумма',
        'name'                    => '"Название"',
        'piggy_bank_id'           => 'ID копилки',
        'targetamount'            => '"Целевая сумма"',
        'openingBalanceDate'      => '"Дата начального баланса"',
        'openingBalance'          => '"Начальный баланс"',
        'match'                   => '"Ключи для связи"',
        'amount_min'              => '"Минимальная сумма"',
        'amount_max'              => '"Максимальная сумма"',
        'title'                   => '"Заголовок"',
        'tag'                     => '"Метка"',
        'transaction_description' => 'описание транзакции',
        'rule-action-value.1'     => '"Значение действия #1"',
        'rule-action-value.2'     => '"Значение действия #2"',
        'rule-action-value.3'     => '"Значение действия #3"',
        'rule-action-value.4'     => '"Значение действия #4"',
        'rule-action-value.5'     => '"Значение действия #5"',
        'rule-action.1'           => '"Действие #1"',
        'rule-action.2'           => '"Действие #2"',
        'rule-action.3'           => '"Действие #3"',
        'rule-action.4'           => '"Действие #4"',
        'rule-action.5'           => '"Действие #5"',
        'rule-trigger-value.1'    => '"Значение условия #1"',
        'rule-trigger-value.2'    => '"Значение условия #2"',
        'rule-trigger-value.3'    => '"Значение условия #3"',
        'rule-trigger-value.4'    => '"Значение условия #4"',
        'rule-trigger-value.5'    => '"Значение условия #5"',
        'rule-trigger.1'          => '"Условие #1"',
        'rule-trigger.2'          => '"Условие #2"',
        'rule-trigger.3'          => '"Условие #3"',
        'rule-trigger.4'          => '"Условие #4"',
        'rule-trigger.5'          => '"Условие #5"',
    ],
];
