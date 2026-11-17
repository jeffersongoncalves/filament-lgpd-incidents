<?php

return [
    'resource' => [
        'label' => 'İnsident',
        'plural_label' => 'İnsidentlər',
    ],

    'fields' => [
        'title' => 'Başlıq',
        'description' => 'Təsvir',
        'status' => 'Status',
        'risk' => 'Risk',
        'discovered_at' => 'Məlum olub',
        'occurred_at' => 'Baş verib',
        'due_at' => 'Bildiriş son tarixi',
        'data_categories' => 'Məlumat kateqoriyaları',
        'affected_subjects' => 'Təsirlənmiş subyektlər',
        'measures' => 'Tədbirlər',
        'anpd' => 'ANPD',
        'subjects' => 'Subyektlər',
        'anpd_notified_at' => 'ANPD-yə bildirilib',
        'anpd_protocol' => 'ANPD protokolu',
        'subjects_notified_at' => 'Subyektlərə bildirilib',
        'notified_at' => 'Bildirilib',
        'closed_at' => 'Bağlanıb',
    ],

    'help' => [
        'discovered_at' => 'İnsidentin şəxsi məlumatlara təsir etdiyini nə vaxt öyrəndiniz. 3 iş günü müddəti buradan başlayır və sonra dəyişdirilə bilməz.',
    ],

    'risk' => [
        'pending' => 'Qiymətləndirilir',
        'low' => 'Aşağı',
        'relevant' => 'Əhəmiyyətli',
    ],

    'status' => [
        'open' => 'Açıq',
        'pending' => 'Bildiriş gözləyir',
        'overdue' => 'Gecikmiş',
        'closed' => 'Bağlı',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Riski qiymətləndir',
            'description' => 'Subyektlər üçün əhəmiyyətli risk və ya zərər (həssas, uşaq, maliyyə və ya autentifikasiya məlumatları, geniş miqyas...) ANPD-yə və subyektlərə bildiriş tələb edir. Əsaslandırmanı tədbirlərdə qeyd edin.',
            'success' => 'Risk qiymətləndirildi.',
        ],
        'notify_anpd' => [
            'label' => 'ANPD-yə bildirildi',
            'success' => 'ANPD bildirişi qeydə alındı.',
        ],
        'notify_subjects' => [
            'label' => 'Subyektlərə bildirildi',
            'success' => 'Subyektlərə bildiriş qeydə alındı.',
        ],
        'close' => [
            'label' => 'Bağla',
            'success' => 'İnsident bağlandı.',
        ],
    ],
];
