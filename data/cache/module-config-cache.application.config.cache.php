<?php
return array (
  'service_manager' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Zend\\Db\\Adapter\\AdapterAbstractServiceFactory',
      1 => 'Zend\\InputFilter\\InputFilterAbstractServiceFactory',
      2 => 'Zend\\Db\\Adapter\\AdapterAbstractServiceFactory',
      3 => 'ZF\\Apigility\\DbConnectedResourceAbstractFactory',
      4 => 'ZF\\Apigility\\TableGatewayAbstractFactory',
    ),
    'factories' => 
    array (
      'Zend\\Db\\Adapter\\AdapterInterface' => 'Zend\\Db\\Adapter\\AdapterServiceFactory',
      'FilterManager' => 'Zend\\Filter\\FilterPluginManagerFactory',
      'HydratorManager' => 'Zend\\Hydrator\\HydratorPluginManagerFactory',
      'InputFilterManager' => 'Zend\\InputFilter\\InputFilterPluginManagerFactory',
      'Zend\\Paginator\\AdapterPluginManager' => 'Zend\\Paginator\\AdapterPluginManagerFactory',
      'Zend\\Paginator\\ScrollingStylePluginManager' => 'Zend\\Paginator\\ScrollingStylePluginManagerFactory',
      'Zend\\Router\\Http\\TreeRouteStack' => 'Zend\\Router\\Http\\HttpRouterFactory',
      'Zend\\Router\\RoutePluginManager' => 'Zend\\Router\\RoutePluginManagerFactory',
      'Zend\\Router\\RouteStackInterface' => 'Zend\\Router\\RouterFactory',
      'ValidatorManager' => 'Zend\\Validator\\ValidatorPluginManagerFactory',
      'ZF\\Apigility\\MvcAuth\\UnauthenticatedListener' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\MvcAuth\\UnauthorizedListener' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\Documentation\\ApiFactory' => 'ZF\\Apigility\\Documentation\\Factory\\ApiFactoryFactory',
      'ZF\\ApiProblem\\Listener\\ApiProblemListener' => 'ZF\\ApiProblem\\Factory\\ApiProblemListenerFactory',
      'ZF\\ApiProblem\\Listener\\RenderErrorListener' => 'ZF\\ApiProblem\\Factory\\RenderErrorListenerFactory',
      'ZF\\ApiProblem\\Listener\\SendApiProblemResponseListener' => 'ZF\\ApiProblem\\Factory\\SendApiProblemResponseListenerFactory',
      'ZF\\ApiProblem\\View\\ApiProblemRenderer' => 'ZF\\ApiProblem\\Factory\\ApiProblemRendererFactory',
      'ZF\\ApiProblem\\View\\ApiProblemStrategy' => 'ZF\\ApiProblem\\Factory\\ApiProblemStrategyFactory',
      'ZF\\Configuration\\ConfigResource' => 'ZF\\Configuration\\Factory\\ConfigResourceFactory',
      'ZF\\Configuration\\ConfigResourceFactory' => 'ZF\\Configuration\\Factory\\ResourceFactoryFactory',
      'ZF\\Configuration\\ConfigWriter' => 'ZF\\Configuration\\Factory\\ConfigWriterFactory',
      'ZF\\Configuration\\ModuleUtils' => 'ZF\\Configuration\\Factory\\ModuleUtilsFactory',
      'ZF\\OAuth2\\Adapter\\PdoAdapter' => 'ZF\\OAuth2\\Factory\\PdoAdapterFactory',
      'ZF\\OAuth2\\Adapter\\IbmDb2Adapter' => 'ZF\\OAuth2\\Factory\\IbmDb2AdapterFactory',
      'ZF\\OAuth2\\Adapter\\MongoAdapter' => 'ZF\\OAuth2\\Factory\\MongoAdapterFactory',
      'ZF\\OAuth2\\Provider\\UserId\\AuthenticationService' => 'ZF\\OAuth2\\Provider\\UserId\\AuthenticationServiceFactory',
      'ZF\\OAuth2\\Service\\OAuth2Server' => 'ZF\\MvcAuth\\Factory\\NamedOAuth2ServerFactory',
      'ZF\\MvcAuth\\Authentication' => 'ZF\\MvcAuth\\Factory\\AuthenticationServiceFactory',
      'ZF\\MvcAuth\\ApacheResolver' => 'ZF\\MvcAuth\\Factory\\ApacheResolverFactory',
      'ZF\\MvcAuth\\FileResolver' => 'ZF\\MvcAuth\\Factory\\FileResolverFactory',
      'ZF\\MvcAuth\\Authentication\\DefaultAuthenticationListener' => 'ZF\\MvcAuth\\Factory\\DefaultAuthenticationListenerFactory',
      'ZF\\MvcAuth\\Authentication\\AuthHttpAdapter' => 'ZF\\MvcAuth\\Factory\\DefaultAuthHttpAdapterFactory',
      'ZF\\MvcAuth\\Authorization\\AclAuthorization' => 'ZF\\MvcAuth\\Factory\\AclAuthorizationFactory',
      'ZF\\MvcAuth\\Authorization\\DefaultAuthorizationListener' => 'ZF\\MvcAuth\\Factory\\DefaultAuthorizationListenerFactory',
      'ZF\\MvcAuth\\Authorization\\DefaultResourceResolverListener' => 'ZF\\MvcAuth\\Factory\\DefaultResourceResolverListenerFactory',
      'Zend\\Authentication\\Storage\\NonPersistent' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\MvcAuth\\Authentication\\DefaultAuthenticationPostListener' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\MvcAuth\\Authorization\\DefaultAuthorizationPostListener' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Hal\\Extractor\\LinkExtractor' => 'ZF\\Hal\\Factory\\LinkExtractorFactory',
      'ZF\\Hal\\Extractor\\LinkCollectionExtractor' => 'ZF\\Hal\\Factory\\LinkCollectionExtractorFactory',
      'ZF\\Hal\\HalConfig' => 'ZF\\Hal\\Factory\\HalConfigFactory',
      'ZF\\Hal\\JsonRenderer' => 'ZF\\Hal\\Factory\\HalJsonRendererFactory',
      'ZF\\Hal\\JsonStrategy' => 'ZF\\Hal\\Factory\\HalJsonStrategyFactory',
      'ZF\\Hal\\Link\\LinkUrlBuilder' => 'ZF\\Hal\\Factory\\LinkUrlBuilderFactory',
      'ZF\\Hal\\MetadataMap' => 'ZF\\Hal\\Factory\\MetadataMapFactory',
      'ZF\\Hal\\RendererOptions' => 'ZF\\Hal\\Factory\\RendererOptionsFactory',
      'ZF\\ContentNegotiation\\ContentTypeListener' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Request' => 'ZF\\ContentNegotiation\\Factory\\RequestFactory',
      'ZF\\ContentNegotiation\\AcceptListener' => 'ZF\\ContentNegotiation\\Factory\\AcceptListenerFactory',
      'ZF\\ContentNegotiation\\AcceptFilterListener' => 'ZF\\ContentNegotiation\\Factory\\AcceptFilterListenerFactory',
      'ZF\\ContentNegotiation\\ContentTypeFilterListener' => 'ZF\\ContentNegotiation\\Factory\\ContentTypeFilterListenerFactory',
      'ZF\\ContentNegotiation\\ContentNegotiationOptions' => 'ZF\\ContentNegotiation\\Factory\\ContentNegotiationOptionsFactory',
      'ZF\\ContentNegotiation\\HttpMethodOverrideListener' => 'ZF\\ContentNegotiation\\Factory\\HttpMethodOverrideListenerFactory',
      'ZF\\ContentValidation\\ContentValidationListener' => 'ZF\\ContentValidation\\ContentValidationListenerFactory',
      'ZF\\Rest\\OptionsListener' => 'ZF\\Rest\\Factory\\OptionsListenerFactory',
      'ZF\\Rpc\\OptionsListener' => 'ZF\\Rpc\\Factory\\OptionsListenerFactory',
      'ZF\\Versioning\\AcceptListener' => 'ZF\\Versioning\\Factory\\AcceptListenerFactory',
      'ZF\\Versioning\\ContentTypeListener' => 'ZF\\Versioning\\Factory\\ContentTypeListenerFactory',
      'ZF\\Versioning\\VersionListener' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
    'aliases' => 
    array (
      'Zend\\Db\\Adapter\\Adapter' => 'Zend\\Db\\Adapter\\AdapterInterface',
      'HttpRouter' => 'Zend\\Router\\Http\\TreeRouteStack',
      'router' => 'Zend\\Router\\RouteStackInterface',
      'Router' => 'Zend\\Router\\RouteStackInterface',
      'RoutePluginManager' => 'Zend\\Router\\RoutePluginManager',
      'ZF\\ApiProblem\\ApiProblemListener' => 'ZF\\ApiProblem\\Listener\\ApiProblemListener',
      'ZF\\ApiProblem\\RenderErrorListener' => 'ZF\\ApiProblem\\Listener\\RenderErrorListener',
      'ZF\\ApiProblem\\ApiProblemRenderer' => 'ZF\\ApiProblem\\View\\ApiProblemRenderer',
      'ZF\\ApiProblem\\ApiProblemStrategy' => 'ZF\\ApiProblem\\View\\ApiProblemStrategy',
      'ZF\\OAuth2\\Provider\\UserId' => 'ZF\\OAuth2\\Provider\\UserId\\AuthenticationService',
      'authentication' => 'ZF\\MvcAuth\\Authentication',
      'authorization' => 'ZF\\MvcAuth\\Authorization\\AuthorizationInterface',
      'ZF\\MvcAuth\\Authorization\\AuthorizationInterface' => 'ZF\\MvcAuth\\Authorization\\AclAuthorization',
    ),
    'delegators' => 
    array (
      'ZF\\MvcAuth\\Authentication\\DefaultAuthenticationListener' => 
      array (
        0 => 'ZF\\MvcAuth\\Factory\\AuthenticationAdapterDelegatorFactory',
      ),
    ),
    'invokables' => 
    array (
      'ZF\\Rest\\RestParametersListener' => 'ZF\\Rest\\Listener\\RestParametersListener',
    ),
  ),
  'route_manager' => 
  array (
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'zf-apigility' => 
      array (
        'type' => 'literal',
        'options' => 
        array (
          'route' => '/apigility',
        ),
        'may_terminate' => false,
        'child_routes' => 
        array (
          'documentation' => 
          array (
            'type' => 'segment',
            'options' => 
            array (
              'route' => '/documentation[/:api[-v:version][/:service]]',
              'constraints' => 
              array (
                'api' => '[a-zA-Z][a-zA-Z0-9_.]+',
              ),
              'defaults' => 
              array (
                'controller' => 'ZF\\Apigility\\Documentation\\Controller',
                'action' => 'show',
              ),
            ),
          ),
        ),
      ),
      'oauth' => 
      array (
        'type' => 'literal',
        'options' => 
        array (
          'route' => '/oauth',
          'defaults' => 
          array (
            'controller' => 'ZF\\OAuth2\\Controller\\Auth',
            'action' => 'token',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'revoke' => 
          array (
            'type' => 'literal',
            'options' => 
            array (
              'route' => '/revoke',
              'defaults' => 
              array (
                'action' => 'revoke',
              ),
            ),
          ),
          'authorize' => 
          array (
            'type' => 'literal',
            'options' => 
            array (
              'route' => '/authorize',
              'defaults' => 
              array (
                'action' => 'authorize',
              ),
            ),
          ),
          'resource' => 
          array (
            'type' => 'literal',
            'options' => 
            array (
              'route' => '/resource',
              'defaults' => 
              array (
                'action' => 'resource',
              ),
            ),
          ),
          'code' => 
          array (
            'type' => 'literal',
            'options' => 
            array (
              'route' => '/receivecode',
              'defaults' => 
              array (
                'action' => 'receiveCode',
              ),
            ),
          ),
        ),
      ),
      'home' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'music.rpc.status' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '[/v:version]/status',
          'defaults' => 
          array (
            'controller' => 'Music\\V1\\Rpc\\Status\\Controller',
            'action' => 'status',
            'version' => 1,
          ),
          'constraints' => 
          array (
            'version' => '\\d+',
          ),
        ),
      ),
    ),
  ),
  'asset_manager' => 
  array (
    'resolver_configs' => 
    array (
      'paths' => 
      array (
        0 => 'C:\\xampp\\htdocs\\service\\vendor\\zfcampus\\zf-apigility\\config/../asset',
      ),
    ),
  ),
  'zf-apigility' => 
  array (
    'db-connected' => 
    array (
    ),
  ),
  'controllers' => 
  array (
    'factories' => 
    array (
      'ZF\\Apigility\\Documentation\\Controller' => 'ZF\\Apigility\\Documentation\\ControllerFactory',
      'ZF\\OAuth2\\Controller\\Auth' => 'ZF\\OAuth2\\Factory\\AuthControllerFactory',
      'Application\\Controller\\IndexController' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Music\\V1\\Rpc\\Status\\Controller' => 'Music\\V1\\Rpc\\Status\\StatusControllerFactory',
    ),
    'abstract_factories' => 
    array (
      0 => 'ZF\\Rest\\Factory\\RestControllerFactory',
      1 => 'ZF\\Rpc\\Factory\\RpcControllerFactory',
    ),
  ),
  'zf-content-negotiation' => 
  array (
    'controllers' => 
    array (
      'ZF\\Apigility\\Documentation\\Controller' => 'Documentation',
      'ZF\\OAuth2\\Controller\\Auth' => 
      array (
        'ZF\\ContentNegotiation\\JsonModel' => 
        array (
          0 => 'application/json',
          1 => 'application/*+json',
        ),
        'Zend\\View\\Model\\ViewModel' => 
        array (
          0 => 'text/html',
          1 => 'application/xhtml+xml',
        ),
      ),
      'Music\\V1\\Rpc\\Status\\Controller' => 'Json',
    ),
    'accept_whitelist' => 
    array (
      'ZF\\Apigility\\Documentation\\Controller' => 
      array (
        0 => 'application/vnd.swagger+json',
        1 => 'application/json',
      ),
      'Music\\V1\\Rpc\\Status\\Controller' => 
      array (
        0 => 'application/vnd.music.v1+json',
        1 => 'application/json',
        2 => 'application/*+json',
      ),
    ),
    'selectors' => 
    array (
      'Documentation' => 
      array (
        'Zend\\View\\Model\\ViewModel' => 
        array (
          0 => 'text/html',
          1 => 'application/xhtml+xml',
        ),
        'ZF\\Apigility\\Documentation\\JsonModel' => 
        array (
          0 => 'application/json',
        ),
      ),
      'HalJson' => 
      array (
        'ZF\\Hal\\View\\HalJsonModel' => 
        array (
          0 => 'application/json',
          1 => 'application/*+json',
        ),
      ),
      'Json' => 
      array (
        'ZF\\ContentNegotiation\\JsonModel' => 
        array (
          0 => 'application/json',
          1 => 'application/*+json',
        ),
      ),
    ),
    'content_type_whitelist' => 
    array (
      'Music\\V1\\Rpc\\Status\\Controller' => 
      array (
        0 => 'application/vnd.music.v1+json',
        1 => 'application/json',
      ),
    ),
    'x_http_method_override_enabled' => false,
    'http_override_methods' => 
    array (
    ),
  ),
  'view_helpers' => 
  array (
    'aliases' => 
    array (
      'agacceptheaders' => 'ZF\\Apigility\\Documentation\\View\\AgAcceptHeaders',
      'agAcceptHeaders' => 'ZF\\Apigility\\Documentation\\View\\AgAcceptHeaders',
      'agcontenttypeheaders' => 'ZF\\Apigility\\Documentation\\View\\AgContentTypeHeaders',
      'agContentTypeHeaders' => 'ZF\\Apigility\\Documentation\\View\\AgContentTypeHeaders',
      'agservicepath' => 'ZF\\Apigility\\Documentation\\View\\AgServicePath',
      'agServicePath' => 'ZF\\Apigility\\Documentation\\View\\AgServicePath',
      'agstatuscodes' => 'ZF\\Apigility\\Documentation\\View\\AgStatusCodes',
      'agStatusCodes' => 'ZF\\Apigility\\Documentation\\View\\AgStatusCodes',
      'agtransformdescription' => 'ZF\\Apigility\\Documentation\\View\\AgTransformDescription',
      'agTransformDescription' => 'ZF\\Apigility\\Documentation\\View\\AgTransformDescription',
    ),
    'factories' => 
    array (
      'ZF\\Apigility\\Documentation\\View\\AgAcceptHeaders' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\Documentation\\View\\AgContentTypeHeaders' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\Documentation\\View\\AgServicePath' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\Documentation\\View\\AgStatusCodes' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\Documentation\\View\\AgTransformDescription' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Hal' => 'ZF\\Hal\\Factory\\HalViewHelperFactory',
    ),
  ),
  'view_manager' => 
  array (
    'template_path_stack' => 
    array (
      0 => 'C:\\xampp\\htdocs\\service\\vendor\\zfcampus\\zf-apigility-documentation\\config/../view',
      1 => 'C:\\xampp\\htdocs\\service\\vendor\\zfcampus\\zf-oauth2\\config/../view',
      2 => 'C:\\xampp\\htdocs\\service\\module\\Application\\config/../view',
    ),
    'display_exceptions' => true,
    'template_map' => 
    array (
      'oauth/authorize' => 'C:\\xampp\\htdocs\\service\\vendor\\zfcampus\\zf-oauth2\\config/../view/zf/auth/authorize.phtml',
      'oauth/receive-code' => 'C:\\xampp\\htdocs\\service\\vendor\\zfcampus\\zf-oauth2\\config/../view/zf/auth/receive-code.phtml',
      'layout/layout' => 'C:\\xampp\\htdocs\\service\\module\\Application\\config/../view/layout/layout.phtml',
      'application/index/index' => 'C:\\xampp\\htdocs\\service\\module\\Application\\config/../view/application/index/index.phtml',
      'error/404' => 'C:\\xampp\\htdocs\\service\\module\\Application\\config/../view/error/404.phtml',
      'error/index' => 'C:\\xampp\\htdocs\\service\\module\\Application\\config/../view/error/index.phtml',
    ),
    'display_not_found_reason' => true,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'strategies' => 
    array (
      0 => 'ViewJsonStrategy',
    ),
  ),
  'zf-api-problem' => 
  array (
  ),
  'zf-configuration' => 
  array (
    'config_file' => 'config/autoload/development.php',
  ),
  'zf-oauth2' => 
  array (
    'grant_types' => 
    array (
      'client_credentials' => true,
      'authorization_code' => true,
      'password' => true,
      'refresh_token' => true,
      'jwt' => true,
    ),
    'api_problem_error_response' => true,
  ),
  'controller_plugins' => 
  array (
    'aliases' => 
    array (
      'getidentity' => 'ZF\\MvcAuth\\Identity\\IdentityPlugin',
      'getIdentity' => 'ZF\\MvcAuth\\Identity\\IdentityPlugin',
      'routeParam' => 'ZF\\ContentNegotiation\\ControllerPlugin\\RouteParam',
      'queryParam' => 'ZF\\ContentNegotiation\\ControllerPlugin\\QueryParam',
      'bodyParam' => 'ZF\\ContentNegotiation\\ControllerPlugin\\BodyParam',
      'routeParams' => 'ZF\\ContentNegotiation\\ControllerPlugin\\RouteParams',
      'queryParams' => 'ZF\\ContentNegotiation\\ControllerPlugin\\QueryParams',
      'bodyParams' => 'ZF\\ContentNegotiation\\ControllerPlugin\\BodyParams',
      'getinputfilter' => 'ZF\\ContentValidation\\InputFilter\\InputFilterPlugin',
      'getInputfilter' => 'ZF\\ContentValidation\\InputFilter\\InputFilterPlugin',
      'getInputFilter' => 'ZF\\ContentValidation\\InputFilter\\InputFilterPlugin',
    ),
    'factories' => 
    array (
      'ZF\\MvcAuth\\Identity\\IdentityPlugin' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Hal' => 'ZF\\Hal\\Factory\\HalControllerPluginFactory',
      'ZF\\ContentNegotiation\\ControllerPlugin\\RouteParam' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\ContentNegotiation\\ControllerPlugin\\QueryParam' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\ContentNegotiation\\ControllerPlugin\\BodyParam' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\ContentNegotiation\\ControllerPlugin\\RouteParams' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\ContentNegotiation\\ControllerPlugin\\QueryParams' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\ContentNegotiation\\ControllerPlugin\\BodyParams' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\ContentValidation\\InputFilter\\InputFilterPlugin' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'zf-mvc-auth' => 
  array (
    'authentication' => 
    array (
    ),
    'authorization' => 
    array (
      'deny_by_default' => false,
    ),
  ),
  'zf-hal' => 
  array (
    'renderer' => 
    array (
    ),
    'metadata_map' => 
    array (
    ),
    'options' => 
    array (
      'use_proxy' => false,
    ),
  ),
  'filters' => 
  array (
    'factories' => 
    array (
      'Zend\\Filter\\File\\RenameUpload' => 'ZF\\ContentNegotiation\\Factory\\RenameUploadFilterFactory',
      'zendfilterfilerenameupload' => 'ZF\\ContentNegotiation\\Factory\\RenameUploadFilterFactory',
    ),
  ),
  'validators' => 
  array (
    'factories' => 
    array (
      'Zend\\Validator\\File\\UploadFile' => 'ZF\\ContentNegotiation\\Factory\\UploadFileValidatorFactory',
      'zendvalidatorfileuploadfile' => 'ZF\\ContentNegotiation\\Factory\\UploadFileValidatorFactory',
      'ZF\\ContentValidation\\Validator\\DbRecordExists' => 'ZF\\ContentValidation\\Validator\\Db\\RecordExistsFactory',
      'ZF\\ContentValidation\\Validator\\DbNoRecordExists' => 'ZF\\ContentValidation\\Validator\\Db\\NoRecordExistsFactory',
    ),
  ),
  'input_filter_specs' => 
  array (
    'Music\\V1\\Rpc\\Status\\Validator' => 
    array (
      0 => 
      array (
        'required' => false,
        'validators' => 
        array (
        ),
        'filters' => 
        array (
        ),
        'name' => 'status',
        'description' => 'Status da API, boolean',
      ),
    ),
  ),
  'input_filters' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Zend\\InputFilter\\InputFilterAbstractServiceFactory',
    ),
  ),
  'zf-content-validation' => 
  array (
    'methods_without_bodies' => 
    array (
    ),
    'Music\\V1\\Rpc\\Status\\Controller' => 
    array (
      'input_filter' => 'Music\\V1\\Rpc\\Status\\Validator',
    ),
  ),
  'zf-rest' => 
  array (
  ),
  'zf-rpc' => 
  array (
    'Music\\V1\\Rpc\\Status\\Controller' => 
    array (
      'service_name' => 'Status',
      'http_methods' => 
      array (
        0 => 'GET',
      ),
      'route_name' => 'music.rpc.status',
    ),
  ),
  'zf-versioning' => 
  array (
    'content-type' => 
    array (
    ),
    'default_version' => 1,
    'uri' => 
    array (
      0 => 'music.rpc.status',
    ),
  ),
  'db' => 
  array (
    'adapters' => 
    array (
      'dummy' => 
      array (
      ),
    ),
  ),
);