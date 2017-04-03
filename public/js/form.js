var form = {
	 id: function (str) {
        return document.getElementById(str) || document.createElement('span');
    },
	deleteRow:function(r){
		var i=r.parentNode.parentNode.rowIndex;
		form.id('form-table').deleteRow(i);
	},
	getRow:function(){
		
	},
	addIfram:function(){
		var _tabheader = '<li class="layui-this">'+
		'<i class="fa fa-dashboard" aria-hidden="true"></i>'+
		'<cite>11</cite>'+
		'</li>';
	form.id('tabIndex').append(_tabheader);
	console.log(form.id('tabIndex'));
	}
}

