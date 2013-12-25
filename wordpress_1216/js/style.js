$(function(){
	//スクロール
	
	var url = location.href;
	muchUrl = 'http://win8appli.com/';
	if( url == muchUrl ){
		for(i=0; i<1; i++){
			var pass = $('.newpost').eq(i).find('.post_title');
			pass.append('<img class="label_new" src="../wp-content/themes/wap/img/label_new.png" />');

		}
	}

	//header
	listNum = $('.wpp-list li').length;
	
	for (var i = 0 ; i < listNum; i++) {
		$('.wpp-list li').eq(i).prepend('<img src="../wp-content/themes/wap/img/rank'+(i+1)+'.jpg" style="float:left; margin-top: 12px; margin-right: 10px">');
	};
});