$(document).ready(function(){$(".navbar-toggler").on("click",function(){if($(".fa-bars").css('color')=='rgb(104, 192, 0)'){$(".fa-bars").css({'color':'#000'});$("#topmenu-namebutton").css({'color':'#000'});$(".topmenu-serch").css({'display':'flex'});}else{$(".fa-bars").css({'color':'#68c000'});$("#topmenu-namebutton").css({'color':'#68c000'});$(".topmenu-serch").css({'display':'none'});};});$(".topmenu-serch__button").on("click",function(){if($(".topmenu-serch__input").css('display')=='none'){$(".topmenu-serch__input").css({'display':'inline-block'});$(".navbar-toggler").css({'display':'none'});$(".topmenu-serch").css({'margin-top':'0'});}else{$(".topmenu-serch__input").css({'display':'none'});$(".navbar-toggler").css({'display':'flex'});$(".topmenu-serch").css({'margin-top':'-68px'});};});$(".news-img").hover(function(){$(this.childNodes[5]).css({'color':'#68c000'});$(this.childNodes[1].childNodes[3]).css({'display':'block'});},function(){$(".news-title").css({'color':'#282f33'});$(this.childNodes[1].childNodes[3]).css({'display':'none'});});$('.slct').click(function(){var dropBlock=$(this).parent().find('.drop');if(dropBlock.is(':hidden')){dropBlock.css({'width':$('.select-whence').outerWidth()});dropBlock.slideDown();$(this).addClass('active');$('.drop').find('li').click(function(){var selectResult=$(this).html();var textResult=selectResult.substring(11,selectResult.length-4);$(this).parent().parent().find('input').val(textResult);$(this).parent().parent().find('.slct').removeClass('active').html(selectResult);dropBlock.slideUp();return false;});}else{$(this).removeClass('active');dropBlock.slideUp();}return false;});});