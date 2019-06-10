

$(function(){
  $('.ui.checkbox')
  .checkbox()
;

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
            chec:{
              edentifier:'chec',
              rules:[
                {
                  type:'checked',
                  prompt:'Aceite os termos de uso'
                }
              ]
            },
            nome:{
              edentifier : 'nome',
              rules:[
                {
                  type :'empty',
                  prompt :'Por favor ensira seu nome'
                }
              ]
            },
            password: {
              identifier  : 'senha',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Verifique se sua senha está correta'
                }
                ]
            }
          }
        })
      ;
})
;