<?php
    function sanitizeInput($data, $type = 'string') {
        switch ($type) {
            case 'string':
                // Remove HTML tags and encode special characters
                $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
                break;
            case 'email':
                // Remove all characters except letters, digits and !#$%&'*+-/=?^_`{|}~@.[].
                $data = filter_var($data, FILTER_SANITIZE_EMAIL);
                break;
            case 'url':
                // Remove all characters except letters, digits and $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
                $data = filter_var($data, FILTER_SANITIZE_URL);
                break;
            case 'int':
                // Convert to an integer
                $data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
                break;
            case 'float':
                // Convert to a float
                $data = filter_var($data, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                break;
            default:
                // Default to removing HTML tags and encoding special characters
                $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
                break;
        }
        return $data;
    }
?>