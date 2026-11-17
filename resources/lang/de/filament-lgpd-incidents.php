<?php

return [
    'resource' => [
        'label' => 'Vorfall',
        'plural_label' => 'Vorfälle',
    ],

    'fields' => [
        'title' => 'Titel',
        'description' => 'Beschreibung',
        'status' => 'Status',
        'risk' => 'Risiko',
        'discovered_at' => 'Bekannt seit',
        'occurred_at' => 'Eingetreten am',
        'due_at' => 'Melden bis',
        'data_categories' => 'Datenkategorien',
        'affected_subjects' => 'Betroffene Personen',
        'measures' => 'Maßnahmen',
        'anpd' => 'ANPD',
        'subjects' => 'Betroffene',
        'anpd_notified_at' => 'ANPD gemeldet am',
        'anpd_protocol' => 'ANPD-Aktenzeichen',
        'subjects_notified_at' => 'Betroffene informiert am',
        'notified_at' => 'Gemeldet am',
        'closed_at' => 'Abgeschlossen am',
        'partial' => 'Teilmeldung',
        'complemented_at' => 'Ergänzung gesendet am',
    ],

    'help' => [
        'discovered_at' => 'Wann Sie erfahren haben, dass der Vorfall personenbezogene Daten betrifft. Die Frist von 3 Werktagen beginnt hier und kann später nicht geändert werden.',
        'partial' => 'Aktivieren, wenn noch Angaben fehlen: Die Ergänzung ist dann binnen 20 Arbeitstagen fällig (Res. CD/ANPD 15/2024, Art. 6, §3).',
    ],

    'risk' => [
        'pending' => 'In Bewertung',
        'low' => 'Gering',
        'relevant' => 'Erheblich',
    ],

    'status' => [
        'open' => 'Offen',
        'pending' => 'Meldung ausstehend',
        'overdue' => 'Überfällig',
        'closed' => 'Abgeschlossen',
        'complement_overdue' => 'Ergänzung überfällig',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Risiko bewerten',
            'description' => 'Ein erhebliches Risiko oder ein erheblicher Schaden für die Betroffenen (sensible Daten, Daten von Kindern, Finanz- oder Zugangsdaten, großer Umfang...) erfordert die Meldung an die ANPD und die Betroffenen. Halten Sie die Begründung in den Maßnahmen fest.',
            'success' => 'Risiko bewertet.',
        ],
        'notify_anpd' => [
            'label' => 'ANPD gemeldet',
            'success' => 'Meldung an die ANPD erfasst.',
        ],
        'notify_subjects' => [
            'label' => 'Betroffene informiert',
            'success' => 'Information der Betroffenen erfasst.',
        ],
        'close' => [
            'label' => 'Abschließen',
            'success' => 'Vorfall abgeschlossen.',
        ],
        'complement' => [
            'label' => 'Ergänzung an die ANPD gesendet',
            'description' => 'Senden Sie die fehlenden Angaben bis :date an die ANPD.',
            'success' => 'Ergänzung erfasst.',
        ],
    ],
];
