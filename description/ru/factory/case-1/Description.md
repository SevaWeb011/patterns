# Обработка платежей

Для работы с платежами, многие приложения создают интеграции с платежными системами.

Чтобы увеличить денежный траффик, часто пользователю предлагается несколько альтернатив для оплаты или выплаты.

В этом примере у нас есть три платежных системы:

1. PayPal
2. Webmoney
3. BankCat

Для каждой из них мы создаем класс и добавляем обязательные методы для оплаты и выплаты. Отдельный класс дает нам возожность
писать логику обработки платежей независимую от конекста других платежных систем.

После выплаты платежной системы, пользователь передает ее идентификатор в наше приложение.

Здесь фабрика очень кстати. На основе идентификатора создаем объект платежной системы и обрабатываем платеж.

Здесь можно обойтись без фабрики, тогда в каждом платежном методе мы будем дублировать цепочку проверок на тип платежной системы.
Платежных методов может в некоторых системах может быть много в одной интеграции. Это приводит к дублированию кода и необходимости поддерживать несколько участков кода при любом изменении затрагивающем логику обработки платежа.
