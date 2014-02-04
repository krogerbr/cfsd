<script>
$(document).ready(function(){
	// Funcao sleep customizada
	function sleep(milliseconds) {
		var start = new Date().getTime();
			for (var i = 0; i < 1e7; i++) {
				if ((new Date().getTime() - start) > milliseconds){
				break;
			}
		}
	}

	// busca dinamica
	$( ".send_search" ).bind( "keyup", function() {
		// var value = $(this).val();

		var dados;

		if (this.value.match(/[0-9]{1,7}/g)){
			dados = {
            	num_pm: $(this).val(),
        	};
		} else {
			dados = {
            	nome: $(this).val(),
        	};
		};
		

		setTimeout(function() {
			// var busca = value;
			// var value = $(this).val();
			// console.log(value);
			
			// console.log(JSON.stringify(dados));

			// http://hayageek.com/jquery-ajax-json-parsejson-post-getjson/

			$.ajax({
			    type : "POST",
			    url : "../find_aluno",
			    data : dados,
			    dataType : "json",
			    async: false,
			    // cache : false,
			    success : function(retorno) {
	                        console.log(retorno);
	                        alert(JSON.stringify(retorno));
			    },
			    error: function () {
			 
			    }
			});
		}, 3000);

	});


		// var obj = $.parseJSON('{"name":"hayageek","age":32,"marks":[80,70,60,50,60,80]}');
		//     obj.name //Name
		//     obj.age  //Age
		//     obj.marks[0];//first mark

		// this.value.match(/[^a-zA-Z0-9\-_\s]/g);
		// sleep(2000);
		// var value = $(this).val();
		// // setTimeout(function() {
		// var busca = value;
		// console.log(value);
		// }, 2000);

		// var searchbox = $(this).val(); // get the string in the searchbox
		// var dataString = 'searchword=' + searchbox;
		// if (searchbox == '') {

		// } else {
		// 	$.ajax({
		// 	    type : "POST",
		// 	    url : "search.php",
		// 	    data : dataString,
		// 	    dataType : "xml",
		// 	    async: false,
		// 	    cache : false,
		// 	    success : function(data, textStatus, jqXHR) {
		// 	                        //Data repsonse from server
		// 	                        console.log(data);  
		// 	    },
		// 	    error: function (jqXHR, textStatus, errorThrown) {
			 
		// 	    }
		// 	});
		// }
		
		// $( "#finded" ).empty().append(
		// 		$("#num_pm").val()
		// );
		// sleep(2);
		// console.log(search);
		
		// setTimeout(function (){
			// $( "#finded" ).empty().append(
			// 	$("#num_pm").val();
		// 	);

		// 	$.ajax(
		// 	{
		//         url : formURL,
		//         type: "POST",
		//         data : postData,
		//         success:function(data, textStatus, jqXHR) 
		//         {
		//             //data: return data from server
		//         },
		//         error: function(jqXHR, textStatus, errorThrown) 
		//         {
		//             //if fails      
		//         }
		//     });
		//     e.preventDefault(); //STOP default action
		//     e.unbind(); //unbind. to stop multiple form submit.

  		// }, 1000);
	// });
})
</script>
<form action="#" >
	Número de polícia: <input id="num_pm" class="send_search"  type="text" name="num_pm" maxlength="7" size="7" > <input type="submit" value="ok"> <br>
	Nome: <input id="nome" class="send_search" type="text" name="num_pm" size="16" > <input type="submit" value="ok">
</form>

<div id="finded">

</div>