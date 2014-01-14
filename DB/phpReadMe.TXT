資料格式的定義寫在這囉
					輸入							輸出
search.php			search							Sname  Artist  Album  Song#

search2.php			search 							ConcertName ConcertDate time Artist ConcertLocation Sname(註: #可以直接忽略)

showAlbum.php		Album Artist					Aname Adate Rcompany Artsit producer cover

showAlbum2.php		Album Artist					Sname Artist Album Song#

album_comment.php	Album Artist comment 			Acomment Timestamp

showArtist.php		Artist 							Artist Ecompany Found_date

showMember.php		Artist 							Mname Bdate Instrument(忽略artist)

showArtist2.php		Artist 							Sname  Artist  Album  Song#

showSongInfo.php	Sname Artist 					Sname Artist Lyrics Composer Language Length Genre

similarSong.php		Sname Artist 					Sname  Artist  Album  Song#

song_comment.php	Sname Artist comment 			Scomment Timestamp

showConcert.php		ConcertName ConcertDate time 	ConcertName ConcertDate time Artist ConcertLocation

showSetlist.php		ConcertName ConcertDate time 	Sname #