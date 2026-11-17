<?php

return [
    'resource' => [
        'label' => 'Incydent',
        'plural_label' => 'Incydenty',
    ],

    'fields' => [
        'title' => 'Tytuł',
        'description' => 'Opis',
        'status' => 'Status',
        'risk' => 'Ryzyko',
        'discovered_at' => 'Wykryto',
        'occurred_at' => 'Wystąpił',
        'due_at' => 'Zgłosić do',
        'data_categories' => 'Kategorie danych',
        'affected_subjects' => 'Osoby, których dotyczy',
        'measures' => 'Środki',
        'anpd' => 'ANPD',
        'subjects' => 'Osoby',
        'anpd_notified_at' => 'Zgłoszono ANPD',
        'anpd_protocol' => 'Numer zgłoszenia ANPD',
        'subjects_notified_at' => 'Powiadomiono osoby',
        'notified_at' => 'Powiadomiono',
        'closed_at' => 'Zamknięto',
    ],

    'help' => [
        'discovered_at' => 'Kiedy dowiedziałeś się, że incydent dotyczył danych osobowych. Termin 3 dni roboczych biegnie od tej chwili i nie można go później zmienić.',
    ],

    'risk' => [
        'pending' => 'W ocenie',
        'low' => 'Niskie',
        'relevant' => 'Istotne',
    ],

    'status' => [
        'open' => 'Otwarty',
        'pending' => 'Oczekuje na zgłoszenie',
        'overdue' => 'Po terminie',
        'closed' => 'Zamknięty',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Oceń ryzyko',
            'description' => 'Istotne ryzyko lub szkoda dla osób (dane wrażliwe, dane dzieci, dane finansowe lub uwierzytelniające, duża skala...) wymaga zgłoszenia do ANPD i powiadomienia osób. Zapisz uzasadnienie w środkach.',
            'success' => 'Ryzyko ocenione.',
        ],
        'notify_anpd' => [
            'label' => 'Zgłoszono ANPD',
            'success' => 'Zgłoszenie do ANPD zapisane.',
        ],
        'notify_subjects' => [
            'label' => 'Powiadomiono osoby',
            'success' => 'Powiadomienie osób zapisane.',
        ],
        'close' => [
            'label' => 'Zamknij',
            'success' => 'Incydent zamknięty.',
        ],
    ],
];
