<h1>PHP - 4.<!--  Основы PHP. Функции. --></h1>

<?php 

	echo "<h2>Функции</h2>";
	
function greeting($name = "user", $dayWeek = ";))") {
	
	switch ($dayWeek) {
		case '1':
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case '2':
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case '3':
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case '4':
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case '5':
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";	
			break;
		case '6':
			echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
			break;
		case '7':
			echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
		default:
			echo "Hello $name!  Введите 'Имя' и день недели от '1 до 7'";
			break;

	}
}

greeting("Andrew", 1);
	
 ?>
 
