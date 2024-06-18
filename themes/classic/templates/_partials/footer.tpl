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

<div class="footer-container">
  <div class="container">
    
    <div class="row">
      <div class="col-md-12">
        
          <p class="text-sm-center">
              <a href="https://federica.ecomdoo.eu/content/3-termeni-si-conditii-de-utilizare" target="_blank" style="color: #000;" rel="noopener noreferrer nofollow">
                Termeni si conditii
              </a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://federica.ecomdoo.eu/content/2-politica-condidentialitate" target="_blank" style="color: #000;" rel="noopener noreferrer nofollow">
                Politica confidentialitate
              </a>
          </p>
        <p class="text-sm-center">
          {block name='copyright_link'}
            <span>
              {l s='%copyright% %year% - Toate drepturile rezervate %autor%' sprintf=['%autor%' => 'Florin Ciocotisan', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
            </span>
          {/block}
        </p>
      </div>
    </div>
  </div>
</div>

     
<script type="text/javascript" src="{$urls.base_url}themes/classic/assets/js/custom.js"></script>