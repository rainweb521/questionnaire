// JavaScript Document
$(function(){
	//.bankList li 银行选择	
	$(".bankList li").click(function(){
		$(this).addClass("banSty").siblings("li").removeClass("banSty");
		})	
	//添加银行卡	
	$(".tianjiayinhang").click(function(){
		$(".addYinhang").fadeIn();
		})	
	$(".glyphicon-remove").click(function(){
		$(".addYinhang").fadeOut();
		})	
	$(".proinfoList:first").fadeIn();
	$(".zhaieq a").click(function(){
		$(this).addClass("zhaiCur").siblings("a").removeClass("zhaiCur");
		var zhaiindex=$(this).index();
		$(".proinfoList").eq(zhaiindex).fadeIn().siblings(".proinfoList").hide();
		})
		$(".guige li").click(function(){
		 $(this).addClass("guigeCur").siblings("li").removeClass("guigeCur")
		})
	})