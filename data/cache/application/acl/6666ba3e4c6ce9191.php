<?php
return (object) [
  'scopes' => (object) [
    'Currency' => (object) [
      'read' => 'yes',
      'edit' => 'yes'
    ],
    'Email' => (object) [
      'read' => 'team',
      'stream' => 'team',
      'edit' => 'team',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'EmailAccountScope' => true,
    'EmailTemplate' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'EmailTemplateCategory' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'ExternalAccount' => true,
    'GlobalStream' => true,
    'Import' => true,
    'Team' => (object) [
      'read' => 'all'
    ],
    'Template' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'User' => (object) [
      'read' => 'team',
      'edit' => 'own'
    ],
    'Webhook' => true,
    'WorkingTimeCalendar' => true,
    'Account' => (object) [
      'read' => 'team',
      'stream' => 'team',
      'edit' => 'team',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'Activities' => true,
    'Calendar' => true,
    'Call' => (object) [
      'read' => 'team',
      'stream' => 'team',
      'edit' => 'team',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'Campaign' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'Case' => (object) [
      'read' => 'team',
      'stream' => 'team',
      'edit' => 'team',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'Contact' => (object) [
      'read' => 'team',
      'stream' => 'team',
      'edit' => 'team',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'Document' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'DocumentFolder' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'KnowledgeBaseArticle' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'KnowledgeBaseCategory' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'Lead' => (object) [
      'read' => 'team',
      'stream' => 'team',
      'edit' => 'team',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'Meeting' => (object) [
      'read' => 'team',
      'stream' => 'team',
      'edit' => 'team',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'Opportunity' => (object) [
      'read' => 'team',
      'stream' => 'team',
      'edit' => 'team',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'TargetList' => (object) [
      'read' => 'team',
      'stream' => 'team',
      'edit' => 'team',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'Task' => (object) [
      'read' => 'team',
      'stream' => 'team',
      'edit' => 'team',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'Target' => false,
    'Note' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'Portal' => (object) [
      'read' => 'all',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Attachment' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'EmailAccount' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'EmailFilter' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'EmailFolder' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'GroupEmailFolder' => (object) [
      'read' => 'team',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Preferences' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Notification' => (object) [
      'read' => 'own',
      'edit' => 'no',
      'delete' => 'own',
      'create' => 'no'
    ],
    'ActionHistoryRecord' => (object) [
      'read' => 'own'
    ],
    'Role' => false,
    'PortalRole' => false,
    'ImportError' => true,
    'WorkingTimeRange' => true,
    'Stream' => true,
    'MassEmail' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'CampaignLogRecord' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'CampaignTrackingUrl' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'EmailQueueItem' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ]
  ],
  'fields' => (object) [
    'Email' => (object) [
      'inboundEmails' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'emailAccounts' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'Team' => (object) [],
    'User' => (object) [
      'gender' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'dashboardTemplate' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'workingTimeCalendar' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ],
      'password' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'passwordConfirm' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'auth2FA' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'authMethod' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'apiKey' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'secretKey' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'token' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'Account' => (object) [],
    'Call' => (object) [],
    'Campaign' => (object) [],
    'Case' => (object) [],
    'Contact' => (object) [],
    'Document' => (object) [],
    'DocumentFolder' => (object) [],
    'KnowledgeBaseArticle' => (object) [],
    'KnowledgeBaseCategory' => (object) [],
    'Lead' => (object) [],
    'Meeting' => (object) [],
    'Opportunity' => (object) [],
    'TargetList' => (object) [],
    'Task' => (object) [],
    'ActionHistoryRecord' => (object) [
      'authToken' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'authLogRecord' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'EmailAccount' => (object) [
      'assignedUser' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ]
    ],
    'EmailFolder' => (object) [
      'assignedUser' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ]
    ]
  ],
  'permissions' => (object) [
    'assignment' => 'team',
    'user' => 'team',
    'message' => 'team',
    'portal' => 'no',
    'groupEmailAccount' => 'team',
    'export' => 'yes',
    'massUpdate' => 'no',
    'followerManagement' => 'team',
    'dataPrivacy' => 'no',
    'audit' => 'yes'
  ]
];
