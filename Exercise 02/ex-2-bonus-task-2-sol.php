<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercise 2 - Bonus Task 2</title>
	</head>
	<body>
		<?php
			$data = array(
				'webgl' => array(
					'title' => 'Компютърна графика с WebGL',
					'description' => 'След завършване на курса студентите ще могат да създават тримерни статични изображения и тримерни анимации.',
					'lecturer' => 'доц. П. Бойчев',
				),
				'go' => array(
					'title' => 'Програмиране с Go',
					'description' => 'Целта на курса е да запознае студентите както с основите на програмния език Go, така и с неговата култура и обкръжение.',
					'lecturer' => 'Николай Бачийски',
				),
        'frontend' => array(
					'title' => 'Разработка на Front-End Web',
					'description' => 'Курсът „Front-End Web Development” има за цел да запознае студентите с разработването на уеб приложения и използваните езици, библиотеки, инструменти и технологии.',
					'lecturer' => 'д-р Ст. Велев',
				),
        'cloud' => array(
					'title' => 'Основи на разработката на приложения в облачна среда',
					'description' => 'Разработката на софтуер изисква както добро познаване и владеене на редица модели, методи, процеси, добри практики и инструменти, така и на платформите, върху които ще бъдат разгърнати готовите решения.',
					'lecturer' => 'доц. А. Семерджиев',
				),
        'netfund' => array(
					'title' => 'Основи на компютърните мрежи',
					'description' => 'Курсът дава възможност на студентите да усъвършенствуват своето образование и обучение в областта на компютърните мрежи. Съдържанието следва курса „Основи на компютърните мрежи” (Network Fundamentals) на Сиско.',
					'lecturer' => 'проф. д-р Красен Стефанов',
				),
        'nosql' => array(
					'title' => 'Основи на NoSQL базите от данни с MongoDB',
					'description' => 'Курсът запознава студентите със съвременните NoSQL решения, техните теоретични основи, предимства и недостатъци.',
					'lecturer' => 'гл. ас. Калин Георгиев',
				),
        'hpprog' => array(
					'title' => 'Високо производително програмиране',
					'description' => 'Нуждата за високо ефективен софтуер расте - от една страна това е причинено от факта, че еднонишково процесорите практически спряха своето развитие и в резултат на това съществуващите еднонишкови компютърни програми вече не стават “автоматично” по-бързи само с подмяната на хардуер.',
					'lecturer' => 'Благовест Тасков',
				)
			);

			// helper function for displaying the menu with electives
      function get_nav($data, $course) {
        $courses = "";
        foreach ($data as $key => $value) {
          $courses .= '<a href="?page='.$key.'"';
          if ($course == $key and $course == 0) {
            $courses .= ' class="selected"';
          }
          $courses .= '>'.$value['title'].'</a>';
        }
        return $nav = '<nav>'.$courses.'</nav>';
      }

			// helper function for going back to the homepage
      function go_to_home($data) {
        echo get_nav($data, "");
        return "<p>Моля изберете курс</p>";
      }

			function show_nav($data, $course) {
        if(isset($_GET['page'])) {
          $course = $_GET['page'];
          if (array_key_exists($course, $data)) {
            echo get_nav($data, $course);
            foreach ($data as $key => $value) {
              if ($key == $course) {
                return '<h1>'.$value['title'].'</h1><h2>'.$value['lecturer'].'</h2><p>'.$value['description'].'</p>';
              }
            }
          }
          else return go_to_home($data);
        }
        else return go_to_home($data);
			}

      echo show_nav($data, $_GET['page'] ?? "");
		?>
	</body>
</html>