# metaldocs ( v.1.0.0 - alpha)
Documentation generator for WordPress themes.

## Установка.
1. Скачиваем [Node.js](https://nodejs.org/uk/), запускаем установку и ждем окончания.
2. Открываем свойство "Мой компьютер".
   * Выбираем пункт "Дополнительные параметры системы".
   * Выбираем пункт "Переменные системы".
   * В списке "Переменные среды пользователя" выбираем пункт PATH.
   * Нажимаем кнопку "Изменить".
   * В конец строки добавляем `./vender/php-5.4`.
   * Далее во всех окнах жмем "OK".
2. Запускаем консоль ( *iOS - терминал* ).
3. В консоле прописываем `node -v`, если Node.js установился удачно, то в консоли отобразится текущая версия *Node.js*.
4. В консоле прописываем `npm -v`, если npm установился удачно, то в консоли отобразится текущая версия npm. Если консоль выдаст ошибку, то нужно прописать команду `curl http://npmjs.org/install.sh`. После чего повторите предыдущую команду.
5. Склонируйте репозиторий с помощью команды `git clone https://github.com/templatemonster/metaldocs.git`. Клонировать можно в любую папку у вас на компьютере.
6. После клонирования, в консоле перейдите в папку инструмента, используя команду `cd путь_к_папке` ( Например: cd D:/work/metaldocs )
7. В консоле запустите команду `npm install`.
8. После установки массы npm пакетов, инструмент готов к использованию.

## Команды инструмента.
### Основные команды
#### gulp generate
Команды генерирует конечную документацию.
Команда может принимать два параметра:
* `--path` - ( обязательный ) путь к теме, для которой нужно создать документацию.
* `--locale` - ( необязательный ) локализация которую нужно сгенерировать, например `uk_UA` 

#### gulp generate-config
Команды генерирует конфиг файл для предварительного просмотра документацию. Предварительно документацию можно посмотреть в папке `**/metaldocs/template/default` ( Запускать нужно через локальный сервер )
Команда может принимать два параметра:
* `--path` - ( обязательный ) путь к теме, для которой нужно создать документацию.
* `--locale` - ( необязательный ) локализация которую нужно сгенерировать, например `uk_UA` 

### Вторичные команды
#### compile-sass
Команда производит компиляцию sass файлов в уже сгенерированной документации.
Команда может принимать параметр:
* `--path` - ( обязательный ) путь к теме, для которой нужно создать документацию.

#### compile-template-sass
Команда производит компиляцию  sass файлов в заготовке документации.
Команда может принимать параметр:
* `--path` - ( обязательный ) путь к теме, для которой нужно создать документацию.

#### generate-section
Команда генерирует все секции заново, но без копирования папки assets и компиляции sass файлов.
Команда может принимать два параметра:
* `--path` - ( обязательный ) путь к теме, для которой нужно создать документацию.
* `--locale` - ( необязательный ) локализация которую нужно сгенерировать, например `uk_UA` 


## Добавление нового описания.
Для добавления нового описание вам нужно добавить php с разметкой и текстами в заготовку документации.
Например нужно добавить описание нового плагина, тогда php файл должен лежать в папке 

**Пример:** 
***/metaldocs/template/default/components/plugins/имя-плагина.php* . 

Сам файл php должен называться именем папки плагина все с маленькой буквы и через тире вместо пробелов.

**Пример:** *contact-form-7.php*

Текста которые будет содержать файл перевода должны оборачиваться в функцию перевода.

**Функции перевода:**
* *_( 'your text ' );* - функция возвращает результат перевода который можно сохранить в переменную.
* *_e( 'your text ' );* - функция сразу записывает результат перевода в html разметку.

Также на случай если в тексте используется html разметка или спец. символы, функции перевода можно обернуть в printf.

**Пример:** 
```php
<?php printf( _( '%1$s TemplateMonster %2$sPrivacy Policy%3$s'), '&copy;', '<a href="http://www.templatemonster.com/privacy-policy.php">', '</a>' ); ?>
```
В данном примере в текст`%1$s TemplateMonster %2$sPrivacy Policy%3$s` вставляются соответствующие значения в зависимости от порядкового номера. Вместо **%1$s** вставляется спец. символ `&copy;`(&copy;), вместо **%2$s** вставится открывающийся html тег `<a href="http://www.templatemonster.com/privacy-policy.php">`, вместо **%3$s** вставляется закрывающий html тег `</a>`. Если же значение у вас повторяются, вы можете использовать макрос без порядкового номера **%s**. Более подробно о **printf** вы можете прочесть по [ссылке](http://php.net/manual/ru/function.sprintf.php).

**!!!Важно!!!** 

> Для того чтобы работала якорная навигация по документации перед заголовком к названию плагина или любой другой секции, на которую нужно будет совершать навигацию, нужно добавить html блок `<div id="toc-имя-секции" class="toc-id"></div>`, в атрибуте **id** нужно указать toc- и имя секции, например `id="toc-contact-form-7"`.

## Добавление картинок.
Для добавления картинок в контент нужно использовать функцию `assets_manager()->get_image( $url, $class, $alt )`

Функция принимает 3 параметра:
 * $url   - ( обязательный ) путь к изображению начиная от папки с заготовкой к документации. 
 **Пример** `assets\images\image-name.png`.
 * $class - ( необязательный ) css класс который будет добавлен к тегу изображения.
 * $alt   - ( необязательный ) описание изображения.
 
**Пример:** 
```php
<?php assets_manager()->get_image( 'assets/images/customizer.png', 'img-preview', _( 'Customizer Screen' ) ); ?>
```

 **!!!Важно!!!**
 > Если изображение не будет найдено, то функция ничего не выведет.