<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Печенье</title>
</head>
<body>
    <div class="back">
    <div class="back2">
    <?php
    class Cookie
    {
        private $type;

        public function setType($cookieType)
        {
            // Проверяем, какие виды печенья могут быть назначенными
            // Пример альтернатив: шоколадное, овсяное, миндальное
            $validTypes = ["шоколадное", "овсяное", "миндальное"];

            if (in_array($cookieType, $validTypes)) {
                $this->type = $cookieType;
            } else {
                echo "Извини, такой вид печенья нет в наличии. 😢";
            }
        }

        public function getType()
        {
            return $this->type;
        }
    }

    // Создаем объект класса Cookie
    $cookie = new Cookie();

    // Устанавливаем вид печенья при нажатии на соответствующую кнопку
    if (isset($_POST["cookie_type"])) {
        $selectedType = $_POST["cookie_type"];
        $cookie->setType($selectedType);
    }

    // Выводим кнопки с разными видами печенья
    echo '<form method="post">';
    echo '<button type="submit" name="cookie_type" value="шоколадное">Шоколадное печенье</button>';
    echo '<button type="submit" name="cookie_type" value="овсяное">Овсяное печенье</button>';
    echo '<button type="submit" name="cookie_type" value="миндальное">Миндальное печенье</button>';
    echo '<button type="submit" name="cookie_type" value="клубничное">Клубничное печенье</button>';
    echo "</form>";

    // Проверяем наличие выбранного печенья и выводим соответствующий текст
    if ($cookie->getType()) {
        echo "В наличии такое печенье: " . $cookie->getType() . " 🍪";
    } else {
        echo "Печенье не выбрано или такого вида нет в наличии. 😢";
    }
    ?>
    </div>
    </div>
</body>
</html>