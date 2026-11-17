<?php

return [
    'resource' => [
        'label' => 'Hodisa',
        'plural_label' => 'Hodisalar',
    ],

    'fields' => [
        'title' => 'Sarlavha',
        'description' => 'Tavsif',
        'status' => 'Holat',
        'risk' => 'Xavf',
        'discovered_at' => 'Ma\'lum bo\'lgan vaqt',
        'occurred_at' => 'Sodir bo\'lgan vaqt',
        'due_at' => 'Xabar berish muddati',
        'data_categories' => 'Ma\'lumot toifalari',
        'affected_subjects' => 'Ta\'sirlangan subyektlar',
        'measures' => 'Choralar',
        'anpd' => 'ANPD',
        'subjects' => 'Subyektlar',
        'anpd_notified_at' => 'ANPD ga xabar berilgan',
        'anpd_protocol' => 'ANPD protokoli',
        'subjects_notified_at' => 'Subyektlarga xabar berilgan',
        'notified_at' => 'Xabar berilgan',
        'closed_at' => 'Yopilgan',
        'partial' => 'Qisman xabarnoma',
        'complemented_at' => 'Qo\'shimcha ma\'lumot yuborilgan',
    ],

    'help' => [
        'discovered_at' => 'Hodisa shaxsiy ma\'lumotlarga ta\'sir qilganini qachon bildingiz. 3 ish kunlik muddat shu yerdan boshlanadi va keyin o\'zgartirib bo\'lmaydi.',
        'partial' => 'Ma\'lumotlar hali yetishmasa yoqing: qo\'shimcha ma\'lumot 20 ish kuni ichida yuborilishi kerak (CD/ANPD 15/2024 qarori, 6-modda, §3).',
    ],

    'risk' => [
        'pending' => 'Baholanmoqda',
        'low' => 'Past',
        'relevant' => 'Jiddiy',
    ],

    'status' => [
        'open' => 'Ochiq',
        'pending' => 'Xabar kutilmoqda',
        'overdue' => 'Muddati o\'tgan',
        'closed' => 'Yopilgan',
        'complement_overdue' => 'Qo\'shimcha ma\'lumot kechikdi',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Xavfni baholash',
            'description' => 'Subyektlar uchun jiddiy xavf yoki zarar (maxfiy, bolalar, moliyaviy yoki autentifikatsiya ma\'lumotlari, katta miqyos...) ANPD va subyektlarga xabar berishni talab qiladi. Asoslashni choralarda qayd eting.',
            'success' => 'Xavf baholandi.',
        ],
        'notify_anpd' => [
            'label' => 'ANPD ga xabar berildi',
            'success' => 'ANPD ga xabar qayd etildi.',
        ],
        'notify_subjects' => [
            'label' => 'Subyektlarga xabar berildi',
            'success' => 'Subyektlarga xabar qayd etildi.',
        ],
        'close' => [
            'label' => 'Yopish',
            'success' => 'Hodisa yopildi.',
        ],
        'complement' => [
            'label' => 'Qo\'shimcha ma\'lumot ANPDga yuborildi',
            'description' => 'Yetishmayotgan ma\'lumotlarni :date gacha ANPDga yuboring.',
            'success' => 'Qo\'shimcha ma\'lumot qayd etildi.',
        ],
    ],
];
