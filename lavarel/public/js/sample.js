jQuery("#list").jqGrid({
   	url:'/data?q=2',
	datatype: "json",
   	colNames:['Inv No', 'FIO', 'Position', 'Date', 'Salary'],
   	colModel:[
   		{name:'id',index:'id', width:55},
   		{name:'FIO',index:'fio', width:90},
   		{name:'position',index:'Position', width:100},
   		{name:'date',index:'date', width:80},
   		{name:'salary',index:'Salary', width:80},		
   	],
   	rowNum:10,
   	rowList:[10,20,30],
   	pager: '#pager',
   	sortname: 'id',
    viewrecords: true,
    sortorder: "asc",
    caption:"Employees of the company"
});
jQuery("#list").jqGrid('navGrid','#pager',{edit:false,add:false,del:false});