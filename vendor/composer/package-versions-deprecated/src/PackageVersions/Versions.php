<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '2.0.3@c9622c6820d3ede1e2315a6a377ea1076e421d88',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.2@8dd39d2ead4409ce652fd4f02621060f009ea5e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.4.2@4202ce675d29e70a8b9ee763bec021b6f44caccb',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.4@207210c57f6c15835e8d6228075cd235bd061efc',
  'doctrine/orm' => '2.9.3@82e77cf5089a1303733f75f0f0ed01be3ab9ec22',
  'doctrine/persistence' => '2.2.1@d138f3ab5f761055cab1054070377cfd3222e368',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '3.1.1@c81f18a3efb941d8c4d2e025f6183b5c6d697307',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '4.4.0@2b0bb59ade31a045fd3ff0097dc558bb896f6596',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.1.1@846c25f58a1f02b93a00f2404e3626b6bf9b7807',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v6.1.5@62c5909f49cf74dccdf50a294511cc24be2f969c',
  'symfony/asset' => '5.4.x-dev@57722c82477ea3893bf2ae4a2bd75a953034a23c',
  'symfony/cache' => '5.4.x-dev@59adcc5b90a5a5c4ffe97b1fb1ebb94beb3823f6',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => '5.4.x-dev@8e77d9d79e3aebe0e25cb4b9a611bdeee57391d9',
  'symfony/console' => '5.4.x-dev@4411daa706a497da39b56619c0b2dbbe42b1fba3',
  'symfony/dependency-injection' => '5.4.x-dev@73ec5575d0ce58d9c540a5a13c2068b1f5655abb',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => '5.4.x-dev@7fb05ad7936d3750876c7594f3439a5d4cad7749',
  'symfony/dotenv' => '5.4.x-dev@4ababad35dbb739b521614d3094d7e5e0d1d06e4',
  'symfony/error-handler' => '5.4.x-dev@2fa725b61bbec156dc69937a3e562a8ccadba87a',
  'symfony/event-dispatcher' => '5.4.x-dev@aecf90ffee8f1d2a2c169ec51cd1177027fc3ace',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/expression-language' => '5.4.x-dev@324a7c08fc19fbda9c96c13962dfb2e17f54a531',
  'symfony/filesystem' => '5.4.x-dev@348116319d7fb7d1faa781d26a48922428013eb2',
  'symfony/finder' => '5.4.x-dev@0ae3f047bed4edff6fd35b26a9a6bfdc92c953c6',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/form' => '5.4.x-dev@a962ac5105f73951fc32d71fdfb37d10fd9f4e1e',
  'symfony/framework-bundle' => '5.4.x-dev@9b5257ff3b9ccde110ff2a940c2e828d2ccef637',
  'symfony/http-client' => '5.4.x-dev@4a90e708da6d096528bb3d6d8a92a3e589248937',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => '5.4.x-dev@3891953775fd812bf25f43c1e4736c75099e5f13',
  'symfony/http-kernel' => '5.4.x-dev@3c13038a842caa0c95630887e9c97293500e1e11',
  'symfony/intl' => '5.4.x-dev@bb7376e843910a2ee650431013463cc6a83f456c',
  'symfony/mailer' => '5.4.x-dev@a4fe979d88f7dcc7cd9f713a37937fdfe05328c3',
  'symfony/mime' => '5.4.x-dev@ee9dc6a9ad361e044b02e6b7f91da2d2a6504959',
  'symfony/monolog-bridge' => '5.4.x-dev@d5ae1e33e85ca9e94800de3143cdbd7d169e96f0',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/notifier' => '5.4.x-dev@3296a92ccd0c0e54d3b481d3b1c16da320895ff9',
  'symfony/options-resolver' => '5.4.x-dev@162e886ca035869866d233a2bfef70cc28f9bbe5',
  'symfony/password-hasher' => '5.4.x-dev@6c384e6abd88e73fdd7353be31710412e04efa1f',
  'symfony/polyfill-intl-grapheme' => 'v1.23.0@24b72c6baa32c746a4d0840147c9715e42bb68ab',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => '5.4.x-dev@714b47f9196de61a196d86c4bad5f09201b307df',
  'symfony/property-access' => '5.4.x-dev@fd89ef387030f4d4126fd9cddcc18dbfed27a346',
  'symfony/property-info' => '5.4.x-dev@a45839949b03e1437837000ce8319a9214974501',
  'symfony/proxy-manager-bridge' => '5.4.x-dev@a87444e1c0ae52d732011733c2d0baf183d34e9e',
  'symfony/routing' => '5.4.x-dev@d9b66a07fbbf0c7728f9654a26f3c89cfa15bcd6',
  'symfony/runtime' => '5.4.x-dev@0f9522140d3830e4ac95186b54dd494e43592caf',
  'symfony/security-bundle' => '5.4.x-dev@a489dded600a051f18e090f4e4496110c6cc1c52',
  'symfony/security-core' => '5.4.x-dev@f9d784df2590c48b40fab3b728d49a2e17389f55',
  'symfony/security-csrf' => '5.4.x-dev@f0595bce236ae778e02d61ee4cec8ed5eb2876f2',
  'symfony/security-guard' => '5.4.x-dev@240c71e09ce3f6acc2251495855353737aacff02',
  'symfony/security-http' => '5.4.x-dev@87cbfc841605945910fbad4ea4b85a88f3daacba',
  'symfony/serializer' => '5.4.x-dev@17cfed4fa37a06a8072154b66fd2be35cf73c7f4',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => '5.4.x-dev@313d02f59d6543311865007e5ff4ace05b35ee65',
  'symfony/string' => '5.4.x-dev@92855c727d7edabe004605f451ef0b274fa24490',
  'symfony/translation' => '5.4.x-dev@90080fc95a046c5375020941bc3aa013fddf1d4f',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => '5.4.x-dev@66e3f2d34d918a514de6bcf64f6a0d85cf4f61a4',
  'symfony/twig-bundle' => '5.4.x-dev@2aebe44a60887244fb2b21a17b50045ed3fabd2b',
  'symfony/validator' => '5.4.x-dev@20ee6e745dcb0fa1eb1c6147c05d181a120256cb',
  'symfony/var-dumper' => '5.4.x-dev@eb853ec5e1e4b930e51a4efdb1f57f77714392d7',
  'symfony/var-exporter' => '5.4.x-dev@ff86c9c7b8357c9eec5f0bd13ba75906fd594998',
  'symfony/web-link' => '5.4.x-dev@340401b169976dcc4d35b3ea6d281871f05b86ff',
  'symfony/yaml' => '5.4.x-dev@2e59187ee6e56b97013bf76fdbf2be203e6cbeea',
  'twig/extra-bundle' => 'v3.3.1@e12a8ee63387abb83fb7e4c897663bfb94ac22b6',
  'twig/twig' => 'v3.3.2@21578f00e83d4a82ecfa3d50752b609f13de6790',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'phar-io/manifest' => '2.0.1@85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpunit/php-code-coverage' => '9.2.6@f6293e1b30a2354e8428e004689671b83871edde',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.6@fb9b8333f14e3dce976a60ef6a7e05c7c7ed8bfb',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => '5.4.x-dev@4ec25538fdba87442ad043231f4d208cac6eda77',
  'symfony/css-selector' => '5.4.x-dev@fcd0b29a7a0b1bb5bfbedc6231583d77fea04814',
  'symfony/debug-bundle' => '5.4.x-dev@ea0d4732b3f807f90c62301f1dda54f8b2d34b6f',
  'symfony/dom-crawler' => '5.4.x-dev@194246b6c6481985963b641d1540f757913782c0',
  'symfony/maker-bundle' => 'v1.32.0@702558c5fc5a27796eedad12a82bb27be76247dc',
  'symfony/phpunit-bridge' => 'v5.3.0@15cab721487b7bf43ad545a1e7d0095782e26f8c',
  'symfony/web-profiler-bundle' => '5.4.x-dev@474863cadb69ce9d547a619af6e94f582c3f519b',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'symfony/polyfill-ctype' => '*@14ddcef736fe5190fcaaa68fb7068c880310d30a',
  'symfony/polyfill-iconv' => '*@14ddcef736fe5190fcaaa68fb7068c880310d30a',
  'symfony/polyfill-php72' => '*@14ddcef736fe5190fcaaa68fb7068c880310d30a',
  '__root__' => 'dev-master@14ddcef736fe5190fcaaa68fb7068c880310d30a',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
