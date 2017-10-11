<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class TwigEmbedSVGPlugin
 * @package Grav\Plugin
 */
class TwigGetfilecontentsPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        // Enable the main event we are interested in
        $this->enable([
            'onTwigInitialized'     => ['onTwigInitialized', 0]
        ]);
    }

    /**
     * Add simple `getfilecontents()` Twig function
     */
    public function onTwigInitialized()
    {
        $this->grav['twig']->twig()->addFunction(
            new \Twig_SimpleFunction('getfilecontents', [$this, 'returnFileContents'])
        );
    }

    /**
     * Used by the Twig function to return the contents of the file
     *
     * @param string $filePath
     * @return string
     */
    public function returnFileContents($filePath)
    {
        return file_get_contents($filePath);
    }

}
