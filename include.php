<?php

\Bitrix\Main\Loader::registerAutoLoadClasses('bex.bbc', [
    'Bex\Bbc\Basis' => 'lib/basis.php',
    'Bex\Bbc\BasisRouter' => 'lib/basisrouter.php',
    'Bex\Bbc\Traits\Common' => 'lib/traits/common.php',
    'Bex\Bbc\Traits\Elements' => 'lib/traits/elements.php',
    'Bex\Bbc\Helpers\ComponentParameters' => 'lib/helpers/componentparameters.php',
]);