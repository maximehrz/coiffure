$(function(){

  // Chargement des noms

  $.ajax({
    url: 'php/nomutilisateur.php',
    type: 'POST'
  })
  .complete(function(data){
    mesdatas = eval('(' + data.responseText + ')');
    //console.log(data);
    //console.log(mesdatas[0]);
    $('#pers1').text(mesdatas[0]);
    $('#pers2').text(mesdatas[1]);
    $('#pers3').text(mesdatas[2]);
  })

  // Chargement des couleurs

  $.ajax({
    url: 'php/couleurutilisateur.php',
    type: 'POST'
  })
  .complete(function(data){
    mesdatas = eval('(' + data.responseText + ')');
    //console.log(data);
    //console.log(mesdatas[0]);
    $('#persdiv1').css('background-color',mesdatas[0]);
    $('#persdiv2').css('background-color',mesdatas[1]);
    $('#persdiv3').css('background-color',mesdatas[2]);
  })

  // Choix utilisateur

  $('#persdiv1').click(function(){
    document.location.href="coiffure.php?pers=0";
  })
  $('#persdiv2').click(function(){
    document.location.href="coiffure.php?pers=0";
  })
  $('#persdiv3').click(function(){
    document.location.href="coiffure.php?pers=0";
  })



})
