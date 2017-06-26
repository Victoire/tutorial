<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            //dependencies
            new A2lix\TranslationFormBundle\A2lixTranslationFormBundle(),
            new Bazinga\Bundle\JsTranslationBundle\BazingaJsTranslationBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Troopers\AsseticInjectorBundle\TroopersAsseticInjectorBundle(),
            new Troopers\AlertifyBundle\TroopersAlertifyBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new Liip\ImagineBundle\LiipImagineBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Knp\DoctrineBehaviors\Bundle\DoctrineBehaviorsBundle(),
            new Snc\RedisBundle\SncRedisBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            //Victoire bundles
            new Victoire\Bundle\AnalyticsBundle\VictoireAnalyticsBundle(),
            new Victoire\Bundle\BlogBundle\VictoireBlogBundle(),
            new Victoire\Bundle\BusinessEntityBundle\VictoireBusinessEntityBundle(),
            new Victoire\Bundle\BusinessPageBundle\VictoireBusinessPageBundle(),
            new Victoire\Bundle\CoreBundle\VictoireCoreBundle(),
            new Victoire\Bundle\CriteriaBundle\VictoireCriteriaBundle(),
            new Victoire\Bundle\FilterBundle\VictoireFilterBundle(),
            new Victoire\Bundle\FormBundle\VictoireFormBundle(),
            new Victoire\Bundle\I18nBundle\VictoireI18nBundle(),
            new Victoire\Bundle\MediaBundle\VictoireMediaBundle(),
            new Victoire\Bundle\PageBundle\VictoirePageBundle(),
            new Victoire\Bundle\QueryBundle\VictoireQueryBundle(),
            new Victoire\Bundle\SeoBundle\VictoireSeoBundle(),
            new Victoire\Bundle\SitemapBundle\VictoireSitemapBundle(),
            new Victoire\Bundle\TemplateBundle\VictoireTemplateBundle(),
            new Victoire\Bundle\TwigBundle\VictoireTwigBundle(),
            new Victoire\Bundle\UIBundle\VictoireUIBundle(),
            new Victoire\Bundle\UserBundle\VictoireUserBundle(),
            new Victoire\Bundle\ViewReferenceBundle\ViewReferenceBundle(),
            new Victoire\Bundle\WidgetBundle\VictoireWidgetBundle(),
            new Victoire\Bundle\WidgetMapBundle\VictoireWidgetMapBundle(),
            //Victoire Widgets
            new Victoire\Widget\TextBundle\VictoireWidgetTextBundle(),
            new Victoire\Widget\ButtonBundle\VictoireWidgetButtonBundle(),
            new Victoire\Widget\ImageBundle\VictoireWidgetImageBundle(),

            new AppBundle\AppBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
