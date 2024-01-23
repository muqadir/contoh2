<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Printer connector type
    |--------------------------------------------------------------------------
    |
    | Connection protocol to communicate with the receipt printer.
    | Valid values are: cups, network, windows
    |
    */
    'connector_type' => 'cups',
    /*
    |--------------------------------------------------------------------------
    | Printer connector descriptor
    |--------------------------------------------------------------------------
    |
    | Typically printer name or IP address.
    |EPSON TM-T82-S/A
    */
    // 'connector_descriptor' => 'EPSON-L120-Series',
    'connector_descriptor' => 'TM-T82-S-A',
    /*
    |--------------------------------------------------------------------------
    | Printer port
    |--------------------------------------------------------------------------
    |
    | Typically 9100.
    |
    */
    'connector_port' => 9100,
];