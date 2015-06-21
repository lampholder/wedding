<?php

foreach ($_POST as $key => $value)
    $message .= "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";

    mail('lampholder@gmail.com', 'RSVP', $message);


?>
