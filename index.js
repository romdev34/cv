$(function () {
 $('#p1, #p2 , #p3, #p4, #p5, #p6, #p7, #p8').fadeOut(0);


 // bouton top ----------------------
 $('#bouton_top img').click(function () {
  $('html, body').animate({
   scrollTop: 0
  }, 500);
 });
 $('#bouton_top_responsive').click(function () {
  $('html, body').animate({
   scrollTop: 0
  }, 500);
 });
 //   bouton compétences--------------
 $('#XMLID_53_ ').mouseenter(function () {
  $(this).css('cursor', 'pointer');
  $(this).attr('fill', '#fcbc2c');
 });
 $('#XMLID_49_ ').mouseenter(function () {
  $(this).css('cursor', 'pointer');
  $('#XMLID_53_ ').attr('fill', '#fcbc2c');
 });
 $('#XMLID_53_ ').mouseout(function () {
  $(this).attr('fill', '#F39B42');
 });
 $('#XMLID_53_, #XMLID_49_ ').click(function () {
          $('.hr1').first().show();
  $('#p1, #p2, #p3, #p4, #p5, #p6, #p7, #p8').fadeOut(0);
  $('.competences_box_gauche').fadeIn(1000);
  $('.formations_box_droite').fadeIn(1000);

  $('html,body').delay(100).animate({
   scrollTop: $(".competences_box_gauche").offset().top
  }, 'slow');
 });
 //bout,o parcours----------------
 $('#XMLID_37_ ').mouseenter(function () {
  $(this).css('cursor', 'pointer');
  $(this).attr('fill', '#fcbc2c');
 });
 $('#XMLID_54_ ').mouseenter(function () {
  $(this).css('cursor', 'pointer');
  $('#XMLID_37_ ').attr('fill', '#fcbc2c');
 });
 $('#XMLID_37_ ').mouseout(function () {
  $(this).attr('fill', '#F39B42');
 });
 $('#XMLID_37_, #XMLID_54_ ').click(function () {
  $('#p1, #p2, #p3, #p4, #p5, #p6, #p7, #p8').fadeOut(0);
  $('.parcours_box_gauche').fadeIn(1000);
    $('.contact_box_droite').fadeIn(1000);
  $('html,body').delay(100).animate({
   scrollTop: $(".parcours_box_gauche").offset().top
  }, 'slow');
 });
 // bouton formation----------------------
 $('#XMLID_47_ ').mouseenter(function () {
  $(this).css('cursor', 'pointer');
  $(this).attr('fill', '#fcbc2c');
 });
 $('#XMLID_55_ ').mouseenter(function () {
  $(this).css('cursor', 'pointer');
  $('#XMLID_47_ ').attr('fill', '#fcbc2c');

 });
 $('#XMLID_47_ ').mouseout(function () {
  $(this).attr('fill', '#F39B42');
//
 });
 $('#XMLID_55_ ,#XMLID_47_ ').click(function () {
          $('.hr1').first().show();
  $('#p1, #p2, #p3, #p4, #p5, #p6, #p7, #p8').fadeOut(0);
  $('.formations_box_droite').fadeIn(1000);
  $('.competences_box_gauche').fadeIn(1000);
  $('html,body').delay(100).animate({
   scrollTop: $(".formations_box_droite").offset().top
  }, 'slow');
 });
 //bouton me contacter--------------
 $('#XMLID_48_ ').mouseenter(function () {
  $(this).css('cursor', 'pointer');
  $(this).attr('fill', '#fcbc2c');
 });
 $('#XMLID_51_ ').mouseenter(function () {
  $(this).css('cursor', 'pointer');
  $('#XMLID_48_ ').attr('fill', '#fcbc2c');
 });
 $('#XMLID_48_ ').mouseout(function () {
  $(this).attr('fill', '#F39B42');
 });
 $('#XMLID_48_ , #XMLID_51_ ').click(function () {

  $('#p1, #p2, #p3, #p4, #p5, #p6, #p7, #p8').fadeOut(0);
  $('.parcours_box_gauche').fadeIn(1000);
  $('.contact_box_droite').fadeIn(1000);
  $('html,body').delay(100).animate({
   scrollTop: $(".contact_box_droite").offset().top
  }, 'slow');
 });
 //bouton mes projets------------------
 $('#projet').mouseenter(function () {
  $(this).css('cursor', 'pointer');
  $(this).attr('fill', '#00A1A3');
 });
 $('#projet_text ').mouseenter(function () {
  $(this).css('cursor', 'pointer');
  $('#projet').attr('fill', '#00A1A3');
 });
 $('#projet').mouseout(function () {
  $('#projet').attr('fill', '#007E7F');
 });
 $('#projet , #projet_text').click(function () {
     $('.hr1').first().hide();
  $('.competences_box_gauche, .formations_box_droite, .parcours_box_gauche, .contact_box_droite').fadeOut(1000);
  $('#p1, #p2, #p3, #p4, #p5, #p6, #p7, #p8').fadeIn(1000);
  $('html,body').delay(1000).animate({
   scrollTop: $("#p1").offset().top
  }, 'slow');
 });


 // animation des cercle
 function collectPourcentage() {
  var pourcentage = [];
  $('.competences_box_gauche ellipse:odd').each(function (i) {
   pourcentage[i] = ($(this).data('percentage'));
  });
  return pourcentage;
 }
 for (i = 0; i < collectPourcentage().length; i++) {
  $('.competences_box_gauche .nombre_pourcentage').eq(i).text(collectPourcentage()[i] + '%');
 }
 //gestion de l'animation au scroll
 $('#bouton_top_responsive').css('display', 'none');
 $(window).scroll(function () {
  posScroll = $(document).scrollTop();
  if (posScroll >= 300) {
     $('#bouton_top_responsive').css('display', 'block');
   $('#bouton_top ').css('opacity', 0.6);
   var pourcentage = [];
   $('.competences_box_gauche ellipse').each(function (i) {
    pourcentage[i] = (1 - (($(this).data('percentage')) / 100)) * 335;
    $(this).animate({
     "stroke-dashoffset": pourcentage[i]
    }, 2000);
   });
  }
  else {
      $('#bouton_top_responsive').css('display', 'none');
   $('#bouton_top').css('opacity', 0);
  }
 });
 //gestion du tool tip des cercles
 $('.cercle_div ').mouseover(function () {
  var tool = $(this).children('.tool_tip');
  var text = $(tool).text();
  $('#info_competence p').text(text);
 });
 $('.cercle_div').mouseout(function () {
  $('#info_competence p').text('Passer la souris sur l\'un des cercles à gauche pour avoir plus de détails');
 });
 //gestion du tool tip des compétences
 $('#noms_formations div').mouseover(function () {
  $('#info_formations p').text($(this).children('.tool_tip_formation').text());
 });
 $('#noms_formations div').mouseout(function () {
  $('#info_formations p').text('Passer la souris sur une formation pour avoir plus de détails');
 });

 //gestion de skype et mail
  $('#mail img').click(function(){
   window.location="mailto:romain.itofo@gmail.com";
  });  $('#phone img').click(function(){
   window.location="tel:+33652911500";
  });
});
