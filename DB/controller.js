function eventHandler(event){
	var search = $('#search').val();

	$.ajax({

		url: "search.php",
		data: {search: search},
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
						
			var temp = "<table>";	
						
				for(var n = 0; n< res.len; n++){
					temp = temp +"<tr><td>"+  '<a href="./songs.html?Sname=' + res[n].Sname + '">'+res[n].Sname+"</a></td><td>"
					+ '<a href="./songs.html?Artist=' + res[n].Artist +'">'+res[n].Artist +"</a></td><td>" 
					+ '<a href="./songs.html?Album=' + res[n].Album + '">' + res[n].Album + "</a></td><td>" 
					+ '<a href="./songs.html?Song#=' + res[n].Song# + '">' + res[n].Song# +"</a></td></tr>";
				}
												
			temp = temp+ "</table>";	
			document.getElementById("result1").innerHTML = temp;
		}

	})	

}

function eventHandler1(event){
	var search = $('#search').val();

	$.ajax({

		url: "search2.php",
		data: {search: search},
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			var temp = "<table>";	
						
			for(var n = 0; n< res.len; n++){
				temp = temp +"<tr><td>"+ 
				res[n].ConcertName +"</td><td>"+ 
				res[n].ConcertDate + "</td><td>" + 
				res[n].time + "</td><td>" + 
				res[n].Artist + "</td><td>" + 
				res[n].Sname +"</td></tr>";
			}						
			temp = temp+ "</table>";	
			
			document.getElementById("result2").innerHTML = temp;
		}

	})	

}
function showAlbumCommentPrev(event){

	$.ajax({

		url: "album_comment.php",
		data: { Artist: Artist,
			Album: Album,
			comment: "empty"},
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的comment資料並印出 應該是印出comment而已ㄅ
			var temp = "<table>";
			for(var n = 0; n< res.len; n++){
				temp = temp +"<tr><td>"+ res[n].Acomment + "</td><td>" + res[n].Timestamp + "</td></tr>";
			}
			temp = temp+ "</table>";
			
			document.getElementById("album_comment").innerHTML = temp;
		}

	})	
}

function showAlbumComment(event){

	var comment = $('#comment').val();

	$.ajax({

		url: "album_comment.php",
		data: { Artist: Artist,
			Album: Album,
			comment: comment},
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的comment資料並印出 應該是印出comment而已ㄅ
			var temp = "<table>";
			for(var n = 0; n< res.len; n++){
				temp = temp +"<tr><td>"+ res[n].Acomment + "</td><td>" + res[n].Timestamp + "</td></tr>";
			}
			temp = temp+ "</table>";
			
			document.getElementById("album_comment").innerHTML = temp;
		}

	})	
}

function showSongComment(event){

	var comment = $('#comment').val();

	$.ajax({

		url: "song_comment.php",
		data: { Artist: Artist,
			Album: Album,
			Sname: Sname,
			comment: comment},
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的comment資料並印出 應該是印出comment而已ㄅ
			var temp = "<table>";
			for(var n = 0; n< res.len; n++){
				temp = temp +"<tr><td>"+ res[n].Scomment + "</td><td>" + res[n].Timestamp + "</td></tr>";
			}
			temp = temp+ "</table>";
			
			document.getElementById("song_comment").innerHTML = temp;
		}

	})	
}
function showSongCommentPrev(event){

	$.ajax({

		url: "song_comment.php",
		data: { Artist: Artist,
			Album: Album,
			Sname: Sname,
			comment: "empty" },
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的comment資料並印出 應該是印出comment而已ㄅ
			var temp = "<table>";
			for(var n = 0; n< res.len; n++){
				temp = temp +"<tr><td>"+ res[n].Scomment + "</td><td>" + res[n].Timestamp + "</td></tr>";
			}
			temp = temp+ "</table>";
			
			document.getElementById("song_comment").innerHTML = temp;
		}

	})	
}


function showArtist(event){

	$.ajax({

		url: "showAlbum.php",
		data: {Artist: Artist },
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的資料並印出
			var temp = "<table>";
			
			for(var n = 0; n< res.len; n++){
				temp = temp +"<tr><td>"+ res[n].Artist + "</td><td>" + res[n].Ecompany + "</td><td>"+ res[n].Found_date + "</td></tr>";
			}
			temp = temp+ "</table>";

		
			
			document.getElementById("artist").innerHTML = temp;
		}

	})	
}

function showArtist2(event){

	$.ajax({

		url: "showArtist2.php",
		data: {Artist: Artist},
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的資料並印出
			var temp = "<table>";	
						
				for(var n = 0; n< res.len; n++){
					temp = temp +"<tr><td>"+ res[n].Sname +"</td><td>"+ res[n].Artist + "</td><td>" + res[n].Album + "</td><td>" + res[n].Song# + "</td></tr>";
				}
						
				temp = temp+ "</table>";
		
			
			document.getElementById("artist2").innerHTML = temp;
		}

	})	
}

function showAlbum(event){

	$.ajax({

		url: "showAlbum.php",
		data: {Artist:artist,
			Album:album },
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的資料並印出
			var temp = "<table>";	
						
				for(var n = 0; n< res.len; n++){
					temp = temp +"<tr><td>"+ res[n].Aname +"</td><td>"+ res[n].Adate + "</td><td>" + res[n].Rcompany + "</td><td>" + res[n].Artist + "</td><td>"+ res[n].producer + "</td><td>"+ res[n].cover +"</td></tr>";
				}						
				temp = temp+ "</table>";	
			
			document.getElementById("album1").innerHTML = temp;
		}

	})	
}


