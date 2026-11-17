<?php

return [
    'resource' => [
        'label' => 'インシデント',
        'plural_label' => 'インシデント',
    ],

    'fields' => [
        'title' => 'タイトル',
        'description' => '説明',
        'status' => 'ステータス',
        'risk' => 'リスク',
        'discovered_at' => '認知日時',
        'occurred_at' => '発生日時',
        'due_at' => '通知期限',
        'data_categories' => 'データカテゴリ',
        'affected_subjects' => '影響を受けたデータ主体',
        'measures' => '対策',
        'anpd' => 'ANPD',
        'subjects' => 'データ主体',
        'anpd_notified_at' => 'ANPD 通知日時',
        'anpd_protocol' => 'ANPD 受付番号',
        'subjects_notified_at' => 'データ主体通知日時',
        'notified_at' => '通知日時',
        'closed_at' => '完了日時',
    ],

    'help' => [
        'discovered_at' => 'インシデントが個人データに影響したと認知した日時です。3 営業日の期限はここから始まり、後から変更できません。',
    ],

    'risk' => [
        'pending' => '評価中',
        'low' => '低',
        'relevant' => '重大',
    ],

    'status' => [
        'open' => '対応中',
        'pending' => '通知待ち',
        'overdue' => '期限切れ',
        'closed' => '完了',
    ],

    'actions' => [
        'assess' => [
            'label' => 'リスクを評価',
            'description' => 'データ主体への重大なリスクまたは損害（センシティブデータ、子どものデータ、金融・認証データ、大規模など）がある場合、ANPD とデータ主体への通知が必要です。判断の根拠を対策に記録してください。',
            'success' => 'リスクを評価しました。',
        ],
        'notify_anpd' => [
            'label' => 'ANPD に通知済み',
            'success' => 'ANPD への通知を記録しました。',
        ],
        'notify_subjects' => [
            'label' => 'データ主体に通知済み',
            'success' => 'データ主体への通知を記録しました。',
        ],
        'close' => [
            'label' => '完了にする',
            'success' => 'インシデントを完了しました。',
        ],
    ],
];
