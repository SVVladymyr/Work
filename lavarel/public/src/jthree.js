$('#using_json_2').jstree({ 'core' : { 'data' : [
	{ "id" : "ajson1", "parent" : "#", "text" : "Simple root node" },
	{ "id" : "ajson2", "parent" : "#", "text" : "Root node 2" },
	{ "id" : "ajson3", "parent" : "ajson2", "text" : "Child 1" },
	{ "id" : "ajson4", "parent" : "ajson2", "text" : "Child 2" }, ] 
} });