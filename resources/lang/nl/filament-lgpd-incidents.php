<?php

return [
    'resource' => [
        'label' => 'Incident',
        'plural_label' => 'Incidenten',
    ],

    'fields' => [
        'title' => 'Titel',
        'description' => 'Beschrijving',
        'status' => 'Status',
        'risk' => 'Risico',
        'discovered_at' => 'Bekend sinds',
        'occurred_at' => 'Opgetreden op',
        'due_at' => 'Melden vóór',
        'data_categories' => 'Gegevenscategorieën',
        'affected_subjects' => 'Getroffen betrokkenen',
        'measures' => 'Maatregelen',
        'anpd' => 'ANPD',
        'subjects' => 'Betrokkenen',
        'anpd_notified_at' => 'ANPD gemeld op',
        'anpd_protocol' => 'ANPD-kenmerk',
        'subjects_notified_at' => 'Betrokkenen geïnformeerd op',
        'notified_at' => 'Gemeld op',
        'closed_at' => 'Afgesloten op',
        'partial' => 'Gedeeltelijke melding',
        'complemented_at' => 'Aanvulling verzonden op',
    ],

    'help' => [
        'discovered_at' => 'Wanneer je hoorde dat het incident persoonsgegevens trof. De termijn van 3 werkdagen begint hier en kan later niet worden gewijzigd.',
        'partial' => 'Zet aan als er nog gegevens ontbreken: de aanvulling is dan binnen 20 werkdagen verschuldigd (Res. CD/ANPD 15/2024, art. 6, §3).',
    ],

    'risk' => [
        'pending' => 'In beoordeling',
        'low' => 'Laag',
        'relevant' => 'Relevant',
    ],

    'status' => [
        'open' => 'Open',
        'pending' => 'Melding open',
        'overdue' => 'Te laat',
        'closed' => 'Afgesloten',
        'complement_overdue' => 'Aanvulling te laat',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Risico beoordelen',
            'description' => 'Een relevant risico of relevante schade voor betrokkenen (gevoelige gegevens, gegevens van kinderen, financiële of inloggegevens, grote schaal...) vereist melding aan de ANPD en de betrokkenen. Leg de onderbouwing vast in de maatregelen.',
            'success' => 'Risico beoordeeld.',
        ],
        'notify_anpd' => [
            'label' => 'ANPD gemeld',
            'success' => 'Melding aan de ANPD vastgelegd.',
        ],
        'notify_subjects' => [
            'label' => 'Betrokkenen geïnformeerd',
            'success' => 'Informeren van betrokkenen vastgelegd.',
        ],
        'close' => [
            'label' => 'Afsluiten',
            'success' => 'Incident afgesloten.',
        ],
        'complement' => [
            'label' => 'Aanvulling naar de ANPD verzonden',
            'description' => 'Stuur de ontbrekende informatie vóór :date naar de ANPD.',
            'success' => 'Aanvulling vastgelegd.',
        ],
    ],
];
