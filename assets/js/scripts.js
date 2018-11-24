let type = ['','info','success','warning','danger'];
const notificacao = {
    showNotification: function(from, align, tipo, mensagem, icon){
        

        $.notify({
            icon: icon,
            message: mensagem

        },{
            type: type[tipo],
            timer: 4000,
            placement: {
                from: from,
                align: align
            }
        });
    }
}