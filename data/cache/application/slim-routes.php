<?php return array (
  0 => 
  array (
    'GET' => 
    array (
      '/espocrm/api/v1/Activities/upcoming' => 'route3',
      '/espocrm/api/v1/Activities' => 'route4',
      '/espocrm/api/v1/Timeline' => 'route5',
      '/espocrm/api/v1/Timeline/busyRanges' => 'route6',
      '/espocrm/api/v1/' => 'route11',
      '/espocrm/api/v1/App/user' => 'route12',
      '/espocrm/api/v1/App/about' => 'route14',
      '/espocrm/api/v1/Metadata' => 'route15',
      '/espocrm/api/v1/I18n' => 'route16',
      '/espocrm/api/v1/Settings' => 'route17',
      '/espocrm/api/v1/Stream' => 'route20',
      '/espocrm/api/v1/GlobalStream' => 'route21',
      '/espocrm/api/v1/GlobalSearch' => 'route22',
      '/espocrm/api/v1/Admin/jobs' => 'route33',
      '/espocrm/api/v1/CurrencyRate' => 'route39',
      '/espocrm/api/v1/Email/inbox/notReadCounts' => 'route70',
      '/espocrm/api/v1/Email/insertFieldData' => 'route71',
      '/espocrm/api/v1/EmailAddress/search' => 'route72',
      '/espocrm/api/v1/Oidc/authorizationData' => 'route81',
    ),
    'POST' => 
    array (
      '/espocrm/api/v1/App/destroyAuthToken' => 'route13',
      '/espocrm/api/v1/Admin/rebuild' => 'route31',
      '/espocrm/api/v1/Admin/clearCache' => 'route32',
      '/espocrm/api/v1/Action' => 'route41',
      '/espocrm/api/v1/MassAction' => 'route42',
      '/espocrm/api/v1/Export' => 'route45',
      '/espocrm/api/v1/Import' => 'route48',
      '/espocrm/api/v1/Import/file' => 'route49',
      '/espocrm/api/v1/Attachment/fromImageUrl' => 'route58',
      '/espocrm/api/v1/Email/sendTest' => 'route62',
      '/espocrm/api/v1/Email/inbox/read' => 'route63',
      '/espocrm/api/v1/Email/inbox/important' => 'route65',
      '/espocrm/api/v1/Email/inbox/inTrash' => 'route67',
      '/espocrm/api/v1/UserSecurity/apiKey/generate' => 'route75',
      '/espocrm/api/v1/UserSecurity/password/recovery' => 'route77',
      '/espocrm/api/v1/UserSecurity/password/generate' => 'route78',
      '/espocrm/api/v1/User/passwordChangeRequest' => 'route79',
      '/espocrm/api/v1/User/changePasswordByRequest' => 'route80',
      '/espocrm/api/v1/Oidc/backchannelLogout' => 'route82',
    ),
    'PATCH' => 
    array (
      '/espocrm/api/v1/Settings' => 'route18',
    ),
    'PUT' => 
    array (
      '/espocrm/api/v1/Settings' => 'route19',
      '/espocrm/api/v1/CurrencyRate' => 'route40',
      '/espocrm/api/v1/Kanban/order' => 'route54',
      '/espocrm/api/v1/UserSecurity/password' => 'route76',
    ),
    'DELETE' => 
    array (
      '/espocrm/api/v1/Email/inbox/read' => 'route64',
      '/espocrm/api/v1/Email/inbox/important' => 'route66',
      '/espocrm/api/v1/Email/inbox/inTrash' => 'route68',
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espocrm/api/v1/Activities/([^/]+)/([^/]+)/composeEmailAddressList|/espocrm/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)|/espocrm/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)/list/([^/]+)|/espocrm/api/v1/Meeting/([^/]+)/attendees()()()()|/espocrm/api/v1/Call/([^/]+)/attendees()()()()()|/espocrm/api/v1/TargetList/([^/]+)/optedOut()()()()()()|/espocrm/api/v1/([^/]+)/action/([^/]+)()()()()()()|/espocrm/api/v1/([^/]+)/layout/([^/]+)()()()()()()()|/espocrm/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()()()()()()|/espocrm/api/v1/MassAction/([^/]+)/status()()()()()()()()()()|/espocrm/api/v1/Export/([^/]+)/status()()()()()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route0',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route1',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          5 => 
          array (
            0 => 'route2',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
              'targetType' => 'targetType',
            ),
          ),
          6 => 
          array (
            0 => 'route7',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route8',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route10',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route27',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          10 => 
          array (
            0 => 'route28',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          11 => 
          array (
            0 => 'route34',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          12 => 
          array (
            0 => 'route43',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          13 => 
          array (
            0 => 'route46',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/espocrm/api/v1/Kanban/([^/]+)|/espocrm/api/v1/Attachment/file/([^/]+)()|/espocrm/api/v1/User/([^/]+)/stream/own()()|/espocrm/api/v1/User/([^/]+)/acl()()()|/espocrm/api/v1/([^/]+)/([^/]+)()()()|/espocrm/api/v1/([^/]+)()()()()()|/espocrm/api/v1/([^/]+)/([^/]+)/followers()()()()()|/espocrm/api/v1/([^/]+)/([^/]+)/stream()()()()()()|/espocrm/api/v1/([^/]+)/([^/]+)/posts()()()()()()()|/espocrm/api/v1/([^/]+)/([^/]+)/updateStream()()()()()()()()|/espocrm/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route55',
            1 => 
            array (
              'entityType' => 'entityType',
            ),
          ),
          3 => 
          array (
            0 => 'route56',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route73',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route74',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route83',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route84',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          8 => 
          array (
            0 => 'route89',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route92',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route93',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'route94',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          12 => 
          array (
            0 => 'route97',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'POST' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espocrm/api/v1/Campaign/([^/]+)/generateMailMerge|/espocrm/api/v1/LeadCapture/([^/]+)()|/espocrm/api/v1/([^/]+)/action/([^/]+)()|/espocrm/api/v1/Admin/fieldManager/([^/]+)()()()|/espocrm/api/v1/MassAction/([^/]+)/subscribe()()()()|/espocrm/api/v1/Export/([^/]+)/subscribe()()()()()|/espocrm/api/v1/Import/([^/]+)/revert()()()()()()|/espocrm/api/v1/Import/([^/]+)/removeDuplicates()()()()()()()|/espocrm/api/v1/Import/([^/]+)/unmarkDuplicates()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route9',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route23',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
          4 => 
          array (
            0 => 'route25',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          5 => 
          array (
            0 => 'route35',
            1 => 
            array (
              'scope' => 'scope',
            ),
          ),
          6 => 
          array (
            0 => 'route44',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route47',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route50',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route51',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route52',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/espocrm/api/v1/Import/([^/]+)/exportErrors|/espocrm/api/v1/Attachment/chunk/([^/]+)()|/espocrm/api/v1/Attachment/copy/([^/]+)()()|/espocrm/api/v1/EmailTemplate/([^/]+)/prepare()()()|/espocrm/api/v1/Email/([^/]+)/attachments/copy()()()()|/espocrm/api/v1/Email/inbox/folders/([^/]+)()()()()()|/espocrm/api/v1/([^/]+)()()()()()()|/espocrm/api/v1/([^/]+)/([^/]+)/followers()()()()()()|/espocrm/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route53',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route57',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route59',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route60',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route61',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route69',
            1 => 
            array (
              'folderId' => 'folderId',
            ),
          ),
          8 => 
          array (
            0 => 'route85',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          9 => 
          array (
            0 => 'route90',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route98',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'OPTIONS' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espocrm/api/v1/LeadCapture/([^/]+))$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route24',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
        ),
      ),
    ),
    'PUT' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espocrm/api/v1/([^/]+)/action/([^/]+)|/espocrm/api/v1/([^/]+)/layout/([^/]+)()|/espocrm/api/v1/([^/]+)/layout/([^/]+)/([^/]+)()|/espocrm/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()|/espocrm/api/v1/([^/]+)/([^/]+)()()()()|/espocrm/api/v1/([^/]+)/([^/]+)/subscription()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route26',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          4 => 
          array (
            0 => 'route29',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          5 => 
          array (
            0 => 'route30',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
              'setId' => 'setId',
            ),
          ),
          6 => 
          array (
            0 => 'route36',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          7 => 
          array (
            0 => 'route86',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route95',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'PATCH' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espocrm/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/espocrm/api/v1/([^/]+)/([^/]+)())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route37',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route87',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'DELETE' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espocrm/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/espocrm/api/v1/([^/]+)/([^/]+)()|/espocrm/api/v1/([^/]+)/([^/]+)/followers()()|/espocrm/api/v1/([^/]+)/([^/]+)/subscription()()()|/espocrm/api/v1/([^/]+)/([^/]+)/([^/]+)()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route38',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route88',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route91',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route96',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route99',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
  ),
);