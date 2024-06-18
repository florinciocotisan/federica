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
{extends file='page.tpl'}

    {block name='page_content_container'}
      <section id="content" class="page-home">
          
         
          
        {block name='page_content_top'}
          <p class="intro"><b>Fa cunostinta cu <font color="#da2032">Federica</font>!</b>
             <br /><br />Ea poate fi assistentul tau virtual care iti face ordine in business, ajutandu-te sa iti automatizezi administrarea catalogului tau de produse.
            <br /><br />Tot ce ai de facut se rezuma la 4 pasi:<br />
              <ul>
                  <li> 1. iti creezi un cont </li>
                  <li> 2. adaugi url-urile feed-urilor de produse</li>
                  <li> 3. setezi cateva reguli</li>
                  <li> 4. exporti in final un singur feed de produse organizat asa cum vrei tu</li>
              </ul>
          </p>
        {/block}
          <br /><br /><br /><br />
        {block name='page_content'}
          {block name='hook_home'}
          <div class="row" style="text-align: center;">
            <div class="home_buttons col-md-12">
                <div class="login col-md-6 col-xs-12">
                    <button class="btn button exclusive btn-primary"><a href="{$urls.base_url}administration">Autentificare</a></button>
                </div>    
                <div class="subscribe col-md-6 col-xs-12">
                    <button class="btn button exclusive btn-primary"><a href="{$urls.base_url}inregistrare">Inscriere</a></button>
                </div> 
            </div>
          </div>  
          {/block}
        {/block}
      </section>
    {/block}
