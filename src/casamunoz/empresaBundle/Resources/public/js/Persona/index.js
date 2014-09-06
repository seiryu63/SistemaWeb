$(document).ready(function() { 
    $("h1").click(function(){
        $(this).css('color', 'red').fadeOut('slow').fadeIn('slow')    
    });
 
    Enlace=function(){}
    Enlace.cambiar=function(){
       $("#listado_personas td a").click(function(){
 
            var href = $(this).attr('href');
 
            $('#resultado').load(href, function(){
                $(this).dialog({
                    modal: true, 
                    width: 600
                }); 
 
            });
 
            return false;
        });
    }
 
    tableToGrid("#listado_personas", {
        pager : '#pagerPersonas',
        rowNum:10, 
        gridview: true, 
        colModel :[
            {name:'Id',width:10},
            {name:'primerNombre ',width:50},
            {name:'segundoNombre', width:50},
            {name:'primerApellido', width:50},
            {name:'segundoApellido', width:50},
            {name:'direccion', width:100},
            {name:'dui', width:30},
            {name:'sexo', width:10},
            {name:'fechanac', width:100}
        ],
        loadComplete: function (){
            Enlace.cambiar();
            $("TD").css('white-space','normal');
        }
    });
    jQuery("#listado_personas").jqGrid('sortGrid',"Id",false);
    jQuery("#listado_personas").jqGrid('navGrid','#pagerPersonas', {
        edit:false, 
        add:false, 
        del:false,
        search:true,
        reload:true
    });
});

