<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3bcbbc118c1197de6dc2746b169e2be
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '04c6c5c2f7095ccf6c481d3e53e1776f' => __DIR__ . '/..' . '/mustangostang/spyc/Spyc.php',
        '87988fc7b1c1f093da22a1a3de972f3a' => __DIR__ . '/../..' . '/config/helpers.php',
        '428e0a6316e676194f2283f47fbd1fc4' => __DIR__ . '/../..' . '/config/aliases.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'T' => 
        array (
            'TrueBV\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'TrueBV\\' => 
        array (
            0 => __DIR__ . '/..' . '/true/punycode/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/tests',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/league/color-extractor/src',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'claviska' => 
            array (
                0 => __DIR__ . '/..' . '/claviska/simpleimage/src',
            ),
        ),
        'P' => 
        array (
            'ParsedownExtra' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown-extra',
            ),
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
        'M' => 
        array (
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-smartypants',
            ),
        ),
    );

    public static $classMap = array (
        'Kirby\\Api\\Api' => __DIR__ . '/../..' . '/src/Api/Api.php',
        'Kirby\\Api\\ApiTest' => __DIR__ . '/../..' . '/tests/Api/ApiTest.php',
        'Kirby\\Api\\Collection' => __DIR__ . '/../..' . '/src/Api/Collection.php',
        'Kirby\\Api\\ExtendedModel' => __DIR__ . '/../..' . '/tests/Api/ApiTest.php',
        'Kirby\\Api\\MockModel' => __DIR__ . '/../..' . '/tests/Api/ApiTest.php',
        'Kirby\\Api\\Model' => __DIR__ . '/../..' . '/src/Api/Model.php',
        'Kirby\\Cache\\ApcuCache' => __DIR__ . '/../..' . '/src/Cache/ApcuCache.php',
        'Kirby\\Cache\\Cache' => __DIR__ . '/../..' . '/src/Cache/Cache.php',
        'Kirby\\Cache\\CacheTest' => __DIR__ . '/../..' . '/tests/Cache/CacheTest.php',
        'Kirby\\Cache\\FileCache' => __DIR__ . '/../..' . '/src/Cache/FileCache.php',
        'Kirby\\Cache\\FileTest' => __DIR__ . '/../..' . '/tests/Cache/FileCacheTest.php',
        'Kirby\\Cache\\MemCached' => __DIR__ . '/../..' . '/src/Cache/MemCached.php',
        'Kirby\\Cache\\TestCache' => __DIR__ . '/../..' . '/tests/Cache/CacheTest.php',
        'Kirby\\Cache\\Value' => __DIR__ . '/../..' . '/src/Cache/Value.php',
        'Kirby\\Cache\\ValueTest' => __DIR__ . '/../..' . '/tests/Cache/ValueTest.php',
        'Kirby\\Cms\\App' => __DIR__ . '/../..' . '/src/Cms/App.php',
        'Kirby\\Cms\\AppCaches' => __DIR__ . '/../..' . '/src/Cms/AppCaches.php',
        'Kirby\\Cms\\AppCachesTest' => __DIR__ . '/../..' . '/tests/Cms/AppCachesTest.php',
        'Kirby\\Cms\\AppComponentsTest' => __DIR__ . '/../..' . '/tests/Cms/AppComponentsTest.php',
        'Kirby\\Cms\\AppErrors' => __DIR__ . '/../..' . '/src/Cms/AppErrors.php',
        'Kirby\\Cms\\AppLanguagesTest' => __DIR__ . '/../..' . '/tests/Cms/AppLanguagesTest.php',
        'Kirby\\Cms\\AppPlugins' => __DIR__ . '/../..' . '/src/Cms/AppPlugins.php',
        'Kirby\\Cms\\AppPluginsTest' => __DIR__ . '/../..' . '/tests/Cms/AppPluginsTest.php',
        'Kirby\\Cms\\AppRolesTest' => __DIR__ . '/../..' . '/tests/Cms/AppRolesTest.php',
        'Kirby\\Cms\\AppTest' => __DIR__ . '/../..' . '/tests/Cms/AppTest.php',
        'Kirby\\Cms\\AppTranslations' => __DIR__ . '/../..' . '/src/Cms/AppTranslations.php',
        'Kirby\\Cms\\AppTranslationsTest' => __DIR__ . '/../..' . '/tests/Cms/AppTranslationsTest.php',
        'Kirby\\Cms\\AppUsers' => __DIR__ . '/../..' . '/src/Cms/AppUsers.php',
        'Kirby\\Cms\\AppUsersTest' => __DIR__ . '/../..' . '/tests/Cms/AppUsersTest.php',
        'Kirby\\Cms\\ArticlePage' => __DIR__ . '/../..' . '/tests/Cms/PageModelTest.php',
        'Kirby\\Cms\\Avatar' => __DIR__ . '/../..' . '/src/Cms/Avatar.php',
        'Kirby\\Cms\\AvatarActions' => __DIR__ . '/../..' . '/src/Cms/AvatarActions.php',
        'Kirby\\Cms\\AvatarTest' => __DIR__ . '/../..' . '/tests/Cms/AvatarTest.php',
        'Kirby\\Cms\\Blueprint' => __DIR__ . '/../..' . '/src/Cms/Blueprint.php',
        'Kirby\\Cms\\BlueprintTest' => __DIR__ . '/../..' . '/tests/Cms/BlueprintTest.php',
        'Kirby\\Cms\\Collection' => __DIR__ . '/../..' . '/src/Cms/Collection.php',
        'Kirby\\Cms\\CollectionTest' => __DIR__ . '/../..' . '/tests/Cms/CollectionTest.php',
        'Kirby\\Cms\\CollectionTestCase' => __DIR__ . '/../..' . '/tests/Cms/CollectionTestCase.php',
        'Kirby\\Cms\\Collections' => __DIR__ . '/../..' . '/src/Cms/Collections.php',
        'Kirby\\Cms\\CollectionsTest' => __DIR__ . '/../..' . '/tests/Cms/CollectionsTest.php',
        'Kirby\\Cms\\Content' => __DIR__ . '/../..' . '/src/Cms/Content.php',
        'Kirby\\Cms\\ContentTest' => __DIR__ . '/../..' . '/tests/Cms/ContentTest.php',
        'Kirby\\Cms\\ContentTranslation' => __DIR__ . '/../..' . '/src/Cms/ContentTranslation.php',
        'Kirby\\Cms\\ContentTranslationTest' => __DIR__ . '/../..' . '/tests/Cms/ContentTranslationTest.php',
        'Kirby\\Cms\\ControllerTestCase' => __DIR__ . '/../..' . '/tests/Cms/ControllerTestCase.php',
        'Kirby\\Cms\\Dir' => __DIR__ . '/../..' . '/src/Cms/Dir.php',
        'Kirby\\Cms\\DirTest' => __DIR__ . '/../..' . '/tests/Cms/DirTest.php',
        'Kirby\\Cms\\DummyPage' => __DIR__ . '/../..' . '/tests/Cms/AppPluginsTest.php',
        'Kirby\\Cms\\Email' => __DIR__ . '/../..' . '/src/Cms/Email.php',
        'Kirby\\Cms\\EmailTest' => __DIR__ . '/../..' . '/tests/Cms/EmailTest.php',
        'Kirby\\Cms\\Field' => __DIR__ . '/../..' . '/src/Cms/Field.php',
        'Kirby\\Cms\\FieldMethodsTest' => __DIR__ . '/../..' . '/tests/Cms/FieldMethodsTest.php',
        'Kirby\\Cms\\FieldTest' => __DIR__ . '/../..' . '/tests/Cms/FieldTest.php',
        'Kirby\\Cms\\File' => __DIR__ . '/../..' . '/src/Cms/File.php',
        'Kirby\\Cms\\FileActions' => __DIR__ . '/../..' . '/src/Cms/FileActions.php',
        'Kirby\\Cms\\FileActionsTest' => __DIR__ . '/../..' . '/tests/Cms/FileActionsTest.php',
        'Kirby\\Cms\\FileBlueprint' => __DIR__ . '/../..' . '/src/Cms/FileBlueprint.php',
        'Kirby\\Cms\\FileBlueprintTest' => __DIR__ . '/../..' . '/tests/Cms/FileBlueprintTest.php',
        'Kirby\\Cms\\FileCollectionTest' => __DIR__ . '/../..' . '/tests/Cms/FileCollectionTest.php',
        'Kirby\\Cms\\FilePermissions' => __DIR__ . '/../..' . '/src/Cms/FilePermissions.php',
        'Kirby\\Cms\\FilePermissionsTest' => __DIR__ . '/../..' . '/tests/Cms/FilePermissionsTest.php',
        'Kirby\\Cms\\FilePropsTest' => __DIR__ . '/../..' . '/tests/Cms/FilePropsTest.php',
        'Kirby\\Cms\\FileRules' => __DIR__ . '/../..' . '/src/Cms/FileRules.php',
        'Kirby\\Cms\\Filename' => __DIR__ . '/../..' . '/src/Cms/Filename.php',
        'Kirby\\Cms\\FilenameTest' => __DIR__ . '/../..' . '/tests/Cms/FilenameTest.php',
        'Kirby\\Cms\\Files' => __DIR__ . '/../..' . '/src/Cms/Files.php',
        'Kirby\\Cms\\Form' => __DIR__ . '/../..' . '/src/Cms/Form.php',
        'Kirby\\Cms\\FormTest' => __DIR__ . '/../..' . '/tests/Cms/FormTest.php',
        'Kirby\\Cms\\HasChildren' => __DIR__ . '/../..' . '/src/Cms/HasChildren.php',
        'Kirby\\Cms\\HasFiles' => __DIR__ . '/../..' . '/src/Cms/HasFiles.php',
        'Kirby\\Cms\\HasMethods' => __DIR__ . '/../..' . '/src/Cms/HasMethods.php',
        'Kirby\\Cms\\HasSiblings' => __DIR__ . '/../..' . '/src/Cms/HasSiblings.php',
        'Kirby\\Cms\\HasThumbs' => __DIR__ . '/../..' . '/src/Cms/HasThumbs.php',
        'Kirby\\Cms\\HelpersTest' => __DIR__ . '/../..' . '/tests/Cms/HelpersTest.php',
        'Kirby\\Cms\\Html' => __DIR__ . '/../..' . '/src/Cms/Html.php',
        'Kirby\\Cms\\Ingredients' => __DIR__ . '/../..' . '/src/Cms/Ingredients.php',
        'Kirby\\Cms\\KirbyTags' => __DIR__ . '/../..' . '/src/Cms/KirbyTags.php',
        'Kirby\\Cms\\KirbyTagsTest' => __DIR__ . '/../..' . '/tests/Cms/KirbyTagsTest.php',
        'Kirby\\Cms\\Language' => __DIR__ . '/../..' . '/src/Cms/Language.php',
        'Kirby\\Cms\\LanguageTest' => __DIR__ . '/../..' . '/tests/Cms/LanguageTest.php',
        'Kirby\\Cms\\Languages' => __DIR__ . '/../..' . '/src/Cms/Languages.php',
        'Kirby\\Cms\\LanguagesTest' => __DIR__ . '/../..' . '/tests/Cms/LanguagesTest.php',
        'Kirby\\Cms\\Media' => __DIR__ . '/../..' . '/src/Cms/Media.php',
        'Kirby\\Cms\\MethodsTest' => __DIR__ . '/../..' . '/tests/Cms/MethodsTest.php',
        'Kirby\\Cms\\MockObject' => __DIR__ . '/../..' . '/tests/Cms/CollectionTest.php',
        'Kirby\\Cms\\Model' => __DIR__ . '/../..' . '/src/Cms/Model.php',
        'Kirby\\Cms\\ModelPermissions' => __DIR__ . '/../..' . '/src/Cms/ModelPermissions.php',
        'Kirby\\Cms\\ModelTest' => __DIR__ . '/../..' . '/tests/Cms/ModelTest.php',
        'Kirby\\Cms\\ModelWithContent' => __DIR__ . '/../..' . '/src/Cms/ModelWithContent.php',
        'Kirby\\Cms\\MyModel' => __DIR__ . '/../..' . '/tests/Cms/ModelTest.php',
        'Kirby\\Cms\\Nest' => __DIR__ . '/../..' . '/src/Cms/Nest.php',
        'Kirby\\Cms\\NestCollection' => __DIR__ . '/../..' . '/src/Cms/NestCollection.php',
        'Kirby\\Cms\\NestObject' => __DIR__ . '/../..' . '/src/Cms/NestObject.php',
        'Kirby\\Cms\\Page' => __DIR__ . '/../..' . '/src/Cms/Page.php',
        'Kirby\\Cms\\PageActions' => __DIR__ . '/../..' . '/src/Cms/PageActions.php',
        'Kirby\\Cms\\PageActionsTest' => __DIR__ . '/../..' . '/tests/Cms/PageActionsTest.php',
        'Kirby\\Cms\\PageBlueprint' => __DIR__ . '/../..' . '/src/Cms/PageBlueprint.php',
        'Kirby\\Cms\\PageBlueprintTest' => __DIR__ . '/../..' . '/tests/Cms/PageBlueprintTest.php',
        'Kirby\\Cms\\PageChildrenTest' => __DIR__ . '/../..' . '/tests/Cms/PageChildrenTest.php',
        'Kirby\\Cms\\PageCollectionTest' => __DIR__ . '/../..' . '/tests/Cms/PageCollectionTest.php',
        'Kirby\\Cms\\PageContentTest' => __DIR__ . '/../..' . '/tests/Cms/PageContentTest.php',
        'Kirby\\Cms\\PageFilesTest' => __DIR__ . '/../..' . '/tests/Cms/PageFilesTest.php',
        'Kirby\\Cms\\PageModelTest' => __DIR__ . '/../..' . '/tests/Cms/PageModelTest.php',
        'Kirby\\Cms\\PagePermissions' => __DIR__ . '/../..' . '/src/Cms/PagePermissions.php',
        'Kirby\\Cms\\PagePermissionsTest' => __DIR__ . '/../..' . '/tests/Cms/PagePermissionsTest.php',
        'Kirby\\Cms\\PagePropsTest' => __DIR__ . '/../..' . '/tests/Cms/PagePropsTest.php',
        'Kirby\\Cms\\PageRules' => __DIR__ . '/../..' . '/src/Cms/PageRules.php',
        'Kirby\\Cms\\PageRulesTest' => __DIR__ . '/../..' . '/tests/Cms/PageRulesTest.php',
        'Kirby\\Cms\\PageSiblings' => __DIR__ . '/../..' . '/src/Cms/PageSiblings.php',
        'Kirby\\Cms\\PageStatesTest' => __DIR__ . '/../..' . '/tests/Cms/PageStatesTest.php',
        'Kirby\\Cms\\PageTemplateTest' => __DIR__ . '/../..' . '/tests/Cms/PageTemplateTest.php',
        'Kirby\\Cms\\PageTestCase' => __DIR__ . '/../..' . '/tests/Cms/PageTestCase.php',
        'Kirby\\Cms\\PageTranslationsTest' => __DIR__ . '/../..' . '/tests/Cms/PageTranslationsTest.php',
        'Kirby\\Cms\\Pages' => __DIR__ . '/../..' . '/src/Cms/Pages.php',
        'Kirby\\Cms\\PagesTest' => __DIR__ . '/../..' . '/tests/Cms/PagesTest.php',
        'Kirby\\Cms\\Pagination' => __DIR__ . '/../..' . '/src/Cms/Pagination.php',
        'Kirby\\Cms\\PaginationTest' => __DIR__ . '/../..' . '/tests/Cms/PaginationTest.php',
        'Kirby\\Cms\\Panel' => __DIR__ . '/../..' . '/src/Cms/Panel.php',
        'Kirby\\Cms\\Permissions' => __DIR__ . '/../..' . '/src/Cms/Permissions.php',
        'Kirby\\Cms\\PermissionsTest' => __DIR__ . '/../..' . '/tests/Cms/PermissionsTest.php',
        'Kirby\\Cms\\Plugin' => __DIR__ . '/../..' . '/src/Cms/Plugin.php',
        'Kirby\\Cms\\PluginAssets' => __DIR__ . '/../..' . '/src/Cms/PluginAssets.php',
        'Kirby\\Cms\\PluginTest' => __DIR__ . '/../..' . '/tests/Cms/PluginTest.php',
        'Kirby\\Cms\\Response' => __DIR__ . '/../..' . '/src/Cms/Response.php',
        'Kirby\\Cms\\ResponseTest' => __DIR__ . '/../..' . '/tests/Cms/ResponseTest.php',
        'Kirby\\Cms\\Role' => __DIR__ . '/../..' . '/src/Cms/Role.php',
        'Kirby\\Cms\\RoleTest' => __DIR__ . '/../..' . '/tests/Cms/RoleTest.php',
        'Kirby\\Cms\\Roles' => __DIR__ . '/../..' . '/src/Cms/Roles.php',
        'Kirby\\Cms\\RolesTest' => __DIR__ . '/../..' . '/tests/Cms/RolesTest.php',
        'Kirby\\Cms\\RootsTest' => __DIR__ . '/../..' . '/tests/Cms/RootsTest.php',
        'Kirby\\Cms\\RouterTest' => __DIR__ . '/../..' . '/tests/Cms/RouterTest.php',
        'Kirby\\Cms\\Search' => __DIR__ . '/../..' . '/src/Cms/Search.php',
        'Kirby\\Cms\\SearchTest' => __DIR__ . '/../..' . '/tests/Cms/SearchTest.php',
        'Kirby\\Cms\\Section' => __DIR__ . '/../..' . '/src/Cms/Section.php',
        'Kirby\\Cms\\Site' => __DIR__ . '/../..' . '/src/Cms/Site.php',
        'Kirby\\Cms\\SiteActions' => __DIR__ . '/../..' . '/src/Cms/SiteActions.php',
        'Kirby\\Cms\\SiteActionsTest' => __DIR__ . '/../..' . '/tests/Cms/SiteActionsTest.php',
        'Kirby\\Cms\\SiteBlueprint' => __DIR__ . '/../..' . '/src/Cms/SiteBlueprint.php',
        'Kirby\\Cms\\SiteBlueprintTest' => __DIR__ . '/../..' . '/tests/Cms/SiteBlueprintTest.php',
        'Kirby\\Cms\\SiteChildrenTest' => __DIR__ . '/../..' . '/tests/Cms/SiteChildrenTest.php',
        'Kirby\\Cms\\SiteContentTest' => __DIR__ . '/../..' . '/tests/Cms/SiteContentTest.php',
        'Kirby\\Cms\\SiteFilesTest' => __DIR__ . '/../..' . '/tests/Cms/SiteFilesTest.php',
        'Kirby\\Cms\\SitePagesTest' => __DIR__ . '/../..' . '/tests/Cms/SitePagesTest.php',
        'Kirby\\Cms\\SitePermissions' => __DIR__ . '/../..' . '/src/Cms/SitePermissions.php',
        'Kirby\\Cms\\SitePermissionsTest' => __DIR__ . '/../..' . '/tests/Cms/SitePermissionsTest.php',
        'Kirby\\Cms\\SitePropsTest' => __DIR__ . '/../..' . '/tests/Cms/SitePropsTest.php',
        'Kirby\\Cms\\SiteRules' => __DIR__ . '/../..' . '/src/Cms/SiteRules.php',
        'Kirby\\Cms\\SiteRulesTest' => __DIR__ . '/../..' . '/tests/Cms/SiteRulesTest.php',
        'Kirby\\Cms\\SiteTranslationsTest' => __DIR__ . '/../..' . '/tests/Cms/SiteTranslationsTest.php',
        'Kirby\\Cms\\Structure' => __DIR__ . '/../..' . '/src/Cms/Structure.php',
        'Kirby\\Cms\\StructureObject' => __DIR__ . '/../..' . '/src/Cms/StructureObject.php',
        'Kirby\\Cms\\StructureObjectTest' => __DIR__ . '/../..' . '/tests/Cms/StructureObjectTest.php',
        'Kirby\\Cms\\StructureTest' => __DIR__ . '/../..' . '/tests/Cms/StructureTest.php',
        'Kirby\\Cms\\System' => __DIR__ . '/../..' . '/src/Cms/System.php',
        'Kirby\\Cms\\SystemTest' => __DIR__ . '/../..' . '/tests/Cms/SystemTest.php',
        'Kirby\\Cms\\Template' => __DIR__ . '/../..' . '/src/Cms/Template.php',
        'Kirby\\Cms\\TestCase' => __DIR__ . '/../..' . '/tests/Cms/TestCase.php',
        'Kirby\\Cms\\Translation' => __DIR__ . '/../..' . '/src/Cms/Translation.php',
        'Kirby\\Cms\\TranslationTest' => __DIR__ . '/../..' . '/tests/Cms/TranslationTest.php',
        'Kirby\\Cms\\Translations' => __DIR__ . '/../..' . '/src/Cms/Translations.php',
        'Kirby\\Cms\\TranslationsTest' => __DIR__ . '/../..' . '/tests/Cms/TranslationsTest.php',
        'Kirby\\Cms\\Url' => __DIR__ . '/../..' . '/src/Cms/Url.php',
        'Kirby\\Cms\\UrlsTest' => __DIR__ . '/../..' . '/tests/Cms/UrlsTest.php',
        'Kirby\\Cms\\User' => __DIR__ . '/../..' . '/src/Cms/User.php',
        'Kirby\\Cms\\UserActions' => __DIR__ . '/../..' . '/src/Cms/UserActions.php',
        'Kirby\\Cms\\UserActionsTest' => __DIR__ . '/../..' . '/tests/Cms/UserActionsTest.php',
        'Kirby\\Cms\\UserBlueprint' => __DIR__ . '/../..' . '/src/Cms/UserBlueprint.php',
        'Kirby\\Cms\\UserBlueprintTest' => __DIR__ . '/../..' . '/tests/Cms/UserBlueprintTest.php',
        'Kirby\\Cms\\UserMethodsTest' => __DIR__ . '/../..' . '/tests/Cms/UserMethodsTest.php',
        'Kirby\\Cms\\UserPermissions' => __DIR__ . '/../..' . '/src/Cms/UserPermissions.php',
        'Kirby\\Cms\\UserPermissionsTest' => __DIR__ . '/../..' . '/tests/Cms/UserPermissionsTest.php',
        'Kirby\\Cms\\UserPropsTest' => __DIR__ . '/../..' . '/tests/Cms/UserPropsTest.php',
        'Kirby\\Cms\\UserRules' => __DIR__ . '/../..' . '/src/Cms/UserRules.php',
        'Kirby\\Cms\\UserRulesTest' => __DIR__ . '/../..' . '/tests/Cms/UserRulesTest.php',
        'Kirby\\Cms\\Users' => __DIR__ . '/../..' . '/src/Cms/Users.php',
        'Kirby\\Data\\CustomHandler' => __DIR__ . '/../..' . '/tests/Data/DataTest.php',
        'Kirby\\Data\\Data' => __DIR__ . '/../..' . '/src/Data/Data.php',
        'Kirby\\Data\\DataTest' => __DIR__ . '/../..' . '/tests/Data/DataTest.php',
        'Kirby\\Data\\Handler' => __DIR__ . '/../..' . '/src/Data/Handler.php',
        'Kirby\\Data\\Json' => __DIR__ . '/../..' . '/src/Data/Json.php',
        'Kirby\\Data\\JsonTest' => __DIR__ . '/../..' . '/tests/Data/JsonTest.php',
        'Kirby\\Data\\Txt' => __DIR__ . '/../..' . '/src/Data/Txt.php',
        'Kirby\\Data\\TxtTest' => __DIR__ . '/../..' . '/tests/Data/TxtTest.php',
        'Kirby\\Data\\Yaml' => __DIR__ . '/../..' . '/src/Data/Yaml.php',
        'Kirby\\Data\\YamlTest' => __DIR__ . '/../..' . '/tests/Data/YamlTest.php',
        'Kirby\\Email\\Body' => __DIR__ . '/../..' . '/src/Email/Body.php',
        'Kirby\\Email\\Email' => __DIR__ . '/../..' . '/src/Email/Email.php',
        'Kirby\\Email\\EmailTest' => __DIR__ . '/../..' . '/tests/Email/EmailTest.php',
        'Kirby\\Email\\PHPMailer' => __DIR__ . '/../..' . '/src/Email/PHPMailer.php',
        'Kirby\\Email\\PHPMailerTest' => __DIR__ . '/../..' . '/tests/Email/PHPMailerTest.php',
        'Kirby\\Email\\TestCase' => __DIR__ . '/../..' . '/tests/Email/TestCase.php',
        'Kirby\\Exception\\BadMethodCallException' => __DIR__ . '/../..' . '/src/Exception/BadMethodCallException.php',
        'Kirby\\Exception\\BadMethodCallExceptionTest' => __DIR__ . '/../..' . '/tests/Exception/BadMethodCallExceptionTest.php',
        'Kirby\\Exception\\DuplicateException' => __DIR__ . '/../..' . '/src/Exception/DuplicateException.php',
        'Kirby\\Exception\\DuplicateExceptionTest' => __DIR__ . '/../..' . '/tests/Exception/DuplicateExceptionTest.php',
        'Kirby\\Exception\\Exception' => __DIR__ . '/../..' . '/src/Exception/Exception.php',
        'Kirby\\Exception\\ExceptionTest' => __DIR__ . '/../..' . '/tests/Exception/ExceptionTest.php',
        'Kirby\\Exception\\InvalidArgumentException' => __DIR__ . '/../..' . '/src/Exception/InvalidArgumentException.php',
        'Kirby\\Exception\\InvalidArgumentExceptionTest' => __DIR__ . '/../..' . '/tests/Exception/InvalidArgumentExceptionTest.php',
        'Kirby\\Exception\\LogicException' => __DIR__ . '/../..' . '/src/Exception/LogicException.php',
        'Kirby\\Exception\\LogicExceptionTest' => __DIR__ . '/../..' . '/tests/Exception/LogicExceptionTest.php',
        'Kirby\\Exception\\NotFoundException' => __DIR__ . '/../..' . '/src/Exception/NotFoundException.php',
        'Kirby\\Exception\\NotFoundExceptionTest' => __DIR__ . '/../..' . '/tests/Exception/NotFoundExceptionTest.php',
        'Kirby\\Exception\\PermissionException' => __DIR__ . '/../..' . '/src/Exception/PermissionException.php',
        'Kirby\\Exception\\PermissionExceptionTest' => __DIR__ . '/../..' . '/tests/Exception/PermissionExceptionTest.php',
        'Kirby\\Exception\\WillFail' => __DIR__ . '/../..' . '/tests/Exception/ExceptionTest.php',
        'Kirby\\Form\\Field' => __DIR__ . '/../..' . '/src/Form/Field.php',
        'Kirby\\Form\\Fields' => __DIR__ . '/../..' . '/src/Form/Fields.php',
        'Kirby\\Form\\Fields\\DateFieldTest' => __DIR__ . '/../..' . '/tests/Form/Fields/DateFieldTest.php',
        'Kirby\\Form\\Fields\\StructureFieldTest' => __DIR__ . '/../..' . '/tests/Form/Fields/StructureFieldTest.php',
        'Kirby\\Form\\Fields\\TagsFieldTest' => __DIR__ . '/../..' . '/tests/Form/Fields/TagsFieldTest.php',
        'Kirby\\Form\\Fields\\TestCase' => __DIR__ . '/../..' . '/tests/Form/Fields/TestCase.php',
        'Kirby\\Form\\Fields\\ToggleFieldTest' => __DIR__ . '/../..' . '/tests/Form/Fields/ToggleFieldTest.php',
        'Kirby\\Form\\Form' => __DIR__ . '/../..' . '/src/Form/Form.php',
        'Kirby\\Form\\FormTest' => __DIR__ . '/../..' . '/tests/Form/FormTest.php',
        'Kirby\\Form\\Options' => __DIR__ . '/../..' . '/src/Form/Options.php',
        'Kirby\\Form\\OptionsApi' => __DIR__ . '/../..' . '/src/Form/OptionsApi.php',
        'Kirby\\Form\\OptionsQuery' => __DIR__ . '/../..' . '/src/Form/OptionsQuery.php',
        'Kirby\\Form\\Validations' => __DIR__ . '/../..' . '/src/Form/Validations.php',
        'Kirby\\Http\\Acceptance' => __DIR__ . '/../..' . '/src/Http/Acceptance.php',
        'Kirby\\Http\\Acceptance\\Language' => __DIR__ . '/../..' . '/src/Http/Acceptance/Language.php',
        'Kirby\\Http\\Acceptance\\MimeType' => __DIR__ . '/../..' . '/src/Http/Acceptance/MimeType.php',
        'Kirby\\Http\\Cookie' => __DIR__ . '/../..' . '/src/Http/Cookie.php',
        'Kirby\\Http\\CookieTest' => __DIR__ . '/../..' . '/tests/Http/CookieTest.php',
        'Kirby\\Http\\Idn' => __DIR__ . '/../..' . '/src/Http/Idn.php',
        'Kirby\\Http\\Params' => __DIR__ . '/../..' . '/src/Http/Params.php',
        'Kirby\\Http\\ParamsTest' => __DIR__ . '/../..' . '/tests/Http/ParamsTest.php',
        'Kirby\\Http\\Path' => __DIR__ . '/../..' . '/src/Http/Path.php',
        'Kirby\\Http\\Query' => __DIR__ . '/../..' . '/src/Http/Query.php',
        'Kirby\\Http\\Remote' => __DIR__ . '/../..' . '/src/Http/Remote.php',
        'Kirby\\Http\\RemoteTest' => __DIR__ . '/../..' . '/tests/Http/RemoteTest.php',
        'Kirby\\Http\\Request' => __DIR__ . '/../..' . '/src/Http/Request.php',
        'Kirby\\Http\\RequestTest' => __DIR__ . '/../..' . '/tests/Http/RequestTest.php',
        'Kirby\\Http\\Request\\Body' => __DIR__ . '/../..' . '/src/Http/Request/Body.php',
        'Kirby\\Http\\Request\\BodyTest' => __DIR__ . '/../..' . '/tests/Http/Request/BodyTest.php',
        'Kirby\\Http\\Request\\Data' => __DIR__ . '/../..' . '/src/Http/Request/Data.php',
        'Kirby\\Http\\Request\\Files' => __DIR__ . '/../..' . '/src/Http/Request/Files.php',
        'Kirby\\Http\\Request\\FilesTest' => __DIR__ . '/../..' . '/tests/Http/Request/FilesTest.php',
        'Kirby\\Http\\Request\\Query' => __DIR__ . '/../..' . '/src/Http/Request/Query.php',
        'Kirby\\Http\\Request\\QueryTest' => __DIR__ . '/../..' . '/tests/Http/Request/QueryTest.php',
        'Kirby\\Http\\Response' => __DIR__ . '/../..' . '/src/Http/Response.php',
        'Kirby\\Http\\ResponseTest' => __DIR__ . '/../..' . '/tests/Http/ResponseTest.php',
        'Kirby\\Http\\Route' => __DIR__ . '/../..' . '/src/Http/Route.php',
        'Kirby\\Http\\RouteTest' => __DIR__ . '/../..' . '/tests/Http/RouteTest.php',
        'Kirby\\Http\\Router' => __DIR__ . '/../..' . '/src/Http/Router.php',
        'Kirby\\Http\\RouterTest' => __DIR__ . '/../..' . '/tests/Http/RouterTest.php',
        'Kirby\\Http\\Server' => __DIR__ . '/../..' . '/src/Http/Server.php',
        'Kirby\\Http\\ServerTest' => __DIR__ . '/../..' . '/tests/Http/ServerTest.php',
        'Kirby\\Http\\Uri' => __DIR__ . '/../..' . '/src/Http/Uri.php',
        'Kirby\\Http\\UriTest' => __DIR__ . '/../..' . '/tests/Http/UriTest.php',
        'Kirby\\Http\\Url' => __DIR__ . '/../..' . '/src/Http/Url.php',
        'Kirby\\Http\\UrlTest' => __DIR__ . '/../..' . '/tests/Http/UrlTest.php',
        'Kirby\\Http\\Visitor' => __DIR__ . '/../..' . '/src/Http/Visitor.php',
        'Kirby\\Http\\VisitorTest' => __DIR__ . '/../..' . '/tests/Http/VisitorTest.php',
        'Kirby\\Image\\Camera' => __DIR__ . '/../..' . '/src/Image/Camera.php',
        'Kirby\\Image\\CameraTest' => __DIR__ . '/../..' . '/tests/Image/CameraTest.php',
        'Kirby\\Image\\Darkroom' => __DIR__ . '/../..' . '/src/Image/Darkroom.php',
        'Kirby\\Image\\DarkroomTest' => __DIR__ . '/../..' . '/tests/Image/DarkroomTest.php',
        'Kirby\\Image\\Darkroom\\GdLib' => __DIR__ . '/../..' . '/src/Image/Darkroom/GdLib.php',
        'Kirby\\Image\\Darkroom\\ImageMagick' => __DIR__ . '/../..' . '/src/Image/Darkroom/ImageMagick.php',
        'Kirby\\Image\\Dimensions' => __DIR__ . '/../..' . '/src/Image/Dimensions.php',
        'Kirby\\Image\\DimensionsTest' => __DIR__ . '/../..' . '/tests/Image/DimensionsTest.php',
        'Kirby\\Image\\Exif' => __DIR__ . '/../..' . '/src/Image/Exif.php',
        'Kirby\\Image\\ExifTest' => __DIR__ . '/../..' . '/tests/Image/ExifTest.php',
        'Kirby\\Image\\Image' => __DIR__ . '/../..' . '/src/Image/Image.php',
        'Kirby\\Image\\ImageTest' => __DIR__ . '/../..' . '/tests/Image/ImageTest.php',
        'Kirby\\Image\\Location' => __DIR__ . '/../..' . '/src/Image/Location.php',
        'Kirby\\Image\\LocationTest' => __DIR__ . '/../..' . '/tests/Image/LocationTest.php',
        'Kirby\\Image\\TestCase' => __DIR__ . '/../..' . '/tests/Image/TestCase.php',
        'Kirby\\Session\\AutoSession' => __DIR__ . '/../..' . '/src/Session/AutoSession.php',
        'Kirby\\Session\\AutoSessionTest' => __DIR__ . '/../..' . '/tests/Session/AutoSessionTest.php',
        'Kirby\\Session\\FileSessionStore' => __DIR__ . '/../..' . '/src/Session/FileSessionStore.php',
        'Kirby\\Session\\FileSessionStoreTest' => __DIR__ . '/../..' . '/tests/Session/FileSessionStoreTest.php',
        'Kirby\\Session\\InvalidSessionStore' => __DIR__ . '/../..' . '/tests/Session/mocks.php',
        'Kirby\\Session\\MockSession' => __DIR__ . '/../..' . '/tests/Session/mocks.php',
        'Kirby\\Session\\Session' => __DIR__ . '/../..' . '/src/Session/Session.php',
        'Kirby\\Session\\SessionData' => __DIR__ . '/../..' . '/src/Session/SessionData.php',
        'Kirby\\Session\\SessionDataTest' => __DIR__ . '/../..' . '/tests/Session/SessionDataTest.php',
        'Kirby\\Session\\SessionStore' => __DIR__ . '/../..' . '/src/Session/SessionStore.php',
        'Kirby\\Session\\SessionStoreTest' => __DIR__ . '/../..' . '/tests/Session/SessionStoreTest.php',
        'Kirby\\Session\\SessionTest' => __DIR__ . '/../..' . '/tests/Session/SessionTest.php',
        'Kirby\\Session\\Sessions' => __DIR__ . '/../..' . '/src/Session/Sessions.php',
        'Kirby\\Session\\SessionsTest' => __DIR__ . '/../..' . '/tests/Session/SessionsTest.php',
        'Kirby\\Session\\TestSessionStore' => __DIR__ . '/../..' . '/tests/Session/mocks.php',
        'Kirby\\Text\\KirbyTag' => __DIR__ . '/../..' . '/src/Text/KirbyTag.php',
        'Kirby\\Text\\KirbyTagTest' => __DIR__ . '/../..' . '/tests/Text/KirbyTagTest.php',
        'Kirby\\Text\\KirbyTags' => __DIR__ . '/../..' . '/src/Text/KirbyTags.php',
        'Kirby\\Text\\Markdown' => __DIR__ . '/../..' . '/src/Text/Markdown.php',
        'Kirby\\Text\\MarkdownTest' => __DIR__ . '/../..' . '/tests/Text/MarkdownTest.php',
        'Kirby\\Text\\SmartyPants' => __DIR__ . '/../..' . '/src/Text/SmartyPants.php',
        'Kirby\\Text\\SmartyPantsTest' => __DIR__ . '/../..' . '/tests/Text/SmartyPantsTest.php',
        'Kirby\\Toolkit\\A' => __DIR__ . '/../..' . '/src/Toolkit/A.php',
        'Kirby\\Toolkit\\ATest' => __DIR__ . '/../..' . '/tests/Toolkit/ATest.php',
        'Kirby\\Toolkit\\CanBeCounted' => __DIR__ . '/../..' . '/tests/Toolkit/VTest.php',
        'Kirby\\Toolkit\\Collection' => __DIR__ . '/../..' . '/src/Toolkit/Collection.php',
        'Kirby\\Toolkit\\CollectionConverterTest' => __DIR__ . '/../..' . '/tests/Toolkit/CollectionConverterTest.php',
        'Kirby\\Toolkit\\CollectionFilterTest' => __DIR__ . '/../..' . '/tests/Toolkit/CollectionFilterTest.php',
        'Kirby\\Toolkit\\CollectionFinderTest' => __DIR__ . '/../..' . '/tests/Toolkit/CollectionFinderTest.php',
        'Kirby\\Toolkit\\CollectionGetterTest' => __DIR__ . '/../..' . '/tests/Toolkit/CollectionGetterTest.php',
        'Kirby\\Toolkit\\CollectionMutatorTest' => __DIR__ . '/../..' . '/tests/Toolkit/CollectionMutatorTest.php',
        'Kirby\\Toolkit\\CollectionNavigatorTest' => __DIR__ . '/../..' . '/tests/Toolkit/CollectionNavigatorTest.php',
        'Kirby\\Toolkit\\CollectionPaginatorTest' => __DIR__ . '/../..' . '/tests/Toolkit/CollectionPaginatorTest.php',
        'Kirby\\Toolkit\\CollectionSorterTest' => __DIR__ . '/../..' . '/tests/Toolkit/CollectionSorterTest.php',
        'Kirby\\Toolkit\\CollectionTest' => __DIR__ . '/../..' . '/tests/Toolkit/CollectionTest.php',
        'Kirby\\Toolkit\\Component' => __DIR__ . '/../..' . '/src/Toolkit/Component.php',
        'Kirby\\Toolkit\\Controller' => __DIR__ . '/../..' . '/src/Toolkit/Controller.php',
        'Kirby\\Toolkit\\Dir' => __DIR__ . '/../..' . '/src/Toolkit/Dir.php',
        'Kirby\\Toolkit\\DirTest' => __DIR__ . '/../..' . '/tests/Toolkit/DirTest.php',
        'Kirby\\Toolkit\\F' => __DIR__ . '/../..' . '/src/Toolkit/F.php',
        'Kirby\\Toolkit\\FTest' => __DIR__ . '/../..' . '/tests/Toolkit/FTest.php',
        'Kirby\\Toolkit\\File' => __DIR__ . '/../..' . '/src/Toolkit/File.php',
        'Kirby\\Toolkit\\FileTest' => __DIR__ . '/../..' . '/tests/Toolkit/FileTest.php',
        'Kirby\\Toolkit\\HasCount' => __DIR__ . '/../..' . '/tests/Toolkit/VTest.php',
        'Kirby\\Toolkit\\Html' => __DIR__ . '/../..' . '/src/Toolkit/Html.php',
        'Kirby\\Toolkit\\HtmlTest' => __DIR__ . '/../..' . '/tests/Toolkit/HtmlTest.php',
        'Kirby\\Toolkit\\I18n' => __DIR__ . '/../..' . '/src/Toolkit/I18n.php',
        'Kirby\\Toolkit\\I18nTest' => __DIR__ . '/../..' . '/tests/Toolkit/I18nTest.php',
        'Kirby\\Toolkit\\Iterator' => __DIR__ . '/../..' . '/src/Toolkit/Iterator.php',
        'Kirby\\Toolkit\\IteratorTest' => __DIR__ . '/../..' . '/tests/Toolkit/IteratorTest.php',
        'Kirby\\Toolkit\\Mime' => __DIR__ . '/../..' . '/src/Toolkit/Mime.php',
        'Kirby\\Toolkit\\MimeTest' => __DIR__ . '/../..' . '/tests/Toolkit/MimeTest.php',
        'Kirby\\Toolkit\\MockObject' => __DIR__ . '/../..' . '/tests/Toolkit/CollectionSorterTest.php',
        'Kirby\\Toolkit\\Obj' => __DIR__ . '/../..' . '/src/Toolkit/Obj.php',
        'Kirby\\Toolkit\\ObjTest' => __DIR__ . '/../..' . '/tests/Toolkit/ObjTest.php',
        'Kirby\\Toolkit\\Pagination' => __DIR__ . '/../..' . '/src/Toolkit/Pagination.php',
        'Kirby\\Toolkit\\PaginationTest' => __DIR__ . '/../..' . '/tests/Toolkit/PaginationTest.php',
        'Kirby\\Toolkit\\Properties' => __DIR__ . '/../..' . '/src/Toolkit/Properties.php',
        'Kirby\\Toolkit\\Query' => __DIR__ . '/../..' . '/src/Toolkit/Query.php',
        'Kirby\\Toolkit\\QueryTest' => __DIR__ . '/../..' . '/tests/Toolkit/QueryTest.php',
        'Kirby\\Toolkit\\QueryTestUser' => __DIR__ . '/../..' . '/tests/Toolkit/QueryTestUser.php',
        'Kirby\\Toolkit\\Stack' => __DIR__ . '/../..' . '/src/Toolkit/Stack.php',
        'Kirby\\Toolkit\\Str' => __DIR__ . '/../..' . '/src/Toolkit/Str.php',
        'Kirby\\Toolkit\\StrTest' => __DIR__ . '/../..' . '/tests/Toolkit/StrTest.php',
        'Kirby\\Toolkit\\TestCase' => __DIR__ . '/../..' . '/tests/Toolkit/TestCase.php',
        'Kirby\\Toolkit\\Tpl' => __DIR__ . '/../..' . '/src/Toolkit/Tpl.php',
        'Kirby\\Toolkit\\TplTest' => __DIR__ . '/../..' . '/tests/Toolkit/TplTest.php',
        'Kirby\\Toolkit\\V' => __DIR__ . '/../..' . '/src/Toolkit/V.php',
        'Kirby\\Toolkit\\VTest' => __DIR__ . '/../..' . '/tests/Toolkit/VTest.php',
        'Kirby\\Toolkit\\View' => __DIR__ . '/../..' . '/src/Toolkit/View.php',
        'Kirby\\Toolkit\\ViewTest' => __DIR__ . '/../..' . '/tests/Toolkit/ViewTest.php',
        'Kirby\\Toolkit\\Xml' => __DIR__ . '/../..' . '/src/Toolkit/Xml.php',
        'Kirby\\Toolkit\\XmlTest' => __DIR__ . '/../..' . '/tests/Toolkit/XmlTest.php',
        'League\\ColorExtractor\\Color' => __DIR__ . '/..' . '/league/color-extractor/src/League/ColorExtractor/Color.php',
        'League\\ColorExtractor\\ColorExtractor' => __DIR__ . '/..' . '/league/color-extractor/src/League/ColorExtractor/ColorExtractor.php',
        'League\\ColorExtractor\\Palette' => __DIR__ . '/..' . '/league/color-extractor/src/League/ColorExtractor/Palette.php',
        'Michelf\\SmartyPants' => __DIR__ . '/..' . '/michelf/php-smartypants/Michelf/SmartyPants.php',
        'Michelf\\SmartyPantsTypographer' => __DIR__ . '/..' . '/michelf/php-smartypants/Michelf/SmartyPantsTypographer.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'Parsedown' => __DIR__ . '/..' . '/erusev/parsedown/Parsedown.php',
        'ParsedownExtra' => __DIR__ . '/..' . '/erusev/parsedown-extra/ParsedownExtra.php',
        'ParsedownExtraTest' => __DIR__ . '/..' . '/erusev/parsedown-extra/test/ParsedownExtraTest.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'TrueBV\\Exception\\DomainOutOfBoundsException' => __DIR__ . '/..' . '/true/punycode/src/Exception/DomainOutOfBoundsException.php',
        'TrueBV\\Exception\\LabelOutOfBoundsException' => __DIR__ . '/..' . '/true/punycode/src/Exception/LabelOutOfBoundsException.php',
        'TrueBV\\Exception\\OutOfBoundsException' => __DIR__ . '/..' . '/true/punycode/src/Exception/OutOfBoundsException.php',
        'TrueBV\\Punycode' => __DIR__ . '/..' . '/true/punycode/src/Punycode.php',
        'Whoops\\Exception\\ErrorException' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/ErrorException.php',
        'Whoops\\Exception\\Formatter' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Formatter.php',
        'Whoops\\Exception\\Frame' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Frame.php',
        'Whoops\\Exception\\FrameCollection' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/FrameCollection.php',
        'Whoops\\Exception\\Inspector' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Inspector.php',
        'Whoops\\Handler\\CallbackHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/CallbackHandler.php',
        'Whoops\\Handler\\Handler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/Handler.php',
        'Whoops\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/HandlerInterface.php',
        'Whoops\\Handler\\JsonResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/JsonResponseHandler.php',
        'Whoops\\Handler\\PlainTextHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PlainTextHandler.php',
        'Whoops\\Handler\\PrettyPageHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PrettyPageHandler.php',
        'Whoops\\Handler\\XmlResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/XmlResponseHandler.php',
        'Whoops\\Run' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Run.php',
        'Whoops\\RunInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/RunInterface.php',
        'Whoops\\Util\\HtmlDumperOutput' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/HtmlDumperOutput.php',
        'Whoops\\Util\\Misc' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/Misc.php',
        'Whoops\\Util\\SystemFacade' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/SystemFacade.php',
        'Whoops\\Util\\TemplateHelper' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/TemplateHelper.php',
        'claviska\\SimpleImage' => __DIR__ . '/..' . '/claviska/simpleimage/src/claviska/SimpleImage.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite3bcbbc118c1197de6dc2746b169e2be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3bcbbc118c1197de6dc2746b169e2be::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInite3bcbbc118c1197de6dc2746b169e2be::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite3bcbbc118c1197de6dc2746b169e2be::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite3bcbbc118c1197de6dc2746b169e2be::$classMap;

        }, null, ClassLoader::class);
    }
}
