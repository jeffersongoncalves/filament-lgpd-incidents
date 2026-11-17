<?php

return [
    'resource' => [
        'label' => 'Incidente',
        'plural_label' => 'Incidentes',
    ],

    'fields' => [
        'title' => 'Título',
        'description' => 'Descrição',
        'status' => 'Estado',
        'risk' => 'Risco',
        'discovered_at' => 'Conhecimento em',
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
        'partial' => 'Comunicação parcial',
        'complemented_at' => 'Complemento enviado em',
    ],

    'help' => [
        'discovered_at' => 'Quando tomou conhecimento de que o incidente afetou dados pessoais. O prazo de 3 dias úteis começa aqui e não pode ser alterado depois.',
        'partial' => 'Ative quando ainda faltam informações: o complemento deve ser enviado em 20 dias úteis (Res. CD/ANPD 15/2024, art. 6.º, §3.º).',
    ],

    'risk' => [
        'pending' => 'Em avaliação',
        'low' => 'Baixo',
        'relevant' => 'Relevante',
    ],

    'status' => [
        'open' => 'Aberto',
        'pending' => 'Comunicação pendente',
        'overdue' => 'Em atraso',
        'closed' => 'Encerrado',
        'complement_overdue' => 'Complemento em atraso',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Avaliar risco',
            'description' => 'Um risco ou dano relevante para os titulares (dados sensíveis, de crianças, financeiros ou de autenticação, larga escala...) exige comunicar a ANPD e os titulares. Registe a justificação nas medidas.',
            'success' => 'Risco avaliado.',
        ],
        'notify_anpd' => [
            'label' => 'ANPD comunicada',
            'success' => 'Comunicação à ANPD registada.',
        ],
        'notify_subjects' => [
            'label' => 'Titulares comunicados',
            'success' => 'Comunicação aos titulares registada.',
        ],
        'close' => [
            'label' => 'Encerrar',
            'success' => 'Incidente encerrado.',
        ],
        'complement' => [
            'label' => 'Complemento enviado à ANPD',
            'description' => 'Envie as informações em falta à ANPD até :date.',
            'success' => 'Complemento registado.',
        ],
    ],
];
