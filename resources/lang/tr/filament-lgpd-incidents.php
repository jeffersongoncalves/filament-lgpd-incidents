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
        'partial' => 'Kısmi bildirim',
        'complemented_at' => 'Ek bilgi gönderilme tarihi',
    ],

    'help' => [
        'discovered_at' => 'Olayın kişisel verileri etkilediğini ne zaman öğrendiğiniz. 3 iş günlük süre buradan başlar ve sonradan değiştirilemez.',
        'partial' => 'Ayrıntılar henüz eksikse açın: ek bilgi 20 iş günü içinde gönderilmelidir (Karar CD/ANPD 15/2024, md. 6, §3).',
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
        'complement_overdue' => 'Ek bilgi gecikti',
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
        'complement' => [
            'label' => 'Ek bilgi ANPD\'ye gönderildi',
            'description' => 'Eksik bilgileri :date tarihine kadar ANPD\'ye gönderin.',
            'success' => 'Ek bilgi kaydedildi.',
        ],
    ],
];
