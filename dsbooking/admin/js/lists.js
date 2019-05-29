"use strict";
window.onload = function(){
	var xhttp = new XMLHttpRequest();
	var resp = "";
	var json = "";
	function get(url){
			return new Promise(function(resolve,reject){
			
				xhttp.open("GET", url, true);
				xhttp.onload = function(){
					if(xhttp.status == 200){resolve(JSON.parse(xhttp.response));}
					else{reject(xhttp.statusText);}
				}
				xhttp.onerror = function(){
					reject(xhttp.statusText);
				}
				xhttp.send();
				});
	}
	
	
	
	var record =  get(pluginsbaseUrl + '/admin/includes/list.php');
		
	record.then(function(data){
			json = data;
			var resp = "";
			for(var i = 0; i < json.length; i++){
				resp += '<tr class="pj-table-row-odd" data-id="id_7">';
				resp += '<td><span class="pj-table-cell-label">'+ json[i].ID +'</td>';
				resp += '<td><span class="pj-table-cell-label">'+json[i].tourname+'<br><a href="#">'+ json[i].bookingdate +'</a></span></td>';
				resp += '<td><span class="pj-table-cell-label">' + '<a href="admin.php?page=ds-booked&view='+json[i].ID+'">'+ json[i].firstname + ' '+  json[i].lastname +'</a>'+'<br><a href="#">'+ json[i].email +'</a><br>'+ json[i].contactno +'</span></td>';
				resp += '<td style="text-align: right;"><span class="pj-table-cell-label">USD '+(json[i].total)+'</span></td>';
				resp += '<td class="pj-table-cell-editable"><span class="pj-table-cell-label pj-status pj-status-pending">'+(json[i].status == 1 ? "Paid" : " Pending")+'</span></td>';
				resp += '<td>';
				resp += json[i].date;
				resp += '</td>';
				resp += '</tr>';
			}
			document.getElementById("LIST").innerHTML =resp;
			var pagination =  get(pluginsbaseUrl + '/admin/includes/pagination.php');
			pagination.then(function(data){
				var pagelink = "";
				var total_pages = data
				for(var page=1; page<=total_pages; page++) {
					pagelink += '<a href="admin.php?page=ds-booked&data=' + page + '" style="float:left; margin:2px; width:20px; display:block; text-align:center; color:#fff; text-decoration:none; background: #999; padding:2px; font-size:10px; border-radius:20px; " class="pagination" page="'+ page +'">' + page +'</a> ';
				}
				document.getElementById("pagination").innerHTML = pagelink;
			}).then(function(){
				
				document.body.addEventListener("click", function (event) {
					var CurrentPage;
					if (event.target.classList.contains("pagination")) {
							var page = event.target.getAttribute("page");
							CurrentPage = page;
							//alert(CurrentPage);
							function page123(url,params){
									return new Promise(function(resolve,reject){
									xhttp.open("POST", url, true);
									xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
									xhttp.onload = function(){
											if(xhttp.status == 200){resolve(JSON.parse(xhttp.response));}
											else{reject(xhttp.statusText);}
										}
										xhttp.onerror = function(){
											reject(xhttp.statusText);
									}
									xhttp.send(params);
									});
									
							}

							var display = page123(pluginsbaseUrl + '/admin/includes/list.php','pagination='+CurrentPage);
							display.then(function(data){
								//console.log(data);
								json = data;
								var resp = "";
								for(var i = 0; i < json.length; i++){
									resp += '<tr class="pj-table-row-odd" data-id="id_7">';
									resp += '<td><span class="pj-table-cell-label">'+ json[i].ID +'</td>';
									resp += '<td><span class="pj-table-cell-label">'+json[i].tourname+'<br><a href="#">'+ json[i].bookingdate +'</a></span></td>';
									resp += '<td><span class="pj-table-cell-label">' + '<a href="admin.php?page=ds-booked&view='+json[i].ID+'">'+ json[i].firstname + ' '+  json[i].lastname +'</a>'+'<br><a href="#">'+ json[i].email +'</a><br>'+ json[i].contactno +'</span></td>';
									resp += '<td style="text-align: right;"><span class="pj-table-cell-label">USD '+(json[i].total)+'</span></td>';
									resp += '<td class="pj-table-cell-editable"><span class="pj-table-cell-label pj-status pj-status-pending">'+(json[i].status == 1 ? "Paid" : " Pending")+'</span></td>';
									resp += '<td>';
									resp += json[i].date;
									resp += '</td>';
									resp += '</tr>';
								}
								document.getElementById("LIST").innerHTML =resp;
							
							});
							event.preventDefault();
													
					}
				});
		
			}).then(function(){
				document.getElementById("searchtxt").addEventListener("keypress", function(){
						function search(url,params){
										return new Promise(function(resolve,reject){
										xhttp.open("POST", url, true);
										xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
										xhttp.onload = function(){
												if(xhttp.status == 200){resolve(JSON.parse(xhttp.response));}
												else{reject(xhttp.statusText);}
											}
											xhttp.onerror = function(){
												reject(xhttp.statusText);
										}
										xhttp.send(params);
										});
										
						}

						  var display = search(pluginsbaseUrl + '/admin/includes/search.php','search='+this.value);
						  display.then(function(data){ 
								//console.log(data);
								json = data;
								var resp = "";
								for(var i = 0; i < json.length; i++){
									resp += '<tr class="pj-table-row-odd" data-id="id_7">';
									resp += '<td><span class="pj-table-cell-label">'+ json[i].ID +'</td>';
									resp += '<td><span class="pj-table-cell-label">'+json[i].tourname+'<br><a href="#">'+ json[i].bookingdate +'</a></span></td>';
									resp += '<td><span class="pj-table-cell-label">' + '<a href="admin.php?page=ds-booked&view='+json[i].ID+'">'+ json[i].firstname + ' '+  json[i].lastname +'</a>'+'<br><a href="#">'+ json[i].email +'</a><br>'+ json[i].contactno +'</span></td>';
									resp += '<td style="text-align: right;"><span class="pj-table-cell-label">USD '+(json[i].total)+'</span></td>';
									resp += '<td class="pj-table-cell-editable"><span class="pj-table-cell-label pj-status pj-status-pending">'+(json[i].status == 1 ? "Paid" : " Pending")+'</span></td>';
									resp += '<td>';
									resp += json[i].date;
									resp += '</td>';
									resp += '</tr>';
								}
								document.getElementById("LIST").innerHTML =resp;
							
						});
					
				});
					
			}).then(function(){
				document.getElementById("colorFilter").addEventListener("submit", function(){
					
					
				});
				
			});
			
	});					
}