function showAlbum2(event){

	$.ajax({

		url: "showAlbum2.php",
		data: {Album: Album,
			Artist: Artist},
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的資料並印出
			var temp = "<table>";	
						
				for(var n = 0; n< res.len; n++){
					temp = temp +"<tr><td>"+ res[n].Sname +"</td><td>"+ res[n].Artist + "</td><td>" + res[n].Album + "</td><td>" + res[n].Song# + "</td></tr>";
				}
						
				temp = temp+ "</table>";		
			
			document.getElementById("album2").innerHTML = temp;
		}

	})	
}

function showConcert(event){

	$.ajax({

		url: "showConcert.php",
		data: {ConcertName: ConcertName,
			ConcertDate: ConcertDate,
			time: time },
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的資料並印出
			var temp = "<table>";	
						
			for(var n = 0; n< res.len; n++){
				temp = temp +"<tr><td>"+ res[n].ConcertName +"</td><td>"+ res[n].ConcertDate + "</td><td>" + res[n].time + "</td><td>" + res[n].Artist + "</td><td>" + res[n].ConcertLocation+ "</td></tr>";
			}
					
			temp = temp+ "</table>";		

			document.getElementById("concert").innerHTML = temp;
		}

	})	
}

function showSetlist(event){

	$.ajax({

		url: "showSetlist.php",
		data: {ConcertName:ConcertName,
			ConcertDate: ConcertDate,
			time: time },
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的資料並印出
			var temp = "<table>";
			for(var n = 0; n< res.len; n++){
				temp = temp +"<tr><td>"+ res[n].Sname +"</td><td>"+ res[n].# + "</td></tr>";
			}
					
			temp = temp+ "</table>";		

		
			
			document.getElementById("setlist").innerHTML = temp;
		}

	})	
}

function showMember(event){

	$.ajax({

		url: "showMember.php",
		data: {Artist: Artist },
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的資料並印出
			var temp = "<table>";	
						
			for(var n = 0; n< res.len; n++){
				temp = temp +"<tr><td>"+ res[n].Mname +"</td><td>"+ res[n].Bdate + "</td><td>" + res[n].instrument + "</td></tr>";
			}
					
			temp = temp+ "</table>";		

			document.getElementById("members").innerHTML = temp;
		}

	})	
}

function showSongInfo(event){

	$.ajax({

		url: "showSongInfo.php",
		data: {Artist: Artist,
			Sname: Sname },
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的資料並印出
			var temp = "<table>";	
						
			for(var n = 0; n< res.len; n++){
				temp = temp +"<tr><td>"+ res[n].Sname +"</td><td>"+ res[n].Artist + "</td><td>" + res[n].Lyrics +"</td><td>"+ res[n].Composer +"</td><td>"+ res[n].Language +"</td><td>" + res[n].Length + "</td></tr>";
			}
					
			temp = temp+ "</table>";		

			document.getElementById("members").innerHTML = temp;
		}

	})	
}

function showSimilarSongs(event){

	$.ajax({

		url: "similarSong.php",
		data: {Artist: Artist,
			Sname: Sname },
		method: "POST",
		dataType: "json",

		error: function(res){                                                                  //傳送失敗則跳出失敗訊息
			alert("失敗");	
		},

		success:function(res){                                                               //傳送成功則跳出成功訊息  
			alert("成功");
			//接收丟回來的資料並印出
			var temp = "<table>";	
						
			for(var n = 0; n< res.len; n++){
				temp = temp +"<tr><td>"+ res[n].Sname +"</td><td>"+ res[n].Artist + "</td><td>" + res[n].Album + "</td><td>"+ res[n].Song# +"</td></tr>";
			}
					
			temp = temp+ "</table>";		

			document.getElementById("members").innerHTML = temp;
		}

	})	
}

var btn = document.getElementById('go');
btn.addEventListener('click', eventHandler, false) ;

var btn1 = document.getElementById('go');
btn.addEventListener('click', eventHandler1, false) ;

var btn2 = document.getElementById('album_comment');
btn2.addEventListener('click', showAlbumComment, false) ;

var prev2 = document.getElementById('album_comment');
btn2.addEventListener('load', showAlbumCommentPrev, false) ;

var btn3 = document.getElementById('artist');
btn3.addEventListener('load', showArtist, false);

var btn4 = document.getElementById('artist2');
btn4.addEventListener('load', showArtist2, false);

var btn5 = document.getElementById('album1');
btn5.addEventListener('load', showAlbum, false);

var btn6 = document.getElementById('album2');
btn6.addEventListener('load', showAlbum2, false);

var btn7 = document.getElementById('concert');
btn6.addEventListener('load', showConcert, false);

var btn8 = document.getElementById('setlist');
btn6.addEventListener('load', showSetlist, false);

var btn9 = document.getElementById('song_info');
btn6.addEventListener('load', showSongInfo, false);

var btn10 = document.getElementById('similar_songs');
btn6.addEventListener('load', showSimilarSongs, false);

var prev1 = document.getElementById('song_comment');
prev1.addEventListener('load', showSongCommentPrev, false);

var btn11 = document.getElementById('song_comment');
btn6.addEventListener('click', showSongComment, false);

var mem = document.getElementById('members');
mem.addEventListener('load', showMember, false);

