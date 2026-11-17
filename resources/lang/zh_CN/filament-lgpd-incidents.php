<?php

return [
    'resource' => [
        'label' => '事件',
        'plural_label' => '事件',
    ],

    'fields' => [
        'title' => '标题',
        'description' => '描述',
        'status' => '状态',
        'risk' => '风险',
        'discovered_at' => '知悉时间',
        'occurred_at' => '发生时间',
        'due_at' => '通知截止',
        'data_categories' => '数据类别',
        'affected_subjects' => '受影响的数据主体',
        'measures' => '措施',
        'anpd' => 'ANPD',
        'subjects' => '数据主体',
        'anpd_notified_at' => '已通知 ANPD 时间',
        'anpd_protocol' => 'ANPD 受理编号',
        'subjects_notified_at' => '已通知数据主体时间',
        'notified_at' => '通知时间',
        'closed_at' => '关闭时间',
        'partial' => '部分通报',
        'complemented_at' => '补充信息发送时间',
    ],

    'help' => [
        'discovered_at' => '你得知事件影响个人数据的时间。3 个工作日的期限从此开始，之后无法修改。',
        'partial' => '尚缺信息时开启：补充信息须在 20 个工作日内提交（CD/ANPD 第 15/2024 号决议第 6 条 §3）。',
    ],

    'risk' => [
        'pending' => '评估中',
        'low' => '低',
        'relevant' => '重大',
    ],

    'status' => [
        'open' => '处理中',
        'pending' => '待通知',
        'overdue' => '已逾期',
        'closed' => '已关闭',
        'complement_overdue' => '补充信息逾期',
    ],

    'actions' => [
        'assess' => [
            'label' => '评估风险',
            'description' => '对数据主体存在重大风险或损害（敏感数据、儿童数据、财务或身份验证数据、大规模等）时，必须通知 ANPD 和数据主体。请在措施中记录判断依据。',
            'success' => '已评估风险。',
        ],
        'notify_anpd' => [
            'label' => '已通知 ANPD',
            'success' => '已记录对 ANPD 的通知。',
        ],
        'notify_subjects' => [
            'label' => '已通知数据主体',
            'success' => '已记录对数据主体的通知。',
        ],
        'close' => [
            'label' => '关闭',
            'success' => '事件已关闭。',
        ],
        'complement' => [
            'label' => '已向 ANPD 发送补充信息',
            'description' => '请在 :date 前向 ANPD 发送缺失的信息。',
            'success' => '已记录补充信息。',
        ],
    ],
];
