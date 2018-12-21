<?php

namespace MailPoet\DI;

use MailPoetVendor\Symfony\Component\DependencyInjection\ContainerBuilder;
use MailPoetVendor\Symfony\Component\DependencyInjection\Reference;
use MailPoetVendor\Psr\Container\ContainerInterface;

class ContainerConfigurator implements IContainerConfigurator {

  function getDumpNamespace() {
    return 'MailPoetGenerated';
  }

  function getDumpClassname() {
    return 'FreeCachedContainer';
  }

  function configure(ContainerBuilder $container) {
    // Premium plugin services factory
    $container->register(IContainerConfigurator::PREMIUM_CONTAINER_SERVICE_SLUG)
      ->setSynthetic(true)
      ->setPublic(true);
    // Container wrapper service
    $container->register(ContainerWrapper::class)
      ->setPublic(true)
      ->setFactory([
      ContainerWrapper::class,
      'getInstance'
      ]);
    // API
    $container->autowire(\MailPoet\API\JSON\API::class)
      ->addArgument(new Reference(ContainerWrapper::class))
      ->setAutowired(true)
      ->setPublic(true);
    $container->autowire(\MailPoet\API\MP\v1\API::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\AutomatedLatestContent::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\CustomFields::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\Forms::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\ImportExport::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\Mailer::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\MP2Migrator::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\Newsletters::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\NewsletterTemplates::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\Segments::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\SendingQueue::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\Services::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\Settings::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\Setup::class)->setPublic(true);
    $container->autowire(\MailPoet\API\JSON\v1\Subscribers::class)->setPublic(true);
    // Config
    $container->autowire(\MailPoet\Config\AccessControl::class)->setPublic(true);
    // Cron
    $container->autowire(\MailPoet\Cron\Daemon::class)->setPublic(true);
    $container->autowire(\MailPoet\Cron\DaemonHttpRunner::class)->setPublic(true);
    // Router
    $container->autowire(\MailPoet\Router\Endpoints\CronDaemon::class)->setPublic(true);
    $container->autowire(\MailPoet\Router\Endpoints\Subscription::class)->setPublic(true);
    $container->autowire(\MailPoet\Router\Endpoints\Track::class)->setPublic(true);
    $container->autowire(\MailPoet\Router\Endpoints\ViewInBrowser::class)->setPublic(true);
    // Subscribers
    $container->autowire(\MailPoet\Subscribers\NewSubscriberNotificationMailer::class)->setPublic(true);
    $container->autowire(\MailPoet\Subscribers\ConfirmationEmailMailer::class)->setPublic(true);
    $container->autowire(\MailPoet\Subscribers\RequiredCustomFieldValidator::class)->setPublic(true);
    // Newsletter
    $container->autowire(\MailPoet\Newsletter\AutomatedLatestContent::class)->setPublic(true);
    return $container;
  }

  private function registerPremiumService(ContainerBuilder $container, $id) {
    $container->register($id)
      ->setPublic(true)
      ->addArgument($id)
      ->addArgument(new Reference('service_container'))
      ->setFactory([
        self::class,
        'getPremiumService',
      ]);
  }

  static function getPremiumService($id, ContainerInterface $container = null) {
    if(!$container->has(IContainerConfigurator::PREMIUM_CONTAINER_SERVICE_SLUG)) {
      return null;
    }
    return $container->get(IContainerConfigurator::PREMIUM_CONTAINER_SERVICE_SLUG)->get($id);
  }
}
