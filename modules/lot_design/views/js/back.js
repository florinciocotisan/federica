function redirectofurnizori() {
    
    window.location.href = 'https://federica.ecomdoo.eu'+$('#subtab-AdminSuppliers').attr('href');

}

function addSupplierIdToFormAction() {
    
    var urlParams = new URLSearchParams(window.location.search);
    
    if (urlParams.has('id_supplier')) {
       
        var supplierId = urlParams.get('id_supplier');
        var form = $('form#import_form');
        
        if (form) {
            var currentAction = form.attr('action');
            var newAction = currentAction + (currentAction.includes('?') ? '&' : '?') + 'id_supplier=' + supplierId;
            form.attr('action', newAction);
            
            form.prepend('<input type="hidden" name="id_supplier" id="id_supplier" value="'+supplierId+'">');
        }
    }
}

$(document).ready(function(){
    
    if ($('body.adminmanufacturers').length) {
       
        setTimeout( function(){ redirectofurnizori(); }, 500);
    }
    
    if ($('body.adminsuppliers #supplier_grid_table').length) {
        
        $('#supplier_grid_table tbody tr').each(function(){
            
            $(this).find('td.action-type .btn-group').append('<a href="https://federica.ecomdoo.eu/administration/index.php?controller=AdminImport&token='+adminimportoken+'&csv=1&id_supplier='+$(this).find('td.bulk_action-type input').val()+'" class="btn js-link-row-action dropdown-item match_fields" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Match fields</a>');
            
        });
       
        
        $('.match_fields').click(function(e){
            e.preventDefault;
            window.location.href = $(this).attr('href');
        });
       
    }
    
    if ($('body.adminimport button#import').length) {
        addSupplierIdToFormAction();
    }
     
    
    
    if ($('#header_logo').length) {
        $('#header_logo').attr('href','#');
        $('#header_logo').css('background','none');
        $('#header_logo').text('Federica');
        $('#header_logo').addClass('ready');
    }
    
    
    {
        
        
    }
    
});