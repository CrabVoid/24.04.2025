<?php

echo "veiksmīgs savienojums <br>";

foreach ($_POST as $x => $value) {
    echo "<li>$x => $value <br>";
}
