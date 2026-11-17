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
        'partial' => 'Qismən bildiriş',
        'complemented_at' => 'Əlavə məlumat göndərilib',
    ],

    'help' => [
        'discovered_at' => 'İnsidentin şəxsi məlumatlara təsir etdiyini nə vaxt öyrəndiniz. 3 iş günü müddəti buradan başlayır və sonra dəyişdirilə bilməz.',
        'partial' => 'Hələ məlumat çatışmırsa aktiv edin: əlavə məlumat 20 iş günü ərzində göndərilməlidir (Qərar CD/ANPD 15/2024, mad. 6, §3).',
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
        'complement_overdue' => 'Əlavə məlumat gecikir',
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
        'complement' => [
            'label' => 'Əlavə məlumat ANPD-yə göndərildi',
            'description' => 'Çatışmayan məlumatı :date tarixinədək ANPD-yə göndərin.',
            'success' => 'Əlavə məlumat qeydə alındı.',
        ],
    ],
];
