<?php
return [

    'isMaintenance' => 0,
    'defaultPage' => 15,  // default row per page on table

	/*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    */

	'AppName' => 'Arjuna',
	'AppTitle' => 'Arjuna | FrontEnd Dashboard',
    'AppAuthor' => 'System Developer Panorama',
    'AppEmail' => 'system.developer@panorama-jtb.com',
    'AppDescription' => 'Arjuna Admin FrontEnd Dashboard',

    /*
    |--------------------------------------------------------------------------
    | Button Color
    |--------------------------------------------------------------------------
    */
    'btn' => [
        'add' => 'btn btn-sm bg-arjuna',
        'edit' => 'btn btn-sm btn-success',
        'delete' => 'btn btn-sm btn-success',
        'search' => 'btn btn-sm btn-success',
        'submit' => 'btn btn-sm btn-success',
        'cancel' => 'btn btn-sm btn-danger',
        'reject' => 'btn btn-sm btn-warning',
        'sysnc' => 'btn btn-sm btn-success',
        'actionTable' => 'btn btn-sm bg-arjuna',
    ],

    /*
    |--------------------------------------------------------------------------
    | Button Icon
    |--------------------------------------------------------------------------
    */
    'icon' => [
        'add' => 'icon-add',
        'edit' => 'icon-pencil',
        'view' => 'icon-eye',
        'void' => 'icon-blocked',
        'delete' => 'icon-bin',
        'search' => 'icon-search4',
        'submit' => 'icon-paperplane',
        'cancel' => 'icon-cross2',
        'sysnc' => 'icon-search4',
        'actionTable' => 'icon-gear',
        'active' => 'icon-checkmark',
        'inactive' => 'icon-cross2',
        'right' => 'icon-search4',
        'left' => 'icon-search4',
        'up' => 'icon-search4',
        'down' => 'icon-search4',
        'like' => 'icon-thumbs-up3',
        'dislike' => 'icon-thumbs-down3',
        'profile' => 'icon-search4',
        'ticket' => 'icon-ticket',
        'clipboard' => 'icon-clipboard3',
        'price' => 'icon-coin-dollar',
        'gear' => 'icon-gear',
        'list' => 'icon-list',
        'listNumber' => 'icon-list-numbered',
        'phone' => 'icon-phone',
        'hp' => 'icon-mobile',
        'calender' => 'icon-calendar',
        'undo' => 'icon-undo2',
        'redo' => 'icon-redo2',
        'forword' => 'icon-forward',
        'replay' => 'icon-replay',
        'replayAll' => 'icon-replay-all',
        'mail' => 'icon-mail5',
        'user' => 'icon-user-tie',
        'absensiIn' => 'icon-enter ',
        'absensiOut' => 'icon-exit',
        'download' => 'icon-download',
        'print' => 'icon-printer',
        'location' => 'icon-location4',
        'pesawat' => 'icon-airplane3'
    ],

    /*
    |--------------------------------------------------------------------------
    | Error Code
    |--------------------------------------------------------------------------
    */
    '403' => 'Please make sure that|you have logged in|and|use the menu|to access all the pages',
    '2002' => 'INTERNET CONNECTION OR DATABASE IS DOWN',

    // /*
    // |--------------------------------------------------------------------------
    // | Path Image User
    // |--------------------------------------------------------------------------
    // */
    // 'path-image' => '/attachment/user_picture/',

    /*
    |--------------------------------------------------------------------------
    | TRANSACTION
    |--------------------------------------------------------------------------
    */
    'transaction_retry' => 3,
    'transaction_hrm' => [ //Don't change to true if the value false
        // 'Franchise' => true,
    ],
    'transaction_ptes' => [ //Don't change to true if the value false
        // 'Franchise' => true,
        'Exhibition' => true,
    ],
    'transaction_dbvisa' => [ //Don't change to true if the value false
        'ProductDestination' => true,
    ],
    'transaction_dbfbd' => [ //Don't change to true if the value false
        'Exhibition' => true,
    ],
    /*
    |--------------------------------------------------------------------------
    | Default Pagination
    |--------------------------------------------------------------------------
    */
    'paging' => 'vendor.pagination.bootstrap-4',

    /*
    |--------------------------------------------------------------------------
    | Folder cloud google drive
    |--------------------------------------------------------------------------
    */

    'Gdrive' => [
        'root' => '1Lns25tcumdTv-nowAmAanHAAE8eDHVtG',
        'logo' => '1Lns25tcumdTv-nowAmAanHAAE8eDHVtG/1FRAOrrDKXeKClIRBIowFh9nyQ9FuVAaS',
        'attachment' => '1Lns25tcumdTv-nowAmAanHAAE8eDHVtG/1hcAYe1D1Axe41jsdHJcJEf4I0votVEKR',
        'ManualGuide' => '1hcAYe1D1Axe41jsdHJcJEf4I0votVEKR/14dBRGOh_nV7MdTOccdX1PD-02MMyu5iu',
        'TouristObject' => '1hcAYe1D1Axe41jsdHJcJEf4I0votVEKR/1nNLmxvJLUApa7OYkfGFUm0EQd_r8AGhf'
    ],

    /*
    |--------------------------------------------------------------------------
    | Super Users
    |--------------------------------------------------------------------------
    */
    'super' => [
        'users' => ['PJT174045','PT174045']
    ],

    /*
    |--------------------------------------------------------------------------
    | TRANSACTION
    |--------------------------------------------------------------------------
    */
    'transaction_ptes' => [
        'Client' => true
    ]

];

?>
