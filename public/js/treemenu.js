(function($){
    $.fn.openActive = function(activeSel) {
        activeSel = activeSel || ".active";

        var c = this.attr("class");

        this.find(activeSel).each(function(){
            var el = $(this).parent();
            while (el.attr("class") !== c) {
                if(el.prop("tagName") === 'UL') {
                    el.show();
                } else if (el.prop("tagName") === 'LI') {
                    el.removeClass('tree-closed');
                    el.addClass("tree-opened");
                }

                el = el.parent();
            }
        });

        return this;
    }

    $.fn.treemenu = function(options) {
        options = options || {};
        options.delay = options.delay || 0;
        options.openActive = options.openActive || false;
        options.activeSelector = options.activeSelector || "";
        options.rightMenu = options.rightMenu || false;
        this.addClass("treemenu");
        var obj = $(this);
        //监控右键
       if(options.rightMenu){
				obj.on('contextmenu','li',function(event){
				var target = $(this);
				event.preventDefault();
				event.stopPropagation();
				if($(document).find('div.rightmenu').length > 0) {
					$(document).find('div.rightmenu').remove();
				}
				//创建右键
				var div = document.createElement('div');
				div.className = 'rightmenu';
				var oul = '<ul>'+
								'<li data-id="addMenu"><a href="#this">新建子菜单</a></li>'+
								'<li data-id="rename"><a href="#this">重命名</a></li>'+
								'<li data-id="del"><a href="#this">删除</a></li>'+
							'</ul>';
				div.innerHTML = oul;
				div.style.top = event.pageY + 'px';
				div.style.left = event.pageX + 'px';
				document.getElementsByTagName('body')[0].appendChild(div);
				var $context = $(document).find('div.rightmenu');
				if($context.length>0){
					$context.eq(0).children('ul').children('li').each(function() {
					var $that = $(this);
					$that.on('click', function() {
						var id = $that.data('id');
						switch(id){
						 case 'addMenu':
						 	  var _html;
						 	  if(target.find('>ul').length>0){
						 	  	_html='<li class="tree-empty"><span class="layui-icon toggler"></span>'+
						 	  '<a href="#this">'+
						 	  '<input type="text" placeholder="请输入你的分类" autofocus="autofocus">'+
						 	  '</a></li>';
						 	  target.find('>ul').append(_html);
						 	  }else{
						 	  	_html='<ul><li class="tree-empty"><span class="layui-icon toggler"></span>'+
						 	  '<a href="#this">'+
						 	  '<input type="text" placeholder="请输入你的分类" autofocus="autofocus">'+
						 	  '</a></li></ul>';
						 	   target.append(_html);
						 	  }
						 	  target.find('>ul').slideDown(options.delay);
						 	  target.addClass('tree-opened');
						 	  break;
						case 'rename':
						      var par =  target.find('a').eq(0)
							  var  _html= '<input type="text" placeholder="请输入" data-input="value" autofocus />';
							   par.html(_html);
						      break;
						case 'del':
//						     target.remove();
						     if(target.find('>ul').length>0){
						     	layer.open({
						     		title:'提示',
						     		content:'删除失败，还有子分类~~！',
						     		 area: ['380px', '160px'],
						     		offset: 'left', //右下角弹出
						     		scrollbar: false
						     	})
						     }else{
								target.remove();
						     }
						      break;
						default:
						      break;
						} 
						$context.remove(); 	 
					})
				});
				}
				return false;
			})
			}
        this.find("> li").each(function() {
            e = $(this);
            var subtree = e.find('> ul');
            var button = e.find('span').eq(0).addClass('toggler');

            if( button.length == 0) {
                var button = $('<span>');
                button.addClass('toggler');
                e.prepend(button);
            } else {
                button.addClass('toggler');
            }
			
            if(subtree.length > 0) {
                subtree.hide();

                e.addClass('tree-closed');
                e.find(button).click(function() {
                    var li = $(this).parent('li');
                    li.find('> ul').slideToggle(options.delay);
                    li.toggleClass('tree-opened');
                    li.toggleClass('tree-closed');
                    li.toggleClass(options.activeSelector);
                });

                $(this).find('> ul').treemenu(options);
            } else {
                $(this).addClass('tree-empty');
            }
        });

        if (options.openActive) {
            this.openActive(options.activeSelector);
        }

        return this;
    }
})(jQuery);
