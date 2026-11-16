<?php

return [
    'resource' => [
        'label' => 'Incidente',
        'plural_label' => 'Incidentes',
    ],

    'fields' => [
        'title' => 'Título',
        'description' => 'Descrição',
        'status' => 'Situação',
        'risk' => 'Risco',
        'discovered_at' => 'Ciência em',
        'occurred_at' => 'Ocorrido em',
        'due_at' => 'Comunicar até',
        'data_categories' => 'Categorias de dados',
        'affected_subjects' => 'Titulares afetados',
        'measures' => 'Medidas',
        'anpd' => 'ANPD',
        'subjects' => 'Titulares',
        'anpd_notified_at' => 'ANPD comunicada em',
        'anpd_protocol' => 'Protocolo na ANPD',
        'subjects_notified_at' => 'Titulares comunicados em',
        'notified_at' => 'Comunicado em',
        'closed_at' => 'Encerrado em',
    ],

    'help' => [
        'discovered_at' => 'Quando você soube que o incidente afetou dados pessoais. O prazo de 3 dias úteis conta daqui e não pode ser alterado depois.',
    ],

    'risk' => [
        'pending' => 'Em avaliação',
        'low' => 'Baixo',
        'relevant' => 'Relevante',
    ],

    'status' => [
        'open' => 'Aberto',
        'pending' => 'Comunicação pendente',
        'overdue' => 'Vencido',
        'closed' => 'Encerrado',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Avaliar risco',
            'description' => 'Risco ou dano relevante aos titulares (dados sensíveis, de crianças, financeiros ou de autenticação, larga escala...) exige comunicar a ANPD e os titulares. Registre a justificativa nas medidas.',
            'success' => 'Risco avaliado.',
        ],
        'notify_anpd' => [
            'label' => 'ANPD comunicada',
            'success' => 'Comunicação à ANPD registrada.',
        ],
        'notify_subjects' => [
            'label' => 'Titulares comunicados',
            'success' => 'Comunicação aos titulares registrada.',
        ],
        'close' => [
            'label' => 'Encerrar',
            'success' => 'Incidente encerrado.',
        ],
    ],
];
