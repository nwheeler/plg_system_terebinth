<?php
/**
 * Terebinth System Plugin
 *
 * Copyright (c) 2013 Nicholas Wheeler
 *
 * @license GNU / GPL 
 *   
**/


defined('JPATH_BASE') or die;

class plgSystemTerebinth extends JPlugin
{
    function onAfterInitialise()
    {
        $user = JFactory::getUser();

         // Set user state in headers
        if (!$user->guest) {
            JResponse::setHeader('X-Logged-In', 'True', true);
        } else {
            JResponse::setHeader('X-Logged-In', 'False', true);
        }
    }
}
