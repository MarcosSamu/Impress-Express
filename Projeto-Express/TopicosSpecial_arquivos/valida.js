

$(function(){
  $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Por favor verifique seu email esta correto'
                },
                {
                  type   : 'email',
                  prompt : 'Por favor verifique se seu email é cadastrado'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Verifique se sua senha está correta'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Verifique se tem menos que 6 dígitos'
                }
              ]
            }
          }
        })
      ;
})
;