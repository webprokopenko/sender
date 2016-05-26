# sender
Test Task sender
Краткая инструкция по установке:

1)  CREATE DATABASE sender -- создать БД
2)  В файле config/db.php изменить логин, пароль к БД
3)  php yii.php migrate -- выполнить миграции - создадутся необходимые 2 таблици для работы приложения (forms,logs)
4)  Если не включена short open tag -- включить в php.ini short_open_tag - необходимо для использования конструкции <?=
