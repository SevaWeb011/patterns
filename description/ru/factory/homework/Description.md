## Задача

Мы разрабатываем мессенджер. Пишем часть ответственную за отправку сообщений. Наш мессенджер поддерживает три типа сообщений:

1. Обычные текстовые
2. Аудио
3. Видео

При отправке каждого сообщения нам нужно провести ряд проверок. Также видео и аудио мы загружаем в облако.
Логика обработки каждого типа сообщений отличается друг от друга, поэтому мы решили писать логику отправки в отдельных классах

Мы уже написали три класса для каждого типа сообщения.

Ваша задача дописать класс Messenger с использованием фабрики.
