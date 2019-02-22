// selectionne le boutton 'je m'inscris'

// $('#btn').on('click', function(){
//   // utiliser un toggle
//
// })


$("#inscris").click(function(){
  $("#inscription").hide();
    $("#connexion").css('display','block');
});


$("#nvmembre").click(function(){
  $("#connexion").hide();
    $("#inscription").css('display','block');
})
