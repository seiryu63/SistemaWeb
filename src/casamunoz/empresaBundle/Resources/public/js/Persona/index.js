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
                    width: 200
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
            {name:'Id',width:15},
            {name:'Primernombre',width:30},
            {name:'Segundonombre', width:30},
            {name:'Primerapellido', width:30},
            {name:'Segundoapellido', width:30},
            {name:'Direccion', width:100},
            {name:'Dui', width:30},
            {name:'Sexo', width:10},
            {name:'Fechanac', width:0}
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

