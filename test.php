<?php

include 'build/f3.phar';

$r = new ReflectionClass('DB\SQL\Mapper');

foreach ($r->getMethods() as $method) {
    echo ($method->isPublic() ? '+' : ($method->isProtected() ? '#' : '-'))
        . 'DB\SQL\Mapper' . ($method->isStatic() ? '::' : '->') . $method->getName() . '(';

    $params = [];
    foreach ($method->getParameters() as $param) {
        $params[] = trim($param->getType() . ' $') . $param->getName();
    }

    echo implode(', ', $params) . ')' . PHP_EOL;
}
