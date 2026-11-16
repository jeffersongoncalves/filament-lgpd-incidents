<?php

return [
    'resource' => [
        'label' => 'Incident',
        'plural_label' => 'Incidents',
    ],

    'fields' => [
        'title' => 'Title',
        'description' => 'Description',
        'status' => 'Status',
        'risk' => 'Risk',
        'discovered_at' => 'Discovered at',
        'occurred_at' => 'Occurred at',
        'due_at' => 'Notify by',
        'data_categories' => 'Data categories',
        'affected_subjects' => 'Affected data subjects',
        'measures' => 'Measures',
        'anpd' => 'ANPD',
        'subjects' => 'Data subjects',
        'anpd_notified_at' => 'ANPD notified at',
        'anpd_protocol' => 'ANPD protocol',
        'subjects_notified_at' => 'Data subjects notified at',
        'notified_at' => 'Notified at',
        'closed_at' => 'Closed at',
    ],

    'help' => [
        'discovered_at' => 'When you learned the incident affected personal data. The 3-business-day deadline starts here and cannot be changed later.',
    ],

    'risk' => [
        'pending' => 'Under assessment',
        'low' => 'Low',
        'relevant' => 'Relevant',
    ],

    'status' => [
        'open' => 'Open',
        'pending' => 'Notification pending',
        'overdue' => 'Overdue',
        'closed' => 'Closed',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Assess risk',
            'description' => 'Relevant risk or damage to the data subjects (sensitive data, children, financial or authentication data, large scale...) requires notifying the ANPD and the data subjects. Record the reasoning in the measures.',
            'success' => 'Risk assessed.',
        ],
        'notify_anpd' => [
            'label' => 'ANPD notified',
            'success' => 'ANPD notification recorded.',
        ],
        'notify_subjects' => [
            'label' => 'Data subjects notified',
            'success' => 'Data subject notification recorded.',
        ],
        'close' => [
            'label' => 'Close',
            'success' => 'Incident closed.',
        ],
    ],
];
