<?php

namespace ContainerNKSPvzc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Controller\\AbonneController' => 'getAbonneControllerService',
            'App\\Controller\\AbonnementController' => 'getAbonnementControllerService',
            'App\\Controller\\ApiController' => 'getApiControllerService',
            'App\\Controller\\AvisclientController' => 'getAvisclientControllerService',
            'App\\Controller\\CalendarController' => 'getCalendarControllerService',
            'App\\Controller\\CartController' => 'getCartControllerService',
            'App\\Controller\\CategorieController' => 'getCategorieControllerService',
            'App\\Controller\\CelluleController' => 'getCelluleControllerService',
            'App\\Controller\\CinemaController' => 'getCinemaControllerService',
            'App\\Controller\\CommentController' => 'getCommentControllerService',
            'App\\Controller\\CongeController' => 'getCongeControllerService',
            'App\\Controller\\ContactController' => 'getContactControllerService',
            'App\\Controller\\DefaultController' => 'getDefaultControllerService',
            'App\\Controller\\EmployeController' => 'getEmployeControllerService',
            'App\\Controller\\EquipementController' => 'getEquipementControllerService',
            'App\\Controller\\EvenementController' => 'getEvenementControllerService',
            'App\\Controller\\FilmController' => 'getFilmControllerService',
            'App\\Controller\\MainController' => 'getMainControllerService',
            'App\\Controller\\PlatController' => 'getPlatControllerService',
            'App\\Controller\\ReclamationController' => 'getReclamationControllerService',
            'App\\Controller\\RegistrationController' => 'getRegistrationControllerService',
            'App\\Controller\\SecurityController' => 'getSecurityControllerService',
            'App\\Controller\\TypeAbonnementController' => 'getTypeAbonnementControllerService',
            'App\\Controller\\reservationController' => 'getReservationControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.type.file' => 'getForm_Type_FileService',
            'http_kernel' => 'getHttpKernelService',
            'knp_paginator' => 'getKnpPaginatorService',
            'knp_snappy.image' => 'getKnpSnappy_ImageService',
            'knp_snappy.pdf' => 'getKnpSnappy_PdfService',
            'markdown.parser' => 'getMarkdown_ParserService',
            'mercuryseries_flashy.flashy_notifier' => 'getMercuryseriesFlashy_FlashyNotifierService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'validator' => 'getValidatorService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'KernelInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'RebootableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'TerminableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Kernel.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Kernel'.\DIRECTORY_SEPARATOR.'MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Kernel.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerNameParser.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'ControllerMetadata'.\DIRECTORY_SEPARATOR.'ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'ControllerMetadata'.\DIRECTORY_SEPARATOR.'ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher'.\DIRECTORY_SEPARATOR.'EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ResponseListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LocaleListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ErrorListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'ParameterBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'container'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ContainerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ParameterBag'.\DIRECTORY_SEPARATOR.'ContainerBag.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpKernel.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'TraceableControllerResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'TraceableArgumentResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestStack.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'AdapterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache-contracts'.\DIRECTORY_SEPARATOR.'CacheInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'PruneableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'service-contracts'.\DIRECTORY_SEPARATOR.'ResetInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'ResettableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'TraceableAdapter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'AbstractTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache-contracts'.\DIRECTORY_SEPARATOR.'CacheTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'ContractsTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'FilesystemCommonTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'FilesystemTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'FilesystemAdapter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Marshaller'.\DIRECTORY_SEPARATOR.'MarshallerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Marshaller'.\DIRECTORY_SEPARATOR.'DefaultMarshaller.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'SessionListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'service-contracts'.\DIRECTORY_SEPARATOR.'ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'service-contracts'.\DIRECTORY_SEPARATOR.'ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ServiceLocator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Packages.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'PackageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Package.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'PathPackage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'VersionStrategy'.\DIRECTORY_SEPARATOR.'VersionStrategyInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'VersionStrategy'.\DIRECTORY_SEPARATOR.'EmptyVersionStrategy.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Context'.\DIRECTORY_SEPARATOR.'ContextInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Context'.\DIRECTORY_SEPARATOR.'RequestStackContext.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'MessageLoggerListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ValidatorBuilderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ValidatorBuilder.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Validation.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorFactoryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ContainerConstraintValidatorFactory.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation-contracts'.\DIRECTORY_SEPARATOR.'LocaleAwareInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation-contracts'.\DIRECTORY_SEPARATOR.'TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'LegacyTranslatorProxy.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ObjectInitializerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'DoctrineInitializer.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'AutoMappingTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'PropertyInfoLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'DoctrineLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'TranslatorBagInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Translator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'WarmableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Translator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'MessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'IntlFormatterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'ChoiceMessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'MessageFormatter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation-contracts'.\DIRECTORY_SEPARATOR.'TranslatorTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'IdentityTranslator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Profiler'.\DIRECTORY_SEPARATOR.'Profiler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Profiler'.\DIRECTORY_SEPARATOR.'ProfilerStorageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Profiler'.\DIRECTORY_SEPARATOR.'FileProfilerStorage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'LoggerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'ResettableInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Logger.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bridge'.\DIRECTORY_SEPARATOR.'Logger.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'DataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'DataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'LateDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'TimeDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'MemoryDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'ValidatorDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'AjaxDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'ExceptionDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'LoggerDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'EventDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'CacheDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'TranslationDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'SecurityDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'TwigDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-client'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'HttpClientDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'MessageDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'MessageDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'ConfigDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ProfilerListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'FormDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'FormDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'FormDataExtractorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'FormDataExtractor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'stopwatch'.\DIRECTORY_SEPARATOR.'Stopwatch.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bridge'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'DebugProcessor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'RequestContext.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'RouterListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'annotations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Annotations'.\DIRECTORY_SEPARATOR.'Reader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'annotations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Annotations'.\DIRECTORY_SEPARATOR.'AnnotationReader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'annotations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Annotations'.\DIRECTORY_SEPARATOR.'AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'Cache.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'FlushableCache.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'ClearableCache.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'MultiGetCache.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'MultiDeleteCache.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'MultiPutCache.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'MultiOperationCache.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'CacheProvider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'DoctrineProvider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'ProxyTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'PhpArrayTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'PhpArrayAdapter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'property-info'.\DIRECTORY_SEPARATOR.'PropertyTypeExtractorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'property-info'.\DIRECTORY_SEPARATOR.'PropertyDescriptionExtractorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'property-info'.\DIRECTORY_SEPARATOR.'PropertyAccessExtractorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'property-info'.\DIRECTORY_SEPARATOR.'PropertyListExtractorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'property-info'.\DIRECTORY_SEPARATOR.'PropertyInfoExtractorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'property-info'.\DIRECTORY_SEPARATOR.'PropertyInitializableExtractorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'property-info'.\DIRECTORY_SEPARATOR.'PropertyInfoExtractor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-link'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'AddLinkHeaderListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ControllerListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Request'.\DIRECTORY_SEPARATOR.'ParamConverter'.\DIRECTORY_SEPARATOR.'ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Request'.\DIRECTORY_SEPARATOR.'ParamConverter'.\DIRECTORY_SEPARATOR.'ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Request'.\DIRECTORY_SEPARATOR.'ParamConverter'.\DIRECTORY_SEPARATOR.'DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'expression-language'.\DIRECTORY_SEPARATOR.'ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Request'.\DIRECTORY_SEPARATOR.'ParamConverter'.\DIRECTORY_SEPARATOR.'DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'service-contracts'.\DIRECTORY_SEPARATOR.'ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'TemplateListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Templating'.\DIRECTORY_SEPARATOR.'TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'SecurityListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Request'.\DIRECTORY_SEPARATOR.'ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Registry.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Logging'.\DIRECTORY_SEPARATOR.'SQLLogger.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Logging'.\DIRECTORY_SEPARATOR.'DebugStack.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'Connection.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Connection.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Configuration.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Logging'.\DIRECTORY_SEPARATOR.'LoggerChain.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Logger'.\DIRECTORY_SEPARATOR.'DbalLogger.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'event-manager'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'EventManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'MappingDriver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'ArrayTrait.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'ArrayAdapter.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'TokenStorage.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Role'.\DIRECTORY_SEPARATOR.'RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Role'.\DIRECTORY_SEPARATOR.'RoleHierarchy.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'FirewallMap.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'RememberMe'.\DIRECTORY_SEPARATOR.'ResponseListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'TraceableAccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'FirewallListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'TraceableFirewallListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Environment.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'NativeFilesystemLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'AbstractExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CsrfExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'SecurityExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TranslationExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'AssetExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CodeExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'RoutingExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'YamlExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'StopwatchExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ExpressionExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'UrlHelper.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'WebLinkExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'FormExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DumpExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'DoctrineExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'WebProfilerExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'DataDumperInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Cloner'.\DIRECTORY_SEPARATOR.'DumperInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'AbstractDumper.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'CliDumper.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'HtmlDumper.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'GoogleChartsExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Output'.\DIRECTORY_SEPARATOR.'ChartOutputInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Output'.\DIRECTORY_SEPARATOR.'AbstractChartOutput.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Output'.\DIRECTORY_SEPARATOR.'Javascript'.\DIRECTORY_SEPARATOR.'ChartOutput.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Output'.\DIRECTORY_SEPARATOR.'OptionsOutputInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Output'.\DIRECTORY_SEPARATOR.'AbstractOptionsOutput.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Output'.\DIRECTORY_SEPARATOR.'Javascript'.\DIRECTORY_SEPARATOR.'OptionsOutput.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Output'.\DIRECTORY_SEPARATOR.'DateOutputInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Output'.\DIRECTORY_SEPARATOR.'Javascript'.\DIRECTORY_SEPARATOR.'DateOutput.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Output'.\DIRECTORY_SEPARATOR.'DataOutputInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Output'.\DIRECTORY_SEPARATOR.'Javascript'.\DIRECTORY_SEPARATOR.'DataOutput.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Output'.\DIRECTORY_SEPARATOR.'EventsOutputInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'.\DIRECTORY_SEPARATOR.'Output'.\DIRECTORY_SEPARATOR.'Javascript'.\DIRECTORY_SEPARATOR.'EventsOutput.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'MarkdownTwigExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'ParserManager.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'michelf'.\DIRECTORY_SEPARATOR.'php-markdown'.\DIRECTORY_SEPARATOR.'Michelf'.\DIRECTORY_SEPARATOR.'MarkdownInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'michelf'.\DIRECTORY_SEPARATOR.'php-markdown'.\DIRECTORY_SEPARATOR.'Michelf'.\DIRECTORY_SEPARATOR.'Markdown.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'michelf'.\DIRECTORY_SEPARATOR.'php-markdown'.\DIRECTORY_SEPARATOR.'Michelf'.\DIRECTORY_SEPARATOR.'MarkdownExtra.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'.\DIRECTORY_SEPARATOR.'MarkdownParserInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'MarkdownParser.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'Preset'.\DIRECTORY_SEPARATOR.'Min.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'Preset'.\DIRECTORY_SEPARATOR.'Light.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'Preset'.\DIRECTORY_SEPARATOR.'Medium.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'Preset'.\DIRECTORY_SEPARATOR.'Max.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'Preset'.\DIRECTORY_SEPARATOR.'Flavored.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ob'.\DIRECTORY_SEPARATOR.'highcharts-bundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'HighchartsExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'EntryFilesTwigExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'StimulusTwigExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'PaginationExtension.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Processor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'AppVariable.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RuntimeLoader'.\DIRECTORY_SEPARATOR.'RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RuntimeLoader'.\DIRECTORY_SEPARATOR.'ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extra-bundle'.\DIRECTORY_SEPARATOR.'MissingExtensionSuggestor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Profiler'.\DIRECTORY_SEPARATOR.'Profile.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'.\DIRECTORY_SEPARATOR.'Csp'.\DIRECTORY_SEPARATOR.'ContentSecurityPolicyHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'.\DIRECTORY_SEPARATOR.'Csp'.\DIRECTORY_SEPARATOR.'NonceGenerator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'WebDebugToolbarListener.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AbstractHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'StreamHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'PsrLogMessageProcessor.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bridge'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'ConsoleHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'DumpDataCollector.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Cloner'.\DIRECTORY_SEPARATOR.'ClonerInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Cloner'.\DIRECTORY_SEPARATOR.'AbstractCloner.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Cloner'.\DIRECTORY_SEPARATOR.'VarCloner.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Server'.\DIRECTORY_SEPARATOR.'Connection.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'ContextProvider'.\DIRECTORY_SEPARATOR.'ContextProviderInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'ContextProvider'.\DIRECTORY_SEPARATOR.'SourceContextProvider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'ContextProvider'.\DIRECTORY_SEPARATOR.'RequestContextProvider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'ContextProvider'.\DIRECTORY_SEPARATOR.'CliContextProvider.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'SlidingPaginationSubscriber.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-client-contracts'.\DIRECTORY_SEPARATOR.'HttpClientInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-client'.\DIRECTORY_SEPARATOR.'TraceableHttpClient.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-client'.\DIRECTORY_SEPARATOR.'HttpClient.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'DataCollectorTranslator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'RouterInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Matcher'.\DIRECTORY_SEPARATOR.'RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Router.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'Router.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'ValidatorInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'TraceableValidator.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher-contracts'.\DIRECTORY_SEPARATOR.'EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher'.\DIRECTORY_SEPARATOR.'EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'TraceableEventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'event-dispatcher'.\DIRECTORY_SEPARATOR.'EventDispatcher.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'NullHandler.php';
            include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'annotations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Annotations'.\DIRECTORY_SEPARATOR.'CachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || class_alias(__NAMESPACE__."\\$class", $class, false);

        return $factory();
    }

    /**
     * Gets the public 'App\Controller\AbonneController' shared autowired service.
     *
     * @return \App\Controller\AbonneController
     */
    protected function getAbonneControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbonneController.php';

        $this->services['App\\Controller\\AbonneController'] = $instance = new \App\Controller\AbonneController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\AbonneController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\AbonnementController' shared autowired service.
     *
     * @return \App\Controller\AbonnementController
     */
    protected function getAbonnementControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbonnementController.php';

        $this->services['App\\Controller\\AbonnementController'] = $instance = new \App\Controller\AbonnementController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\AbonnementController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\ApiController' shared autowired service.
     *
     * @return \App\Controller\ApiController
     */
    protected function getApiControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ApiController.php';

        $this->services['App\\Controller\\ApiController'] = $instance = new \App\Controller\ApiController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\ApiController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\AvisclientController' shared autowired service.
     *
     * @return \App\Controller\AvisclientController
     */
    protected function getAvisclientControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AvisclientController.php';

        $this->services['App\\Controller\\AvisclientController'] = $instance = new \App\Controller\AvisclientController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\AvisclientController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\CalendarController' shared autowired service.
     *
     * @return \App\Controller\CalendarController
     */
    protected function getCalendarControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CalendarController.php';

        $this->services['App\\Controller\\CalendarController'] = $instance = new \App\Controller\CalendarController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\CalendarController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\CartController' shared autowired service.
     *
     * @return \App\Controller\CartController
     */
    protected function getCartControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CartController.php';

        $this->services['App\\Controller\\CartController'] = $instance = new \App\Controller\CartController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\CartController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\CategorieController' shared autowired service.
     *
     * @return \App\Controller\CategorieController
     */
    protected function getCategorieControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CategorieController.php';

        $this->services['App\\Controller\\CategorieController'] = $instance = new \App\Controller\CategorieController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\CategorieController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\CelluleController' shared autowired service.
     *
     * @return \App\Controller\CelluleController
     */
    protected function getCelluleControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CelluleController.php';

        $this->services['App\\Controller\\CelluleController'] = $instance = new \App\Controller\CelluleController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\CelluleController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\CinemaController' shared autowired service.
     *
     * @return \App\Controller\CinemaController
     */
    protected function getCinemaControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CinemaController.php';

        $this->services['App\\Controller\\CinemaController'] = $instance = new \App\Controller\CinemaController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\CinemaController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\CommentController' shared autowired service.
     *
     * @return \App\Controller\CommentController
     */
    protected function getCommentControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CommentController.php';

        $this->services['App\\Controller\\CommentController'] = $instance = new \App\Controller\CommentController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\CommentController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\CongeController' shared autowired service.
     *
     * @return \App\Controller\CongeController
     */
    protected function getCongeControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CongeController.php';

        $this->services['App\\Controller\\CongeController'] = $instance = new \App\Controller\CongeController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\CongeController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\ContactController' shared autowired service.
     *
     * @return \App\Controller\ContactController
     */
    protected function getContactControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ContactController.php';

        $this->services['App\\Controller\\ContactController'] = $instance = new \App\Controller\ContactController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\ContactController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\DefaultController' shared autowired service.
     *
     * @return \App\Controller\DefaultController
     */
    protected function getDefaultControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'DefaultController.php';

        $this->services['App\\Controller\\DefaultController'] = $instance = new \App\Controller\DefaultController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\DefaultController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\EmployeController' shared autowired service.
     *
     * @return \App\Controller\EmployeController
     */
    protected function getEmployeControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'EmployeController.php';

        $this->services['App\\Controller\\EmployeController'] = $instance = new \App\Controller\EmployeController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\EmployeController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\EquipementController' shared autowired service.
     *
     * @return \App\Controller\EquipementController
     */
    protected function getEquipementControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'EquipementController.php';

        $this->services['App\\Controller\\EquipementController'] = $instance = new \App\Controller\EquipementController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\EquipementController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\EvenementController' shared autowired service.
     *
     * @return \App\Controller\EvenementController
     */
    protected function getEvenementControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'EvenementController.php';

        $this->services['App\\Controller\\EvenementController'] = $instance = new \App\Controller\EvenementController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\EvenementController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\FilmController' shared autowired service.
     *
     * @return \App\Controller\FilmController
     */
    protected function getFilmControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'FilmController.php';

        $this->services['App\\Controller\\FilmController'] = $instance = new \App\Controller\FilmController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\FilmController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\MainController' shared autowired service.
     *
     * @return \App\Controller\MainController
     */
    protected function getMainControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'MainController.php';

        $this->services['App\\Controller\\MainController'] = $instance = new \App\Controller\MainController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\MainController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\PlatController' shared autowired service.
     *
     * @return \App\Controller\PlatController
     */
    protected function getPlatControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'PlatController.php';

        $this->services['App\\Controller\\PlatController'] = $instance = new \App\Controller\PlatController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\PlatController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\ReclamationController' shared autowired service.
     *
     * @return \App\Controller\ReclamationController
     */
    protected function getReclamationControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ReclamationController.php';

        $this->services['App\\Controller\\ReclamationController'] = $instance = new \App\Controller\ReclamationController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\ReclamationController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\RegistrationController' shared autowired service.
     *
     * @return \App\Controller\RegistrationController
     */
    protected function getRegistrationControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'RegistrationController.php';

        $this->services['App\\Controller\\RegistrationController'] = $instance = new \App\Controller\RegistrationController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\RegistrationController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\SecurityController' shared autowired service.
     *
     * @return \App\Controller\SecurityController
     */
    protected function getSecurityControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'SecurityController.php';

        $this->services['App\\Controller\\SecurityController'] = $instance = new \App\Controller\SecurityController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\SecurityController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\TypeAbonnementController' shared autowired service.
     *
     * @return \App\Controller\TypeAbonnementController
     */
    protected function getTypeAbonnementControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'TypeAbonnementController.php';

        $this->services['App\\Controller\\TypeAbonnementController'] = $instance = new \App\Controller\TypeAbonnementController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\TypeAbonnementController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\reservationController' shared autowired service.
     *
     * @return \App\Controller\reservationController
     */
    protected function getReservationControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'reservationController.php';

        $this->services['App\\Controller\\reservationController'] = $instance = new \App\Controller\reservationController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\reservationController', $this));

        return $instance;
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()), NULL);
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('1-MDnsyZ9F', 0, ($this->targetDir.''.'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService())]);
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'Psr6CacheClearer.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.doctrine.orm.default.metadata' => ($this->privates['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()), 'cache.doctrine.orm.default.result' => ($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()), 'cache.doctrine.orm.default.query' => ($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()), 'cache.webpack_encore' => ($this->privates['cache.webpack_encore'] ?? $this->getCache_WebpackEncoreService())]);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('nL2JwJcH1W', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()), 'cache.webpack_encore' => ($this->privates['cache.webpack_encore'] ?? $this->getCache_WebpackEncoreService())]);
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 1 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 2 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 3 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 4 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->getSerializer_Mapping_CacheWarmerService());
            yield 5 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
            yield 6 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
            yield 7 => ($this->privates['webpack_encore.entrypoint_lookup.cache_warmer'] ?? $this->getWebpackEncore_EntrypointLookup_CacheWarmerService());
        }, 8), true, ($this->targetDir.''.'/srcApp_KernelDevDebugContainerDeprecations.log'));
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'CommandLoader'.\DIRECTORY_SEPARATOR.'CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'CommandLoader'.\DIRECTORY_SEPARATOR.'ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => ['privates', 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'getRunSqlCommandService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine_migrations.current_command' => ['privates', 'doctrine_migrations.current_command', 'getDoctrineMigrations_CurrentCommandService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.sync_metadata_command' => ['privates', 'doctrine_migrations.sync_metadata_command', 'getDoctrineMigrations_SyncMetadataCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'doctrine_migrations.versions_command' => ['privates', 'doctrine_migrations.versions_command', 'getDoctrineMigrations_VersionsCommandService', false],
            'maker.auto_command.make_auth' => ['privates', 'maker.auto_command.make_auth', 'getMaker_AutoCommand_MakeAuthService', false],
            'maker.auto_command.make_command' => ['privates', 'maker.auto_command.make_command', 'getMaker_AutoCommand_MakeCommandService', false],
            'maker.auto_command.make_controller' => ['privates', 'maker.auto_command.make_controller', 'getMaker_AutoCommand_MakeControllerService', false],
            'maker.auto_command.make_crud' => ['privates', 'maker.auto_command.make_crud', 'getMaker_AutoCommand_MakeCrudService', false],
            'maker.auto_command.make_docker_database' => ['privates', 'maker.auto_command.make_docker_database', 'getMaker_AutoCommand_MakeDockerDatabaseService', false],
            'maker.auto_command.make_entity' => ['privates', 'maker.auto_command.make_entity', 'getMaker_AutoCommand_MakeEntityService', false],
            'maker.auto_command.make_fixtures' => ['privates', 'maker.auto_command.make_fixtures', 'getMaker_AutoCommand_MakeFixturesService', false],
            'maker.auto_command.make_form' => ['privates', 'maker.auto_command.make_form', 'getMaker_AutoCommand_MakeFormService', false],
            'maker.auto_command.make_message' => ['privates', 'maker.auto_command.make_message', 'getMaker_AutoCommand_MakeMessageService', false],
            'maker.auto_command.make_messenger_middleware' => ['privates', 'maker.auto_command.make_messenger_middleware', 'getMaker_AutoCommand_MakeMessengerMiddlewareService', false],
            'maker.auto_command.make_migration' => ['privates', 'maker.auto_command.make_migration', 'getMaker_AutoCommand_MakeMigrationService', false],
            'maker.auto_command.make_registration_form' => ['privates', 'maker.auto_command.make_registration_form', 'getMaker_AutoCommand_MakeRegistrationFormService', false],
            'maker.auto_command.make_reset_password' => ['privates', 'maker.auto_command.make_reset_password', 'getMaker_AutoCommand_MakeResetPasswordService', false],
            'maker.auto_command.make_serializer_encoder' => ['privates', 'maker.auto_command.make_serializer_encoder', 'getMaker_AutoCommand_MakeSerializerEncoderService', false],
            'maker.auto_command.make_serializer_normalizer' => ['privates', 'maker.auto_command.make_serializer_normalizer', 'getMaker_AutoCommand_MakeSerializerNormalizerService', false],
            'maker.auto_command.make_subscriber' => ['privates', 'maker.auto_command.make_subscriber', 'getMaker_AutoCommand_MakeSubscriberService', false],
            'maker.auto_command.make_test' => ['privates', 'maker.auto_command.make_test', 'getMaker_AutoCommand_MakeTestService', false],
            'maker.auto_command.make_twig_extension' => ['privates', 'maker.auto_command.make_twig_extension', 'getMaker_AutoCommand_MakeTwigExtensionService', false],
            'maker.auto_command.make_user' => ['privates', 'maker.auto_command.make_user', 'getMaker_AutoCommand_MakeUserService', false],
            'maker.auto_command.make_validator' => ['privates', 'maker.auto_command.make_validator', 'getMaker_AutoCommand_MakeValidatorService', false],
            'maker.auto_command.make_voter' => ['privates', 'maker.auto_command.make_voter', 'getMaker_AutoCommand_MakeVoterService', false],
            'monolog.command.server_log' => ['privates', 'monolog.command.server_log', 'getMonolog_Command_ServerLogService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'swiftmailer.command.debug' => ['privates', 'swiftmailer.command.debug', 'getSwiftmailer_Command_DebugService', false],
            'swiftmailer.command.new_email' => ['privates', 'swiftmailer.command.new_email', 'getSwiftmailer_Command_NewEmailService', false],
            'swiftmailer.command.send_email' => ['privates', 'swiftmailer.command.send_email', 'getSwiftmailer_Command_SendEmailService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
            'var_dumper.command.server_dump' => ['privates', 'var_dumper.command.server_dump', 'getVarDumper_Command_ServerDumpService', false],
            'web_server.command.server_run' => ['privates', 'web_server.command.server_run', 'getWebServer_Command_ServerRunService', false],
            'web_server.command.server_start' => ['privates', 'web_server.command.server_start', 'getWebServer_Command_ServerStartService', false],
            'web_server.command.server_status' => ['privates', 'web_server.command.server_status', 'getWebServer_Command_ServerStatusService', false],
            'web_server.command.server_stop' => ['privates', 'web_server.command.server_stop', 'getWebServer_Command_ServerStopService', false],
        ], [
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine_migrations.current_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\CurrentCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand',
            'doctrine_migrations.sync_metadata_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\SyncMetadataCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand',
            'doctrine_migrations.versions_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\ListCommand',
            'maker.auto_command.make_auth' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_command' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_controller' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_crud' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_docker_database' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_entity' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_fixtures' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_message' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_messenger_middleware' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_migration' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_registration_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_reset_password' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_encoder' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_normalizer' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_subscriber' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_twig_extension' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_user' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_validator' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_voter' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'monolog.command.server_log' => 'Symfony\\Bridge\\Monolog\\Command\\ServerLogCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'swiftmailer.command.debug' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\DebugCommand',
            'swiftmailer.command.new_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\NewEmailCommand',
            'swiftmailer.command.send_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
            'var_dumper.command.server_dump' => 'Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand',
            'web_server.command.server_run' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerRunCommand',
            'web_server.command.server_start' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerStartCommand',
            'web_server.command.server_status' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerStatusCommand',
            'web_server.command.server_stop' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerStopCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'dbal:run-sql' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:sync-metadata-storage' => 'doctrine_migrations.sync_metadata_command', 'doctrine:migrations:list' => 'doctrine_migrations.versions_command', 'doctrine:migrations:current' => 'doctrine_migrations.current_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'security:encode-password' => 'security.command.user_password_encoder', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'server:dump' => 'var_dumper.command.server_dump', 'server:log' => 'monolog.command.server_log', 'server:run' => 'web_server.command.server_run', 'server:start' => 'web_server.command.server_start', 'server:stop' => 'web_server.command.server_stop', 'server:status' => 'web_server.command.server_status', 'debug:swiftmailer' => 'swiftmailer.command.debug', 'swiftmailer:email:send' => 'swiftmailer.command.new_email', 'swiftmailer:spool:send' => 'swiftmailer.command.send_email', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:docker:database' => 'maker.auto_command.make_docker_database', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:message' => 'maker.auto_command.make_message', 'make:messenger-middleware' => 'maker.auto_command.make_messenger_middleware', 'make:registration-form' => 'maker.auto_command.make_registration_form', 'make:reset-password' => 'maker.auto_command.make_reset_password', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:serializer:normalizer' => 'maker.auto_command.make_serializer_normalizer', 'make:subscriber' => 'maker.auto_command.make_subscriber', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:test' => 'maker.auto_command.make_test', 'make:unit-test' => 'maker.auto_command.make_test', 'make:functional-test' => 'maker.auto_command.make_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:user' => 'maker.auto_command.make_user', 'make:migration' => 'maker.auto_command.make_migration']);
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), 'UTF-8', ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['var_dumper.server_connection'] ?? $this->getVarDumper_ServerConnectionService()));
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $b->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $b->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($b);

        $a->setSQLLogger(new \Doctrine\DBAL\Logging\LoggerChain([0 => new \Symfony\Bridge\Doctrine\Logger\DbalLogger($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))), 1 => ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()))]));
        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));
        $c->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['connection_override_options' => [], 'url' => $this->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => []], $a, $c, []);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['doctrine.orm.default_entity_manager'] = $this->createProxy('EntityManager_9a5be93', function () {
                return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Configuration.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'MappingDriverChain.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'NamingStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'UnderscoreNamingStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'DefaultQuoteStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'ContainerEntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ContainerRepositoryFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'ManagerConfigurator.php';

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver(($this->privates['doctrine.orm.default_annotation_metadata_driver'] ?? $this->getDoctrine_Orm_DefaultAnnotationMetadataDriverService()), 'App\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity']);
        $a->setMetadataCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService())));
        $a->setQueryCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService())));
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService())));
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\AbonneRepository' => ['privates', 'App\\Repository\\AbonneRepository', 'getAbonneRepositoryService', false],
            'App\\Repository\\AbonnementRepository' => ['privates', 'App\\Repository\\AbonnementRepository', 'getAbonnementRepositoryService', false],
            'App\\Repository\\AvisClientRepository' => ['privates', 'App\\Repository\\AvisClientRepository', 'getAvisClientRepositoryService', false],
            'App\\Repository\\CalendarRepository' => ['privates', 'App\\Repository\\CalendarRepository', 'getCalendarRepositoryService', false],
            'App\\Repository\\CategorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', false],
            'App\\Repository\\CategoriefRepository' => ['privates', 'App\\Repository\\CategoriefRepository', 'getCategoriefRepositoryService', false],
            'App\\Repository\\ChatRepository' => ['privates', 'App\\Repository\\ChatRepository', 'getChatRepositoryService', false],
            'App\\Repository\\CinemaRepository' => ['privates', 'App\\Repository\\CinemaRepository', 'getCinemaRepositoryService', false],
            'App\\Repository\\CommentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', false],
            'App\\Repository\\CongeRepository' => ['privates', 'App\\Repository\\CongeRepository', 'getCongeRepositoryService', false],
            'App\\Repository\\DemandeResRepository' => ['privates', 'App\\Repository\\DemandeResRepository', 'getDemandeResRepositoryService', false],
            'App\\Repository\\EmployeRepository' => ['privates', 'App\\Repository\\EmployeRepository', 'getEmployeRepositoryService', false],
            'App\\Repository\\EquipementRepository' => ['privates', 'App\\Repository\\EquipementRepository', 'getEquipementRepositoryService', false],
            'App\\Repository\\EvenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', false],
            'App\\Repository\\FilmRepository' => ['privates', 'App\\Repository\\FilmRepository', 'getFilmRepositoryService', false],
            'App\\Repository\\GuideRepository' => ['privates', 'App\\Repository\\GuideRepository', 'getGuideRepositoryService', false],
            'App\\Repository\\PlatRepository' => ['privates', 'App\\Repository\\PlatRepository', 'getPlatRepositoryService', false],
            'App\\Repository\\ReclamationRepository' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', false],
            'App\\Repository\\ReservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', false],
            'App\\Repository\\TypeAbonnementRepository' => ['privates', 'App\\Repository\\TypeAbonnementRepository', 'getTypeAbonnementRepositoryService', false],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'App\\Repository\\AbonneRepository' => '?',
            'App\\Repository\\AbonnementRepository' => '?',
            'App\\Repository\\AvisClientRepository' => '?',
            'App\\Repository\\CalendarRepository' => '?',
            'App\\Repository\\CategorieRepository' => '?',
            'App\\Repository\\CategoriefRepository' => '?',
            'App\\Repository\\ChatRepository' => '?',
            'App\\Repository\\CinemaRepository' => '?',
            'App\\Repository\\CommentRepository' => '?',
            'App\\Repository\\CongeRepository' => '?',
            'App\\Repository\\DemandeResRepository' => '?',
            'App\\Repository\\EmployeRepository' => '?',
            'App\\Repository\\EquipementRepository' => '?',
            'App\\Repository\\EvenementRepository' => '?',
            'App\\Repository\\FilmRepository' => '?',
            'App\\Repository\\GuideRepository' => '?',
            'App\\Repository\\PlatRepository' => '?',
            'App\\Repository\\ReclamationRepository' => '?',
            'App\\Repository\\ReservationRepository' => '?',
            'App\\Repository\\TypeAbonnementRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
        ])));

        $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ErrorController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'error-handler'.\DIRECTORY_SEPARATOR.'ErrorRenderer'.\DIRECTORY_SEPARATOR.'ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'error-handler'.\DIRECTORY_SEPARATOR.'ErrorRenderer'.\DIRECTORY_SEPARATOR.'SerializerErrorRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'ErrorRenderer'.\DIRECTORY_SEPARATOR.'TwigErrorRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'error-handler'.\DIRECTORY_SEPARATOR.'ErrorRenderer'.\DIRECTORY_SEPARATOR.'HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($this->services['serializer'] ?? $this->getSerializerService()), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, true)), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true)));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(new \Monolog\Handler\NullHandler());
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $a, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['webpack_encore.exception_listener'] ?? $this->getWebpackEncore_ExceptionListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.envelope_listener'] ?? ($this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL)));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->getDebug_Security_Voter_VoteListenerService());
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['twig.mailer.message_listener'] ?? $this->getTwig_Mailer_MessageListenerService());
        }, 1 => 'onMessage'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.dump_listener'] ?? $this->getDebug_DumpListenerService());
        }, 1 => 'configure'], 1024);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'before'], 0);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'pagination'], 0);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sortable'] ?? ($this->privates['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.filtration'] ?? ($this->privates['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'pagination'], 1);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'filesystem'.\DIRECTORY_SEPARATOR.'Filesystem.php';

        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormFactory.php';

        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FileType.php';

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false)))), $a), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->getDebug_ArgumentResolver_RequestAttributeService());
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->getDebug_ArgumentResolver_RequestService());
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->getDebug_ArgumentResolver_SessionService());
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->getDebug_Security_UserValueResolverService());
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->getDebug_ArgumentResolver_ServiceService());
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->getDebug_ArgumentResolver_DefaultService());
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->getDebug_ArgumentResolver_VariadicService());
            yield 7 => ($this->privates['debug.argument_resolver.not_tagged_controller'] ?? $this->getDebug_ArgumentResolver_NotTaggedControllerService());
        }, 8)), $a));
    }

    /**
     * Gets the public 'knp_paginator' shared service.
     *
     * @return \Knp\Component\Pager\Paginator
     */
    protected function getKnpPaginatorService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['knp_paginator'] = $this->createProxy('Paginator_f262b94', function () {
                return \Paginator_f262b94::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getKnpPaginatorService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        $instance = new \Knp\Component\Pager\Paginator(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setDefaultPaginatorOptions(['pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true, 'pageOutOfRange' => 'ignore', 'defaultLimit' => 10]);

        return $instance;
    }

    /**
     * Gets the public 'knp_snappy.image' shared service.
     *
     * @return \Knp\Snappy\Image
     */
    protected function getKnpSnappy_ImageService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-snappy'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Snappy'.\DIRECTORY_SEPARATOR.'GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-snappy'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Snappy'.\DIRECTORY_SEPARATOR.'AbstractGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-snappy'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Snappy'.\DIRECTORY_SEPARATOR.'Image.php';

        $this->services['knp_snappy.image'] = $instance = new \Knp\Snappy\Image('"C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltoimage.exe"', [], []);

        $instance->setLogger(($this->privates['monolog.logger.snappy'] ?? $this->getMonolog_Logger_SnappyService()));

        return $instance;
    }

    /**
     * Gets the public 'knp_snappy.pdf' shared service.
     *
     * @return \Knp\Snappy\Pdf
     */
    protected function getKnpSnappy_PdfService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-snappy'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Snappy'.\DIRECTORY_SEPARATOR.'GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-snappy'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Snappy'.\DIRECTORY_SEPARATOR.'AbstractGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-snappy'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Snappy'.\DIRECTORY_SEPARATOR.'Pdf.php';

        $this->services['knp_snappy.pdf'] = $instance = new \Knp\Snappy\Pdf('"C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltopdf.exe"', [], []);

        $instance->setLogger(($this->privates['monolog.logger.snappy'] ?? $this->getMonolog_Logger_SnappyService()));

        return $instance;
    }

    /**
     * Gets the public 'markdown.parser' shared service.
     *
     * @return \Knp\Bundle\MarkdownBundle\Parser\Preset\Max
     */
    protected function getMarkdown_ParserService()
    {
        return $this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max();
    }

    /**
     * Gets the public 'mercuryseries_flashy.flashy_notifier' shared service.
     *
     * @return \MercurySeries\FlashyBundle\FlashyNotifier
     */
    protected function getMercuryseriesFlashy_FlashyNotifierService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mercuryseries'.\DIRECTORY_SEPARATOR.'flashy-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FlashyNotifier.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mercuryseries'.\DIRECTORY_SEPARATOR.'flashy-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'SessionStore.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mercuryseries'.\DIRECTORY_SEPARATOR.'flashy-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'SymfonySessionStore.php';

        return $this->services['mercuryseries_flashy.flashy_notifier'] = new \MercurySeries\FlashyBundle\FlashyNotifier(new \MercurySeries\FlashyBundle\SymfonySessionStore(($this->services['session'] ?? $this->getSessionService())), 'mercuryseries_flashy_notification');
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $d->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $d->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $d->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $d->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $d->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $d->addInstance('cache.property_info', ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
        $d->addInstance('cache.doctrine.orm.default.metadata', ($this->privates['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()));
        $d->addInstance('cache.doctrine.orm.default.result', ($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
        $d->addInstance('cache.doctrine.orm.default.query', ($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
        $d->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
        $d->addInstance('cache.webpack_encore', ($this->privates['cache.webpack_encore'] ?? $this->getCache_WebpackEncoreService()));
        $e = new \Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector();
        $e->registerClient('http_client', ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()));
        $f = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()), true);
        $f->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $g = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $g->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDir.''.'/srcApp_KernelDevDebugContainer'), $c));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), $c));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add($d);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($e);
        $instance->add($f);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(($this->services['data_collector.dump'] ?? $this->getDataCollector_DumpService()));
        $instance->add(new \Symfony\Component\Mailer\DataCollector\MessageDataCollector(($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()))));
        $instance->add($g);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'Loader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'XmlFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'FileLocator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'FileLocator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'DirectoryLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ObjectLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ContainerLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'LegacyRouteLoaderContainer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'AnnotatedRouteControllerLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'AnnotationDirectoryLoader.php';

        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources'), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src')], false);
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($this, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ]))));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, [], ['utf8' => true]);
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationUtils.php';

        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'CsrfTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'CsrfTokenManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'TokenGenerator'.\DIRECTORY_SEPARATOR.'TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'TokenGenerator'.\DIRECTORY_SEPARATOR.'UriSafeTokenGenerator.php';

        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'UserPasswordEncoderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'UserPasswordEncoder.php';

        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /**
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'SerializerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'ContextAwareNormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'EncoderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'ContextAwareEncoderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'DecoderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'ContextAwareDecoderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Serializer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'ProblemNormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'JsonSerializableNormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'DateTimeNormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'ConstraintViolationListNormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'NameConverter'.\DIRECTORY_SEPARATOR.'NameConverterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'NameConverter'.\DIRECTORY_SEPARATOR.'AdvancedNameConverterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'NameConverter'.\DIRECTORY_SEPARATOR.'MetadataAwareNameConverter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'DateTimeZoneNormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'DateIntervalNormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'DataUriNormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'ArrayDenormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'AbstractObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'ObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'ClassDiscriminatorResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'ClassDiscriminatorFromClassMetadata.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'NormalizationAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'XmlEncoder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'JsonEncoder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'YamlEncoder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'CsvEncoder.php';

        $a = ($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService());

        $b = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($a);

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true), 1 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $b), 4 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 6 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->privates['mime_types'] ?? $this->getMimeTypesService())), 7 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 8 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($a, $b, ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($a), NULL, [])], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
    }

    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (isset($this->privates['cache.validator'])) {
                yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
            }
            if (isset($this->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (isset($this->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? null);
            }
            if (isset($this->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($this->privates['mailer.logger_message_listener'])) {
                yield 'mailer.logger_message_listener' => ($this->privates['mailer.logger_message_listener'] ?? null);
            }
            if (isset($this->services['profiler'])) {
                yield 'profiler' => ($this->services['profiler'] ?? null);
            }
            if (isset($this->services['validator'])) {
                yield 'debug.validator' => ($this->services['validator'] ?? null);
            }
            if (isset($this->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
            }
            if (isset($this->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($this->services['event_dispatcher'] ?? null);
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (isset($this->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($this->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
            }
            if (isset($this->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($this->privates['monolog.handler.console'] ?? null);
            }
            if (isset($this->privates['swiftmailer.email_sender.listener'])) {
                yield 'swiftmailer.email_sender.listener' => ($this->privates['swiftmailer.email_sender.listener'] ?? null);
            }
            if (isset($this->privates['webpack_encore.tag_renderer'])) {
                yield 'webpack_encore.tag_renderer' => ($this->privates['webpack_encore.tag_renderer'] ?? null);
            }
            if (isset($this->privates['cache.webpack_encore'])) {
                yield 'cache.webpack_encore' => ($this->privates['cache.webpack_encore'] ?? null);
            }
            if (isset($this->privates['webpack_encore.entrypoint_lookup[_default]'])) {
                yield 'webpack_encore.entrypoint_lookup[_default]' => ($this->privates['webpack_encore.entrypoint_lookup[_default]'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['cache.property_info'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->privates['mailer.logger_message_listener'])) + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['event_dispatcher'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language'])) + (int) (isset($this->privates['monolog.handler.main'])) + (int) (isset($this->privates['monolog.handler.console'])) + (int) (isset($this->privates['swiftmailer.email_sender.listener'])) + (int) (isset($this->privates['webpack_encore.tag_renderer'])) + (int) (isset($this->privates['cache.webpack_encore'])) + (int) (isset($this->privates['webpack_encore.entrypoint_lookup[_default]']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'mailer.logger_message_listener' => [0 => 'reset'], 'profiler' => [0 => 'reset'], 'debug.validator' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'debug.event_dispatcher' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'monolog.handler.console' => [0 => 'reset'], 'swiftmailer.email_sender.listener' => [0 => 'reset'], 'webpack_encore.tag_renderer' => [0 => 'reset'], 'cache.webpack_encore' => [0 => 'reset'], 'webpack_encore.entrypoint_lookup[_default]' => [0 => 'reset']]);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Session.php';

        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Mailer.php';

        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(($this->services['swiftmailer.transport'] ?? $this->getSwiftmailer_TransportService()));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Events'.\DIRECTORY_SEPARATOR.'EventListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Events'.\DIRECTORY_SEPARATOR.'SendListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'MessageLogger.php';

        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Transport.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'SwiftmailerTransportFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Events'.\DIRECTORY_SEPARATOR.'EventDispatcher.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Events'.\DIRECTORY_SEPARATOR.'SimpleEventDispatcher.php';

        return $this->services['swiftmailer.mailer.default.transport.real'] = \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SwiftmailerTransportFactory::createTransport(['transport' => 'smtp', 'url' => $this->getEnv('MAILER_URL'), 'username' => NULL, 'password' => NULL, 'host' => 'localhost', 'port' => NULL, 'timeout' => 30, 'source_ip' => NULL, 'local_domain' => NULL, 'encryption' => NULL, 'auth_mode' => NULL, 'command' => '/usr/sbin/sendmail -bs', 'stream_options' => []], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())));
    }

    /**
     * Gets the public 'swiftmailer.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_TransportService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Transport.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'SpoolTransport.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Spool.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'MemorySpool.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Events'.\DIRECTORY_SEPARATOR.'EventDispatcher.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Events'.\DIRECTORY_SEPARATOR.'SimpleEventDispatcher.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Events'.\DIRECTORY_SEPARATOR.'EventListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Events'.\DIRECTORY_SEPARATOR.'SendListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'MessageLogger.php';

        $this->services['swiftmailer.transport'] = $instance = new \Swift_Transport_SpoolTransport(($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())), new \Swift_MemorySpool());

        $instance->registerPlugin(($this->services['swiftmailer.mailer.default.plugin.messagelogger'] ?? ($this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger())));

        return $instance;
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader([], \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/Resources/views'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/Resources/views'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'debug-bundle/Resources/views'), 'Debug');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'debug-bundle/Resources/views'), '!Debug');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/templates'), 'KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/templates'), '!KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mercuryseries'.\DIRECTORY_SEPARATOR.'flashy-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), 'MercurySeriesFlashy');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mercuryseries'.\DIRECTORY_SEPARATOR.'flashy-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), '!MercurySeriesFlashy');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['debug' => true, 'strict_variables' => true, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $b = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $c = ($this->services['translator'] ?? $this->getTranslatorService());
        $d = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $e = ($this->services['router'] ?? $this->getRouterService());
        $f = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $g = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $g->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $d]);
        $h = new \CMEN\GoogleChartsBundle\Output\Javascript\DateOutput();
        $i = new \Knp\Bundle\MarkdownBundle\Parser\ParserManager();
        $i->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Min(), 'min');
        $i->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Light(), 'light');
        $i->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Medium(), 'medium');
        $i->addParser(($this->services['markdown.parser'] ?? ($this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max())), 'default');
        $i->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Flavored(), 'flavored');
        $j = new \Symfony\Bridge\Twig\AppVariable();
        $j->setEnvironment('dev');
        $j->setDebug(true);
        if ($this->has('security.token_storage')) {
            $j->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $j->setRequestStack($f);
        }
        $k = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor();

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($d, \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($e));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($f, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($f));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), ($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService())));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($g));
        $instance->addExtension(new \CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension(new \CMEN\GoogleChartsBundle\Output\Javascript\ChartOutput('current', '', new \CMEN\GoogleChartsBundle\Output\Javascript\OptionsOutput($h), new \CMEN\GoogleChartsBundle\Output\Javascript\DataOutput($h), new \CMEN\GoogleChartsBundle\Output\Javascript\EventsOutput())));
        $instance->addExtension(new \Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension($i));
        $instance->addExtension(new \Ob\HighchartsBundle\Twig\HighchartsExtension());
        $instance->addExtension(new \Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'webpack_encore.entrypoint_lookup_collection' => ['privates', 'webpack_encore.entrypoint_lookup_collection', 'getWebpackEncore_EntrypointLookupCollectionService', false],
            'webpack_encore.tag_renderer' => ['privates', 'webpack_encore.tag_renderer', 'getWebpackEncore_TagRendererService', false],
        ], [
            'webpack_encore.entrypoint_lookup_collection' => '?',
            'webpack_encore.tag_renderer' => '?',
        ])));
        $instance->addExtension(new \Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension());
        $instance->addExtension(new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension(new \Knp\Bundle\PaginatorBundle\Helper\Processor($e, $c)));
        $instance->addGlobal('app', $j);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->registerUndefinedFilterCallback([0 => $k, 1 => 'suggestFilter']);
        $instance->registerUndefinedFunctionCallback([0 => $k, 1 => 'suggestFunction']);
        $instance->registerUndefinedTokenParserCallback([0 => $k, 1 => 'suggestTag']);
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     *
     * @deprecated The "twig.controller.exception" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        @trigger_error('The "twig.controller.exception" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(($this->services['twig'] ?? $this->getTwigService()), true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     *
     * @deprecated The "twig.controller.preview_error" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        @trigger_error('The "twig.controller.preview_error" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), NULL);
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);
        $instance->addCasters(['Closure' => 'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster::unsetClosureFileInfo']);

        return $instance;
    }

    /**
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     *
     * @deprecated The "web_profiler.controller.exception" service is deprecated since Symfony 4.4, use the "web_profiler.controller.exception_panel" service instead.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        @trigger_error('The "web_profiler.controller.exception" service is deprecated since Symfony 4.4, use the "web_profiler.controller.exception_panel" service instead.', E_USER_DEPRECATED);

        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()));
    }

    /**
     * Gets the public 'web_profiler.controller.exception_panel' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController
     */
    protected function getWebProfiler_Controller_ExceptionPanelService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ExceptionPanelController.php';

        return $this->services['web_profiler.controller.exception_panel'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController(($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), ($this->services['profiler'] ?? $this->getProfilerService()));
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ProfilerController.php';

        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(($this->services['router'] ?? $this->getRouterService()), ($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), $this->parameters['data_collector.templates'], ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()), \dirname(__DIR__, 4));
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'RouterController.php';

        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), NULL, new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0));
    }

    /**
     * Gets the private '.debug.http_client' shared service.
     *
     * @return \Symfony\Component\HttpClient\TraceableHttpClient
     */
    protected function get_Debug_HttpClientService()
    {
        $a = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $b = new \Symfony\Bridge\Monolog\Logger('http_client');
        $b->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $b->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $b->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($b);

        $a->setLogger($b);

        return $this->privates['.debug.http_client'] = new \Symfony\Component\HttpClient\TraceableHttpClient($a);
    }

    /**
     * Gets the private '.errored..service_locator.NF7cwmN.App\Entity\Calendar' shared service.
     *
     * @return \App\Entity\Calendar
     */
    protected function getCalendarService()
    {
        $this->throw('Cannot autowire service ".service_locator.NF7cwmN": it references class "App\\Entity\\Calendar" but no such service exists.');
    }

    /**
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /**
     * Gets the private '.service_locator..dr1VnO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator__Dr1VnOService()
    {
        return $this->privates['.service_locator..dr1VnO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repository' => ['privates', 'App\\Repository\\FilmRepository', 'getFilmRepositoryService', false],
        ], [
            'repository' => 'App\\Repository\\FilmRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator..z3xiRM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator__Z3xiRMService()
    {
        return $this->privates['.service_locator..z3xiRM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'TypeAbonnementRepository' => ['privates', 'App\\Repository\\TypeAbonnementRepository', 'getTypeAbonnementRepositoryService', false],
            'mailer' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService', false],
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'TypeAbonnementRepository' => 'App\\Repository\\TypeAbonnementRepository',
            'mailer' => '?',
            'session' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.0wN5Y.2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_0wN5Y_2Service()
    {
        return $this->privates['.service_locator.0wN5Y.2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repository' => ['privates', 'App\\Repository\\AbonnementRepository', 'getAbonnementRepositoryService', false],
        ], [
            'repository' => 'App\\Repository\\AbonnementRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.3tKww5V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_3tKww5VService()
    {
        return $this->privates['.service_locator.3tKww5V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repository' => ['privates', 'App\\Repository\\CinemaRepository', 'getCinemaRepositoryService', false],
        ], [
            'repository' => 'App\\Repository\\CinemaRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.5cOmFQz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_5cOmFQzService()
    {
        return $this->privates['.service_locator.5cOmFQz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'calendar' => ['privates', 'App\\Repository\\CalendarRepository', 'getCalendarRepositoryService', false],
        ], [
            'calendar' => 'App\\Repository\\CalendarRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.6uKFXt_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_6uKFXtService()
    {
        return $this->privates['.service_locator.6uKFXt_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repo' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', false],
        ], [
            'repo' => 'App\\Repository\\ReservationRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.8ZuNAXa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_8ZuNAXaService()
    {
        return $this->privates['.service_locator.8ZuNAXa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'mailer' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService', false],
        ], [
            'mailer' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.Aqwdl2e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Aqwdl2eService()
    {
        return $this->privates['.service_locator.Aqwdl2e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'TypeAbonnementRepository' => ['privates', 'App\\Repository\\TypeAbonnementRepository', 'getTypeAbonnementRepositoryService', false],
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'TypeAbonnementRepository' => 'App\\Repository\\TypeAbonnementRepository',
            'session' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.BW5eTzg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_BW5eTzgService()
    {
        return $this->privates['.service_locator.BW5eTzg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Normalizer' => ['services', 'serializer', 'getSerializerService', false],
            'repository' => ['privates', 'App\\Repository\\AbonneRepository', 'getAbonneRepositoryService', false],
        ], [
            'Normalizer' => '?',
            'repository' => 'App\\Repository\\AbonneRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.BuqDmxr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_BuqDmxrService()
    {
        return $this->privates['.service_locator.BuqDmxr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'serializer' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.BvcyOg1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_BvcyOg1Service()
    {
        return $this->privates['.service_locator.BvcyOg1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'normalizer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'normalizer' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.IsBt6qd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_IsBt6qdService()
    {
        return $this->privates['.service_locator.IsBt6qd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Normalizer' => ['services', 'serializer', 'getSerializerService', false],
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
        ], [
            'Normalizer' => '?',
            'encoder' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.Jfpm0Lz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Jfpm0LzService()
    {
        return $this->privates['.service_locator.Jfpm0Lz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', false],
        ], [
            'repository' => 'App\\Repository\\ReservationRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.JjRAOhW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_JjRAOhWService()
    {
        return $this->privates['.service_locator.JjRAOhW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repository' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', false],
        ], [
            'repository' => 'App\\Repository\\ReclamationRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.Mn3p92N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Mn3p92NService()
    {
        return $this->privates['.service_locator.Mn3p92N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repository' => ['privates', 'App\\Repository\\CongeRepository', 'getCongeRepositoryService', false],
        ], [
            'repository' => 'App\\Repository\\CongeRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.Mq42R5e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Mq42R5eService()
    {
        return $this->privates['.service_locator.Mq42R5e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'flashy' => ['services', 'mercuryseries_flashy.flashy_notifier', 'getMercuryseriesFlashy_FlashyNotifierService', false],
        ], [
            'flashy' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.NF7cwmN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_NF7cwmNService()
    {
        return $this->privates['.service_locator.NF7cwmN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'calendar' => ['privates', '.errored..service_locator.NF7cwmN.App\\Entity\\Calendar', NULL, 'Cannot autowire service ".service_locator.NF7cwmN": it references class "App\\Entity\\Calendar" but no such service exists.'],
        ], [
            'calendar' => 'App\\Entity\\Calendar',
        ]);
    }

    /**
     * Gets the private '.service_locator.RKfkIZ4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_RKfkIZ4Service()
    {
        return $this->privates['.service_locator.RKfkIZ4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'normalizer' => ['services', 'serializer', 'getSerializerService', false],
            'repository' => ['privates', 'App\\Repository\\CategoriefRepository', 'getCategoriefRepositoryService', false],
        ], [
            'normalizer' => '?',
            'repository' => 'App\\Repository\\CategoriefRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.RQ5vfM4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_RQ5vfM4Service()
    {
        return $this->privates['.service_locator.RQ5vfM4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'AbonneRepository' => ['privates', 'App\\Repository\\AbonneRepository', 'getAbonneRepositoryService', false],
            'Normalizer' => ['services', 'serializer', 'getSerializerService', false],
            'TypeAbonnementRepository' => ['privates', 'App\\Repository\\TypeAbonnementRepository', 'getTypeAbonnementRepositoryService', false],
        ], [
            'AbonneRepository' => 'App\\Repository\\AbonneRepository',
            'Normalizer' => '?',
            'TypeAbonnementRepository' => 'App\\Repository\\TypeAbonnementRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.SOGscYu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_SOGscYuService()
    {
        return $this->privates['.service_locator.SOGscYu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'authUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', false],
        ], [
            'authUtils' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.SQTT75s' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_SQTT75sService()
    {
        return $this->privates['.service_locator.SQTT75s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'mailer1' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService', false],
        ], [
            'mailer1' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.WXqcS5S' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_WXqcS5SService()
    {
        return $this->privates['.service_locator.WXqcS5S'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'normalizer' => ['services', 'serializer', 'getSerializerService', false],
            'repositoryf' => ['privates', 'App\\Repository\\FilmRepository', 'getFilmRepositoryService', false],
        ], [
            'normalizer' => '?',
            'repositoryf' => 'App\\Repository\\FilmRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.altlVgi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_AltlVgiService()
    {
        return $this->privates['.service_locator.altlVgi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'normalizer' => ['services', 'serializer', 'getSerializerService', false],
            'repository' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'normalizer' => '?',
            'repository' => 'App\\Repository\\ReclamationRepository',
            'serializer' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.c2Cqah3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_C2Cqah3Service()
    {
        return $this->privates['.service_locator.c2Cqah3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Controller\\AbonneController::Add' => ['privates', '.service_locator.jmvbEvf', 'get_ServiceLocator_JmvbEvfService', false],
            'App\\Controller\\AbonneController::Afficheabo' => ['privates', '.service_locator.m2ukz1E', 'get_ServiceLocator_M2ukz1EService', false],
            'App\\Controller\\AbonneController::Delete' => ['privates', '.service_locator.m2ukz1E', 'get_ServiceLocator_M2ukz1EService', false],
            'App\\Controller\\AbonneController::addAbonneJSON' => ['privates', '.service_locator.IsBt6qd', 'get_ServiceLocator_IsBt6qdService', false],
            'App\\Controller\\AbonneController::addStripeJSON' => ['privates', '.service_locator.BW5eTzg', 'get_ServiceLocator_BW5eTzgService', false],
            'App\\Controller\\AbonneController::login' => ['privates', '.service_locator.SOGscYu', 'get_ServiceLocator_SOGscYuService', false],
            'App\\Controller\\AbonneController::loginJSON' => ['privates', '.service_locator.BW5eTzg', 'get_ServiceLocator_BW5eTzgService', false],
            'App\\Controller\\AbonneController::tri' => ['privates', '.service_locator.m2ukz1E', 'get_ServiceLocator_M2ukz1EService', false],
            'App\\Controller\\AbonnementController::AddAbonnement' => ['privates', '.service_locator..z3xiRM', 'get_ServiceLocator__Z3xiRMService', false],
            'App\\Controller\\AbonnementController::Afficheabonnement' => ['privates', '.service_locator.0wN5Y.2', 'get_ServiceLocator_0wN5Y_2Service', false],
            'App\\Controller\\AbonnementController::Delete' => ['privates', '.service_locator.0wN5Y.2', 'get_ServiceLocator_0wN5Y_2Service', false],
            'App\\Controller\\AbonnementController::MesAbonnements' => ['privates', '.service_locator.0wN5Y.2', 'get_ServiceLocator_0wN5Y_2Service', false],
            'App\\Controller\\AbonnementController::addAbonnementJSON' => ['privates', '.service_locator.RQ5vfM4', 'get_ServiceLocator_RQ5vfM4Service', false],
            'App\\Controller\\AbonnementController::admin_abonnement' => ['privates', '.service_locator.0wN5Y.2', 'get_ServiceLocator_0wN5Y_2Service', false],
            'App\\Controller\\AbonnementController::updateAbonnement' => ['privates', '.service_locator.0wN5Y.2', 'get_ServiceLocator_0wN5Y_2Service', false],
            'App\\Controller\\AvisclientController::addRJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CalendarController::delete' => ['privates', '.service_locator.NF7cwmN', 'get_ServiceLocator_NF7cwmNService', false],
            'App\\Controller\\CalendarController::edit' => ['privates', '.service_locator.NF7cwmN', 'get_ServiceLocator_NF7cwmNService', false],
            'App\\Controller\\CalendarController::show' => ['privates', '.service_locator.NF7cwmN', 'get_ServiceLocator_NF7cwmNService', false],
            'App\\Controller\\CartController::add' => ['privates', '.service_locator.o3htLhs', 'get_ServiceLocator_O3htLhsService', false],
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.Aqwdl2e', 'get_ServiceLocator_Aqwdl2eService', false],
            'App\\Controller\\CartController::remove' => ['privates', '.service_locator.o3htLhs', 'get_ServiceLocator_O3htLhsService', false],
            'App\\Controller\\CategorieController::CatId' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CategorieController::addCatJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CategorieController::addCategorie' => ['privates', '.service_locator.Mq42R5e', 'get_ServiceLocator_Mq42R5eService', false],
            'App\\Controller\\CategorieController::afficherCatjsonTwig' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CategorieController::deleteCateorie' => ['privates', '.service_locator.Mq42R5e', 'get_ServiceLocator_Mq42R5eService', false],
            'App\\Controller\\CategorieController::deletePlatJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CategorieController::updateCatJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CategorieController::updateCategorie' => ['privates', '.service_locator.Mq42R5e', 'get_ServiceLocator_Mq42R5eService', false],
            'App\\Controller\\CelluleController::addCelluleJson' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CelluleController::afficherjson' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CinemaController::CinemaId' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CinemaController::addCinemaJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CinemaController::addrese' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\CinemaController::afficherCinemajsonTwig' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CinemaController::afficherr' => ['privates', '.service_locator.n8gOTNr', 'get_ServiceLocator_N8gOTNrService', false],
            'App\\Controller\\CinemaController::contact' => ['privates', '.service_locator.SQTT75s', 'get_ServiceLocator_SQTT75sService', false],
            'App\\Controller\\CinemaController::contactJson' => ['privates', '.service_locator.SQTT75s', 'get_ServiceLocator_SQTT75sService', false],
            'App\\Controller\\CinemaController::deleteCinemaJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CinemaController::recherche_cin' => ['privates', '.service_locator.3tKww5V', 'get_ServiceLocator_3tKww5VService', false],
            'App\\Controller\\CinemaController::recherche_film_date' => ['privates', '.service_locator.3tKww5V', 'get_ServiceLocator_3tKww5VService', false],
            'App\\Controller\\CinemaController::recherchecinema' => ['privates', '.service_locator.3tKww5V', 'get_ServiceLocator_3tKww5VService', false],
            'App\\Controller\\CinemaController::recherchecinema1' => ['privates', '.service_locator.3tKww5V', 'get_ServiceLocator_3tKww5VService', false],
            'App\\Controller\\CinemaController::tri' => ['privates', '.service_locator.3tKww5V', 'get_ServiceLocator_3tKww5VService', false],
            'App\\Controller\\CinemaController::trif' => ['privates', '.service_locator.3tKww5V', 'get_ServiceLocator_3tKww5VService', false],
            'App\\Controller\\CinemaController::updateCinemaJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CongeController::EmployeId' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CongeController::addJSONConge' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CongeController::afficherjsonTwigConge' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CongeController::deleteCongeJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CongeController::deleteEmployeJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CongeController::pdfActionc' => ['privates', '.service_locator.w7_pocN', 'get_ServiceLocator_W7PocNService', false],
            'App\\Controller\\CongeController::tricon' => ['privates', '.service_locator.Mn3p92N', 'get_ServiceLocator_Mn3p92NService', false],
            'App\\Controller\\CongeController::updateEmployeJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\ContactController::contactautoconf' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\ContactController::contactautoref' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.SQTT75s', 'get_ServiceLocator_SQTT75sService', false],
            'App\\Controller\\EmployeController::EmployeId' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\EmployeController::addJSONEmploye' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\EmployeController::afficherjsonTwigEmploye' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\EmployeController::deleteEmployeJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\EmployeController::pdfAction' => ['privates', '.service_locator.w7_pocN', 'get_ServiceLocator_W7PocNService', false],
            'App\\Controller\\EmployeController::searchemp' => ['privates', '.service_locator.Mn3p92N', 'get_ServiceLocator_Mn3p92NService', false],
            'App\\Controller\\EmployeController::updateEmployeJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\EquipementController::recherche' => ['privates', '.service_locator.jXJtOkZ', 'get_ServiceLocator_JXJtOkZService', false],
            'App\\Controller\\EquipementController::searchE' => ['privates', '.service_locator.jXJtOkZ', 'get_ServiceLocator_JXJtOkZService', false],
            'App\\Controller\\EquipementController::triE' => ['privates', '.service_locator.jXJtOkZ', 'get_ServiceLocator_JXJtOkZService', false],
            'App\\Controller\\EvenementController::ParticiperAction' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\FilmController::addFilmJson' => ['privates', '.service_locator.BuqDmxr', 'get_ServiceLocator_BuqDmxrService', false],
            'App\\Controller\\FilmController::addJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\FilmController::afficherCatejsonTwig' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\FilmController::afficherjson' => ['privates', '.service_locator.WXqcS5S', 'get_ServiceLocator_WXqcS5SService', false],
            'App\\Controller\\FilmController::afficherjsonTwig' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\FilmController::deleteFilmJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\FilmController::recherchefilm' => ['privates', '.service_locator..dr1VnO', 'get_ServiceLocator__Dr1VnOService', false],
            'App\\Controller\\FilmController::searchCateJSON' => ['privates', '.service_locator.RKfkIZ4', 'get_ServiceLocator_RKfkIZ4Service', false],
            'App\\Controller\\FilmController::searchFilmJSON' => ['privates', '.service_locator.xDTwOVo', 'get_ServiceLocator_XDTwOVoService', false],
            'App\\Controller\\FilmController::updateFilmJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\MainController::index' => ['privates', '.service_locator.5cOmFQz', 'get_ServiceLocator_5cOmFQzService', false],
            'App\\Controller\\PlatController::PlatId' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\PlatController::addPlat' => ['privates', '.service_locator.Mq42R5e', 'get_ServiceLocator_Mq42R5eService', false],
            'App\\Controller\\PlatController::addPlatJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\PlatController::afficherPlatjsonTwig' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\PlatController::delete' => ['privates', '.service_locator.Mq42R5e', 'get_ServiceLocator_Mq42R5eService', false],
            'App\\Controller\\PlatController::deletePlatJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\PlatController::updatePlat' => ['privates', '.service_locator.Mq42R5e', 'get_ServiceLocator_Mq42R5eService', false],
            'App\\Controller\\PlatController::updatePlatJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\ReclamationController::addmob' => ['privates', '.service_locator.cAwvHDt', 'get_ServiceLocator_CAwvHDtService', false],
            'App\\Controller\\ReclamationController::addrec' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\ReclamationController::list' => ['privates', '.service_locator.JjRAOhW', 'get_ServiceLocator_JjRAOhWService', false],
            'App\\Controller\\ReclamationController::list1' => ['privates', '.service_locator.JjRAOhW', 'get_ServiceLocator_JjRAOhWService', false],
            'App\\Controller\\ReclamationController::listmob' => ['privates', '.service_locator.altlVgi', 'get_ServiceLocator_AltlVgiService', false],
            'App\\Controller\\ReclamationController::notif' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\ReclamationController::search' => ['privates', '.service_locator.JjRAOhW', 'get_ServiceLocator_JjRAOhWService', false],
            'App\\Controller\\ReclamationController::statistiques' => ['privates', '.service_locator.JjRAOhW', 'get_ServiceLocator_JjRAOhWService', false],
            'App\\Controller\\ReclamationController::tri' => ['privates', '.service_locator.JjRAOhW', 'get_ServiceLocator_JjRAOhWService', false],
            'App\\Controller\\ReclamationController::update' => ['privates', '.service_locator.uNXHe3R', 'get_ServiceLocator_UNXHe3RService', false],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.g.xob4v', 'get_ServiceLocator_G_Xob4vService', false],
            'App\\Controller\\TypeAbonnementController::Afficheabo' => ['privates', '.service_locator.vbO_Tno', 'get_ServiceLocator_VbOTnoService', false],
            'App\\Controller\\TypeAbonnementController::Delete' => ['privates', '.service_locator.vbO_Tno', 'get_ServiceLocator_VbOTnoService', false],
            'App\\Controller\\TypeAbonnementController::ListTypeAbo' => ['privates', '.service_locator.vbO_Tno', 'get_ServiceLocator_VbOTnoService', false],
            'App\\Controller\\TypeAbonnementController::getTypeAbonnements' => ['privates', '.service_locator.fcnM1tI', 'get_ServiceLocator_FcnM1tIService', false],
            'App\\Controller\\TypeAbonnementController::updateTypeAbonnement' => ['privates', '.service_locator.vbO_Tno', 'get_ServiceLocator_VbOTnoService', false],
            'App\\Controller\\reservationController::addReservation' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\reservationController::deleteReservation' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\reservationController::pdf' => ['privates', '.service_locator.6uKFXt_', 'get_ServiceLocator_6uKFXtService', false],
            'App\\Controller\\reservationController::recherche' => ['privates', '.service_locator.Jfpm0Lz', 'get_ServiceLocator_Jfpm0LzService', false],
            'App\\Controller\\reservationController::tri' => ['privates', '.service_locator.Jfpm0Lz', 'get_ServiceLocator_Jfpm0LzService', false],
            'App\\Controller\\AbonneController:Add' => ['privates', '.service_locator.jmvbEvf', 'get_ServiceLocator_JmvbEvfService', false],
            'App\\Controller\\AbonneController:Afficheabo' => ['privates', '.service_locator.m2ukz1E', 'get_ServiceLocator_M2ukz1EService', false],
            'App\\Controller\\AbonneController:Delete' => ['privates', '.service_locator.m2ukz1E', 'get_ServiceLocator_M2ukz1EService', false],
            'App\\Controller\\AbonneController:addAbonneJSON' => ['privates', '.service_locator.IsBt6qd', 'get_ServiceLocator_IsBt6qdService', false],
            'App\\Controller\\AbonneController:addStripeJSON' => ['privates', '.service_locator.BW5eTzg', 'get_ServiceLocator_BW5eTzgService', false],
            'App\\Controller\\AbonneController:login' => ['privates', '.service_locator.SOGscYu', 'get_ServiceLocator_SOGscYuService', false],
            'App\\Controller\\AbonneController:loginJSON' => ['privates', '.service_locator.BW5eTzg', 'get_ServiceLocator_BW5eTzgService', false],
            'App\\Controller\\AbonneController:tri' => ['privates', '.service_locator.m2ukz1E', 'get_ServiceLocator_M2ukz1EService', false],
            'App\\Controller\\AbonnementController:AddAbonnement' => ['privates', '.service_locator..z3xiRM', 'get_ServiceLocator__Z3xiRMService', false],
            'App\\Controller\\AbonnementController:Afficheabonnement' => ['privates', '.service_locator.0wN5Y.2', 'get_ServiceLocator_0wN5Y_2Service', false],
            'App\\Controller\\AbonnementController:Delete' => ['privates', '.service_locator.0wN5Y.2', 'get_ServiceLocator_0wN5Y_2Service', false],
            'App\\Controller\\AbonnementController:MesAbonnements' => ['privates', '.service_locator.0wN5Y.2', 'get_ServiceLocator_0wN5Y_2Service', false],
            'App\\Controller\\AbonnementController:addAbonnementJSON' => ['privates', '.service_locator.RQ5vfM4', 'get_ServiceLocator_RQ5vfM4Service', false],
            'App\\Controller\\AbonnementController:admin_abonnement' => ['privates', '.service_locator.0wN5Y.2', 'get_ServiceLocator_0wN5Y_2Service', false],
            'App\\Controller\\AbonnementController:updateAbonnement' => ['privates', '.service_locator.0wN5Y.2', 'get_ServiceLocator_0wN5Y_2Service', false],
            'App\\Controller\\AvisclientController:addRJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CalendarController:delete' => ['privates', '.service_locator.NF7cwmN', 'get_ServiceLocator_NF7cwmNService', false],
            'App\\Controller\\CalendarController:edit' => ['privates', '.service_locator.NF7cwmN', 'get_ServiceLocator_NF7cwmNService', false],
            'App\\Controller\\CalendarController:show' => ['privates', '.service_locator.NF7cwmN', 'get_ServiceLocator_NF7cwmNService', false],
            'App\\Controller\\CartController:add' => ['privates', '.service_locator.o3htLhs', 'get_ServiceLocator_O3htLhsService', false],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.Aqwdl2e', 'get_ServiceLocator_Aqwdl2eService', false],
            'App\\Controller\\CartController:remove' => ['privates', '.service_locator.o3htLhs', 'get_ServiceLocator_O3htLhsService', false],
            'App\\Controller\\CategorieController:CatId' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CategorieController:addCatJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CategorieController:addCategorie' => ['privates', '.service_locator.Mq42R5e', 'get_ServiceLocator_Mq42R5eService', false],
            'App\\Controller\\CategorieController:afficherCatjsonTwig' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CategorieController:deleteCateorie' => ['privates', '.service_locator.Mq42R5e', 'get_ServiceLocator_Mq42R5eService', false],
            'App\\Controller\\CategorieController:deletePlatJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CategorieController:updateCatJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CategorieController:updateCategorie' => ['privates', '.service_locator.Mq42R5e', 'get_ServiceLocator_Mq42R5eService', false],
            'App\\Controller\\CelluleController:addCelluleJson' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CelluleController:afficherjson' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CinemaController:CinemaId' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CinemaController:addCinemaJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CinemaController:addrese' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\CinemaController:afficherCinemajsonTwig' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CinemaController:afficherr' => ['privates', '.service_locator.n8gOTNr', 'get_ServiceLocator_N8gOTNrService', false],
            'App\\Controller\\CinemaController:contact' => ['privates', '.service_locator.SQTT75s', 'get_ServiceLocator_SQTT75sService', false],
            'App\\Controller\\CinemaController:contactJson' => ['privates', '.service_locator.SQTT75s', 'get_ServiceLocator_SQTT75sService', false],
            'App\\Controller\\CinemaController:deleteCinemaJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CinemaController:recherche_cin' => ['privates', '.service_locator.3tKww5V', 'get_ServiceLocator_3tKww5VService', false],
            'App\\Controller\\CinemaController:recherche_film_date' => ['privates', '.service_locator.3tKww5V', 'get_ServiceLocator_3tKww5VService', false],
            'App\\Controller\\CinemaController:recherchecinema' => ['privates', '.service_locator.3tKww5V', 'get_ServiceLocator_3tKww5VService', false],
            'App\\Controller\\CinemaController:recherchecinema1' => ['privates', '.service_locator.3tKww5V', 'get_ServiceLocator_3tKww5VService', false],
            'App\\Controller\\CinemaController:tri' => ['privates', '.service_locator.3tKww5V', 'get_ServiceLocator_3tKww5VService', false],
            'App\\Controller\\CinemaController:trif' => ['privates', '.service_locator.3tKww5V', 'get_ServiceLocator_3tKww5VService', false],
            'App\\Controller\\CinemaController:updateCinemaJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CongeController:EmployeId' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CongeController:addJSONConge' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CongeController:afficherjsonTwigConge' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CongeController:deleteCongeJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CongeController:deleteEmployeJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\CongeController:pdfActionc' => ['privates', '.service_locator.w7_pocN', 'get_ServiceLocator_W7PocNService', false],
            'App\\Controller\\CongeController:tricon' => ['privates', '.service_locator.Mn3p92N', 'get_ServiceLocator_Mn3p92NService', false],
            'App\\Controller\\CongeController:updateEmployeJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\ContactController:contactautoconf' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\ContactController:contactautoref' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.SQTT75s', 'get_ServiceLocator_SQTT75sService', false],
            'App\\Controller\\EmployeController:EmployeId' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\EmployeController:addJSONEmploye' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\EmployeController:afficherjsonTwigEmploye' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\EmployeController:deleteEmployeJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\EmployeController:pdfAction' => ['privates', '.service_locator.w7_pocN', 'get_ServiceLocator_W7PocNService', false],
            'App\\Controller\\EmployeController:searchemp' => ['privates', '.service_locator.Mn3p92N', 'get_ServiceLocator_Mn3p92NService', false],
            'App\\Controller\\EmployeController:updateEmployeJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\EquipementController:recherche' => ['privates', '.service_locator.jXJtOkZ', 'get_ServiceLocator_JXJtOkZService', false],
            'App\\Controller\\EquipementController:searchE' => ['privates', '.service_locator.jXJtOkZ', 'get_ServiceLocator_JXJtOkZService', false],
            'App\\Controller\\EquipementController:triE' => ['privates', '.service_locator.jXJtOkZ', 'get_ServiceLocator_JXJtOkZService', false],
            'App\\Controller\\EvenementController:ParticiperAction' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\FilmController:addFilmJson' => ['privates', '.service_locator.BuqDmxr', 'get_ServiceLocator_BuqDmxrService', false],
            'App\\Controller\\FilmController:addJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\FilmController:afficherCatejsonTwig' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\FilmController:afficherjson' => ['privates', '.service_locator.WXqcS5S', 'get_ServiceLocator_WXqcS5SService', false],
            'App\\Controller\\FilmController:afficherjsonTwig' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\FilmController:deleteFilmJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\FilmController:recherchefilm' => ['privates', '.service_locator..dr1VnO', 'get_ServiceLocator__Dr1VnOService', false],
            'App\\Controller\\FilmController:searchCateJSON' => ['privates', '.service_locator.RKfkIZ4', 'get_ServiceLocator_RKfkIZ4Service', false],
            'App\\Controller\\FilmController:searchFilmJSON' => ['privates', '.service_locator.xDTwOVo', 'get_ServiceLocator_XDTwOVoService', false],
            'App\\Controller\\FilmController:updateFilmJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\MainController:index' => ['privates', '.service_locator.5cOmFQz', 'get_ServiceLocator_5cOmFQzService', false],
            'App\\Controller\\PlatController:PlatId' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\PlatController:addPlat' => ['privates', '.service_locator.Mq42R5e', 'get_ServiceLocator_Mq42R5eService', false],
            'App\\Controller\\PlatController:addPlatJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\PlatController:afficherPlatjsonTwig' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\PlatController:delete' => ['privates', '.service_locator.Mq42R5e', 'get_ServiceLocator_Mq42R5eService', false],
            'App\\Controller\\PlatController:deletePlatJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\PlatController:updatePlat' => ['privates', '.service_locator.Mq42R5e', 'get_ServiceLocator_Mq42R5eService', false],
            'App\\Controller\\PlatController:updatePlatJSON' => ['privates', '.service_locator.BvcyOg1', 'get_ServiceLocator_BvcyOg1Service', false],
            'App\\Controller\\ReclamationController:addmob' => ['privates', '.service_locator.cAwvHDt', 'get_ServiceLocator_CAwvHDtService', false],
            'App\\Controller\\ReclamationController:addrec' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\ReclamationController:list' => ['privates', '.service_locator.JjRAOhW', 'get_ServiceLocator_JjRAOhWService', false],
            'App\\Controller\\ReclamationController:list1' => ['privates', '.service_locator.JjRAOhW', 'get_ServiceLocator_JjRAOhWService', false],
            'App\\Controller\\ReclamationController:listmob' => ['privates', '.service_locator.altlVgi', 'get_ServiceLocator_AltlVgiService', false],
            'App\\Controller\\ReclamationController:notif' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\ReclamationController:search' => ['privates', '.service_locator.JjRAOhW', 'get_ServiceLocator_JjRAOhWService', false],
            'App\\Controller\\ReclamationController:statistiques' => ['privates', '.service_locator.JjRAOhW', 'get_ServiceLocator_JjRAOhWService', false],
            'App\\Controller\\ReclamationController:tri' => ['privates', '.service_locator.JjRAOhW', 'get_ServiceLocator_JjRAOhWService', false],
            'App\\Controller\\ReclamationController:update' => ['privates', '.service_locator.uNXHe3R', 'get_ServiceLocator_UNXHe3RService', false],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.g.xob4v', 'get_ServiceLocator_G_Xob4vService', false],
            'App\\Controller\\TypeAbonnementController:Afficheabo' => ['privates', '.service_locator.vbO_Tno', 'get_ServiceLocator_VbOTnoService', false],
            'App\\Controller\\TypeAbonnementController:Delete' => ['privates', '.service_locator.vbO_Tno', 'get_ServiceLocator_VbOTnoService', false],
            'App\\Controller\\TypeAbonnementController:ListTypeAbo' => ['privates', '.service_locator.vbO_Tno', 'get_ServiceLocator_VbOTnoService', false],
            'App\\Controller\\TypeAbonnementController:getTypeAbonnements' => ['privates', '.service_locator.fcnM1tI', 'get_ServiceLocator_FcnM1tIService', false],
            'App\\Controller\\TypeAbonnementController:updateTypeAbonnement' => ['privates', '.service_locator.vbO_Tno', 'get_ServiceLocator_VbOTnoService', false],
            'App\\Controller\\reservationController:addReservation' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\reservationController:deleteReservation' => ['privates', '.service_locator.8ZuNAXa', 'get_ServiceLocator_8ZuNAXaService', false],
            'App\\Controller\\reservationController:pdf' => ['privates', '.service_locator.6uKFXt_', 'get_ServiceLocator_6uKFXtService', false],
            'App\\Controller\\reservationController:recherche' => ['privates', '.service_locator.Jfpm0Lz', 'get_ServiceLocator_Jfpm0LzService', false],
            'App\\Controller\\reservationController:tri' => ['privates', '.service_locator.Jfpm0Lz', 'get_ServiceLocator_Jfpm0LzService', false],
        ], [
            'App\\Controller\\AbonneController::Add' => '?',
            'App\\Controller\\AbonneController::Afficheabo' => '?',
            'App\\Controller\\AbonneController::Delete' => '?',
            'App\\Controller\\AbonneController::addAbonneJSON' => '?',
            'App\\Controller\\AbonneController::addStripeJSON' => '?',
            'App\\Controller\\AbonneController::login' => '?',
            'App\\Controller\\AbonneController::loginJSON' => '?',
            'App\\Controller\\AbonneController::tri' => '?',
            'App\\Controller\\AbonnementController::AddAbonnement' => '?',
            'App\\Controller\\AbonnementController::Afficheabonnement' => '?',
            'App\\Controller\\AbonnementController::Delete' => '?',
            'App\\Controller\\AbonnementController::MesAbonnements' => '?',
            'App\\Controller\\AbonnementController::addAbonnementJSON' => '?',
            'App\\Controller\\AbonnementController::admin_abonnement' => '?',
            'App\\Controller\\AbonnementController::updateAbonnement' => '?',
            'App\\Controller\\AvisclientController::addRJSON' => '?',
            'App\\Controller\\CalendarController::delete' => '?',
            'App\\Controller\\CalendarController::edit' => '?',
            'App\\Controller\\CalendarController::show' => '?',
            'App\\Controller\\CartController::add' => '?',
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\CartController::remove' => '?',
            'App\\Controller\\CategorieController::CatId' => '?',
            'App\\Controller\\CategorieController::addCatJSON' => '?',
            'App\\Controller\\CategorieController::addCategorie' => '?',
            'App\\Controller\\CategorieController::afficherCatjsonTwig' => '?',
            'App\\Controller\\CategorieController::deleteCateorie' => '?',
            'App\\Controller\\CategorieController::deletePlatJSON' => '?',
            'App\\Controller\\CategorieController::updateCatJSON' => '?',
            'App\\Controller\\CategorieController::updateCategorie' => '?',
            'App\\Controller\\CelluleController::addCelluleJson' => '?',
            'App\\Controller\\CelluleController::afficherjson' => '?',
            'App\\Controller\\CinemaController::CinemaId' => '?',
            'App\\Controller\\CinemaController::addCinemaJSON' => '?',
            'App\\Controller\\CinemaController::addrese' => '?',
            'App\\Controller\\CinemaController::afficherCinemajsonTwig' => '?',
            'App\\Controller\\CinemaController::afficherr' => '?',
            'App\\Controller\\CinemaController::contact' => '?',
            'App\\Controller\\CinemaController::contactJson' => '?',
            'App\\Controller\\CinemaController::deleteCinemaJSON' => '?',
            'App\\Controller\\CinemaController::recherche_cin' => '?',
            'App\\Controller\\CinemaController::recherche_film_date' => '?',
            'App\\Controller\\CinemaController::recherchecinema' => '?',
            'App\\Controller\\CinemaController::recherchecinema1' => '?',
            'App\\Controller\\CinemaController::tri' => '?',
            'App\\Controller\\CinemaController::trif' => '?',
            'App\\Controller\\CinemaController::updateCinemaJSON' => '?',
            'App\\Controller\\CongeController::EmployeId' => '?',
            'App\\Controller\\CongeController::addJSONConge' => '?',
            'App\\Controller\\CongeController::afficherjsonTwigConge' => '?',
            'App\\Controller\\CongeController::deleteCongeJSON' => '?',
            'App\\Controller\\CongeController::deleteEmployeJSON' => '?',
            'App\\Controller\\CongeController::pdfActionc' => '?',
            'App\\Controller\\CongeController::tricon' => '?',
            'App\\Controller\\CongeController::updateEmployeJSON' => '?',
            'App\\Controller\\ContactController::contactautoconf' => '?',
            'App\\Controller\\ContactController::contactautoref' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\EmployeController::EmployeId' => '?',
            'App\\Controller\\EmployeController::addJSONEmploye' => '?',
            'App\\Controller\\EmployeController::afficherjsonTwigEmploye' => '?',
            'App\\Controller\\EmployeController::deleteEmployeJSON' => '?',
            'App\\Controller\\EmployeController::pdfAction' => '?',
            'App\\Controller\\EmployeController::searchemp' => '?',
            'App\\Controller\\EmployeController::updateEmployeJSON' => '?',
            'App\\Controller\\EquipementController::recherche' => '?',
            'App\\Controller\\EquipementController::searchE' => '?',
            'App\\Controller\\EquipementController::triE' => '?',
            'App\\Controller\\EvenementController::ParticiperAction' => '?',
            'App\\Controller\\FilmController::addFilmJson' => '?',
            'App\\Controller\\FilmController::addJSON' => '?',
            'App\\Controller\\FilmController::afficherCatejsonTwig' => '?',
            'App\\Controller\\FilmController::afficherjson' => '?',
            'App\\Controller\\FilmController::afficherjsonTwig' => '?',
            'App\\Controller\\FilmController::deleteFilmJSON' => '?',
            'App\\Controller\\FilmController::recherchefilm' => '?',
            'App\\Controller\\FilmController::searchCateJSON' => '?',
            'App\\Controller\\FilmController::searchFilmJSON' => '?',
            'App\\Controller\\FilmController::updateFilmJSON' => '?',
            'App\\Controller\\MainController::index' => '?',
            'App\\Controller\\PlatController::PlatId' => '?',
            'App\\Controller\\PlatController::addPlat' => '?',
            'App\\Controller\\PlatController::addPlatJSON' => '?',
            'App\\Controller\\PlatController::afficherPlatjsonTwig' => '?',
            'App\\Controller\\PlatController::delete' => '?',
            'App\\Controller\\PlatController::deletePlatJSON' => '?',
            'App\\Controller\\PlatController::updatePlat' => '?',
            'App\\Controller\\PlatController::updatePlatJSON' => '?',
            'App\\Controller\\ReclamationController::addmob' => '?',
            'App\\Controller\\ReclamationController::addrec' => '?',
            'App\\Controller\\ReclamationController::list' => '?',
            'App\\Controller\\ReclamationController::list1' => '?',
            'App\\Controller\\ReclamationController::listmob' => '?',
            'App\\Controller\\ReclamationController::notif' => '?',
            'App\\Controller\\ReclamationController::search' => '?',
            'App\\Controller\\ReclamationController::statistiques' => '?',
            'App\\Controller\\ReclamationController::tri' => '?',
            'App\\Controller\\ReclamationController::update' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TypeAbonnementController::Afficheabo' => '?',
            'App\\Controller\\TypeAbonnementController::Delete' => '?',
            'App\\Controller\\TypeAbonnementController::ListTypeAbo' => '?',
            'App\\Controller\\TypeAbonnementController::getTypeAbonnements' => '?',
            'App\\Controller\\TypeAbonnementController::updateTypeAbonnement' => '?',
            'App\\Controller\\reservationController::addReservation' => '?',
            'App\\Controller\\reservationController::deleteReservation' => '?',
            'App\\Controller\\reservationController::pdf' => '?',
            'App\\Controller\\reservationController::recherche' => '?',
            'App\\Controller\\reservationController::tri' => '?',
            'App\\Controller\\AbonneController:Add' => '?',
            'App\\Controller\\AbonneController:Afficheabo' => '?',
            'App\\Controller\\AbonneController:Delete' => '?',
            'App\\Controller\\AbonneController:addAbonneJSON' => '?',
            'App\\Controller\\AbonneController:addStripeJSON' => '?',
            'App\\Controller\\AbonneController:login' => '?',
            'App\\Controller\\AbonneController:loginJSON' => '?',
            'App\\Controller\\AbonneController:tri' => '?',
            'App\\Controller\\AbonnementController:AddAbonnement' => '?',
            'App\\Controller\\AbonnementController:Afficheabonnement' => '?',
            'App\\Controller\\AbonnementController:Delete' => '?',
            'App\\Controller\\AbonnementController:MesAbonnements' => '?',
            'App\\Controller\\AbonnementController:addAbonnementJSON' => '?',
            'App\\Controller\\AbonnementController:admin_abonnement' => '?',
            'App\\Controller\\AbonnementController:updateAbonnement' => '?',
            'App\\Controller\\AvisclientController:addRJSON' => '?',
            'App\\Controller\\CalendarController:delete' => '?',
            'App\\Controller\\CalendarController:edit' => '?',
            'App\\Controller\\CalendarController:show' => '?',
            'App\\Controller\\CartController:add' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\CartController:remove' => '?',
            'App\\Controller\\CategorieController:CatId' => '?',
            'App\\Controller\\CategorieController:addCatJSON' => '?',
            'App\\Controller\\CategorieController:addCategorie' => '?',
            'App\\Controller\\CategorieController:afficherCatjsonTwig' => '?',
            'App\\Controller\\CategorieController:deleteCateorie' => '?',
            'App\\Controller\\CategorieController:deletePlatJSON' => '?',
            'App\\Controller\\CategorieController:updateCatJSON' => '?',
            'App\\Controller\\CategorieController:updateCategorie' => '?',
            'App\\Controller\\CelluleController:addCelluleJson' => '?',
            'App\\Controller\\CelluleController:afficherjson' => '?',
            'App\\Controller\\CinemaController:CinemaId' => '?',
            'App\\Controller\\CinemaController:addCinemaJSON' => '?',
            'App\\Controller\\CinemaController:addrese' => '?',
            'App\\Controller\\CinemaController:afficherCinemajsonTwig' => '?',
            'App\\Controller\\CinemaController:afficherr' => '?',
            'App\\Controller\\CinemaController:contact' => '?',
            'App\\Controller\\CinemaController:contactJson' => '?',
            'App\\Controller\\CinemaController:deleteCinemaJSON' => '?',
            'App\\Controller\\CinemaController:recherche_cin' => '?',
            'App\\Controller\\CinemaController:recherche_film_date' => '?',
            'App\\Controller\\CinemaController:recherchecinema' => '?',
            'App\\Controller\\CinemaController:recherchecinema1' => '?',
            'App\\Controller\\CinemaController:tri' => '?',
            'App\\Controller\\CinemaController:trif' => '?',
            'App\\Controller\\CinemaController:updateCinemaJSON' => '?',
            'App\\Controller\\CongeController:EmployeId' => '?',
            'App\\Controller\\CongeController:addJSONConge' => '?',
            'App\\Controller\\CongeController:afficherjsonTwigConge' => '?',
            'App\\Controller\\CongeController:deleteCongeJSON' => '?',
            'App\\Controller\\CongeController:deleteEmployeJSON' => '?',
            'App\\Controller\\CongeController:pdfActionc' => '?',
            'App\\Controller\\CongeController:tricon' => '?',
            'App\\Controller\\CongeController:updateEmployeJSON' => '?',
            'App\\Controller\\ContactController:contactautoconf' => '?',
            'App\\Controller\\ContactController:contactautoref' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\EmployeController:EmployeId' => '?',
            'App\\Controller\\EmployeController:addJSONEmploye' => '?',
            'App\\Controller\\EmployeController:afficherjsonTwigEmploye' => '?',
            'App\\Controller\\EmployeController:deleteEmployeJSON' => '?',
            'App\\Controller\\EmployeController:pdfAction' => '?',
            'App\\Controller\\EmployeController:searchemp' => '?',
            'App\\Controller\\EmployeController:updateEmployeJSON' => '?',
            'App\\Controller\\EquipementController:recherche' => '?',
            'App\\Controller\\EquipementController:searchE' => '?',
            'App\\Controller\\EquipementController:triE' => '?',
            'App\\Controller\\EvenementController:ParticiperAction' => '?',
            'App\\Controller\\FilmController:addFilmJson' => '?',
            'App\\Controller\\FilmController:addJSON' => '?',
            'App\\Controller\\FilmController:afficherCatejsonTwig' => '?',
            'App\\Controller\\FilmController:afficherjson' => '?',
            'App\\Controller\\FilmController:afficherjsonTwig' => '?',
            'App\\Controller\\FilmController:deleteFilmJSON' => '?',
            'App\\Controller\\FilmController:recherchefilm' => '?',
            'App\\Controller\\FilmController:searchCateJSON' => '?',
            'App\\Controller\\FilmController:searchFilmJSON' => '?',
            'App\\Controller\\FilmController:updateFilmJSON' => '?',
            'App\\Controller\\MainController:index' => '?',
            'App\\Controller\\PlatController:PlatId' => '?',
            'App\\Controller\\PlatController:addPlat' => '?',
            'App\\Controller\\PlatController:addPlatJSON' => '?',
            'App\\Controller\\PlatController:afficherPlatjsonTwig' => '?',
            'App\\Controller\\PlatController:delete' => '?',
            'App\\Controller\\PlatController:deletePlatJSON' => '?',
            'App\\Controller\\PlatController:updatePlat' => '?',
            'App\\Controller\\PlatController:updatePlatJSON' => '?',
            'App\\Controller\\ReclamationController:addmob' => '?',
            'App\\Controller\\ReclamationController:addrec' => '?',
            'App\\Controller\\ReclamationController:list' => '?',
            'App\\Controller\\ReclamationController:list1' => '?',
            'App\\Controller\\ReclamationController:listmob' => '?',
            'App\\Controller\\ReclamationController:notif' => '?',
            'App\\Controller\\ReclamationController:search' => '?',
            'App\\Controller\\ReclamationController:statistiques' => '?',
            'App\\Controller\\ReclamationController:tri' => '?',
            'App\\Controller\\ReclamationController:update' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TypeAbonnementController:Afficheabo' => '?',
            'App\\Controller\\TypeAbonnementController:Delete' => '?',
            'App\\Controller\\TypeAbonnementController:ListTypeAbo' => '?',
            'App\\Controller\\TypeAbonnementController:getTypeAbonnements' => '?',
            'App\\Controller\\TypeAbonnementController:updateTypeAbonnement' => '?',
            'App\\Controller\\reservationController:addReservation' => '?',
            'App\\Controller\\reservationController:deleteReservation' => '?',
            'App\\Controller\\reservationController:pdf' => '?',
            'App\\Controller\\reservationController:recherche' => '?',
            'App\\Controller\\reservationController:tri' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.cAwvHDt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_CAwvHDtService()
    {
        return $this->privates['.service_locator.cAwvHDt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repository' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'em' => '?',
            'repository' => 'App\\Repository\\ReclamationRepository',
            'serializer' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.fcnM1tI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_FcnM1tIService()
    {
        return $this->privates['.service_locator.fcnM1tI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Normalizer' => ['services', 'serializer', 'getSerializerService', false],
            'repository' => ['privates', 'App\\Repository\\TypeAbonnementRepository', 'getTypeAbonnementRepositoryService', false],
        ], [
            'Normalizer' => '?',
            'repository' => 'App\\Repository\\TypeAbonnementRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.g.xob4v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_G_Xob4vService()
    {
        return $this->privates['.service_locator.g.xob4v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'authenticationUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', false],
        ], [
            'authenticationUtils' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.jXJtOkZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_JXJtOkZService()
    {
        return $this->privates['.service_locator.jXJtOkZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repository' => ['privates', 'App\\Repository\\EquipementRepository', 'getEquipementRepositoryService', false],
        ], [
            'repository' => 'App\\Repository\\EquipementRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.jmvbEvf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_JmvbEvfService()
    {
        return $this->privates['.service_locator.jmvbEvf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
        ], [
            'encoder' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.m2ukz1E' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_M2ukz1EService()
    {
        return $this->privates['.service_locator.m2ukz1E'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repository' => ['privates', 'App\\Repository\\AbonneRepository', 'getAbonneRepositoryService', false],
        ], [
            'repository' => 'App\\Repository\\AbonneRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.n8gOTNr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_N8gOTNrService()
    {
        return $this->privates['.service_locator.n8gOTNr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', false],
        ], [
            'paginator' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.o3htLhs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_O3htLhsService()
    {
        return $this->privates['.service_locator.o3htLhs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.uNXHe3R' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_UNXHe3RService()
    {
        return $this->privates['.service_locator.uNXHe3R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'serializer' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.vbO_Tno' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VbOTnoService()
    {
        return $this->privates['.service_locator.vbO_Tno'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'repository' => ['privates', 'App\\Repository\\TypeAbonnementRepository', 'getTypeAbonnementRepositoryService', false],
        ], [
            'repository' => 'App\\Repository\\TypeAbonnementRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.vdmMuyE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VdmMuyEService()
    {
        return $this->privates['.service_locator.vdmMuyE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.w7_pocN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_W7PocNService()
    {
        return $this->privates['.service_locator.w7_pocN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'snappy' => ['services', 'knp_snappy.pdf', 'getKnpSnappy_PdfService', false],
        ], [
            'snappy' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.xDTwOVo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_XDTwOVoService()
    {
        return $this->privates['.service_locator.xDTwOVo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'normalizer' => ['services', 'serializer', 'getSerializerService', false],
            'repository' => ['privates', 'App\\Repository\\FilmRepository', 'getFilmRepositoryService', false],
        ], [
            'normalizer' => '?',
            'repository' => 'App\\Repository\\FilmRepository',
        ]);
    }

    /**
     * Gets the private 'App\Form\AbonneType' shared autowired service.
     *
     * @return \App\Form\AbonneType
     */
    protected function getAbonneTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'AbonneType.php';

        return $this->privates['App\\Form\\AbonneType'] = new \App\Form\AbonneType();
    }

    /**
     * Gets the private 'App\Form\AvisclientType' shared autowired service.
     *
     * @return \App\Form\AvisclientType
     */
    protected function getAvisclientTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'AvisclientType.php';

        return $this->privates['App\\Form\\AvisclientType'] = new \App\Form\AvisclientType();
    }

    /**
     * Gets the private 'App\Form\CalendarType' shared autowired service.
     *
     * @return \App\Form\CalendarType
     */
    protected function getCalendarTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'CalendarType.php';

        return $this->privates['App\\Form\\CalendarType'] = new \App\Form\CalendarType();
    }

    /**
     * Gets the private 'App\Form\CategorieType' shared autowired service.
     *
     * @return \App\Form\CategorieType
     */
    protected function getCategorieTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'CategorieType.php';

        return $this->privates['App\\Form\\CategorieType'] = new \App\Form\CategorieType();
    }

    /**
     * Gets the private 'App\Form\CelluleType' shared autowired service.
     *
     * @return \App\Form\CelluleType
     */
    protected function getCelluleTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'CelluleType.php';

        return $this->privates['App\\Form\\CelluleType'] = new \App\Form\CelluleType();
    }

    /**
     * Gets the private 'App\Form\CinemaType' shared autowired service.
     *
     * @return \App\Form\CinemaType
     */
    protected function getCinemaTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'CinemaType.php';

        return $this->privates['App\\Form\\CinemaType'] = new \App\Form\CinemaType();
    }

    /**
     * Gets the private 'App\Form\CommentType' shared autowired service.
     *
     * @return \App\Form\CommentType
     */
    protected function getCommentTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'CommentType.php';

        return $this->privates['App\\Form\\CommentType'] = new \App\Form\CommentType();
    }

    /**
     * Gets the private 'App\Form\CongeType' shared autowired service.
     *
     * @return \App\Form\CongeType
     */
    protected function getCongeTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'CongeType.php';

        return $this->privates['App\\Form\\CongeType'] = new \App\Form\CongeType();
    }

    /**
     * Gets the private 'App\Form\ContactType' shared autowired service.
     *
     * @return \App\Form\ContactType
     */
    protected function getContactTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'ContactType.php';

        return $this->privates['App\\Form\\ContactType'] = new \App\Form\ContactType();
    }

    /**
     * Gets the private 'App\Form\EmployeType' shared autowired service.
     *
     * @return \App\Form\EmployeType
     */
    protected function getEmployeTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'EmployeType.php';

        return $this->privates['App\\Form\\EmployeType'] = new \App\Form\EmployeType();
    }

    /**
     * Gets the private 'App\Form\EquipementType' shared autowired service.
     *
     * @return \App\Form\EquipementType
     */
    protected function getEquipementTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'EquipementType.php';

        return $this->privates['App\\Form\\EquipementType'] = new \App\Form\EquipementType();
    }

    /**
     * Gets the private 'App\Form\EvenementType' shared autowired service.
     *
     * @return \App\Form\EvenementType
     */
    protected function getEvenementTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'EvenementType.php';

        return $this->privates['App\\Form\\EvenementType'] = new \App\Form\EvenementType();
    }

    /**
     * Gets the private 'App\Form\FilmType' shared autowired service.
     *
     * @return \App\Form\FilmType
     */
    protected function getFilmTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'FilmType.php';

        return $this->privates['App\\Form\\FilmType'] = new \App\Form\FilmType();
    }

    /**
     * Gets the private 'App\Form\FilmuType' shared autowired service.
     *
     * @return \App\Form\FilmuType
     */
    protected function getFilmuTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'FilmuType.php';

        return $this->privates['App\\Form\\FilmuType'] = new \App\Form\FilmuType();
    }

    /**
     * Gets the private 'App\Form\PlatType' shared autowired service.
     *
     * @return \App\Form\PlatType
     */
    protected function getPlatTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'PlatType.php';

        return $this->privates['App\\Form\\PlatType'] = new \App\Form\PlatType();
    }

    /**
     * Gets the private 'App\Form\ReclamationType' shared autowired service.
     *
     * @return \App\Form\ReclamationType
     */
    protected function getReclamationTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'ReclamationType.php';

        return $this->privates['App\\Form\\ReclamationType'] = new \App\Form\ReclamationType();
    }

    /**
     * Gets the private 'App\Form\ReclamationType2' shared autowired service.
     *
     * @return \App\Form\ReclamationType2
     */
    protected function getReclamationType2Service()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'ReclamationType2.php';

        return $this->privates['App\\Form\\ReclamationType2'] = new \App\Form\ReclamationType2();
    }

    /**
     * Gets the private 'App\Form\RegistrationFormType' shared autowired service.
     *
     * @return \App\Form\RegistrationFormType
     */
    protected function getRegistrationFormTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'RegistrationFormType.php';

        return $this->privates['App\\Form\\RegistrationFormType'] = new \App\Form\RegistrationFormType();
    }

    /**
     * Gets the private 'App\Form\ReservationType' shared autowired service.
     *
     * @return \App\Form\ReservationType
     */
    protected function getReservationTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'ReservationType.php';

        return $this->privates['App\\Form\\ReservationType'] = new \App\Form\ReservationType();
    }

    /**
     * Gets the private 'App\Form\TypeAbonnementType' shared autowired service.
     *
     * @return \App\Form\TypeAbonnementType
     */
    protected function getTypeAbonnementTypeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'TypeAbonnementType.php';

        return $this->privates['App\\Form\\TypeAbonnementType'] = new \App\Form\TypeAbonnementType();
    }

    /**
     * Gets the private 'App\Repository\AbonneRepository' shared autowired service.
     *
     * @return \App\Repository\AbonneRepository
     */
    protected function getAbonneRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'AbonneRepository.php';

        return $this->privates['App\\Repository\\AbonneRepository'] = new \App\Repository\AbonneRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\AbonnementRepository' shared autowired service.
     *
     * @return \App\Repository\AbonnementRepository
     */
    protected function getAbonnementRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'AbonnementRepository.php';

        return $this->privates['App\\Repository\\AbonnementRepository'] = new \App\Repository\AbonnementRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\AvisClientRepository' shared autowired service.
     *
     * @return \App\Repository\AvisClientRepository
     */
    protected function getAvisClientRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'AvisClientRepository.php';

        return $this->privates['App\\Repository\\AvisClientRepository'] = new \App\Repository\AvisClientRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\CalendarRepository' shared autowired service.
     *
     * @return \App\Repository\CalendarRepository
     */
    protected function getCalendarRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'CalendarRepository.php';

        return $this->privates['App\\Repository\\CalendarRepository'] = new \App\Repository\CalendarRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\CategorieRepository' shared autowired service.
     *
     * @return \App\Repository\CategorieRepository
     */
    protected function getCategorieRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'CategorieRepository.php';

        return $this->privates['App\\Repository\\CategorieRepository'] = new \App\Repository\CategorieRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\CategoriefRepository' shared autowired service.
     *
     * @return \App\Repository\CategoriefRepository
     */
    protected function getCategoriefRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'CategoriefRepository.php';

        return $this->privates['App\\Repository\\CategoriefRepository'] = new \App\Repository\CategoriefRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\ChatRepository' shared autowired service.
     *
     * @return \App\Repository\ChatRepository
     */
    protected function getChatRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ChatRepository.php';

        return $this->privates['App\\Repository\\ChatRepository'] = new \App\Repository\ChatRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\CinemaRepository' shared autowired service.
     *
     * @return \App\Repository\CinemaRepository
     */
    protected function getCinemaRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'CinemaRepository.php';

        return $this->privates['App\\Repository\\CinemaRepository'] = new \App\Repository\CinemaRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\CommentRepository' shared autowired service.
     *
     * @return \App\Repository\CommentRepository
     */
    protected function getCommentRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'CommentRepository.php';

        return $this->privates['App\\Repository\\CommentRepository'] = new \App\Repository\CommentRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\CongeRepository' shared autowired service.
     *
     * @return \App\Repository\CongeRepository
     */
    protected function getCongeRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'CongeRepository.php';

        return $this->privates['App\\Repository\\CongeRepository'] = new \App\Repository\CongeRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\DemandeResRepository' shared autowired service.
     *
     * @return \App\Repository\DemandeResRepository
     */
    protected function getDemandeResRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'DemandeResRepository.php';

        return $this->privates['App\\Repository\\DemandeResRepository'] = new \App\Repository\DemandeResRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\EmployeRepository' shared autowired service.
     *
     * @return \App\Repository\EmployeRepository
     */
    protected function getEmployeRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'EmployeRepository.php';

        return $this->privates['App\\Repository\\EmployeRepository'] = new \App\Repository\EmployeRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\EquipementRepository' shared autowired service.
     *
     * @return \App\Repository\EquipementRepository
     */
    protected function getEquipementRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'EquipementRepository.php';

        return $this->privates['App\\Repository\\EquipementRepository'] = new \App\Repository\EquipementRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\EvenementRepository' shared autowired service.
     *
     * @return \App\Repository\EvenementRepository
     */
    protected function getEvenementRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'EvenementRepository.php';

        return $this->privates['App\\Repository\\EvenementRepository'] = new \App\Repository\EvenementRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\FilmRepository' shared autowired service.
     *
     * @return \App\Repository\FilmRepository
     */
    protected function getFilmRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'FilmRepository.php';

        return $this->privates['App\\Repository\\FilmRepository'] = new \App\Repository\FilmRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\GuideRepository' shared autowired service.
     *
     * @return \App\Repository\GuideRepository
     */
    protected function getGuideRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'GuideRepository.php';

        return $this->privates['App\\Repository\\GuideRepository'] = new \App\Repository\GuideRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\PlatRepository' shared autowired service.
     *
     * @return \App\Repository\PlatRepository
     */
    protected function getPlatRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'PlatRepository.php';

        return $this->privates['App\\Repository\\PlatRepository'] = new \App\Repository\PlatRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\ReclamationRepository' shared autowired service.
     *
     * @return \App\Repository\ReclamationRepository
     */
    protected function getReclamationRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'ReclamationRepository.php';

        return $this->privates['App\\Repository\\ReclamationRepository'] = new \App\Repository\ReclamationRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\ReservationRepository' shared autowired service.
     *
     * @return \App\Repository\ReservationRepository
     */
    protected function getReservationRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ReservationRepository.php';

        return $this->privates['App\\Repository\\ReservationRepository'] = new \App\Repository\ReservationRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\TypeAbonnementRepository' shared autowired service.
     *
     * @return \App\Repository\TypeAbonnementRepository
     */
    protected function getTypeAbonnementRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'TypeAbonnementRepository.php';

        return $this->privates['App\\Repository\\TypeAbonnementRepository'] = new \App\Repository\TypeAbonnementRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\UserRepository' shared autowired service.
     *
     * @return \App\Repository\UserRepository
     */
    protected function getUserRepositoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'UserRepository.php';

        return $this->privates['App\\Repository\\UserRepository'] = new \App\Repository\UserRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider
     */
    protected function getManagerRegistryAwareConnectionProviderService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'ConnectionProvider.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Dbal'.\DIRECTORY_SEPARATOR.'ManagerRegistryAwareConnectionProvider.php';

        return $this->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] = new \Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider(new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default'));
    }

    /**
     * Gets the private 'Doctrine\DBAL\Tools\Console\Command\RunSqlCommand' shared service.
     *
     * @return \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand
     */
    protected function getRunSqlCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'RunSqlCommand.php';

        $this->privates['Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand'] = $instance = new \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand(($this->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] ?? $this->getManagerRegistryAwareConnectionProviderService()));

        $instance->setName('dbal:run-sql');

        return $instance;
    }

    /**
     * Gets the private 'annotations.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getAnnotations_CacheService()
    {
        return new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())));
    }

    /**
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'AnnotationsCacheWarmer.php';

        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', true);
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->getAnnotations_CacheService(), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('tIx8qdAFhz', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->privates['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('MlcpTtKKAz', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('bf4wvs8J3u', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('gq89S+ANsN', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('xg6W0RdgAp', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.webpack_encore' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_WebpackEncoreService()
    {
        return $this->privates['cache.webpack_encore'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('ydP6TPgEkh', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'filesystem'.\DIRECTORY_SEPARATOR.'Filesystem.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CacheClearCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'filesystem'.\DIRECTORY_SEPARATOR.'Filesystem.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.doctrine.orm.default.metadata', 7 => 'cache.doctrine.orm.default.result', 8 => 'cache.doctrine.orm.default.query', 9 => 'cache.security_expression_language', 10 => 'cache.webpack_encore']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService());
            yield 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService());
            yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService());
            yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService());
            yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService());
            yield 'cache.doctrine.orm.default.metadata' => ($this->privates['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService());
            yield 'cache.doctrine.orm.default.result' => ($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService());
            yield 'cache.doctrine.orm.default.query' => ($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService());
            yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService());
            yield 'cache.webpack_encore' => ($this->privates['cache.webpack_encore'] ?? $this->getCache_WebpackEncoreService());
        }, 11));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    protected function getConsole_Command_FormDebugService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'App\\Form\\AbonneType', 1 => 'App\\Form\\AvisclientType', 2 => 'App\\Form\\CalendarType', 3 => 'App\\Form\\CategorieType', 4 => 'App\\Form\\CelluleType', 5 => 'App\\Form\\CinemaType', 6 => 'App\\Form\\CommentType', 7 => 'App\\Form\\CongeType', 8 => 'App\\Form\\ContactType', 9 => 'App\\Form\\EmployeType', 10 => 'App\\Form\\EquipementType', 11 => 'App\\Form\\EvenementType', 12 => 'App\\Form\\FilmType', 13 => 'App\\Form\\FilmuType', 14 => 'App\\Form\\PlatType', 15 => 'App\\Form\\ReclamationType', 16 => 'App\\Form\\ReclamationType2', 17 => 'App\\Form\\RegistrationFormType', 18 => 'App\\Form\\ReservationType', 19 => 'App\\Form\\TypeAbonnementType', 20 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 21 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 22 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 23 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:router');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'AbstractVault.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'SodiumVault.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'AbstractVault.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'SodiumVault.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'AbstractVault.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'SodiumVault.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SecretsListCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'AbstractVault.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'SodiumVault.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'AbstractVault.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'SodiumVault.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SecretsSetCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'AbstractVault.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'SodiumVault.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Secrets'.\DIRECTORY_SEPARATOR.'DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationDebugCommand.php';

        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationDebugCommand.php'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'ChoiceType.php'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FileType.php'), 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TransformationFailureExtension.php'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'UploadValidatorExtension.php'), 7 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormTypeCsrfExtension.php'), 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'LegacyTranslatorProxy.php'), 9 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'TranslationsCacheWarmer.php'), 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'TranslationDataCollector.php'), 11 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Processor.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationUpdateCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'TranslationWriterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'TranslationWriter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'DumperInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'FileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'PhpFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'XliffFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'PoFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'MoFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'YamlFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'QtFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'CsvFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'IniFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'JsonFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'IcuResFileDumper.php';

        $a = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
        $a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
        $a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
        $a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
        $a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
        $a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
        $a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
        $a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
        $a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
        $a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
        $a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'en', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationDebugCommand.php'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'ChoiceType.php'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FileType.php'), 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TransformationFailureExtension.php'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'UploadValidatorExtension.php'), 7 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormTypeCsrfExtension.php'), 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'LegacyTranslatorProxy.php'), 9 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'TranslationsCacheWarmer.php'), 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'TranslationDataCollector.php'), 11 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Processor.php')]);

        $instance->setName('translation:update');

        return $instance;
    }

    /**
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'XliffLintCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'XliffLintCommand.php';

        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'yaml'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LintCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ErrorListener.php';

        $a = new \Symfony\Bridge\Monolog\Logger('console');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener($a);
    }

    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /**
     * Gets the private 'debug.argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_DefaultService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'DefaultValueResolver.php';

        return $this->privates['debug.argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.not_tagged_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_NotTaggedControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'NotTaggedControllerValueResolver.php';

        return $this->privates['debug.argument_resolver.not_tagged_controller'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver(($this->privates['.service_locator.c2Cqah3'] ?? $this->get_ServiceLocator_C2Cqah3Service())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'RequestValueResolver.php';

        return $this->privates['debug.argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestAttributeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'RequestAttributeValueResolver.php';

        return $this->privates['debug.argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'ServiceValueResolver.php';

        return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(($this->privates['.service_locator.c2Cqah3'] ?? $this->get_ServiceLocator_C2Cqah3Service())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_SessionService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'SessionValueResolver.php';

        return $this->privates['debug.argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_VariadicService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'VariadicValueResolver.php';

        return $this->privates['debug.argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    protected function getDebug_DumpListenerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DumpListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'ContextualizedDumper.php';

        return $this->privates['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), new \Symfony\Component\VarDumper\Dumper\ContextualizedDumper(($this->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $this->getVarDumper_ContextualizedCliDumper_InnerService()), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()))]), ($this->privates['var_dumper.server_connection'] ?? $this->getVarDumper_ServerConnectionService()));
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->getDebug_FileLinkFormatter_UrlFormatService());
        });
    }

    /**
     * Gets the private 'debug.file_link_formatter.url_format' shared service.
     *
     * @return \string
     */
    protected function getDebug_FileLinkFormatter_UrlFormatService()
    {
        return $this->privates['debug.file_link_formatter.url_format'] = \Symfony\Component\HttpKernel\Debug\FileLinkFormatter::generateUrlFormat(($this->services['router'] ?? $this->getRouterService()), '_profiler_open_file', '?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->getDebug_Security_Voter_Security_Access_AuthenticatedVoterService());
            yield 1 => ($this->privates['debug.security.voter.security.access.simple_role_voter'] ?? $this->getDebug_Security_Voter_Security_Access_SimpleRoleVoterService());
            yield 2 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->getDebug_Security_Voter_Security_Access_ExpressionVoterService());
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'debug.security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_Security_UserValueResolverService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'UserValueResolver.php';

        return $this->privates['debug.security.user_value_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_AuthenticatedVoterService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'VoterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'TraceableVoter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'AuthenticatedVoter.php';

        return $this->privates['debug.security.voter.security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL)))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_ExpressionVoterService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'VoterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'TraceableVoter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'ExpressionVoter.php';

        return $this->privates['debug.security.voter.security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([])))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.simple_role_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_SimpleRoleVoterService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'VoterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'TraceableVoter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'RoleVoter.php';

        return $this->privates['debug.security.voter.security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter(), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.vote_listener' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\VoteListener
     */
    protected function getDebug_Security_Voter_VoteListenerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'VoteListener.php';

        return $this->privates['debug.security.voter.vote_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\VoteListener(($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()));
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ClearCache'.\DIRECTORY_SEPARATOR.'MetadataCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ClearMetadataCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ClearCache'.\DIRECTORY_SEPARATOR.'QueryCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ClearQueryCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ClearCache'.\DIRECTORY_SEPARATOR.'ResultCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ClearResultCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ClearCache'.\DIRECTORY_SEPARATOR.'CollectionRegionCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'CollectionRegionDoctrineCommand.php';

        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ClearCache'.\DIRECTORY_SEPARATOR.'EntityRegionCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'EntityRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ClearCache'.\DIRECTORY_SEPARATOR.'QueryRegionCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'QueryRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CreateDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DropDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ImportCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ImportDoctrineCommand.php';

        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'EnsureProductionSettingsCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'EnsureProductionSettingsDoctrineCommand.php';

        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ConvertMappingCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ConvertMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ImportMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'InfoCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'InfoDoctrineCommand.php';

        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.migrations.dependency_factory' shared service.
     *
     * @return \Doctrine\Migrations\DependencyFactory
     */
    protected function getDoctrine_Migrations_DependencyFactoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'DependencyFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Configuration'.\DIRECTORY_SEPARATOR.'Migration'.\DIRECTORY_SEPARATOR.'ConfigurationLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Configuration'.\DIRECTORY_SEPARATOR.'Migration'.\DIRECTORY_SEPARATOR.'ExistingConfiguration.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Configuration'.\DIRECTORY_SEPARATOR.'Configuration.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'MetadataStorageConfiguration.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'TableMetadataStorageConfiguration.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Configuration'.\DIRECTORY_SEPARATOR.'EntityManager'.\DIRECTORY_SEPARATOR.'EntityManagerLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Configuration'.\DIRECTORY_SEPARATOR.'EntityManager'.\DIRECTORY_SEPARATOR.'ExistingEntityManager.php';

        $a = new \Doctrine\Migrations\Configuration\Configuration();
        $a->addMigrationsDirectory('DoctrineMigrations', (\dirname(__DIR__, 4).'/migrations'));
        $a->setAllOrNothing(false);
        $a->setCheckDatabasePlatform(true);
        $a->setMetadataStorageConfiguration(new \Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration());

        return $this->privates['doctrine.migrations.dependency_factory'] = \Doctrine\Migrations\DependencyFactory::fromEntityManager(new \Doctrine\Migrations\Configuration\Migration\ExistingConfiguration($a), new \Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'doctrine.orm.default_annotation_metadata_driver' shared service.
     *
     * @return \Doctrine\ORM\Mapping\Driver\AnnotationDriver
     */
    protected function getDoctrine_Orm_DefaultAnnotationMetadataDriverService()
    {
        return $this->privates['doctrine.orm.default_annotation_metadata_driver'] = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity')]);
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'PropertyInfo'.\DIRECTORY_SEPARATOR.'DoctrineExtractor.php';

        return $this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'AttachEntityListenersListener.php';

        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'ProxyCacheWarmer.php';

        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'UniqueEntityValidator.php';

        return $this->privates['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'RunDqlCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'RunDqlDoctrineCommand.php';

        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DBAL'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'RunSqlCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'RunSqlDoctrineCommand.php';

        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand(($this->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] ?? $this->getManagerRegistryAwareConnectionProviderService()));

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SchemaTool'.\DIRECTORY_SEPARATOR.'AbstractCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SchemaTool'.\DIRECTORY_SEPARATOR.'CreateCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'CreateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SchemaTool'.\DIRECTORY_SEPARATOR.'AbstractCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SchemaTool'.\DIRECTORY_SEPARATOR.'DropCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'DropSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SchemaTool'.\DIRECTORY_SEPARATOR.'AbstractCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SchemaTool'.\DIRECTORY_SEPARATOR.'UpdateCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'UpdateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ValidateSchemaCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ValidateSchemaCommand.php';

        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.current_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\CurrentCommand
     */
    protected function getDoctrineMigrations_CurrentCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CurrentCommand.php';

        $this->privates['doctrine_migrations.current_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\CurrentCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:current');

        $instance->setName('doctrine:migrations:current');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\DiffCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DiffCommand.php';

        $this->privates['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\DiffCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:diff');

        $instance->setName('doctrine:migrations:diff');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand
     */
    protected function getDoctrineMigrations_DumpSchemaCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DumpSchemaCommand.php';

        $this->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:dump-schema');

        $instance->setName('doctrine:migrations:dump-schema');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\ExecuteCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ExecuteCommand.php';

        $this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\ExecuteCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:execute');

        $instance->setName('doctrine:migrations:execute');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\GenerateCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'GenerateCommand.php';

        $this->privates['doctrine_migrations.generate_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\GenerateCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:generate');

        $instance->setName('doctrine:migrations:generate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\LatestCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LatestCommand.php';

        $this->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\LatestCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:latest');

        $instance->setName('doctrine:migrations:latest');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\MigrateCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MigrateCommand.php';

        $this->privates['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\MigrateCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:migrate');

        $instance->setName('doctrine:migrations:migrate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.rollup_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\RollupCommand
     */
    protected function getDoctrineMigrations_RollupCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'RollupCommand.php';

        $this->privates['doctrine_migrations.rollup_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\RollupCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:rollup');

        $instance->setName('doctrine:migrations:rollup');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\StatusCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'StatusCommand.php';

        $this->privates['doctrine_migrations.status_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\StatusCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:status');

        $instance->setName('doctrine:migrations:status');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.sync_metadata_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand
     */
    protected function getDoctrineMigrations_SyncMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SyncMetadataCommand.php';

        $this->privates['doctrine_migrations.sync_metadata_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:sync-metadata-storage');

        $instance->setName('doctrine:migrations:sync-metadata-storage');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.up_to_date_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\UpToDateCommand
     */
    protected function getDoctrineMigrations_UpToDateCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'UpToDateCommand.php';

        $this->privates['doctrine_migrations.up_to_date_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\UpToDateCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:up-to-date');

        $instance->setName('doctrine:migrations:up-to-date');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\VersionCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'VersionCommand.php';

        $this->privates['doctrine_migrations.version_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\VersionCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:version');

        $instance->setName('doctrine:migrations:version');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.versions_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\ListCommand
     */
    protected function getDoctrineMigrations_VersionsCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ListCommand.php';

        $this->privates['doctrine_migrations.versions_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\ListCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:versions');

        $instance->setName('doctrine:migrations:list');

        return $instance;
    }

    /**
     * Gets the private 'error_handler.error_renderer.html' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_HtmlService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'error-handler'.\DIRECTORY_SEPARATOR.'ErrorRenderer'.\DIRECTORY_SEPARATOR.'ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'error-handler'.\DIRECTORY_SEPARATOR.'ErrorRenderer'.\DIRECTORY_SEPARATOR.'HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.html'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), true);
    }

    /**
     * Gets the private 'form.choice_list_factory.cached' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator
     */
    protected function getForm_ChoiceListFactory_CachedService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ChoiceList'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ChoiceList'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'CachingFactoryDecorator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ChoiceList'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'PropertyAccessDecorator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ChoiceList'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'DefaultChoiceListFactory.php';

        return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService())));
    }

    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Form\\AbonneType' => ['privates', 'App\\Form\\AbonneType', 'getAbonneTypeService', false],
            'App\\Form\\AvisclientType' => ['privates', 'App\\Form\\AvisclientType', 'getAvisclientTypeService', false],
            'App\\Form\\CalendarType' => ['privates', 'App\\Form\\CalendarType', 'getCalendarTypeService', false],
            'App\\Form\\CategorieType' => ['privates', 'App\\Form\\CategorieType', 'getCategorieTypeService', false],
            'App\\Form\\CelluleType' => ['privates', 'App\\Form\\CelluleType', 'getCelluleTypeService', false],
            'App\\Form\\CinemaType' => ['privates', 'App\\Form\\CinemaType', 'getCinemaTypeService', false],
            'App\\Form\\CommentType' => ['privates', 'App\\Form\\CommentType', 'getCommentTypeService', false],
            'App\\Form\\CongeType' => ['privates', 'App\\Form\\CongeType', 'getCongeTypeService', false],
            'App\\Form\\ContactType' => ['privates', 'App\\Form\\ContactType', 'getContactTypeService', false],
            'App\\Form\\EmployeType' => ['privates', 'App\\Form\\EmployeType', 'getEmployeTypeService', false],
            'App\\Form\\EquipementType' => ['privates', 'App\\Form\\EquipementType', 'getEquipementTypeService', false],
            'App\\Form\\EvenementType' => ['privates', 'App\\Form\\EvenementType', 'getEvenementTypeService', false],
            'App\\Form\\FilmType' => ['privates', 'App\\Form\\FilmType', 'getFilmTypeService', false],
            'App\\Form\\FilmuType' => ['privates', 'App\\Form\\FilmuType', 'getFilmuTypeService', false],
            'App\\Form\\PlatType' => ['privates', 'App\\Form\\PlatType', 'getPlatTypeService', false],
            'App\\Form\\ReclamationType' => ['privates', 'App\\Form\\ReclamationType', 'getReclamationTypeService', false],
            'App\\Form\\ReclamationType2' => ['privates', 'App\\Form\\ReclamationType2', 'getReclamationType2Service', false],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', false],
            'App\\Form\\ReservationType' => ['privates', 'App\\Form\\ReservationType', 'getReservationTypeService', false],
            'App\\Form\\TypeAbonnementType' => ['privates', 'App\\Form\\TypeAbonnementType', 'getTypeAbonnementTypeService', false],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
        ], [
            'App\\Form\\AbonneType' => '?',
            'App\\Form\\AvisclientType' => '?',
            'App\\Form\\CalendarType' => '?',
            'App\\Form\\CategorieType' => '?',
            'App\\Form\\CelluleType' => '?',
            'App\\Form\\CinemaType' => '?',
            'App\\Form\\CommentType' => '?',
            'App\\Form\\CongeType' => '?',
            'App\\Form\\ContactType' => '?',
            'App\\Form\\EmployeType' => '?',
            'App\\Form\\EquipementType' => '?',
            'App\\Form\\EvenementType' => '?',
            'App\\Form\\FilmType' => '?',
            'App\\Form\\FilmuType' => '?',
            'App\\Form\\PlatType' => '?',
            'App\\Form\\ReclamationType' => '?',
            'App\\Form\\ReclamationType2' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\ReservationType' => '?',
            'App\\Form\\TypeAbonnementType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->getForm_TypeExtension_Form_TransformationFailureHandlingService());
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->getForm_TypeExtension_Form_HttpFoundationService());
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->getForm_TypeExtension_Form_ValidatorService());
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->getForm_TypeExtension_Upload_ValidatorService());
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->getForm_TypeExtension_CsrfService());
            yield 5 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->getForm_TypeExtension_Form_DataCollectorService());
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->getForm_TypeGuesser_ValidatorService());
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService());
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService())));
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'ServerParams.php';

        return $this->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'ChoiceType.php';

        return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->getForm_ChoiceListFactory_CachedService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'DoctrineType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'EntityType.php';

        return $this->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'BaseType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormType.php';

        return $this->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormTypeCsrfExtension.php';

        return $this->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), true, '_token', ($this->services['translator'] ?? $this->getTranslatorService()), 'validators', ($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /**
     * Gets the private 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'DataCollectorTypeExtension.php';

        return $this->privates['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
    }

    /**
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpFoundation'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormTypeHttpFoundationExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'RequestHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpFoundation'.\DIRECTORY_SEPARATOR.'HttpFoundationRequestHandler.php';

        return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService())));
    }

    /**
     * Gets the private 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TransformationFailureExtension.php';

        return $this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'BaseValidatorExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormTypeValidatorExtension.php';

        return $this->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'UploadValidatorExtension.php';

        return $this->privates['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(($this->services['translator'] ?? $this->getTranslatorService()), 'validators');
    }

    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'DoctrineOrmTypeGuesser.php';

        return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'ValidatorTypeGuesser.php';

        return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'InlineFragmentRenderer.php';

        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'knp_paginator.subscriber.sliding_pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->privates['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(['defaultPaginationTemplate' => '@KnpPaginator/Pagination/sliding.html.twig', 'defaultSortableTemplate' => '@KnpPaginator/Pagination/sortable_link.html.twig', 'defaultFiltrationTemplate' => '@KnpPaginator/Pagination/filtration.html.twig', 'defaultPageRange' => 5, 'defaultPageLimit' => NULL]);
    }

    /**
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->privates['translator.default'] ?? $this->getTranslator_DefaultService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'maker.auto_command.make_auth' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeAuthService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeAuthenticator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'SecurityConfigUpdater.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_auth'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeAuthenticator($a, ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), $b, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService())), $a, $b);

        $instance->setDescription('Creates a Guard authenticator of different flavors');
        $instance->setName('make:auth');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_command' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCommandService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeCommand.php';

        $this->privates['maker.auto_command.make_command'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCommand(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new console command class');
        $instance->setName('make:command');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_controller' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeControllerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeController.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_controller'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeController($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new controller class');
        $instance->setName('make:controller');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_crud' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCrudService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeCrud.php';

        $this->privates['maker.auto_command.make_crud'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCrud(($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates CRUD for Doctrine entity class');
        $instance->setName('make:crud');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_docker_database' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeDockerDatabaseService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeDockerDatabase.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_docker_database'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeDockerDatabase($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Adds a database container to your docker-compose.yaml file');
        $instance->setName('make:docker:database');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_entity' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeEntityService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'InputAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeEntity.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_entity'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeEntity($a, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), \dirname(__DIR__, 4), $b, ($this->privates['maker.entity_class_generator'] ?? $this->getMaker_EntityClassGeneratorService())), $a, $b);

        $instance->setDescription('Creates or updates a Doctrine entity class, and optionally an API Platform resource');
        $instance->setName('make:entity');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_fixtures' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFixturesService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeFixtures.php';

        $this->privates['maker.auto_command.make_fixtures'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeFixtures(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new class to load Doctrine fixtures');
        $instance->setName('make:fixtures');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFormService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeForm.php';

        $this->privates['maker.auto_command.make_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeForm(($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new form class');
        $instance->setName('make:form');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_message' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMessageService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeMessage.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_message'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMessage($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new message and handler');
        $instance->setName('make:message');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_messenger_middleware' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMessengerMiddlewareService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeMessengerMiddleware.php';

        $this->privates['maker.auto_command.make_messenger_middleware'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMessengerMiddleware(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new messenger middleware');
        $instance->setName('make:messenger-middleware');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_migration' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMigrationService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ApplicationAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeMigration.php';

        $this->privates['maker.auto_command.make_migration'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMigration(\dirname(__DIR__, 4)), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new migration based on database changes');
        $instance->setName('make:migration');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_registration_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeRegistrationFormService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeRegistrationForm.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_registration_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeRegistrationForm($a, ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService()), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new registration form system');
        $instance->setName('make:registration-form');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_reset_password' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeResetPasswordService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeResetPassword.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_reset_password'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeResetPassword($a, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.entity_class_generator'] ?? $this->getMaker_EntityClassGeneratorService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Create controller, entity, and repositories for use with symfonycasts/reset-password-bundle');
        $instance->setName('make:reset-password');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_serializer_encoder' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerEncoderService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeSerializerEncoder.php';

        $this->privates['maker.auto_command.make_serializer_encoder'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerEncoder(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new serializer encoder class');
        $instance->setName('make:serializer:encoder');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_serializer_normalizer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerNormalizerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeSerializerNormalizer.php';

        $this->privates['maker.auto_command.make_serializer_normalizer'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerNormalizer(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new serializer normalizer class');
        $instance->setName('make:serializer:normalizer');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_subscriber' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSubscriberService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventRegistry.php';

        $this->privates['maker.auto_command.make_subscriber'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSubscriber(new \Symfony\Bundle\MakerBundle\EventRegistry(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()))), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new event subscriber class');
        $instance->setName('make:subscriber');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_test' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeTestService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'InputAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeTest.php';

        $this->privates['maker.auto_command.make_test'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeTest(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new test class');
        $instance->setName('make:test');
        $instance->setAliases([0 => 'make:unit-test', 1 => 'make:functional-test']);

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_twig_extension' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeTwigExtensionService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeTwigExtension.php';

        $this->privates['maker.auto_command.make_twig_extension'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeTwigExtension(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new Twig extension class');
        $instance->setName('make:twig-extension');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_user' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeUserService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeUser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'UserClassBuilder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'SecurityConfigUpdater.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_user'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUser($a, new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder(), ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), ($this->privates['maker.entity_class_generator'] ?? $this->getMaker_EntityClassGeneratorService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new security user class');
        $instance->setName('make:user');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_validator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeValidatorService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeValidator.php';

        $this->privates['maker.auto_command.make_validator'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeValidator(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new validator and constraint class');
        $instance->setName('make:validator');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_voter' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeVoterService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeVoter.php';

        $this->privates['maker.auto_command.make_voter'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeVoter(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new security voter class');
        $instance->setName('make:voter');

        return $instance;
    }

    /**
     * Gets the private 'maker.doctrine_helper' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper
     */
    protected function getMaker_DoctrineHelperService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DoctrineHelper.php';

        return $this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', ($this->services['doctrine'] ?? $this->getDoctrineService()), ['default' => [0 => [0 => 'App\\Entity', 1 => ($this->privates['doctrine.orm.default_annotation_metadata_driver'] ?? $this->getDoctrine_Orm_DefaultAnnotationMetadataDriverService())]]]);
    }

    /**
     * Gets the private 'maker.entity_class_generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator
     */
    protected function getMaker_EntityClassGeneratorService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'EntityClassGenerator.php';

        $this->privates['maker.entity_class_generator'] = $instance = new \Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator(($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()), ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()));

        $instance->setMangerRegistryClassName('Doctrine\\Persistence\\ManagerRegistry');

        return $instance;
    }

    /**
     * Gets the private 'maker.file_manager' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\FileManager
     */
    protected function getMaker_FileManagerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FileManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'AutoloaderUtil.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'ComposerAutoloaderFinder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'MakerFileLinkFormatter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'filesystem'.\DIRECTORY_SEPARATOR.'Filesystem.php';

        return $this->privates['maker.file_manager'] = new \Symfony\Bundle\MakerBundle\FileManager(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), new \Symfony\Bundle\MakerBundle\Util\AutoloaderUtil(new \Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder('App')), new \Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter(($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())), \dirname(__DIR__, 4), (\dirname(__DIR__, 4).'/templates'));
    }

    /**
     * Gets the private 'maker.generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Generator
     */
    protected function getMaker_GeneratorService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'PhpCompatUtil.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        return $this->privates['maker.generator'] = new \Symfony\Bundle\MakerBundle\Generator($a, 'App', new \Symfony\Bundle\MakerBundle\Util\PhpCompatUtil($a));
    }

    /**
     * Gets the private 'maker.renderer.form_type_renderer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer
     */
    protected function getMaker_Renderer_FormTypeRendererService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'FormTypeRenderer.php';

        return $this->privates['maker.renderer.form_type_renderer'] = new \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer(($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));
    }

    /**
     * Gets the private 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    protected function getMimeTypesService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mime'.\DIRECTORY_SEPARATOR.'MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mime'.\DIRECTORY_SEPARATOR.'MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mime'.\DIRECTORY_SEPARATOR.'MimeTypes.php';

        $this->privates['mime_types'] = $instance = new \Symfony\Component\Mime\MimeTypes();

        $instance->setDefault($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.command.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Command\ServerLogCommand
     */
    protected function getMonolog_Command_ServerLogService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bridge'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ServerLogCommand.php';

        $this->privates['monolog.command.server_log'] = $instance = new \Symfony\Bridge\Monolog\Command\ServerLogCommand();

        $instance->setName('server:log');

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'log/dev.log'), 100, true, NULL, false);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->privates['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.snappy' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SnappyService()
    {
        $this->privates['monolog.logger.snappy'] = $instance = new \Symfony\Bridge\Monolog\Logger('snappy');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'property-access'.\DIRECTORY_SEPARATOR.'PropertyAccessorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'property-access'.\DIRECTORY_SEPARATOR.'PropertyAccessor.php';

        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false), true);
    }

    /**
     * Gets the private 'property_info' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoExtractor
     */
    protected function getPropertyInfoService()
    {
        return $this->privates['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->getPropertyInfo_SerializerExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1));
    }

    /**
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    protected function getPropertyInfo_SerializerExtractorService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'property-info'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'SerializerExtractor.php';

        return $this->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AbstractListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ListenerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AccessListener.php';

        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'AccessMap.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestMatcher.php';

        $this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_MainService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AbstractListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ListenerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.main'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.form.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Form_MainService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AbstractListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ListenerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AbstractAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'UsernamePasswordFormAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionAuthenticationStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'DefaultAuthenticationFailureHandler.php';

        $a = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
        $b->setOptions(['login_path' => 'security_login', 'target_path_parameter' => 'abonne', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'use_referer' => false]);
        $b->setProviderKey('main');
        $c = ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService());

        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, [], $c);
        $d->setOptions(['login_path' => 'security_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $this->privates['security.authentication.listener.form.main'] = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $a, 'main', $b, $d, ['check_path' => 'security_login', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], $c, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->getSecurity_Authentication_Provider_Dao_MainService());
            yield 1 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 2), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.dao.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_MainService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'UserAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'DaoAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserChecker.php';

        return $this->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['security.user.provider.concrete.in_database'] ?? $this->getSecurity_User_Provider_Concrete_InDatabaseService()), new \Symfony\Component\Security\Core\User\UserChecker(), 'main', ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), true);
    }

    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AbstractListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ListenerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ChannelListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EntryPoint'.\DIRECTORY_SEPARATOR.'AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EntryPoint'.\DIRECTORY_SEPARATOR.'RetryAuthenticationEntryPoint.php';

        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /**
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'UserPasswordEncoderCommand.php';

        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'App\\Entity\\User', 1 => 'App\\Entity\\Abonne']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /**
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AbstractListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ListenerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ContextListener.php';

        return $this->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService());
            yield 1 => ($this->privates['security.user.provider.concrete.in_database'] ?? $this->getSecurity_User_Provider_Concrete_InDatabaseService());
            yield 2 => ($this->privates['security.user.provider.concrete.chain_provider'] ?? $this->getSecurity_User_Provider_Concrete_ChainProviderService());
        }, 3), 'main', ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);
    }

    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'TokenStorage'.\DIRECTORY_SEPARATOR.'TokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'TokenStorage'.\DIRECTORY_SEPARATOR.'ClearableTokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'TokenStorage'.\DIRECTORY_SEPARATOR.'SessionTokenStorage.php';

        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /**
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'EncoderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'EncoderFactory.php';

        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['App\\Entity\\User' => ['algorithm' => 'auto', 'migrate_from' => [], 'hash_algorithm' => 'sha512', 'key_length' => 40, 'ignore_case' => false, 'encode_as_base64' => true, 'iterations' => 5000, 'cost' => NULL, 'memory_cost' => NULL, 'time_cost' => NULL, 'threads' => NULL], 'App\\Entity\\Abonne' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => '2y']]]);
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
        ], [
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.s.SNGkU'] ?? ($this->privates['.security.request_matcher.s.SNGkU'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images1|js)/')));
            yield 'security.firewall.map.context.main' => NULL;
        }, 2));
    }

    /**
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'FirewallContext.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'FirewallConfig.php';

        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.s.SNGkU', false, false, '', '', '', '', '', [], NULL));
    }

    /**
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'FirewallContext.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ExceptionListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EntryPoint'.\DIRECTORY_SEPARATOR.'AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EntryPoint'.\DIRECTORY_SEPARATOR.'FormAuthenticationEntryPoint.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AbstractListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ListenerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'LogoutListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'LogoutSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'DefaultLogoutSuccessHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'CsrfTokenClearingLogoutHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'SessionLogoutHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'FirewallConfig.php';

        $a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $b = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($b, 'abonne'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'security_logout']);
        $c->addHandler(new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService())));
        $c->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.form.main'] ?? $this->getSecurity_Authentication_Listener_Form_MainService());
            yield 3 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->getSecurity_Authentication_Listener_Anonymous_MainService());
            yield 4 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), $b, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $b, 'security_login', false), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'security.user.provider.concrete.in_database', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, [0 => 'form_login', 1 => 'anonymous'], NULL));
    }

    /**
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'HttpUtils.php';

        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', '{^https://%s$}i');
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('main', 'security_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.user.provider.concrete.app_user_provider' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_AppUserProviderService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'EntityUserProvider.php';

        return $this->privates['security.user.provider.concrete.app_user_provider'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), 'App\\Entity\\User', 'email', NULL);
    }

    /**
     * Gets the private 'security.user.provider.concrete.chain_provider' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\ChainUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_ChainProviderService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'ChainUserProvider.php';

        return $this->privates['security.user.provider.concrete.chain_provider'] = new \Symfony\Component\Security\Core\User\ChainUserProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService());
            yield 1 => ($this->privates['security.user.provider.concrete.in_database'] ?? $this->getSecurity_User_Provider_Concrete_InDatabaseService());
        }, 2));
    }

    /**
     * Gets the private 'security.user.provider.concrete.in_database' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_InDatabaseService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'EntityUserProvider.php';

        return $this->privates['security.user.provider.concrete.in_database'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), 'App\\Entity\\Abonne', 'mailabonne', NULL);
    }

    /**
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'UserPasswordValidator.php';

        return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        $this->privates['sensio_framework_extra.view.listener'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('sensio_framework_extra.view.listener', $this));

        return $instance;
    }

    /**
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    protected function getSerializer_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'SerializerCacheWarmer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'AnnotationLoader.php';

        return $this->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))], ($this->targetDir.''.'/serialization.php'));
    }

    /**
     * Gets the private 'serializer.mapping.class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getSerializer_Mapping_ClassMetadataFactoryService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ClassMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ClassResolverTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ClassMetadataFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderChain.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'AnnotationLoader.php';

        return $this->privates['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))]));
    }

    /**
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'SessionStorageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'NativeSessionStorage.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'MetadataBag.php';

        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'swiftmailer.command.debug' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand
     */
    protected function getSwiftmailer_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'AbstractSwiftMailerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $this->privates['swiftmailer.command.debug'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand();

        $instance->setName('debug:swiftmailer');

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.command.new_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand
     */
    protected function getSwiftmailer_Command_NewEmailService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'AbstractSwiftMailerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'NewEmailCommand.php';

        $this->privates['swiftmailer.command.new_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand();

        $instance->setName('swiftmailer:email:send');

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.command.send_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand
     */
    protected function getSwiftmailer_Command_SendEmailService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'AbstractSwiftMailerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SendEmailCommand.php';

        $this->privates['swiftmailer.command.send_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand();

        $instance->setName('swiftmailer:spool:send');

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'EmailSenderListener.php';

        return $this->privates['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'ChainExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'PhpExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'TwigExtractor.php';

        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpExtractor());
        $instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService())));

        return $instance;
    }

    /**
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ArrayLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'CsvFileLoader.php';

        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'IcuDatFileLoader.php';

        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ArrayLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'IniFileLoader.php';

        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ArrayLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'JsonFileLoader.php';

        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ArrayLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'MoFileLoader.php';

        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ArrayLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'PhpFileLoader.php';

        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ArrayLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'PoFileLoader.php';

        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'QtFileLoader.php';

        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'IcuResFileLoader.php';

        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'XliffFileLoader.php';

        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ArrayLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'YamlFileLoader.php';

        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the private 'translation.reader' shared service.
     *
     * @return \Symfony\Component\Translation\Reader\TranslationReader
     */
    protected function getTranslation_ReaderService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Reader'.\DIRECTORY_SEPARATOR.'TranslationReaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Reader'.\DIRECTORY_SEPARATOR.'TranslationReader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ArrayLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'XliffFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'PoFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'MoFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'QtFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'CsvFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'IcuDatFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'IniFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'JsonFileLoader.php';

        $this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

        return $instance;
    }

    /**
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'TranslationsCacheWarmer.php';

        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.af.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.af.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ar.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.ar.xliff')], 'az' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.az.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.az.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.be.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.be.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.bg.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.bg.xliff')], 'bs' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bs.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bs.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.bs.xlf')], 'ca' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ca.xlf')], 'cs' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.cs.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.cs.xliff')], 'cy' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.da.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.da.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.da.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.da.xliff')], 'de' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.de.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.de.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.de.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.de.xliff')], 'el' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.el.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.el.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.en.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.en.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.en.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.en.xliff')], 'es' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.es.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.es.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.es.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.es.xliff')], 'et' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.et.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.eu.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.eu.xliff')], 'fa' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.fa.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.fa.xliff')], 'fi' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.fi.xlf')], 'fr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.fr.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.fr.xliff')], 'gl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.he.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.he.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.hr.xlf')], 'hu' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.hu.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.hu.xliff')], 'hy' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hy.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.id.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.id.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.id.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.id.xliff')], 'it' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.it.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.it.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.it.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.it.xliff')], 'ja' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ja.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.ja.xliff')], 'lb' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.lt.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.lt.xliff')], 'lv' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.mn.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.nl.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.nl.xliff')], 'nn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.no.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.no.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.no.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.no.xliff')], 'pl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.pl.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.pl.xliff')], 'pt' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.pt.xlf')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.pt_BR.xliff')], 'ro' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ro.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.ro.xliff')], 'ru' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ru.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.ru.xliff')], 'sk' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sk.xlf')], 'sl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sl.xlf')], 'sq' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sq.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sq.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sv.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.sv.xliff')], 'th' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.th.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.th.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.tr.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.tr.xliff')], 'uk' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.uk.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.uk.xliff')], 'uz' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.uz.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.uz.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.uz.xlf')], 'vi' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.zh_CN.xlf')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.zh_TW.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.zh_TW.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.zh_TW.xlf')], 'ky' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.ky.xliff')], 'sw' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.sw.xliff')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'), 4 => (\dirname(__DIR__, 4).'/translations'), 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/translations'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/FrameworkBundle/translations'), 7 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/SensioFrameworkExtraBundle/translations'), 9 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/translations'), 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/DoctrineBundle/translations'), 11 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle/translations'), 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/DoctrineMigrationsBundle/translations'), 13 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/translations'), 14 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/SecurityBundle/translations'), 15 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/translations'), 16 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/TwigBundle/translations'), 17 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extra-bundle/translations'), 18 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/TwigExtraBundle/translations'), 19 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle/translations'), 20 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/WebProfilerBundle/translations'), 21 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bundle/translations'), 22 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/MonologBundle/translations'), 23 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'debug-bundle/translations'), 24 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/DebugBundle/translations'), 25 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 26 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/MakerBundle/translations'), 27 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-server-bundle/translations'), 28 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/WebServerBundle/translations'), 29 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle/translations'), 30 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/SwiftmailerBundle/translations'), 31 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle/translations'), 32 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/CMENGoogleChartsBundle/translations'), 33 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle/translations'), 34 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/KnpMarkdownBundle/translations'), 35 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ob'.\DIRECTORY_SEPARATOR.'highcharts-bundle/translations'), 36 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/ObHighchartsBundle/translations'), 37 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 38 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/WebpackEncoreBundle/translations'), 39 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/KnpPaginatorBundle/translations'), 40 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mercuryseries'.\DIRECTORY_SEPARATOR.'flashy-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 41 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/MercurySeriesFlashyBundle/translations'), 42 => 'F:/pesonnel/parcour/3A/copie pidev/integration-web/projet/vendor/knplabs/knp-snappy-bundle/src/translations', 43 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/KnpSnappyBundle/translations'), 44 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/translations'), 4 => 'translations', 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/translations'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/FrameworkBundle/translations'), 7 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/SensioFrameworkExtraBundle/translations'), 9 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/translations'), 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/DoctrineBundle/translations'), 11 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle/translations'), 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/DoctrineMigrationsBundle/translations'), 13 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/translations'), 14 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/SecurityBundle/translations'), 15 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/translations'), 16 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/TwigBundle/translations'), 17 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extra-bundle/translations'), 18 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/TwigExtraBundle/translations'), 19 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle/translations'), 20 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/WebProfilerBundle/translations'), 21 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bundle/translations'), 22 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/MonologBundle/translations'), 23 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'debug-bundle/translations'), 24 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/DebugBundle/translations'), 25 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 26 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/MakerBundle/translations'), 27 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-server-bundle/translations'), 28 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/WebServerBundle/translations'), 29 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle/translations'), 30 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/SwiftmailerBundle/translations'), 31 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle/translations'), 32 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/CMENGoogleChartsBundle/translations'), 33 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle/translations'), 34 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/KnpMarkdownBundle/translations'), 35 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ob'.\DIRECTORY_SEPARATOR.'highcharts-bundle/translations'), 36 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/ObHighchartsBundle/translations'), 37 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 38 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/WebpackEncoreBundle/translations'), 39 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/KnpPaginatorBundle/translations'), 40 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mercuryseries'.\DIRECTORY_SEPARATOR.'flashy-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 41 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/MercurySeriesFlashyBundle/translations'), 42 => 'F:/pesonnel/parcour/3A/copie pidev/integration-web/projet/vendor/knplabs/knp-snappy-bundle/src/translations', 43 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/KnpSnappyBundle/translations'), 44 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/translations')]]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /**
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'));

        $instance->setName('debug:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LintCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LintCommand.php';

        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRendererEngineInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractRendererEngine.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'TwigRendererEngine.php';

        return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService())), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.mailer.message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageListener
     */
    protected function getTwig_Mailer_MessageListenerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'MessageListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mime'.\DIRECTORY_SEPARATOR.'BodyRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Mime'.\DIRECTORY_SEPARATOR.'BodyRenderer.php';

        return $this->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, new \Symfony\Bridge\Twig\Mime\BodyRenderer(($this->services['twig'] ?? $this->getTwigService())));
    }

    /**
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpKernelRuntime.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'FragmentHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'LazyLoadingFragmentHandler.php';

        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true));
    }

    /**
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CsrfRuntime.php';

        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'CompatibilityServiceSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'TemplateCacheWarmer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'.\DIRECTORY_SEPARATOR.'TemplateIterator.php';

        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'), [(\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates')));
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $a = ($this->privates['property_info'] ?? $this->getPropertyInfoService());

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ])));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);
        $instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));

        return $instance;
    }

    /**
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'EmailValidator.php';

        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }

    /**
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'ExpressionValidator.php';

        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'ValidatorCacheWarmer.php';

        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /**
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'NotCompromisedPasswordValidator.php';

        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), 'UTF-8', true, NULL);
    }

    /**
     * Gets the private 'var_dumper.command.server_dump' shared service.
     *
     * @return \Symfony\Component\VarDumper\Command\ServerDumpCommand
     */
    protected function getVarDumper_Command_ServerDumpService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ServerDumpCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Server'.\DIRECTORY_SEPARATOR.'DumpServer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Descriptor'.\DIRECTORY_SEPARATOR.'DumpDescriptorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Descriptor'.\DIRECTORY_SEPARATOR.'CliDescriptor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Descriptor'.\DIRECTORY_SEPARATOR.'HtmlDescriptor.php';

        $a = new \Symfony\Bridge\Monolog\Logger('debug');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->privates['var_dumper.command.server_dump'] = $instance = new \Symfony\Component\VarDumper\Command\ServerDumpCommand(new \Symfony\Component\VarDumper\Server\DumpServer('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), $a), ['cli' => new \Symfony\Component\VarDumper\Command\Descriptor\CliDescriptor(($this->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $this->getVarDumper_ContextualizedCliDumper_InnerService())), 'html' => new \Symfony\Component\VarDumper\Command\Descriptor\HtmlDescriptor(($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService()))]);

        $instance->setName('server:dump');

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.contextualized_cli_dumper.inner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    protected function getVarDumper_ContextualizedCliDumper_InnerService()
    {
        $this->privates['var_dumper.contextualized_cli_dumper.inner'] = $instance = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.html_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\HtmlDumper
     */
    protected function getVarDumper_HtmlDumperService()
    {
        $this->privates['var_dumper.html_dumper'] = $instance = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.server_connection' shared service.
     *
     * @return \Symfony\Component\VarDumper\Server\Connection
     */
    protected function getVarDumper_ServerConnectionService()
    {
        return $this->privates['var_dumper.server_connection'] = new \Symfony\Component\VarDumper\Server\Connection('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())), 'request' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), 'cli' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider()]);
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    /**
     * Gets the private 'web_server.command.server_run' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand
     */
    protected function getWebServer_Command_ServerRunService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-server-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ServerRunCommand.php';

        $this->privates['web_server.command.server_run'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand((\dirname(__DIR__, 4).'/public'), 'dev', \dirname(__DIR__, 2));

        $instance->setName('server:run');

        return $instance;
    }

    /**
     * Gets the private 'web_server.command.server_start' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand
     */
    protected function getWebServer_Command_ServerStartService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-server-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ServerStartCommand.php';

        $this->privates['web_server.command.server_start'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand((\dirname(__DIR__, 4).'/public'), 'dev', \dirname(__DIR__, 2));

        $instance->setName('server:start');

        return $instance;
    }

    /**
     * Gets the private 'web_server.command.server_status' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand
     */
    protected function getWebServer_Command_ServerStatusService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-server-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ServerStatusCommand.php';

        $this->privates['web_server.command.server_status'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand(\dirname(__DIR__, 2));

        $instance->setName('server:status');

        return $instance;
    }

    /**
     * Gets the private 'web_server.command.server_stop' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand
     */
    protected function getWebServer_Command_ServerStopService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-server-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ServerStopCommand.php';

        $this->privates['web_server.command.server_stop'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand(\dirname(__DIR__, 2));

        $instance->setName('server:stop');

        return $instance;
    }

    /**
     * Gets the private 'webpack_encore.entrypoint_lookup.cache_warmer' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\CacheWarmer\EntrypointCacheWarmer
     */
    protected function getWebpackEncore_EntrypointLookup_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'EntrypointCacheWarmer.php';

        return $this->privates['webpack_encore.entrypoint_lookup.cache_warmer'] = new \Symfony\WebpackEncoreBundle\CacheWarmer\EntrypointCacheWarmer(['_default' => (\dirname(__DIR__, 4).'/public/build/entrypoints.json')], ($this->targetDir.''.'/webpack_encore.cache.php'), ($this->privates['cache.webpack_encore'] ?? $this->getCache_WebpackEncoreService()));
    }

    /**
     * Gets the private 'webpack_encore.entrypoint_lookup[_default]' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\Asset\EntrypointLookup
     */
    protected function getWebpackEncore_EntrypointLookupDefaultService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Asset'.\DIRECTORY_SEPARATOR.'EntrypointLookupInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Asset'.\DIRECTORY_SEPARATOR.'IntegrityDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Asset'.\DIRECTORY_SEPARATOR.'EntrypointLookup.php';

        return $this->privates['webpack_encore.entrypoint_lookup[_default]'] = new \Symfony\WebpackEncoreBundle\Asset\EntrypointLookup((\dirname(__DIR__, 4).'/public/build/entrypoints.json'), NULL, '_default', true);
    }

    /**
     * Gets the private 'webpack_encore.entrypoint_lookup_collection' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection
     */
    protected function getWebpackEncore_EntrypointLookupCollectionService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Asset'.\DIRECTORY_SEPARATOR.'EntrypointLookupCollectionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Asset'.\DIRECTORY_SEPARATOR.'EntrypointLookupCollection.php';

        return $this->privates['webpack_encore.entrypoint_lookup_collection'] = new \Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            '_default' => ['privates', 'webpack_encore.entrypoint_lookup[_default]', 'getWebpackEncore_EntrypointLookupDefaultService', false],
        ], [
            '_default' => '?',
        ]), '_default');
    }

    /**
     * Gets the private 'webpack_encore.exception_listener' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\EventListener\ExceptionListener
     */
    protected function getWebpackEncore_ExceptionListenerService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ExceptionListener.php';

        return $this->privates['webpack_encore.exception_listener'] = new \Symfony\WebpackEncoreBundle\EventListener\ExceptionListener(($this->privates['webpack_encore.entrypoint_lookup_collection'] ?? $this->getWebpackEncore_EntrypointLookupCollectionService()), [0 => '_default']);
    }

    /**
     * Gets the private 'webpack_encore.tag_renderer' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\Asset\TagRenderer
     */
    protected function getWebpackEncore_TagRendererService()
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Asset'.\DIRECTORY_SEPARATOR.'TagRenderer.php';

        return $this->privates['webpack_encore.tag_renderer'] = new \Symfony\WebpackEncoreBundle\Asset\TagRenderer(($this->privates['webpack_encore.entrypoint_lookup_collection'] ?? $this->getWebpackEncore_EntrypointLookupCollectionService()), ($this->privates['assets.packages'] ?? $this->getAssets_PackagesService()), [], ['defer' => true], [], ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * @return array|bool|float|int|string|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'swiftmailer.spool.default.memory.path' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/srcApp_KernelDevDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDir.''.'/swiftmailer/spool/default'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'CMENGoogleChartsBundle' => 'CMEN\\GoogleChartsBundle\\CMENGoogleChartsBundle',
                'KnpMarkdownBundle' => 'Knp\\Bundle\\MarkdownBundle\\KnpMarkdownBundle',
                'ObHighchartsBundle' => 'Ob\\HighchartsBundle\\ObHighchartsBundle',
                'WebpackEncoreBundle' => 'Symfony\\WebpackEncoreBundle\\WebpackEncoreBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'MercurySeriesFlashyBundle' => 'MercurySeries\\FlashyBundle\\MercurySeriesFlashyBundle',
                'KnpSnappyBundle' => 'Knp\\Bundle\\SnappyBundle\\KnpSnappyBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extra-bundle'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'DebugBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'debug-bundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ],
                'MakerBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
                'WebServerBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'CMENGoogleChartsBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'cmen'.\DIRECTORY_SEPARATOR.'google-charts-bundle'),
                    'namespace' => 'CMEN\\GoogleChartsBundle',
                ],
                'KnpMarkdownBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-markdown-bundle'),
                    'namespace' => 'Knp\\Bundle\\MarkdownBundle',
                ],
                'ObHighchartsBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ob'.\DIRECTORY_SEPARATOR.'highcharts-bundle'),
                    'namespace' => 'Ob\\HighchartsBundle',
                ],
                'WebpackEncoreBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Symfony\\WebpackEncoreBundle',
                ],
                'KnpPaginatorBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'),
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ],
                'MercurySeriesFlashyBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mercuryseries'.\DIRECTORY_SEPARATOR.'flashy-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'MercurySeries\\FlashyBundle',
                ],
                'KnpSnappyBundle' => [
                    'path' => 'F:/pesonnel/parcour/3A/copie pidev/integration-web/projet/vendor/knplabs/knp-snappy-bundle/src',
                    'namespace' => 'Knp\\Bundle\\SnappyBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelDevDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'filename_directory' => (\dirname(__DIR__, 4).'/public/images1/'),
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent' => 'security.authentication.success',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent' => 'security.authentication.failure',
                'Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent' => 'security.interactive_login',
                'Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent' => 'security.switch_user',
            ],
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelDevDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine.migrations.preferred_em' => NULL,
            'doctrine.migrations.preferred_connection' => NULL,
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'env(VAR_DUMPER_SERVER)' => '127.0.0.1:9912',
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'cmen_google_charts.version' => 'current',
            'cmen_google_charts.language' => '',
            'ob_highcharts.twig_extension.class' => 'Ob\\HighchartsBundle\\Twig\\HighchartsExtension',
            'knp_paginator.template.pagination' => '@KnpPaginator/Pagination/sliding.html.twig',
            'knp_paginator.template.filtration' => '@KnpPaginator/Pagination/filtration.html.twig',
            'knp_paginator.template.sortable' => '@KnpPaginator/Pagination/sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'knp_paginator.page_limit' => NULL,
            'knp_snappy.pdf.binary' => '"C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltopdf.exe"',
            'knp_snappy.pdf.options' => [

            ],
            'knp_snappy.pdf.env' => [

            ],
            'knp_snappy.image.binary' => '"C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltoimage.exe"',
            'knp_snappy.image.options' => [

            ],
            'knp_snappy.image.env' => [

            ],
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.http_client' => [
                    0 => 'http_client',
                    1 => '@WebProfiler/Collector/http_client.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'data_collector.dump' => [
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ],
                'mailer.data_collector' => [
                    0 => 'mailer',
                    1 => '@WebProfiler/Collector/mailer.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'console.command.ids' => [

            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder68d96 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer74167 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaab18 = [
        
    ];

    public function getConnection()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getConnection', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getMetadataFactory', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getExpressionBuilder', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'beginTransaction', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getCache', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getCache();
    }

    public function transactional($func)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'transactional', array('func' => $func), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->transactional($func);
    }

    public function commit()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'commit', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->commit();
    }

    public function rollback()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'rollback', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getClassMetadata', array('className' => $className), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'createQuery', array('dql' => $dql), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'createNamedQuery', array('name' => $name), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'createQueryBuilder', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'flush', array('entity' => $entity), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'clear', array('entityName' => $entityName), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->clear($entityName);
    }

    public function close()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'close', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->close();
    }

    public function persist($entity)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'persist', array('entity' => $entity), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'remove', array('entity' => $entity), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'refresh', array('entity' => $entity), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'detach', array('entity' => $entity), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'merge', array('entity' => $entity), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getRepository', array('entityName' => $entityName), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'contains', array('entity' => $entity), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getEventManager', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getConfiguration', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'isOpen', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getUnitOfWork', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getProxyFactory', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'initializeObject', array('obj' => $obj), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'getFilters', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'isFiltersStateClean', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'hasFilters', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer74167 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder68d96) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder68d96 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder68d96->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, '__get', ['name' => $name], $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        if (isset(self::$publicPropertiesaab18[$name])) {
            return $this->valueHolder68d96->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68d96;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder68d96;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68d96;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder68d96;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, '__isset', array('name' => $name), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68d96;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder68d96;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, '__unset', array('name' => $name), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68d96;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder68d96;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, '__clone', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        $this->valueHolder68d96 = clone $this->valueHolder68d96;
    }

    public function __sleep()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, '__sleep', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return array('valueHolder68d96');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer74167 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer74167;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'initializeProxy', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder68d96;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder68d96;
    }


}
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class Paginator_f262b94 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Knp\Component\Pager\Paginator|null wrapped object, if the proxy is initialized
     */
    private $valueHolder68d96 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer74167 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaab18 = [
        
    ];

    public function setDefaultPaginatorOptions(array $options) : void
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        $this->valueHolder68d96->setDefaultPaginatorOptions($options);
return;
    }

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return $this->valueHolder68d96->paginate($target, $page, $limit, $options);
    }

    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber) : void
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        $this->valueHolder68d96->subscribe($subscriber);
return;
    }

    public function connect(string $eventName, $listener, int $priority = 0) : void
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        $this->valueHolder68d96->connect($eventName, $listener, $priority);
return;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->eventDispatcher, $instance->defaultOptions, $instance->requestStack);

        $instance->initializer74167 = $initializer;

        return $instance;
    }

    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null, ?\Symfony\Component\HttpFoundation\RequestStack $requestStack = null)
    {
        static $reflection;

        if (! $this->valueHolder68d96) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHolder68d96 = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions, $this->requestStack);

        }

        $this->valueHolder68d96->__construct($eventDispatcher, $requestStack);
    }

    public function & __get($name)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, '__get', ['name' => $name], $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        if (isset(self::$publicPropertiesaab18[$name])) {
            return $this->valueHolder68d96->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68d96;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder68d96;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68d96;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder68d96;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, '__isset', array('name' => $name), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68d96;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder68d96;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, '__unset', array('name' => $name), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68d96;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder68d96;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, '__clone', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        $this->valueHolder68d96 = clone $this->valueHolder68d96;
    }

    public function __sleep()
    {
        $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, '__sleep', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;

        return array('valueHolder68d96');
    }

    public function __wakeup()
    {
        unset($this->eventDispatcher, $this->defaultOptions, $this->requestStack);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer74167 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer74167;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer74167 && ($this->initializer74167->__invoke($valueHolder68d96, $this, 'initializeProxy', array(), $this->initializer74167) || 1) && $this->valueHolder68d96 = $valueHolder68d96;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder68d96;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder68d96;
    }


}
