<?php

// Insert the mate theme category
array_insert($GLOBALS['TL_CTE'], 1, array('mateTheme' => array()));
array_insert($GLOBALS['FE_MOD'], 1, array('mateTheme' => array()));

/**
 * Add frontend element
 */
$GLOBALS['FE_MOD']['mateTheme']['mateNavbar'] = 'ContaoThemesNet\\MateThemeBundle\\Resources\\contao\\modules\\mate\\NavBarModule';
$GLOBALS['FE_MOD']['mateTheme']['mateTeaserBox'] = 'ContaoThemesNet\\MateThemeBundle\\Resources\\contao\\elements\\mate\\TeaserBox';
$GLOBALS['FE_MOD']['mateTheme']['mateContentBox'] = 'ContaoThemesNet\\MateThemeBundle\\Resources\\contao\\elements\\mate\\ContentBox';

/**
 * Add content element
 */
$GLOBALS['TL_CTE']['mateTheme']['mateNavbar'] = 'ContaoThemesNet\\MateThemeBundle\\Resources\\contao\\elements\\mate\\NavBarElement';
$GLOBALS['TL_CTE']['mateTheme']['mateTeaserBox'] = 'ContaoThemesNet\\MateThemeBundle\\Resources\\contao\\elements\\mate\\TeaserBox';
$GLOBALS['TL_CTE']['mateTheme']['mateContentBox'] = 'ContaoThemesNet\\MateThemeBundle\\Resources\\contao\\elements\\mate\\ContentBox';

/**
 * Available tags for MATE theme
 */
$GLOBALS['tl_config']['theme_tags'] = array(
	'-',
    'MATE01/01',
    'MATE01/02',
    'MATE01/03',
    'MATE01/04',
    'MATE01/05',
    'MATE02/01',
    'MATE05/01',
    'MATE05/02',
    'MATE05/03',
    'MATE05/04',
    'MATE05/05'
);


if (BE_USER_LOGGED_IN)
{
    // $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/theme_installer/assets/js/themeInspector.js';
}