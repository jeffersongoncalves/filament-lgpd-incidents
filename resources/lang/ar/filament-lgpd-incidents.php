<?php

return [
    'resource' => [
        'label' => 'حادث',
        'plural_label' => 'الحوادث',
    ],

    'fields' => [
        'title' => 'العنوان',
        'description' => 'الوصف',
        'status' => 'الحالة',
        'risk' => 'الخطر',
        'discovered_at' => 'عُلم به في',
        'occurred_at' => 'وقع في',
        'due_at' => 'الإبلاغ قبل',
        'data_categories' => 'فئات البيانات',
        'affected_subjects' => 'أصحاب البيانات المتأثرون',
        'measures' => 'الإجراءات',
        'anpd' => 'ANPD',
        'subjects' => 'أصحاب البيانات',
        'anpd_notified_at' => 'أُبلغت ANPD في',
        'anpd_protocol' => 'رقم بروتوكول ANPD',
        'subjects_notified_at' => 'أُبلغ أصحاب البيانات في',
        'notified_at' => 'أُبلغ في',
        'closed_at' => 'أُغلق في',
    ],

    'help' => [
        'discovered_at' => 'متى علمت أن الحادث أثّر على بيانات شخصية. تبدأ مهلة 3 أيام عمل من هنا ولا يمكن تغييرها لاحقًا.',
    ],

    'risk' => [
        'pending' => 'قيد التقييم',
        'low' => 'منخفض',
        'relevant' => 'جسيم',
    ],

    'status' => [
        'open' => 'مفتوح',
        'pending' => 'الإبلاغ معلّق',
        'overdue' => 'متأخر',
        'closed' => 'مغلق',
    ],

    'actions' => [
        'assess' => [
            'label' => 'تقييم الخطر',
            'description' => 'الخطر أو الضرر الجسيم لأصحاب البيانات (بيانات حساسة، بيانات أطفال، بيانات مالية أو بيانات مصادقة، نطاق واسع...) يستلزم إبلاغ ANPD وأصحاب البيانات. سجّل المبررات في الإجراءات.',
            'success' => 'تم تقييم الخطر.',
        ],
        'notify_anpd' => [
            'label' => 'تم إبلاغ ANPD',
            'success' => 'تم تسجيل إبلاغ ANPD.',
        ],
        'notify_subjects' => [
            'label' => 'تم إبلاغ أصحاب البيانات',
            'success' => 'تم تسجيل إبلاغ أصحاب البيانات.',
        ],
        'close' => [
            'label' => 'إغلاق',
            'success' => 'تم إغلاق الحادث.',
        ],
    ],
];
