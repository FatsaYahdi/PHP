<?php

// normal
goto a;
echo "Jawir" . PHP_EOL;

a:
echo "JAWA" . PHP_EOL;

// di loop

$i = 1;
while (true) {
    echo "While Loop $i" . PHP_EOL;
    $i++;
        if ($i > 10) {
            goto end;
        }
}
end:
echo "End Loop";