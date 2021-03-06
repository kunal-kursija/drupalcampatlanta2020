<?php

namespace DrupalCampAtlanta2020\Composer;

use Composer\Installer\InstallerEvent;

/**
 * Class InstallerEvents.
 */
class InstallerEvents {

  /**
   * Script callbback.
   *
   * @param \Composer\Installer\InstallerEvent $event
   *   Instance provided by composer event dispatcher.
   */
  public static function preDependenciesSolving(InstallerEvent $event) {
    $event->getIO()->write('--------- Event ' . $event->getName() . ' has been fired ---------');
  }

}
