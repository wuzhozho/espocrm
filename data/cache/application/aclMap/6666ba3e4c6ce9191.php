<?php
return (object) [
  'table' => (object) [
    'ActionHistoryRecord' => (object) [
      'read' => 'own',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'ArrayValue' => false,
    'Attachment' => (object) [
      'read' => 'own',
      'stream' => 'no',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'AuthLogRecord' => false,
    'AuthToken' => false,
    'AuthenticationProvider' => false,
    'Autofollow' => false,
    'Currency' => (object) [
      'read' => 'yes',
      'stream' => 'no',
      'edit' => 'yes',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Dashboard' => false,
    'DashboardTemplate' => false,
    'Email' => (object) [
      'read' => 'team',
      'stream' => 'team',
      'edit' => 'team',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'EmailAccount' => (object) [
      'read' => 'own',
      'stream' => 'no',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'EmailAccountScope' => true,
    'EmailAddress' => false,
    'EmailFilter' => (object) [
      'read' => 'own',
      'stream' => 'no',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'EmailFolder' => (object) [
      'read' => 'own',
      'stream' => 'no',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
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
    'Export' => false,
    'Extension' => false,
    'ExternalAccount' => true,
    'Formula' => false,
    'GlobalStream' => true,
    'GroupEmailFolder' => (object) [
      'read' => 'team',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Import' => true,
    'ImportError' => true,
    'InboundEmail' => false,
    'Integration' => false,
    'Job' => false,
    'LastViewed' => false,
    'LayoutRecord' => false,
    'LayoutSet' => false,
    'LeadCapture' => false,
    'LeadCaptureLogRecord' => false,
    'MassAction' => false,
    'Note' => (object) [
      'read' => 'own',
      'stream' => 'no',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'Notification' => (object) [
      'read' => 'own',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'own',
      'create' => 'no'
    ],
    'PasswordChangeRequest' => false,
    'PhoneNumber' => false,
    'Portal' => (object) [
      'read' => 'all',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'PortalRole' => false,
    'PortalUser' => false,
    'Preferences' => (object) [
      'read' => 'own',
      'stream' => 'no',
      'edit' => 'own',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Role' => false,
    'ScheduledJob' => false,
    'ScheduledJobLogRecord' => false,
    'Stream' => true,
    'Subscription' => false,
    'Team' => (object) [
      'read' => 'all',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Template' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'no',
      'create' => 'yes'
    ],
    'UniqueId' => false,
    'User' => (object) [
      'read' => 'team',
      'stream' => 'no',
      'edit' => 'own',
      'delete' => 'no',
      'create' => 'no'
    ],
    'UserData' => false,
    'Webhook' => true,
    'WebhookEventQueueItem' => false,
    'WebhookQueueItem' => false,
    'WorkingTimeCalendar' => true,
    'WorkingTimeRange' => true,
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
    'EmailQueueItem' => (object) [
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
    'MassEmail' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
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
    'Reminder' => false,
    'Target' => false,
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
    ]
  ],
  'fieldTable' => (object) [
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
    'ArrayValue' => (object) [],
    'Attachment' => (object) [],
    'AuthLogRecord' => (object) [],
    'AuthToken' => (object) [],
    'AuthenticationProvider' => (object) [],
    'Autofollow' => (object) [],
    'Currency' => (object) [],
    'DashboardTemplate' => (object) [],
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
    'EmailAccount' => (object) [
      'assignedUser' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ]
    ],
    'EmailAddress' => (object) [],
    'EmailFilter' => (object) [],
    'EmailFolder' => (object) [
      'assignedUser' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ]
    ],
    'EmailTemplate' => (object) [],
    'EmailTemplateCategory' => (object) [],
    'Extension' => (object) [],
    'ExternalAccount' => (object) [],
    'GroupEmailFolder' => (object) [],
    'Import' => (object) [],
    'ImportError' => (object) [],
    'InboundEmail' => (object) [],
    'Integration' => (object) [],
    'Job' => (object) [],
    'LayoutRecord' => (object) [],
    'LayoutSet' => (object) [],
    'LeadCapture' => (object) [],
    'LeadCaptureLogRecord' => (object) [],
    'Note' => (object) [],
    'Notification' => (object) [],
    'PasswordChangeRequest' => (object) [],
    'PhoneNumber' => (object) [],
    'Portal' => (object) [],
    'PortalRole' => (object) [],
    'Preferences' => (object) [],
    'Role' => (object) [],
    'ScheduledJob' => (object) [],
    'ScheduledJobLogRecord' => (object) [],
    'Subscription' => (object) [],
    'Team' => (object) [],
    'Template' => (object) [],
    'UniqueId' => (object) [],
    'User' => (object) [
      'password' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'passwordConfirm' => (object) [
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
      ],
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
      'auth2FA' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'UserData' => (object) [],
    'Webhook' => (object) [],
    'WebhookEventQueueItem' => (object) [],
    'WebhookQueueItem' => (object) [],
    'WorkingTimeCalendar' => (object) [],
    'WorkingTimeRange' => (object) [],
    'Account' => (object) [],
    'Call' => (object) [],
    'Campaign' => (object) [],
    'CampaignLogRecord' => (object) [],
    'CampaignTrackingUrl' => (object) [],
    'Case' => (object) [],
    'Contact' => (object) [],
    'Document' => (object) [],
    'DocumentFolder' => (object) [],
    'EmailQueueItem' => (object) [],
    'KnowledgeBaseArticle' => (object) [],
    'KnowledgeBaseCategory' => (object) [],
    'Lead' => (object) [],
    'MassEmail' => (object) [],
    'Meeting' => (object) [],
    'Opportunity' => (object) [],
    'Reminder' => (object) [],
    'TargetList' => (object) [],
    'Task' => (object) []
  ],
  'assignmentPermission' => 'team',
  'userPermission' => 'team',
  'messagePermission' => 'team',
  'portalPermission' => 'no',
  'groupEmailAccountPermission' => 'team',
  'exportPermission' => 'yes',
  'massUpdatePermission' => 'no',
  'followerManagementPermission' => 'team',
  'dataPrivacyPermission' => 'no',
  'auditPermission' => 'yes',
  'fieldTableQuickAccess' => (object) [
    'ActionHistoryRecord' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => [
            0 => 'authTokenId',
            1 => 'authTokenName',
            2 => 'authLogRecordId',
            3 => 'authLogRecordName'
          ]
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => [
            0 => 'authTokenId',
            1 => 'authTokenName',
            2 => 'authLogRecordId',
            3 => 'authLogRecordName'
          ]
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => [
            0 => 'authToken',
            1 => 'authLogRecord'
          ]
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => [
            0 => 'authToken',
            1 => 'authLogRecord'
          ]
        ]
      ]
    ],
    'ArrayValue' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Attachment' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'AuthLogRecord' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'AuthToken' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'AuthenticationProvider' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Autofollow' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Currency' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'DashboardTemplate' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Email' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => [
            0 => 'inboundEmailsIds',
            1 => 'inboundEmailsNames',
            2 => 'emailAccountsIds',
            3 => 'emailAccountsNames'
          ]
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => [
            0 => 'inboundEmailsIds',
            1 => 'inboundEmailsNames',
            2 => 'emailAccountsIds',
            3 => 'emailAccountsNames'
          ]
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => [
            0 => 'inboundEmails',
            1 => 'emailAccounts'
          ]
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => [
            0 => 'inboundEmails',
            1 => 'emailAccounts'
          ]
        ]
      ]
    ],
    'EmailAccount' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [
            0 => 'assignedUserId',
            1 => 'assignedUserName'
          ],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => [
            0 => 'assignedUserId',
            1 => 'assignedUserName'
          ]
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [
            0 => 'assignedUser'
          ],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => [
            0 => 'assignedUser'
          ]
        ]
      ]
    ],
    'EmailAddress' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'EmailFilter' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'EmailFolder' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [
            0 => 'assignedUserId',
            1 => 'assignedUserName'
          ],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => [
            0 => 'assignedUserId',
            1 => 'assignedUserName'
          ]
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [
            0 => 'assignedUser'
          ],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => [
            0 => 'assignedUser'
          ]
        ]
      ]
    ],
    'EmailTemplate' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'EmailTemplateCategory' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Extension' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'ExternalAccount' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'GroupEmailFolder' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Import' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'ImportError' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'InboundEmail' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Integration' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Job' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'LayoutRecord' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'LayoutSet' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'LeadCapture' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'LeadCaptureLogRecord' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Note' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Notification' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'PasswordChangeRequest' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'PhoneNumber' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Portal' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'PortalRole' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Preferences' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Role' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'ScheduledJob' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'ScheduledJobLogRecord' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Subscription' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Team' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Template' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'UniqueId' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'User' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [
            0 => 'workingTimeCalendarId',
            1 => 'workingTimeCalendarName'
          ],
          'no' => [
            0 => 'password',
            1 => 'passwordConfirm',
            2 => 'authMethod',
            3 => 'apiKey',
            4 => 'secretKey',
            5 => 'token',
            6 => 'gender',
            7 => 'dashboardTemplateId',
            8 => 'dashboardTemplateName',
            9 => 'auth2FA'
          ]
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => [
            0 => 'password',
            1 => 'passwordConfirm',
            2 => 'authMethod',
            3 => 'apiKey',
            4 => 'secretKey',
            5 => 'token',
            6 => 'gender',
            7 => 'dashboardTemplateId',
            8 => 'dashboardTemplateName',
            9 => 'workingTimeCalendarId',
            10 => 'workingTimeCalendarName',
            11 => 'auth2FA'
          ]
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [
            0 => 'workingTimeCalendar'
          ],
          'no' => [
            0 => 'password',
            1 => 'passwordConfirm',
            2 => 'authMethod',
            3 => 'apiKey',
            4 => 'secretKey',
            5 => 'token',
            6 => 'gender',
            7 => 'dashboardTemplate',
            8 => 'auth2FA'
          ]
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => [
            0 => 'password',
            1 => 'passwordConfirm',
            2 => 'authMethod',
            3 => 'apiKey',
            4 => 'secretKey',
            5 => 'token',
            6 => 'gender',
            7 => 'dashboardTemplate',
            8 => 'workingTimeCalendar',
            9 => 'auth2FA'
          ]
        ]
      ]
    ],
    'UserData' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Webhook' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'WebhookEventQueueItem' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'WebhookQueueItem' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'WorkingTimeCalendar' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'WorkingTimeRange' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Account' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Call' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Campaign' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'CampaignLogRecord' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'CampaignTrackingUrl' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Case' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Contact' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Document' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'DocumentFolder' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'EmailQueueItem' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'KnowledgeBaseArticle' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'KnowledgeBaseCategory' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Lead' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'MassEmail' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Meeting' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Opportunity' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Reminder' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'TargetList' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ],
    'Task' => (object) [
      'attributes' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ],
      'fields' => (object) [
        'read' => (object) [
          'yes' => [],
          'no' => []
        ],
        'edit' => (object) [
          'yes' => [],
          'no' => []
        ]
      ]
    ]
  ]
];
