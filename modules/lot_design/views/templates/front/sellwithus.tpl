{extends file='page.tpl'}
{block name='content'}
{assign var="link" value=Context::getContext()->link}

<section id="main">
    <div class="container">
        
            
            
            
        <div id="sellwithus" style="width: 100% !important;">

            <h1>{l s='SELL WITH US' mod='lot_design'}</h1>
             <!--Modificat text 17.08.21-->
             <p>
            Fie ca esti la inceput si vrei o solutie simpla, lipsita de costuri fie ca ai deja o afacere cu textile
             imprimate si cauti un furnizor de productie, 
            Printoteca iti ofera solutii complete pentru nevoile tale.     </p>
            <p>
             Iti poti crea un magazin gratuit pe platforma printoteca.ro inregistrandu-te 
            ca vendor folosind formularul din dreapta.            </p>
             
             <br>
             <p>
             Cauti o solutie B2B cu soluti complete de print on demand si fulfillment? 
             Acceseaza printoteca.business si intra in legatura cu un reprezentant Printoteca.
             
             </p>


            <div class="btn-vindecunoi">
                <button class="vindecunoi"><a href="https://www.printoteca.business/" target="_blank">PRINTOTECA BUSINESS > </a></button>
            </div>
        
        </div>
        
        <!--
        <div id="formular">
  <div class="formular-contact">
      <h1 class="titlu" id ="titlu-formular">INREGISTREAZA-TE CA VENDOR </h1>
        <form action="" method="POST" id="create_vendor">
                        <input type="hidden" name="create_vendor" value="1">
         <div id="nume-prenume">    
            <input type="text" name="lastname" placeholder="Nume" value="{if isset($smarty.post.lastname)}{$smarty.post.lastname}{/if}">
            <input type="text" name="firstname" placeholder="Prenume" value="{if isset($smarty.post.firstname)}{$smarty.post.firstname}{/if}">
            <input type="text" name="email" placeholder="e-mail" value="{if isset($smarty.post.email)}{$smarty.post.email}{/if}">
            <input type="password" name="password" placeholder="Password" value="{if isset($smarty.post.password)}{$smarty.post.password}{/if}">
         </div>   
         <div id="checkbox-sellers">
            <input type="checkbox" id="checkbox-seller-guide" name="seller-guide-check"> 
             <label for="checkbox-seller-guide">Am citit Sellers Guide si sunt pregatit sa imi fac cont </label>
             <div id="seller-guide-error">{l s='Acest camp este obligatoriu' d='Shop.Theme.Global'}</div>
                         
         </div>

         <div id="checkbox-sellers">
               <input type="checkbox" name="newsletter" id="cbnew"> 
                 <label for="cbnew"> Sing up our newsletter </label> 
                 <p> You may unsubscribe at any mament. For that </p>
                        
        </div>

        <div id="submit-button">
            <input type="submit" value="INREGISTREAZA-TE"> 
               
        </div>
      </form>


  </div>



</div>
     -->   
        
    </div>
</section>




{/block}


