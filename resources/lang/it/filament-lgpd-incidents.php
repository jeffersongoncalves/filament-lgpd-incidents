<?php

return [
    'resource' => [
        'label' => 'Incidente',
        'plural_label' => 'Incidenti',
    ],

    'fields' => [
        'title' => 'Titolo',
        'description' => 'Descrizione',
        'status' => 'Stato',
        'risk' => 'Rischio',
        'discovered_at' => 'Noto dal',
        'occurred_at' => 'Avvenuto il',
        'due_at' => 'Notificare entro',
        'data_categories' => 'Categorie di dati',
        'affected_subjects' => 'Interessati coinvolti',
        'measures' => 'Misure',
        'anpd' => 'ANPD',
        'subjects' => 'Interessati',
        'anpd_notified_at' => 'ANPD notificata il',
        'anpd_protocol' => 'Protocollo ANPD',
        'subjects_notified_at' => 'Interessati informati il',
        'notified_at' => 'Notificato il',
        'closed_at' => 'Chiuso il',
    ],

    'help' => [
        'discovered_at' => 'Quando hai saputo che l\'incidente ha riguardato dati personali. Il termine di 3 giorni lavorativi parte da qui e non può essere modificato in seguito.',
    ],

    'risk' => [
        'pending' => 'In valutazione',
        'low' => 'Basso',
        'relevant' => 'Rilevante',
    ],

    'status' => [
        'open' => 'Aperto',
        'pending' => 'Notifica in sospeso',
        'overdue' => 'Scaduto',
        'closed' => 'Chiuso',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Valuta il rischio',
            'description' => 'Un rischio o danno rilevante per gli interessati (dati sensibili, di minori, finanziari o di autenticazione, larga scala...) richiede la notifica all\'ANPD e agli interessati. Registra la motivazione nelle misure.',
            'success' => 'Rischio valutato.',
        ],
        'notify_anpd' => [
            'label' => 'ANPD notificata',
            'success' => 'Notifica all\'ANPD registrata.',
        ],
        'notify_subjects' => [
            'label' => 'Interessati informati',
            'success' => 'Comunicazione agli interessati registrata.',
        ],
        'close' => [
            'label' => 'Chiudi',
            'success' => 'Incidente chiuso.',
        ],
    ],
];
