<div>
    <h2 class="Featuredtitle">{l s='Featured artist from marketplace' mod='lot_design'}</h2>
        <div class="imgFeatured">
                
            <ul class="artist_list">
            {foreach from=$featured_artists item=f}
                {if !empty($f) && (strpos($link->getManufacturerImageLink($f.info['id_brand'], 'small_default'),'ro-default') < 1) }
                
                    <li>  
                     {if isset($f.products)}
                        
                      <div class="imgFeatured-m1">
                        <img src="{$link->getImageLink('default', {$f.products[0]['id_image']},'')}" style="width: auto; height: 432px;";>
                      </div> 
                          
                     <div class="imgFeatured-m2">
                            <img src="{$link->getImageLink('default', {$f.products[1]['id_image']},'')}" style="width: auto;height: 200px;">
                            <img src="{$link->getImageLink('default', {$f.products[2]['id_image']},'')}" style="width: auto;height: 200px;">
                      </div>               
                           
                            
                     {else if isset($f.custom)}
                     
                      <div class="imgFeatured-m1">
                        <img src="{$urls.base_url}modules/lot_featuredartists/{$f.custom['cover']}" style="width: auto; height: 432px;";>
                      </div> 
                          
                     <div class="imgFeatured-m2">
                            <img src="{$urls.base_url}modules/lot_featuredartists/{$f.custom['second_photo']}" style="width: auto;height: 200px;">
                            <img src="{$urls.base_url}modules/lot_featuredartists/{$f.custom['third_photo']}" style="width: auto;height: 200px;">
                      </div>    
                     
                     {/if}
                         

                      <div class="container-title-content">     

                        <div class="imgFeatured-m3">
                        <img src="{$link->getManufacturerImageLink($f.info['id_brand'], 'small_default')}" style="width:auto; height: 80px">
                        </div>

                        <div class="titleFeatured">    
                            <h3>{$f.info['name']}</h3>
                        </div>     

                        <div class="comentFeatured" > 
                            <p  style="width: 346px; min-height: 89px; font-size: 16px">{if $f.info['description']}
                            {$f.info['description']|strip_tags|truncate:350:'...'}
                            {/if}<p>
                        </div> 

                        <div id ="comentFeatured-buton">
                         <button type="button"></button>
                         <a href="{$link->getManufacturerLink($f.info['id_brand'])}">
                             <p>SHOP THIS ARTIST</p></a>
                        </div>  

                     </div>      
                 </li>  
        
                {/if}
            {/foreach}
                 
                                                         
            <!-- li bellow is only for demo purpose -->
              <!--
                 <li>    
                  <div class="imgFeatured-m1">
                    <img src="https://via.placeholder.com/398x432" style="width: 398px;height: 432px;";>
                  </div>          

                  <div class="imgFeatured-m2">
                        <img src="https://via.placeholder.com/200x200" style="width: 200px;height: 200px;">
                        <img src="https://via.placeholder.com/200x200" style="width: 200px;height: 200px;">
                  </div> 


                  <div class="container-title-content">     

                    <div class="imgFeatured-m3">
                    <img src="https://via.placeholder.com/80x80" style="width: 80px;height: 80px">
                    </div>

                    <div class="titleFeatured">    
                        <h3 >FLOAREA JEANES</h3>
                    </div>     

                    <div class="comentFeatured" > 
                        <p  style="width: 346px;height: 89px; font-size: 16px">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Praesent suscipit, tortor in ornare suscipit,
                        erat nisl cursus arcu, id porta turpis enim ac felis. Nulla ut lobortis justo.
                        Fusce malesuada suscipit ligula eu pulvinar<p>
                    </div> 

                    <div id ="comentFeatured-buton">
                     <button type="button"></button>
                     <p>SHOP THIS ARTIST</p>
                    </div>  

                 </div>      
             </li>                                                            -->            
                                                                                                                                                                                                    
                                                                                       
                                                          
           </ul>
                     
 

        </div>
</div>
