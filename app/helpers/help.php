<?php

// title page
function set_title()
{
    $title = basename($_SERVER['REQUEST_URI']);
    switch ($title) {
        case '2fa':
            echo '2FA Generator';
            break;
        case 'monokia-pro':
            echo 'Monokia Pro license Generator';
            break;
        case 'fake-address':
            echo 'Fake Address Generator';
            break;

        default:
            echo 'Dymey Chhun';
            break;
    }
}


// Initialize the global stack
$GLOBALS['script_stack'] = [];

// Function to push script
function push_script($script)
{
    $GLOBALS['script_stack'][] = $script;
}

// Function to render all scripts
function render_scripts()
{
    foreach ($GLOBALS['script_stack'] as $script) {
        echo $script . "\n";
    }
}