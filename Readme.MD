#This Is Web Itcyber Community

! note please send to tedijammz@gmail.com your file if you update or add new feature for this website

#######################################################################
#																	  #
#																	  #
# 		SPECIFICATION PROGRAMING LANGUAGE IN USE 					  #
#																	  #
#																	  #
#######################################################################


--> Frontend 
	<ul>
		<li>PHP 7.0.9</li>
		<li>Framework Codeigniter.</li>
		<li>Mysql</li>
		<li>Vue.js</li>
		<li>Matrealize Bootstrap</li>
		<li>Jquery</li>
		<li>Hammer.js</li>
	</ul>

--> Dashboard
	<ul>
		<li>PHP 7.0.9</li>
		<li>Framework Codeigniter</li>
		<li>Mysql</li>
		<li>Admin LTE For Template</li>
	</ul>

################################################################################

--> Struktur Folder

-> Itcyber
	<pre>
	-->application
		--->cahce
		--->config
		--->controllers
			---->Itcyb3r	#For Dashboard
				----->Anggota.php 		#For Controller Anggota
				----->Auth.php 			#For controller Auth / Login And Logout
				----->Backend.php 		#For Controller index Dashboard
				----->Media.php 		#For Controller Media (Galery and Portfolio)
				----->News.php 			#For Controller News (Artikel and Tag Artikel)
			---->Artikel.php 		#For Controller frontend Artikel
			---->Front.php 			#For Controller index, about, contact frontend
			---->Galery.php 		#For Controller Galery, Album, Portfolio frontend
			---->Welcome.php 		#For Debugging New Code testing
		--->core
		--->helpers
		--->language
		--->libraries
		--->logs
		--->models
			---->Album_model.php 		#For model entity Album	
			---->Anggota_model.php 		#for model entity Anggota
			---->Angkatan_model.php 	#for model entity angkatan
			---->Artikel_model.php 		#for model entity artikel
			---->Comment_model.php 		#for model entity comment
			---->Galery_model.php 		#for model entity galery
			---->Jabatan_model.php 		#for model entity jabatan
			---->Log_model.php 	        #for model entity log (log login)
			---->Login_model.php 		#for model login
			---->Portfolio_model.php 	#for model entity portfolio
			---->Statistik_model.php 	#for model entity statistik artikel
			---->Tag_model.php 			#for model entity Tag
		--->third_party
		--->views
			---->backend 				#all views for dashboard
				----->anggota
					------>anggota
						------->form_add.php 		#for views add data anggota
						------->form_edit.php 		#for views edit data anggota
						------->profile.php 		#for views profile data anggota
						------->table.php 			#for vies table data anggota
					------>angkatan
						------->table.php 			#for views table data angkatan (add and edit use modals)
					------>jabatan
						------->tabel.php 			#for views table data jabatan (add and edit use modals)
				----->media
					------>galery
						------->album.php 			#for views table  data album
						------->table.php 			#for views table  data galery
					------>portfolio
						------->table.php 			#for views table data portfolio
				----->News
					------>artikel
						------->detail.php 			#for views detail artikel
						------->form_add.php 		#for views add artikel
						------->form_edit.php 		#for views edit artikel
						------->table.php 			#for views table data artikel
					------>tag
						------->table.php 			#for views table data tag (add and edit use modals)
			---->errors 				#default from codeigniter for views errors
			---->front 					#all views for frontend
				----->artikel
					------>comment.php 				#for load coments views on artikel
					------>detail.php 				#for views detail artikel
					------>index.php 				#for views artikel
					------>per_tag.php 				#for views artikel per tag
					------>searching_artikel.php 	#for load artikel views on serach artikel
				----->galery
					------>album.php 				#for views album galery
					------>index.php 				#for views galery per album
					------>portfolio.php 			#for views portfolio
				----->proses
					---->searching.php 				#for proses searching artikel on /
				----->about.php 				#for views about itcyber
				----->index.php 				#for views home page
			---->welcome_message.php   	#for views debugging
		--->.htaccess    #permission for folder applications
		--->index.html   #for views if any one access folder applications
	-->assets 			#for script js, css and for folder image
    -->db 				#folder database
    -->system   		#folder system codeigniter
    -->.htaccess        #permissions for this web
    -->index.php        #default index from codeigniter
    -->Readme.MD        #for intructions for source this web

	 </pre>
-->Instalations
	<ol>
		<li>create database itcyber</li>
		<li>import database on folder db/itcyber.sql</li>
		<li>copy folder project to your document root web</li>
		<li>setting .htaccess</li>
		<li>setting database on applications/config/config.php</li>
		<li>use new patch browser</li>
	</ol>    
