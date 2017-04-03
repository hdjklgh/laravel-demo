/**
 * Created by Greg on 2017/04/02.
 */
layui.use(['jquery'], function() {
    var $ = layui.jquery;
    $.common = {
        // todo 加载js
        addJs: function (url) {
            var elem = document.createElement("script");
            elem.src = url;
            document.body.appendChild(elem);
        },
        // todo 改写F5的刷新，当使用刷新的时候，刷新当前的iframe
        f5Reload: function (_window) {
            var e = window.event || e;
            if(e.keyCode == 116 || ((e.ctrlKey) && (e.keyCode==82))){
                try {
                    _window.location.reload();
                } catch (e) {
                    console.log(e.message);
                }
                return false;
            }
            return true;
        }
    }
});
