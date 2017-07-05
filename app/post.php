<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST) && !empty($_POST)) {
  echo "Dziękujemy za wysłanie formularza z następującymi danymi: <br>";
  showFormData();
}
else {
  echo "Brak danych do wyświetlenia";
}

function showFormData() {
  foreach ($_POST as $label => $value) {
    echo '<br>' . $label . ': ' . $value;
  }
}
