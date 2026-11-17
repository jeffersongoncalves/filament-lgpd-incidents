<?php

return [
    'resource' => [
        'label' => 'Olay',
        'plural_label' => 'Olaylar',
    ],

    'fields' => [
        'title' => 'Başlık',
        'description' => 'Açıklama',
        'status' => 'Durum',
        'risk' => 'Risk',
        'discovered_at' => 'Öğrenilme',
        'occurred_at' => 'Gerçekleşme',
        'due_at' => 'Bildirim son tarihi',
        'data_categories' => 'Veri kategorileri',
        'affected_subjects' => 'Etkilenen ilgili kişiler',
        'measures' => 'Önlemler',
        'anpd' => 'ANPD',
        'subjects' => 'İlgili kişiler',
        'anpd_notified_at' => 'ANPD\'ye bildirilme',
        'anpd_protocol' => 'ANPD protokolü',
        'subjects_notified_at' => 'İlgili kişilere bildirilme',
        'notified_at' => 'Bildirilme',
        'closed_at' => 'Kapanma',
    ],

    'help' => [
        'discovered_at' => 'Olayın kişisel verileri etkilediğini ne zaman öğrendiğiniz. 3 iş günlük süre buradan başlar ve sonradan değiştirilemez.',
    ],

    'risk' => [
        'pending' => 'Değerlendiriliyor',
        'low' => 'Düşük',
        'relevant' => 'Önemli',
    ],

    'status' => [
        'open' => 'Açık',
        'pending' => 'Bildirim bekliyor',
        'overdue' => 'Süresi geçmiş',
        'closed' => 'Kapalı',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Riski değerlendir',
            'description' => 'İlgili kişiler için önemli risk veya zarar (hassas veriler, çocuk verileri, finansal veya kimlik doğrulama verileri, büyük ölçek...) ANPD\'ye ve ilgili kişilere bildirim gerektirir. Gerekçeyi önlemlere yazın.',
            'success' => 'Risk değerlendirildi.',
        ],
        'notify_anpd' => [
            'label' => 'ANPD\'ye bildirildi',
            'success' => 'ANPD bildirimi kaydedildi.',
        ],
        'notify_subjects' => [
            'label' => 'İlgili kişilere bildirildi',
            'success' => 'İlgili kişilere bildirim kaydedildi.',
        ],
        'close' => [
            'label' => 'Kapat',
            'success' => 'Olay kapatıldı.',
        ],
    ],
];
