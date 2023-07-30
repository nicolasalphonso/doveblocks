{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

<div id="homepage_service" class="container" style="text-align: center; {if $block.settings.default.bg_color} 
    background-color: {$block.settings.default.bg_color}{/if}">
    <div class="row">
    <!-- service 1 -->
        <div class="col">
          <div class="card service-card" style="height: 250px">
            <img src="{$block.settings.icon1.url}" style="margin-top: 15px"
              alt="{$block.settings.title1}" title="" class="icon mx-auto" loading="lazy"
              width="50" height="50" />
            <div class="card-body">
              <h5 class="card-title">{$block.settings.title1}</h5>
              <p class="card-text">
              {$block.settings.desc1}
              </p>
            </div>
          </div>
        </div>
    <!-- service 2 -->
            <div class="col">
          <div class="card service-card" style="height: 250px">
            <img src="{$block.settings.icon2.url}" style="margin-top: 15px"
              alt="{$block.settings.title2}" title="" class="icon mx-auto" loading="lazy"
              width="50" height="50" />
            <div class="card-body">
              <h5 class="card-title">{$block.settings.title2}</h5>
              <p class="card-text">
              {$block.settings.desc2}
              </p>
            </div>
          </div>
        </div>
        <!-- service 3 -->
            <div class="col">
          <div class="card service-card" style="height: 250px">
            <img src="{$block.settings.icon3.url}" style="margin-top: 15px"
              alt="{$block.settings.title3}" title="" class="icon mx-auto" loading="lazy"
              width="50" height="50" />
            <div class="card-body">
              <h5 class="card-title">{$block.settings.title3}</h5>
              <p class="card-text">
              {$block.settings.desc3}
              </p>
            </div>
          </div>
        </div>
        <!-- service 4 -->
        <div class="col">
          <div class="card service-card" style="height: 250px">
            <img src="{$block.settings.icon4.url}" style="margin-top: 15px"
              alt="{$block.settings.title4}" title="" class="icon mx-auto" loading="lazy"
              width="50" height="50" />
            <div class="card-body">
              <h5 class="card-title">{$block.settings.title4}</h5>
              <p class="card-text">
              {$block.settings.desc4}
              </p>
            </div>
          </div>
        </div>
    </div>
</div>