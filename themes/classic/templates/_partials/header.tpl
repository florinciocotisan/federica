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

{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row" style="text-align: center;">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          {if $shop.logo_details}
            {if $page.page_name == 'index'}
              <h1>
                {renderLogo}
              </h1>
            {else}
              {renderLogo}
            {/if}
          {/if}
        </div>
        
      </div>
        
        
        {if $page.page_name == 'index'}
        <div class="row" style="text-align: center;">
            <div id="history_progress" class="w3-light-grey">
               <div class="content">

                <div id="first_milestone" class="milestone active">
                    <div class="point">&nbsp;</div>
                    <span class="up"></span>
                    <span class="down">creezi cont</span>
                </div>

                <div id="second_milestone" class="milestone">
                    <div class="point">&nbsp;</div>
                    <span class="up"></span>
                    <span class="down">adaugi feed-uri</span>
                </div>

                <div id="third_milestone" class="milestone">
                    <div class="point">&nbsp;</div>
                    <span class="up"></span>
                    <span class="down">setezi reguli</span>
                </div>


                <div id="fourth_milestone" class="milestone">
                    <div class="point">&nbsp;</div>
                    <span class="up"></span>
                    <span class="down">exporti feed final</span>
                </div>

                <div id="myBar" class="w3-green"></div>
               </div>
            </div>
        </div>
           {/if}
      
    </div>
      
      
      
  </div>
  
{/block}
